<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class QuoteAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('clientID', 'text')
                ->add('userID', 'integer')
                ->add('status', 'integer')
                ->add('totalHours', 'integer')
                ->add('finalCost', 'integer')
                ->add('date', 'datetime');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('clientID')
                ->add('userID')
                ->add('status')
                ->add('totalHours')
                ->add('finalCost')
                ->add('date');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('clientID', 'text')
                ->add('userID', 'integer')
                ->add('status', 'integer')
                ->add('totalHours', 'integer')
                ->add('finalCost', 'integer')
                ->add('date', 'datetime');
    }

}
