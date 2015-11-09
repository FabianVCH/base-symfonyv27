<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CostAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
                ->add('area', 'text')
                ->add('level', 'text')
                ->add('pricePerHour', 'integer');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
                ->add('area')
                ->add('level')
                ->add('pricePerHour');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper->addIdentifier('id')
                ->add('area', 'text')
                ->add('level', 'text')
                ->add('pricePerHour', 'integer');
    }
}
