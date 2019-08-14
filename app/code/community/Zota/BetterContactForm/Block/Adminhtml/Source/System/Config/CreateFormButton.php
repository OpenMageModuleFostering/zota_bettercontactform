<?php 
class Zota_BetterContactForm_Block_Adminhtml_Source_System_Config_CreateFormButton extends Mage_Adminhtml_Block_System_Config_Form_Field
{

    protected function _getElementHtml(Varien_Data_Form_Element_Abstract $element)
    {
        $this->setElement($element);
        $formBuilderUrl = "http://bettercontactform.com/contact/form/builder";
        $html = $this->getLayout()->createBlock('adminhtml/widget_button')
            ->setType('button')
            ->setClass('btn-create-contact-form')
            ->setLabel('Create Yours Contact Form')
            ->setOnClick("window.open('$formBuilderUrl', '_create_new_form');return false;")
            ->toHtml();
        return $html;
    }
}
?>