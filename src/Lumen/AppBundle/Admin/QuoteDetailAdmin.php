<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuoteDetailAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('quoteID', 'integer')
                ->add('area', 'text')
                ->add('level', 'text')
                ->add('hours', 'integer')
                ->add('price', 'integer')
                ->add('date', 'datetime');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                 ->add('quoteID')
                ->add('area')
                ->add('level')
                ->add('hours')
                ->add('price')
                ->add('date');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('quoteID', 'integer')
                ->add('area', 'text')
                ->add('level', 'text')
                ->add('hours', 'integer')
                ->add('price', 'integer')
                ->add('date', 'datetime');
    }

}
