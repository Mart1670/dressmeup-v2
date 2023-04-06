<?php

namespace App\Controller;

use App\Repository\ReferenceColorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// This controller is not in use - tests only

class ColortestController extends AbstractController
{
    #[Route('/colortest', name: 'app_colortest')]
    public function index(ReferenceColorRepository $referenceColorRepository): Response
    {
        $listColor = $referenceColorRepository->findBy(['active' => 1]);
        
        $tab=[];
        
        for ($i=0; $i <200 ; $i++) { 
            $randomR = rand(0,255);
            $randomG = rand(0,255);
            $randomB = rand(0,255);

            $randomColor = sprintf("#%02x%02x%02x", $randomR, $randomG, $randomB);

            $deltaFinal = 1000;
            $colorCodeFinal = null;
            $colorNameFinal = null;

            foreach ($listColor as $row){

                $delta = 0;

                $deltaR = abs($randomR - $row->getR())^2;
                $deltaG = abs($randomG - $row->getG())^2;
                $deltaB = abs($randomB - $row->getB())^2;

                $delta = sqrt($deltaR + $deltaG + $deltaB);

                // $delta = sqrt((($randomR - $row->getR()))^2 + (($randomG - $row->getG()))^2 + (($randomB - $row->getB()))^2);

                if($delta < $deltaFinal){
                    $deltaFinal = $delta;
                    $colorCodeFinal = $row->getColorCode();
                    $colorNameFinal = $row->getName();
                }
            }

            array_push($tab, array('RandomColor' => $randomColor, 'delta' => $deltaFinal, 'Nom' => $colorNameFinal, 'hex' => $colorCodeFinal));

        }

        //dd($tab);

        return $this->render('colortest/index.html.twig', [
            'controller_name' => 'ColortestController',
            'RandomColors' => $tab,
        ]);
    }
}


