<?php

// src/AppBundle/Admin/CategoryAdmin.php

namespace Lumen\AppBundle\Admin;


use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BillAdmin extends Admin {

    protected function configureFormFields(FormMapper $formMapper) {
        $formMapper
                ->add('quoteID', 'integer')
                ->add('userID', 'integer')
                ->add('clientID', 'integer')
                ->add('detail', 'text')
                ->add('totalPay', 'integer')
                ->add('finalCost', 'integer')
                ->add('date', 'datetime');
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper) {
        $datagridMapper
                ->add('quoteID')
                ->add('userID')
                ->add('clientID')
                ->add('detail')
                ->add('totalPay')
                ->add('finalCost')
                ->add('date');
    }

    protected function configureListFields(ListMapper $listMapper) {
        $listMapper->addIdentifier('id')
                ->add('quoteID', 'integer')
                ->add('userID', 'integer')
                ->add('clientID', 'integer')
                ->add('detail', 'text')
                ->add('totalPay', 'integer')
                ->add('finalCost', 'integer')
                ->add('date', 'datetime');
    }

}
