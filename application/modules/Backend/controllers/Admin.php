<?php
require_once dirname(__FILE__) . '/Power.php';
class AdminController extends PowerController
{
    public function indexAction()
    {
        $this->getView();
    }
}