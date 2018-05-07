
<?php
class Basetut_Salestaff_Block_Adminhtml_Staff extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_staff';
    $this->_blockGroup = 'salestaff';
    $this->_headerText = Mage::helper('salestaff')->__('Fresher Manager');
	$this->_addButtonLabel = Mage::helper('salestaff')->__('Add Fresher');
    parent::__construct();
  }
}