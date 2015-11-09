<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ClientAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('clientName', 'text')
                ->add('phoneNumber', 'integer')
                ->add('email', 'text')
                ->add('legalID', 'integer')
                ->add('type', 'integer');
              
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                  ->add('clientName')
                ->add('phoneNumber')
                ->add('email')
                ->add('legalID')
                ->add('type');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                 ->add('clientName', 'text')
                ->add('phoneNumber', 'integer')
                ->add('email', 'text')
                ->add('legalID', 'integer')
                ->add('type', 'integer');
    }

}
