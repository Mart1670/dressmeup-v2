<?php

namespace App\Controller;

use App\Entity\Color;
use App\Entity\Vetement;
use App\Repository\VetementRepository;
use App\Entity\User;
use App\Repository\ColorRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Form\VetementFormType;
use Symfony\Component\String\Slugger\SluggerInterface;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class DressingController extends AbstractController
{
    #[Route('/dressing', name: 'app_dressing')]
    public function index(Request $request, SluggerInterface $slugger, VetementRepository $vetementRepository, ColorRepository $colorRepository): Response
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
                
            }
        }

        return $this->renderForm('dressing/index.html.twig', [
            'controller_name' => 'DressingController',
            'form' => $form,
        ]);
    }

    #[Route('/style/{type}', name: 'app_style')]
    //#[Route('/top', name: 'app_top')]
    public function top($type, VetementRepository $vetementRepository): JsonResponse
    {
        // Request to get the user clothes depending on the type (top or bottom)
        $typeVetements = $vetementRepository->findByType($type);
        
        // Depending on the type to displayed in the user dressing, sending the data to the requesting JavaScript file (switchDressing.js)
        if($type == "Haut"){
            $typeVetements = ['Tee-shirt', 'Sweat-shirt', 'Maille', 'Chemise', 'Gilet', 'Veste'];
        } else if($type == "Bas"){
            $typeVetements = ['Pantalon', 'Jean', 'Chino', 'Short', 'Jogging'];
        }

        return new JsonResponse(['typeVetements' => $typeVetements]);
    }

    #[Route('/list-vetements/{type}', name: 'app_list-vetements')]
    //#[Route('/bottom', name: 'app_bottom')]
    public function bottom($type, VetementRepository $vetementRepository, UserRepository $userRepository, ColorRepository $colorRepository): JsonResponse
    {   
        // Recover the logged user id
        $users = $this->getUser()->getId();
        //dd($users);
        
        // Recovering the corresponding clothes by type chosen by the user in the dressing using a custom request
        $listeVetements = $vetementRepository->findDressingContent($users, $type);
        //dd($listeVetements);

        // Creation of an empty tab which will store the requested user clothes
        $tab = [];

        // Loop on each clothes objects generated by the request to store them in the tab
        foreach($listeVetements as $row){

            // Creation of empty tabs to store the colors and colors name got by the request
            $color = [];
            $colorName = [];

            // Loop on each clothes objects generated by the request to store the colors and colors name in the corresponding tabs. This should be done as a loop because each clothes can own many colors. The management of a second or more colors will be included in the V2 of the project
            foreach($row->getColor() as $rowColor){
                $color[] = $rowColor->getColorCode();
                $colorName[] = $rowColor->getName();
            }

            // Inserting all the value in the tab for Json treatment reason, sending the data to the requesting JavaScript file (switchDressing.js)
            array_push($tab, array(
                'id' => $row->getId(),
                'type' => $row->getType(),
                'style' => $row->getStyle(),
                'image' => $row->getImage(),
                'color' => $color,
                'colorName' => $colorName,
                'alt' => $row->getAlt(),
                'userName' => $row->getUser()->getFirstname()));
        }

        return new JsonResponse(json_encode(['listeVetements' =>$tab]));
    }

    #[Route('/delete/{type}/{id}', name: 'app_delete')]
    //#[Route('/top', name: 'app_top')]
    public function delete($type, $id, VetementRepository $vetementRepository): Response
    {
        // Request to get the user clothes depending on the type (top or bottom)
        $deleteVetement = $vetementRepository->findOneById($id);

        // Retreiving the corresponding image name
        $fichier = 'assets/user_img/'.$deleteVetement->getImage();

        //dd($fichier);

        // Deleting the cloth selected
        $vetementRepository->remove($deleteVetement, true);

        //dd($deleteVetement);

        // Controlling if the file is existing
        if(file_exists ($fichier)){
            //dd('ok');
            unlink( $fichier) ;
        }
        
        return $deleteVetement;
    }
} 

