<?php

namespace App\Form;

use App\Entity\Comment;
use Doctrine\DBAL\Types\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CommentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('email',EmailType::class,[
                'lable' => 'votre email',
                'attr'  => [
                    'class' => 'form-control'
                ]
            ])
            ->add('nickname',TextType::class,[
                'lable' => 'votre pseudo',
                'attr'  => [
                    'class' => 'form-control'
                ]
            ])
            ->add('text',TextType::class,[
                'lable' => 'commenter',
                'attr'  => [
                    'class' => 'form-control'
                ]
            ])
            ->add('rgpd', CheckboxType::class)
            ->add('parent', HiddenType::class,[
                'mapped' => false
            ])
            ->add('submit', SubmitType::class)
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Comment::class,
        ]);
    }
}
