<?php

/*
 * Imageur_Symfony
 * Symfony 5
 * Christine Zedday
 */

namespace App\DataFixtures;

use App\Entity\Image;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Book;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $book = new Book();
        $book->setTitle('La Peste');
        $book->setAuthor('Albert Camus');
        $book->setIsbn13(123456789);
        $book->setSummary("Je relis La Peste, lentement – pour la troisième fois. C’est un très grand livre, et qui grandira. Je me réjouis du succès qu’il obtient – mais le vrai succès sera dans la durée, et par l’enseignement par la beauté », écrit Louis Guilloux en juillet 1947 à son ami Albert Camus à propos du roman sorti en librairie le 10 juin. Retour sur la genèse de La Peste.
        Louis Guilloux, rencontré chez Gallimard au cours de l’été 1945, et Jean Grenier, ancien professeur de philosophie d’Albert Camus à Alger, furent les témoins de l’écriture du roman, commencé au cours de l’été 1942 et achevé en décembre 1946. Le 22 septembre 1942, Albert Camus écrit à Jean Grenier qu’il travaille « à une sorte de roman sur la peste », et poursuit quelques jours après : « Ce que j’écris sur la peste n’est pas documentaire, bien entendu, mais je me suis fait une documentation assez sérieuse, historique et médicale, parce qu’on y trouve des “prétextes”. » De fait, le roman est en gestation depuis plusieurs années. Camus – dont les premières notes sur le sujet ont été prises fin 1938 –, s’est abondamment documenté sur les grandes pestes de l’histoire dans le courant du mois d’octobre 1940. Son projet se précise dans ses Carnets en avril 1941, où figurent la mention « Peste ou aventure (roman) », suivi d’un développement portant le titre La Peste libératrice. À André Malraux, qui a pressenti en Camus, jeune auteur encore inconnu en France, un « écrivain important » et s’emploie à faire publier chez Gallimard un premier roman intitulé L’Étranger, il écrit le 13 mars 1942 d’Oran, où il réside depuis janvier 1941 : « Dès que j’irai mieux je continuerai mon travail : un roman sur la peste. Dit comme cela, c’est bizarre. Mais ce serait très long de vous expliquer pourquoi ce sujet me paraît si 'naturel'. » Et, tandis que L’Étranger, bientôt suivi d’un essai, Le Mythe de Sisyphe, sont publiés à l’enseigne de la NRF, Camus commence le travail d’écriture proprement dit au Panelier dans le Vivarais, où il s’est installé en août 1942 pour soigner une rechute de tuberculose. Le débarquement allié en Afrique du Nord en novembre 1942 suivi de l’entrée des Allemands en zone Sud l’empêche de rejoindre son épouse rentrée en Algérie en octobre. « 11 novembre. Comme des rats ! » s’exclame-t-il dans ses Carnets, avant de noter quelques pages plus loin, fin 1942 ou début 1943 : « Je veux exprimer au moyen de la peste l'étouffement dont nous avons tous souffert et l'atmosphère de menace et d'exil dans laquelle nous avons vécu. Je veux du même coup étendre cette interprétation à la notion d'existence en général. La peste donnera l'image de ceux qui dans cette guerre ont eu la part de la réflexion, du silence – et celle de la souffrance morale. » Le roman aborde ainsi les thèmes de l’exil, de la séparation et de la solitude. Il avait déjà envisagé, en août 1942, de donner pour titre au roman, situé à Oran qu'il n'aimait pas, « Les Séparés », puis, en septembre, de ne pas « mettre “La Peste” dans le titre. Mais quelque chose comme “Les Prisonniers”. » Le roman, « première tentation de mise en forme d'une passion collective » (Carnets, 1946), est aussi la représentation de la lutte contre le nazisme et la guerre. C’est bien ainsi que l’entend Francis Ponge dans une lettre adressée à Camus en août 1943. Faisant référence à conférence de Québec, où Américains et Anglais débattaient de la question stratégique du « second front », il encourage Camus à poursuivre dans ce sens : « Je crois qu’il y aura des chapitres à ajouter à La Peste, ou un nouveau livre à écrire sur de nouvelles formes de cette maladie pestilentielle…. » Les lecteurs ne s’y sont pas trompés à la parution du roman. À Roland Bathes, Camus écrivait en février 1955 que « La Peste [...] a cependant comme contenu évident la lutte de la résistance européenne contre le nazisme. La preuve en est que cet ennemi qui n'est pas nommé, tout le monde l'a reconnu, et dans tous les pays d'Europe. [...] La Peste, dans un sens, est plus qu'une chronique de la résistance. Mais assurément, elle n'est pas moins. »
        Une première version de La Peste est achevée en janvier 1943. Peu satisfait, Camus entreprend aussitôt une seconde version, tout en menant en parallèle d’autres projets d’écriture. Grippé, il écrit à Francis Ponge en août 1943 : « Il y a un mois que je n’ai pas écrit une ligne. Caligula et Le Malentendu, La Peste et mon étude sur d’Aubigné, tout cela dort et je traine dans l’inertie. » Le 15 janvier 1944, toujours à Ponge, il annonce travailler « à mon chapitre sur la révolte que je donnerai à Grenier. Il vient sans venir. Ensuite, La Peste. J’attends ce moment avec impatience. Je crois que cette fois je tiens le bon bout ». Puis, fin mars : « Je suis revenu à La Peste. C’est-à-dire que le soir, tard, après des journées écrasantes, je regarde le manuscrit et je rêve à autre chose. Mais il en sortira peut-être quelque chose. ");
        $book->setDateStr('1972-01-01');
        $book->setUrl('https://www.babelio.com/livres/Camus-La-peste/313209');
        $manager->persist($book);

        $book = new Book();
        $book->setTitle('Chronique indiscrète des Mandarins');
        $book->setAuthor('Wou King-tseu');
        $book->setIsbn13(123456789);
        $book->setSummary("Je ne l'ai pas lu, c'est une satire de la société Chinoise du 18e siècle, ça promet d'être touffu mais croustillant.");
        $book->setDateStr('1976-01-01');
        $manager->persist($book);

        $book = new Book();
        $book->setTitle('Tous les Mayas sont bons');
        $book->setAuthor('Donald Westlake');
        $book->setIsbn13(123456710);
        $book->setDateStr('1985-01-01');
        $book->setSummary("Les aventures de quelques magouilleurs, de pilleurs de temples Mayas ou d'archéologues incorruptibles au Belize.");
        $book->setUrl('https://www.babelio.com/livres/Westlake-Tous-les-Mayas-sont-bons/1092211');


        $manager->persist($book);



        $manager->flush();
    }
}
