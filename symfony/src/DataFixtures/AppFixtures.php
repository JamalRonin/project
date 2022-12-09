<?php

namespace App\DataFixtures;

use Faker\Factory;
use DateTimeImmutable;
use App\Entity\Article;
use App\Entity\ArticleH3;
use App\Entity\ArticleTags;
use App\Entity\ArticleText;
use App\Entity\Realisation;
use Doctrine\ORM\Mapping\Id;
use App\Entity\CleaningGuide;
use App\Entity\ArticleCategories;
use App\Entity\ArticleLi;
use App\Entity\RealisationDetail;
use App\Entity\SliderRealisation;
use App\Entity\ChecklistRealisation;
use Doctrine\Persistence\ObjectManager;
use App\Repository\RealisationRepository;
use Doctrine\Bundle\FixturesBundle\Fixture;
use App\Repository\ArticleCategoriesRepository;

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

        // for ($i = 0; $i < 10; $i++) {
        //     $sliderRealisation = new SliderRealisation();
        //     $sliderRealisation->setImg('5.jpg')
        //         ->setAlt($faker->sentence(3));
        //     $manager->persist($sliderRealisation);
        // }


        // Créer des aritcles de blog aléatoires avec Faker et les entity Article, ArticleCategories, ArticleTags, AricleText, ArticleImages.
        // for ($i = 0; $i < 10; $i++) {
        //     //Créer des dates aléatoires avec dateTimeImmutable et mt_rand
        //     $date = new DateTimeImmutable();
        //     $date = $date->setTimestamp(mt_rand(1, time()));
        //     $article = new Article();
        //     $article->setTitle($faker->sentence(3))
        //         ->setIntro($faker->paragraph(1))
        //         ->setSlug($faker->slug(3))
        //         ->setCreatedAt($date);

        //     $manager->persist($article);
        // }


        //créer une dixaine de tags aléatoires
            // for ($i = 0; $i < 10; $i++) {
            //     $tag = new ArticleTags();
            //     $tag->setTag($faker->sentence(3));
            //     $manager->persist($tag);
            // }

            // for ($i = 0; $i < 10; $i++){
            //     $category = new ArticleCategories();
            //     $category->setDenomination($faker->sentence(3));
            //     $category->setSlug($faker->slug(3));
            //     $manager->persist($category);
            // }



            for ($i=0; $i < 2; $i++) { 


                $text = new ArticleText();
                $text->setText($faker->paragraph(9))
                // createdAt dateTImeImmutable
                ->setCreatedAt(new DateTimeImmutable());
                    
                $manager->persist($text);
            }

            // for ($i=0; $i < 10; $i++) { 
            //     $h3 = new ArticleH3();
            //     $h3->setH3($faker->sentence(3));
            //     $manager->persist($h3);
            // }

            // for ($i=0; $i < 10; $i++) { 
            //     $li = new ArticleLi();
            //     $li->setLi($faker->sentence(3));
            //     $manager->persist($li);
            // }



        $manager->flush();
    }
}
