<?php

namespace App\Form;

use App\Entity\BlogPost;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;


class BlogPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title')
            ->add('slug')
            ->add('description')
            ->add('body')
            ->add('cover')
            ->add('category')
            ->add('reading_time')
            /*->add('user')*/
        ;
        /*$builder
            ->add('title')
            ->add('slug')
            ->add('description')
            ->add('body')
            ->add('cover')
            ->add('createdAt')
            ->add('updatedAt')
            ->add('user')
        ;*/
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => BlogPost::class,
        ]);
    }
}
