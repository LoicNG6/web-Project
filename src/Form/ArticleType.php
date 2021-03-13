<?php

namespace App\Form;

use App\Entity\Article;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArticleType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
<<<<<<< HEAD

            ->add('title')
            ->add('content')
            ->add('publication_date')
            ->add('emergency')
            ->add('picture', FileType::class ,[
                'label'=> 'false',
=======
            ->add('publication_date')
            ->add('title')
            ->add('content')
            ->add('emergency')
            ->add('images', FileType::class ,[
                'label'=> false,
>>>>>>> b5c1d338 (affichage des images des articles)
                'multiple' => true,
                'mapped' => false,
                'required' => true,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Article::class,
        ]);
    }
}
