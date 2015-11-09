<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ProjectAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
        ->add('projectName', 'text')
        ->add('quoteID', 'integer');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
        ->add('projectName')
        ->add('quoteID');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
        ->add('projectName', 'text')
        ->add('quoteID', 'integer');
    }

}
