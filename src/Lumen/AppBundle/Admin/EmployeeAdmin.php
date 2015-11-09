<?php

// src/AppBundle/Admin/CategoryAdmin.php
namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EmployeeAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('name', 'text')
                ->add('job', 'text')
                ->add('level', 'text')
                ->add('email', 'text')
                ->add('costPerHour', 'integer');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('name')
                ->add('job')
                ->add('level')
                ->add('email')
                ->add('costPerHour');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('name', 'text')
                ->add('job', 'text')
                ->add('level', 'text')
                ->add('email', 'text')
                ->add('costPerHour', 'integer');
    }

}
