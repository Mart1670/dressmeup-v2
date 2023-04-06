<?php

namespace App\Controller;

use App\Repository\ColorRepository;
use App\Repository\PaletteRepository;
use App\Repository\VetementRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }

    #[Route('/generator', name: 'app_generator')]
    public function generator(VetementRepository $vetementRepository, ColorRepository $colorRepository, PaletteRepository $paletteRepository, ): JsonResponse
    {   
        $users = $this->getUser()->getId();

        // Récupérer les vêtements Hauts et Bas de l'utilisateur
        $hauts = $vetementRepository->findDressingContent($users, 'Haut');
        // dd($hauts);
        $bas = $vetementRepository->findDressingContent($users, 'Bas');
        // dd($bas);

        //Récupérer toutes les palettes stockées en BDD
        $palettes = $paletteRepository->findAll();

        // If the user doesn't have any cloth in his dressing, return an empty tab
        if ($hauts==[]) {
            return new JsonResponse(json_encode(['Haut' => $hauts]));
        }

        // Creation of a tab which will contains all the tops owned by the user in his dressing with all the information enclosed
        $tabHauts = [];
        foreach($hauts as $row){
            $color = [];
            $colorName = [];
            foreach($row->getColor() as $rowColor){
                $color[] = $rowColor->getColorCode();
                $colorName[] = $rowColor->getName();
            }

        array_push($tabHauts, array(
            'id' => $row->getId(),
            'type' => $row->getType(),
            'style' => $row->getStyle(),
            'image' => $row->getImage(),
            'color' => $color,
            'colorName' => $colorName,
            'alt' => $row->getAlt(),
            'userName' => $row->getUser()->getFirstname()));
        }
        // dd($tabHauts);

        // Creation of a tab which will contains all the bottoms owned by the user in his dressing with all the information enclosed
        $tabBas = [];
        foreach($bas as $row){
            $color = [];
            $colorName = [];
            foreach($row->getColor() as $rowColor){
                $color[] = $rowColor->getColorCode();
                $colorName[] = $rowColor->getName();
            }

        array_push($tabBas, array(
            'id' => $row->getId(),
            'type' => $row->getType(),
            'style' => $row->getStyle(),
            'image' => $row->getImage(),
            'color' => $color,
            'colorName' => $colorName,
            'alt' => $row->getAlt(),
            'userName' => $row->getUser()->getFirstname()));
        }
        //dd($tabBas);

        // Creation of a tab which will contains all the color palettes saved in the database
        $tabPalettes = [];
        foreach($palettes as $row){
            array_push($tabPalettes, array(
                'id' => $row->getId(),
                'color1' => $row->getColor1(),
                'color2' => $row->getColor2(),
                'color3' => $row->getColor3(),
                'color4' => $row->getColor4(),
                'color5' => $row->getColor5()));
        }
        //dd($tabPalettes);

        // Creation of the tab which will contains all the possible outfit combinations according to the color palettes
        $tabTenues = [];

        // The limit set to determine if the distance between 2 colors is consider as acceptable
        $limite = 100;

        // Initialisation of combinations index
        $index = 1;

        // Creation of the tab which will store all the combination found to avoid duplicates
        $combinaison = [];

        // Loop on each top tab rows
        foreach($tabHauts as $haut){

            // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation
            list($rh, $gh, $bh) = sscanf($haut["color"][0], "#%02x%02x%02x");

            // Loop on each bottom tab rows
            foreach($tabBas as $bas){

                // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation
                list($rb, $gb, $bb) = sscanf($bas["color"][0], "#%02x%02x%02x");
                
                // Loop on each color palette tab rows
                foreach($tabPalettes as $palette){

                    // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation. This is concerning the 1st color of the palette.
                    list($rp1, $gp1, $bp1) = sscanf($palette['color1'], "#%02x%02x%02x");
                    
                    // Initialisation of the distance delta between the palette color and the top/bottom color
                    $deltah1 = 0;
                    $deltab1 = 0;

                    // Calculation of the top color color delta using the Pythagore theorem
                    $deltaRh = ($rh - $rp1) * ($rh - $rp1);
                    $deltaGh = ($gh - $gp1) * ($gh - $gp1);
                    $deltaBh = ($bh - $bp1) * ($bh - $bp1);
                    $deltah1 = sqrt($deltaRh + $deltaGh + $deltaBh);

                    // Calculation of the bottom color color delta using the Pythagore theorem
                    $deltaRb = ($rb - $rp1) * ($rb - $rp1);
                    $deltaGb = ($gb - $gp1) * ($gb - $gp1);
                    $deltaBb = ($bb - $bp1) * ($bb - $bp1);
                    $deltab1 = sqrt($deltaRb + $deltaGb + $deltaBb);

                    // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation. This is concerning the 2nd color of the palette.
                    list($rp2, $gp2, $bp2) = sscanf($palette['color2'], "#%02x%02x%02x");
                    
                    // Initialisation of the distance delta between the palette color and the top/bottom color
                    $deltah2 = 0;
                    $deltab2 = 0;

                    // Calculation of the top color color delta using the Pythagore theorem
                    $deltaRh = ($rh - $rp2) * ($rh - $rp2);
                    $deltaGh = ($gh - $gp2) * ($gh - $gp2);
                    $deltaBh = ($bh - $bp2) * ($bh - $bp2);
                    $deltah2 = sqrt($deltaRh + $deltaGh + $deltaBh);

                    // Calculation of the bottom color color delta using the Pythagore theorem
                    $deltaRb = ($rb - $rp2) * ($rb - $rp2);
                    $deltaGb = ($gb - $gp2) * ($gb - $gp2);
                    $deltaBb = ($bb - $bp2) * ($bb - $bp2);
                    $deltab2 = sqrt($deltaRb + $deltaGb + $deltaBb);

                    // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation. This is concerning the 3rd color of the palette.
                    list($rp3, $gp3, $bp3) = sscanf($palette['color3'], "#%02x%02x%02x");
                    
                    // Initialisation of the distance delta between the palette color and the top/bottom color
                    $deltah3 = 0;
                    $deltab3 = 0;

                    // Calculation of the top color color delta using the Pythagore theorem
                    $deltaRh = ($rh - $rp3) * ($rh - $rp3);
                    $deltaGh = ($gh - $gp3) * ($gh - $gp3);
                    $deltaBh = ($bh - $bp3) * ($bh - $bp3);
                    $deltah3 = sqrt($deltaRh + $deltaGh + $deltaBh);

                    // Calculation of the bottom color color delta using the Pythagore theorem
                    $deltaRb = ($rb - $rp3) * ($rb - $rp3);
                    $deltaGb = ($gb - $gp3) * ($gb - $gp3);
                    $deltaBb = ($bb - $bp3) * ($bb - $bp3);
                    $deltab3 = sqrt($deltaRb + $deltaGb + $deltaBb);

                    // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation. This is concerning the 4th color of the palette.
                    list($rp4, $gp4, $bp4) = sscanf($palette['color4'], "#%02x%02x%02x");
                    
                    // If the palette is containing a 4th color, proceed the calculation
                    if($palette['color4']!=""){

                        // Initialisation of the distance delta between the palette color and the top/bottom color
                        $deltah4 = 0;
                        $deltab4 = 0;

                        // Calculation of the top color color delta using the Pythagore theorem
                        $deltaRh = ($rh - $rp4) * ($rh - $rp4);
                        $deltaGh = ($gh - $gp4) * ($gh - $gp4);
                        $deltaBh = ($bh - $bp4) * ($bh - $bp4);
                        $deltah4 = sqrt($deltaRh + $deltaGh + $deltaBh);

                        // Calculation of the bottom color color delta using the Pythagore theorem
                        $deltaRb = ($rb - $rp4) * ($rb - $rp4);
                        $deltaGb = ($gb - $gp4) * ($gb - $gp4);
                        $deltaBb = ($bb - $bp4) * ($bb - $bp4);
                        $deltab4 = sqrt($deltaRb + $deltaGb + $deltaBb);
                    } else {
                        // Otherwise, applying the max limite to not take it into account
                        $deltah4 = $limite;
                        $deltab4 = $limite;
                    }

                    // Converting the hexadecimal color code into seperate R, G and B value for the distance calculation. This is concerning the 5th color of the palette.
                    list($rp5, $gp5, $bp5) = sscanf($palette['color5'], "#%02x%02x%02x");
                    
                     // If the palette is containing a 5th color, proceed the calculation
                    if($palette['color5']!=""){
                        
                        // Initialisation of the distance delta between the palette color and the top/bottom color
                        $deltah5 = 0;
                        $deltab5 = 0;

                        // Calculation of the top color color delta using the Pythagore theorem
                        $deltaRh = ($rh - $rp5) * ($rh - $rp5);
                        $deltaGh = ($gh - $gp5) * ($gh - $gp5);
                        $deltaBh = ($bh - $bp5) * ($bh - $bp5);
                        $deltah5 = sqrt($deltaRh + $deltaGh + $deltaBh);

                        // Calculation of the bottom color color delta using the Pythagore theorem
                        $deltaRb = ($rb - $rp5) * ($rb - $rp5);
                        $deltaGb = ($gb - $gp5) * ($gb - $gp5);
                        $deltaBb = ($bb - $bp5) * ($bb - $bp5);
                        $deltab5 = sqrt($deltaRb + $deltaGb + $deltaBb);
                    } else {
                        // Otherwise, applying the max limite to not take it into account
                        $deltah5 = $limite;
                        $deltab5 = $limite;
                    }
                
                // If for the palette, the top and the bottom get a delta under the limited determined
                if($deltah1 < $limite && $deltab1 < $limite || $deltah2 < $limite && $deltab2 < $limite || $deltah3 < $limite && $deltab3 < $limite || $deltah4 < $limite && $deltab4 < $limite || $deltah5 < $limite && $deltab5 < $limite){
                
                    // Creation of the current combination value
                    $currentCombinaison = ($haut["id"].$bas["id"]);
                    //dd($currentCombinaison);

                    // If the combination not already existing in the combination tab or combination tab is empty (first entry)
                    if(!in_array($currentCombinaison, $combinaison) || $combinaison == []){

                        // Push all the data concerning the correct combination in a tab for Json treatment
                        array_push($tabTenues, array(
                            'index' => $index,
                            'combinaison' => $currentCombinaison,
                            'idHaut' => $haut["id"],
                            'styleHaut' => $haut["style"],
                            'colorHaut' => $haut["color"][0],
                            'colorNameHaut' => $haut["colorName"][0],
                            'imageHaut' => $haut["image"],
                            'altHaut' => $haut["alt"],
                            'idBas' => $bas["id"],
                            'colorBas' => $bas["color"][0],
                            'styleBas'  => $bas["style"],
                            'colorNameBas' => $bas["colorName"][0],
                            'imageBas' => $bas["image"],
                            'altBas' => $bas["alt"],
                            'idPalette' => $palette['id'], // This information was optional to push but for fonctionality checks purposes, was included
                            'color1' =>  $palette['color1'], // This information was optional to push but for fonctionality checks purposes, was included
                            'deltaColor1' => $deltah1, // This information was optional to push but for fonctionality checks purposes, was included
                            'color2' =>  $palette['color2'], // This information was optional to push but for fonctionality checks purposes, was included
                            'deltaColor2' => $deltah2, // This information was optional to push but for fonctionality checks purposes, was included
                            'color3' =>  $palette['color3'], // This information was optional to push but for fonctionality checks purposes, was included
                            'deltaColor3' => $deltah3, // This information was optional to push but for fonctionality checks purposes, was included
                            'color4' =>  $palette['color4'], // This information was optional to push but for fonctionality checks purposes, was included
                            'deltaColor4' => $deltah4,
                            'color5' =>  $palette['color5'], // This information was optional to push but for fonctionality checks purposes, was included
                            'deltaColor5' => $deltah5));

                            // Inserting the current combination into the combination tab to avoid duplicates
                            array_push($combinaison, $currentCombinaison);

                            //var_dump($combinaison);
                            $index++;
                    }
                }
            }
            }

        }

        //dd($tabTenues);

        // DON'T DELETE THESE LINES - Fonctionality checks
        // return $this->render('home/test-generator.html.twig', [
        //     'hauts' => $tabHauts,
        //     'bas' => $tabBas,
        //     'palettes' => $tabPalettes,
        //     'combinaisons' => $tabTenues,
        // ]);

        return new JsonResponse(json_encode([
            'combinaisons' => $tabTenues,
        ]));

    }

    // #[Route('/testgenerator', name: 'app_test_generator')]
    // public function testGenerator(VetementRepository $vetementRepository, ColorRepository $colorRepository, PaletteRepository $paletteRepository, ): JsonResponse
    // {   
        
        
    //     // return new JsonResponse(json_encode([
    //     //     'hauts' => $tabHauts,
    //     //     'bas' => $tabBas,
    //     //     'palettes' => $tabPalettes,
    //     // ]));

    // }
}
