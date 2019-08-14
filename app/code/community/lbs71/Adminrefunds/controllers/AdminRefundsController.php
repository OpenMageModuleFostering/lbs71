<?php
class Lbs71_Adminrefunds_AdminrefundsController extends Mage_Adminhtml_Controller_Action
{
public function indexAction()
    {
        //Form template
        $this->loadLayout()->_setActiveMenu('lbs71/example');

        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/template', 'example-block')->
            setTemplate('adminrefunds/loginform.phtml');

        $this->_addContent($block);

        $this->renderLayout();
    }
    
    public function postAction(){
        
        //Form template
        $this->loadLayout()->_setActiveMenu('lbs71/example');

        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/template', 'example-block')->
            setTemplate('adminrefunds/refunds.phtml');

        $this->_addContent($block);
        $this->renderLayout();

        $email = '';
        $password = '';
        
        
        
    }
    
    public function aboutAction(){
        //Form template
        $this->loadLayout()->_setActiveMenu('lbs71/example');

        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/template', 'example-block')->
            setTemplate('adminrefunds/about.phtml');

        $this->_addContent($block);
        $this->_setActiveMenu('lbs71/about'); 
        $this->renderLayout();
    }
}