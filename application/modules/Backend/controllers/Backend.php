<?php
class BackendController extends Yaf\Controller_Abstract
{
    public function loginAction()
    {
        $content = "Hello SungLife Admin";
        $this->getView()->assign('content', $content);
    }
}