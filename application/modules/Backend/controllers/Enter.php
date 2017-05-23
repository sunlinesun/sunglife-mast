<?php
class EnterController extends Yaf\Controller_Abstract
{
    public function loginAction()
    {
        $this->getView();
    }


    public function checkLoginAction()
    {
        try {
            $userName = trim($this->getRequest()->getParam('username'));
            $password = trim($this->getRequest()->getParam('password'));
            $remember = intval($this->getRequest()->getParam('remember_me'));

            if ($userName == '')
                throw new Exception('');
        } catch (Exception $e) {

        }


    }
}