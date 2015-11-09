<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class TaskAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('projectID', 'integer')
                ->add('title', 'text')
                ->add('description', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('projectID')
                ->add('title')
                ->add('description');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('projectID', 'integer')
                ->add('title', 'text')
                ->add('description', 'text');
    }

}
