<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ClientContactAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('clientID', 'integer')
                ->add('name', 'text')
                ->add('phoneNumber', 'integer')
                ->add('email', 'text');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('clientID')
                ->add('name')
                ->add('phoneNumber')
                ->add('email');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('clientID', 'integer')
                ->add('name', 'text')
                ->add('phoneNumber', 'integer')
                ->add('email', 'text');
    }

}
