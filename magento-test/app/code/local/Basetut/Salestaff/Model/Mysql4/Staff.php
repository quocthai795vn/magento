<?php
class Basetut_Salestaff_Model_Mysql4_Staff extends Mage_Core_Model_Mysql4_Abstract
{
 public function _construct()
 {
 $this->_init('salestaff/staff', 'id');
 }
}