<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Realisation;
use Doctrine\ORM\Mapping\Id;
use App\Entity\CleaningGuide;
use App\Entity\RealisationDetail;
use App\Entity\SliderRealisation;
use App\Entity\ChecklistRealisation;
use Doctrine\Persistence\ObjectManager;
use App\Repository\RealisationRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
       
        $faker = Factory::create('fr_FR');

        

        // Créer des realisations aléatoires avec Faker et les propriéter de l'entité Realisation
        // for ($i = 0; $i < 10; $i++) {
        //     $realisation = new Realisation();
        //     $realisation->setTitle($faker->catchPhraseNoun(3))
        //                 ->setSlug($faker->slug(3))
        //                 ->setImg('5.jpg')
        //                 ->setInformation($faker->sentence(10))
        //                 ->setAlt($faker->sentence(3))
        //                 ->setDescription($faker->paragraph(3));

        //     $manager->persist($realisation);
        // }

        //Créer des cleaningGuide aléatoires avec Faker et les propriéter de l'entité CleaningGuide
        // for ($i = 0; $i < 10; $i++) {
        //     $cleaningGuide = new CleaningGuide();
        //     $cleaningGuide->setTitle($faker->sentence(3))
        //         ->setDescription($faker->paragraph(3))
        //         ->setInformation($faker->paragraph(1))
        //         ->setLi1($faker->sentence(3))
        //         ->setLi2($faker->sentence(3))
        //         ->setLi3($faker->sentence(3))
        //         ->setLi4($faker->sentence(3))
        //         ->setLi5($faker->sentence(3));

        //     $manager->persist($cleaningGuide);
        // }


        // // Créer des realisation_details aléatoires avec Faker et les propriéter de l'entité RealisationDetails
        // for ($i = 0; $i < 10; $i++) {
        //     $realisationDetails = new RealisationDetail();
        //     $realisationDetails->setTitle($faker->sentence(3))
        //         ->setDescription($faker->paragraph(3))
        //         ->setSkills($faker->catchPhraseVerb(3))
        //         ->setClient($faker->sentence(3))
        //         ->setFinDeRealisation($faker->sentence(3))
        //         ->setManager($faker->firstNameMale(3))
        //         ->setAdresse('Beauvais, Oise');
        //     $manager->persist($realisationDetails);
        // }

        // // Créer des checklist_realisation aléatoires avec Faker et les propriéter de l'entité ChecklistRealisation
        // for ($i = 0; $i < 10; $i++) {
        //     $checklistRealisation = new ChecklistRealisation();
        //     $checklistRealisation->setTitle($faker->sentence(3))
        //         ->setDescription($faker->paragraph(3))
        //         ->setLi1($faker->sentence(3))
        //         ->setLi2($faker->sentence(3))
        //         ->setLi3($faker->sentence(3))
        //         ->setLi4($faker->sentence(3))
        //         ->setLi5($faker->sentence(3))
        //         ->setInformation($faker->paragraph(1))
        //         ->setImg('5.jpg')
        //         ->setAlt($faker->sentence(3));
        //     $manager->persist($checklistRealisation);
        // }
        // // créer les slider_realisation 

        for ($i = 0; $i < 10; $i++) {
            $sliderRealisation = new SliderRealisation();
            $sliderRealisation->setImg('5.jpg')
                ->setAlt($faker->sentence(3));
            $manager->persist($sliderRealisation);
        }


        $manager->flush();
    }
}
