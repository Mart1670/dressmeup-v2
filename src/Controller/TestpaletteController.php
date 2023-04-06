<?php

namespace App\Controller;

use App\Entity\Color;
use App\Entity\Palette;
use App\Entity\ReferenceColor;
use App\Repository\ColorRepository;
use App\Repository\ReferenceColorRepository;
use App\Repository\PaletteRepository;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

// This controller is not in use - tests only

class TestpaletteController extends AbstractController
{
    #[Route('/testpalette', name: 'app_testpalette')]
    public function index(ReferenceColorRepository $referenceColorRepository): Response
    {
        //Algo
        $tab = [];

        $hexa = '#ff7f00';

        list($r, $g, $b) = sscanf($hexa, "#%02x%02x%02x");

        $listColor = $referenceColorRepository->findAll();
        foreach ($listColor as $row){

            $delta = 0;

            $deltaR = ($r - $row->getR()) * ($r - $row->getR());
            $deltaG = ($g - $row->getG()) * ($g - $row->getG());
            $deltaB = ($b - $row->getB()) * ($b - $row->getB());

            $delta = sqrt($deltaR + $deltaG + $deltaB);

            array_push($tab, array('id' => $row->getId(), 'delta' => $delta, 'color' => $row->getColorCode()));
        }

        usort($tab, function ($a, $b) {
            return strcmp($a['delta'], $b['delta']);
        });

        //dd($tab);

        /*$listColor = $colorRepository->findAll();
        foreach ($listColor as $row){
            list($r, $g, $b) = sscanf($row->getColorCode(), "#%02x%02x%02x");
            $row->setR($r);
            $row->setG($g);
            $row->setB($b);
            $colorRepository->save($row, true);
        }*/

        return $this->render('testpalette/index.html.twig', [
            'controller_name' => 'TestpaletteController',
        ]);
    }

    #[Route('/integrationcolor/backup', name: 'app_testpalette_inte_backup')]
    public function integrationcolor(ColorRepository $colorRepository, PaletteRepository $paletteRepository, EntityManagerInterface $entityManager, ReferenceColorRepository $referenceColorRepository): Response
    {

        $listColor = $referenceColorRepository->findAll();
        
        $filename = 'Palettes.csv';

        $file = fopen($filename, 'r');
        while (($line = fgetcsv($file)) !== FALSE) {
            //dump($line);
            $tabColorPalette = explode(';', $line[0]);
            //dd($tabColorPalette);

            $palette = new Palette();
            $palette->setName("Palette ".$tabColorPalette[0]);

            $paletteRepository->save($palette, true);

            $i = 0;
            foreach($tabColorPalette as $row){
                if($i > 0){
                    $color = new Color();
                    $color->setColorCode($row);
                    list($r, $g, $b) = sscanf($row, "#%02x%02x%02x");
                    $color->setR($r);
                    $color->setG($g);
                    $color->setB($b);
                    $color->addPalette($palette);

                    $finalColor = null;
                    $finalDelta = 1000;
                    
                    foreach ($listColor as $row){

                        $delta = 0;

                        $deltaR = ($r - $row->getR()) * ($r - $row->getR());
                        $deltaG = ($g - $row->getG()) * ($g - $row->getG());
                        $deltaB = ($b - $row->getB()) * ($b - $row->getB());

                        $delta = sqrt($deltaR + $deltaG + $deltaB);
                        
                        if($delta < $finalDelta){
                            $finalDelta = $delta;
                            $finalColor = $row;
                        }
                    }

                    $color->setName($finalColor->getName());
                    $color->setActive(1);

                    $colorRepository->save($color);
                }
                $i++;
            }
        }

        $entityManager->flush();

        fclose($file);

        dd('ok');

        return $this->render('testpalette/index.html.twig', [
            'controller_name' => 'TestpaletteController',
        ]);
    }

    #[Route('/testcolorname/{hexa1}', name: 'app_testcolorname')]
    public function colorname($hexa1, ReferenceColorRepository $referenceColorRepository): JsonResponse
    {
        
        // Retreiving the Hexadecimal code in URL parameter and adding the # character
        $hexa = '#'.$hexa1;

        // Converting the Hexadecimal code to RGB code
        list($r, $g, $b) = sscanf($hexa, "#%02x%02x%02x");

        // Retreiving all the reference color in the database
        $listColor = $referenceColorRepository->findBy(['active' => 1]);

        // Setting the varaibles
        $finalColor = null;
        $finalDelta = 1000;
        $tab = [];

        //dd($listColor);

        // Loop on each reference color to calculate the delta
        foreach ($listColor as $row){

            $delta = 0;

            // Determining the delta on each data R, G and B
            $deltaR = ($r - $row->getR()) * ($r - $row->getR());
            $deltaG = ($g - $row->getG()) * ($g - $row->getG());
            $deltaB = ($b - $row->getB()) * ($b - $row->getB());

            // Hypotenuse calculation
            $delta = sqrt($deltaR + $deltaG + $deltaB);

            // Inserting the result in the table
            array_push($tab, array('id' => $row->getId(), 'delta' => $delta, 'color' => $row->getColorCode()));

            // Condition to determine the lowest delta and so the closest reference color
            if($delta < $finalDelta){
                $finalDelta = $delta;
                $finalColor = $row;
            }
        }

        return new JsonResponse(['colorname' => $finalColor->getName(), 'color_code' => $finalColor->getColorCode()]);
    }
}
