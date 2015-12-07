<?php


namespace Test\TaskBundle\Admin;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;


class ProductAdmin extends Admin
{
    protected $maxPerPage = 5;

    protected function configureFormFields(FormMapper $formMapper)
    {


        $formMapper
            ->add('name')
            ->add('category')
            ->add('description')
            ->add('price')
            ->add('amount')
            ->add('date','sonata_type_datetime_picker')
            ->add('media', 'sonata_type_model_list', array(), array('link_parameters' => array('context' => 'default')))
        ;


    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('category')
            ->add('name', 'sonata_type_model_autocomplete')
            ->add('date', 'doctrine_orm_datetime_range', array(), null, array('widget' => 'single_text', 'required' => false,  'attr' => array('class' => 'datepicker')))
//            ->add('date', 'doctrine_orm_datetime_range', array('field_type'=>'sonata_type_datetime_range_picker',))
        ;
    }

//    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name')
            ->add('category')
            ->add('_action', 'actions', array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                        'delete' => array(),
                    )
                ))
        ;
    }


    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name')
            ->add('category')
            ->add('description')
            ->add('price')
            ->add('amount')
            ->add('media')
            ->add('date')
            ->end();
    }

}