<?php
// src/Learn/FirstBundle/Form/ProductForm.php
namespace Learn\FirstBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('sku')
            ->add('description')
            ->add('created', null)
            ->add('save', 'submit');
    }

    public function getName()
    {
        return 'product';
    }
}