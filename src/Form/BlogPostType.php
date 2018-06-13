<?php

namespace App\Form;

use App\Entity\BlogPost;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Vich\UploaderBundle\Form\Type\VichImageType;



class BlogPostType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, array('attr' =>
                array('class' => 'form-control')))
            /*->add('slug')*/
            ->add('description', TextType::class, array('attr' =>
                array('class' => 'form-control')))
            ->add('body', CKEditorType::class, array('attr' =>
                array('class' => 'form-control')))
            ->add('category', TextType::class, array('attr' =>
                array('class' => 'form-control')))
            ->add('reading_time', TextType::class, array('attr' =>
                array('class' => 'form-control')))
            /*->add('cover')*/
            ->add('coverFile',VichImageType::class, array(
                'label' => 'Couverture',
                'required' => false,
                'allow_delete' => false,
                'delete_label' => 'Supprimer ?',
                'download_link' => false
            ))
            ->add('save', SubmitType::class, array('attr' =>
                array('class' => 'btn btn-sm btn-primary')))



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
