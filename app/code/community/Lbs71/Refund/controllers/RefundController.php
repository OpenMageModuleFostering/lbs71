<?php
class Lbs71_Refund_RefundController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        //Form template
        $this->loadLayout()->_setActiveMenu('lbs71/shipping');

        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/template', 'example-block')->
            setTemplate('refund/loginform.phtml');

        $this->_addContent($block);
        $this->renderLayout();
    }
    
    public function aboutAction()
    {
        //Form template
        $this->loadLayout()->_setActiveMenu('lbs71/about');

        //create a text block with the name of "example-block"
        $block = $this->getLayout()->createBlock('core/template', 'example-block')->
            setTemplate('refund/about.phtml');

        $this->_addContent($block);
        $this->renderLayout();
    }
}
