<?php
require_once dirname(__FILE__) . '/Base.php';
class EnterController extends BaseController
{
    public function loginAction()
    {
        $this->getView();
    }


    public function checkLoginAction()
    {
        try {
            $baseModel = new BaseModel();
            die();
            $userName = trim($this->getRequest()->getPost('username'));
            $password = trim($this->getRequest()->getPost('password'));
            //$remember = intval($this->getRequest()->getPost('remember_me'));

            if ($userName == '' || $password == '')
                throw new Exception('请填写用户名或密码!');


            $this->jsonOk('Success!', ['redirectUrl' => '/backend/admin/index']);
        } catch (Exception $e) {
            $this->jsonNok('登录失败!' . $e->getMessage());
        }
    }
}