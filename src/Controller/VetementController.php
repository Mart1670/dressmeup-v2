<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Color;
use App\Entity\Vetement;
use App\Entity\TagAmbiance;
use App\Entity\User;
use App\Repository\VetementRepository;
use App\Repository\ColorRepository;
use App\Repository\UserRepository;
use App\Repository\TagAmbianceRepository;
use App\Repository\ReferenceColorRepository;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use App\Form\VetementFormType;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;
use Symfony\Component\HttpFoundation\JsonResponse;

class VetementController extends AbstractController
{
    #[Route('/vetement', name: 'app_vetement')]
    public function index(Request $request, SluggerInterface $slugger, VetementRepository $vetementRepository, ColorRepository $colorRepository, TagAmbianceRepository $tagAmbianceRepository): Response
    {
        //dd($request->getContent());

        // If the user is not connected, redirection to login page
        if ($this->getUser() == null) {
            return $this->redirectToRoute('app_login');
        }

        // Creation of new object Vetement
        $vetement = new Vetement();
        
        // Creation of new form to add a new cloth
        $form = $this->createForm(VetementFormType::class, $vetement);

        // Retreiving the request for the creation of a new cloth
        $form->handleRequest($request);

        //dd($request->request->all()["vetement_form"]["newColor"]);

        // If the form is correct and submitted
        if ($form->isSubmitted() && $form->isValid()) {

            // dd($_POST);
            // die('ok');

            // Retreiving the cloth color
            $color = new Color();

            // This part of the code is containing a security breach (direct access to the superglobal variable). This was set to allowed us to go further in the project development. We have faced an issue and were unable to access to the request submitted by the form concerning the cloth's color data. to be able to intercept the data provided by the form and correctly insert it in the database, we choose to directly get it from the $_POST superglobal. This will be correct in the V2 of the project. The security breach could be fixed before the deadline :)
            // $color->setColorCode($_POST['vetement_form']['newColor']);
            // $color->setName($_POST['vetement_form']['nameColor']);

            // The security breach could be fixed before the deadline :)
            $color->setColorCode($request->request->all()['vetement_form']['newColor']);
            $color->setName($request->request->all()['vetement_form']['nameColor']);
            $colorRepository->save($color, true);


            // Recovering the image file data
            $imageFile = $form->get('image')->getData();

            // This was an attempt to reach the color gotten from the form but doesn't work for now.
            //$colorForm = [$form->get('color')];

            // If the image file was correctly inputed
            if ($imageFile) {

                // Recovering of the path information of the original image file
                $originalFilename = pathinfo($imageFile->getClientOriginalName(), PATHINFO_FILENAME);
                
                // This is needed to safely include the file name as part of the URL
                $safeFilename = $slugger->slug($originalFilename);
                
                // Creation of the new image file name including the user id and a unique id
                $newFilename = $this->getUser()->getId().'-'.uniqid().'.'.$imageFile->guessExtension();

                // Move the file to the "user_img" directory
                $imageFile->move(
                    'assets/user_img/',
                    $newFilename
                );
               
                // Affecting all the properties needed to the new cloth before saving it in the database
                $vetement->setImage($newFilename);
                $vetement->setUser($this->getUser());
                $vetement->addColor($color);
                $tagAmbiance = $tagAmbianceRepository->findOneById($vetement->getTagAmbiances()[0]->getId());
                $vetement->addTagAmbiance($tagAmbiance);
                $tagAmbiance = $vetement->getTagAmbiances()[0]->getName();
                

                // This property is not managed yet. Will be in the V2 of the project
                //$tagHumeur = $vetement->getTagHumeur()[0]->getName();

                // Recovering the color name for accessibility purpose
                $Color = $vetement->getColor()[0]->getName();

                // Setting the "alt" image property for accessibility purpose
                $vetement->setAlt($vetement->getStyle()."-".$tagAmbiance."-".$Color);
                //dd($vetement);

                // Saving the cloth with all its properties in the database
                $vetementRepository->save($vetement, true);
                
                return $this->redirect($this->generateUrl('app_dressing'));
            }
        }

        return $this->renderForm('vetement/index.html.twig', [
            'controller_name' => 'DressingController',
            'form' => $form,
        ]);
    }

    #[Route('/hsl/{h}/{s}/{l}/', name: 'app_hsl')]
    public function hsl($h, $s, $l, ReferenceColorRepository $referenceColorRepository): JsonResponse
    {
        $listColors = $referenceColorRepository->findBy(['active' => 1]);

        foreach($listColors as $colors){
            if($h >= $colors->gethMin() && $h <= $colors->gethMax() && $s >= $colors->getsMin() && $s <= $colors->getsMax() && $l >= $colors->getlMin() && $l <= $colors->getlMax()){
                $colorName = $colors->getName();
                // dd($colorName);
            }
        }

        // dd($listColor);

        return new JsonResponse(['colorName' => $colorName]);
    }
}
