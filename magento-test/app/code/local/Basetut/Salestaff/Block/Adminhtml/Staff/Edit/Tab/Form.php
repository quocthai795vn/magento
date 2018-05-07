<?php
class Basetut_Salestaff_Block_Adminhtml_Staff_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
    /**
     * prepare tab form's information
     *
     * @return Basetut_Salestaff_Block_Adminhtml_Salestaff_Edit_Tab_Form
     */
    protected function _prepareForm()
    {
        $form = new Varien_Data_Form();
        $this->setForm($form);
        
        if (Mage::getSingleton('adminhtml/session')->getSalestaffData()) {
            $data = Mage::getSingleton('adminhtml/session')->getSalestaffData();
            Mage::getSingleton('adminhtml/session')->setSalestaffData(null);
        } elseif (Mage::registry('salestaff_data')) {
            $data = Mage::registry('salestaff_data')->getData();
        }
        $fieldset = $form->addFieldset('salestaff_form', array(
            'legend'=>Mage::helper('salestaff')->__('Staff information')
        ));
		
		/*Edit truong kieu text*/
        $fieldset->addField('name', 'text', array(
            'label'        => Mage::helper('salestaff')->__('Name'),
            'class'        => 'required-entry',
            'required'    => true,
            'name'        => 'name',
        ));
		
        $fieldset->addField('email', 'text', array(
            'label'        => Mage::helper('salestaff')->__('Email'),
            'class'        => 'validate-email',
            'required'    => true,
            'name'        => 'email',
        ));
        $fieldset->addField('phone', 'text', array(
            'label'        => Mage::helper('salestaff')->__('Phone'),
            'class'        => 'validate-number',
            'required'    => true,
            'name'        => 'phone',
        ));
        $fieldset->addField('company', 'text', array(
            'label'        => Mage::helper('salestaff')->__('Company'),
            'class'        => 'required-entry',
            'required'    => true,
            'name'        => 'company',
        ));
        $fieldset->addField('message', 'text', array(
            'label'        => Mage::helper('salestaff')->__('Message'),
            'class'        => 'required-entry',
            'required'    => true,
            'name'        => 'message',
        ));
		

        $form->setValues($data);
        return parent::_prepareForm();
    }
}