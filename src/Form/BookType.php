<?php

namespace App\Form;

use App\Entity\Book;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;

class BookType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $sum = $options['sum'];
        $builder
            ->add('title', null, ['label'=>'Titre'])
            ->add('author', null, ['label'=>'Auteur'])
            ->add('date', DateType::class, array(
                'widget' => 'choice',
                'years' => range(date('Y')-150, date('Y')+1),
              ))
            // ->add('summary', TextAreaType::class, ['label'=>'Résumé', 'attr' =>['cols' => 100, 'rows' => '10']])
            ->add('isbn13')
            ->add('url')
        ;
        $builder
        ->addEventListener(FormEvents::PRE_SET_DATA, function (FormEvent $event) use ($sum) {
            $book = $event->getData();
            $form = $event->getForm();

            // checks if the Book object is "new"
            // If no data is passed to the form, the data is "null".
            // This should be considered a new "Book"
            if (!$book || null === $book->getId()) {
                $form->add('summary', TextAreaType::class, ['label'=>'Résumé', 'attr' =>['cols' => 100, 'rows' => '10']]);
            }
            else {
                $form->add('summary', TextAreaType::class, ['label'=>'Résumé', 'data'=> $sum, 'attr' =>['cols' => 100, 'rows' => '10']]);
            }
        });
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
            'sum' => '',
        ]);
    }
}
