<?php
class PaulMillband_ManageCategoryProductLink_Block_Adminhtml_Category_Tab_Product
    extends Mage_Adminhtml_Block_Catalog_Category_Tab_Product {

    public function _prepareColumns(){
        $this->addColumn('edit',
            array(
                'header'    => '',
                'width'     => '50px',
                'type'      => 'action',
                'getter'     => 'getId',
                'actions'   => array(
                    array(
                        'caption' => Mage::helper('catalog')->__('Edit'),
                        'url'     => array(
                            'base'=>'*/catalog_product/edit',
                            'params'=>array('store'=>$this->getRequest()->getParam('store'))
                        ),
                        'field'   => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
        ));
        return parent::_prepareColumns();
    }
    
}