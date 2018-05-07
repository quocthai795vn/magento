<?php

class SmartOSC_HelloWorld_Model_Resource_Blogpost extends Mage_Core_Model_Resource_Db_Abstract
{
   protected function _construct()
   {
       $this->_init('hello/blogpost', 'id');
   }
}
