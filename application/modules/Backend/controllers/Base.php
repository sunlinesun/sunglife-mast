<?php
class BaseController extends Yaf\Controller_Abstract
{
    /**
     * @desc 返回Json 成功格式
     * @param string $msg
     * @param array $data
     * @return string
     */
    public function jsonOk($msg = 'OK', $data = [])
    {
        $resData = [
            'status' => 0,
            'msg' => $msg,
            'data' => $data,
        ];
        echo json_encode($resData);
        exit();
    }

    /**
     * @desc 返回Json 失败格式
     * @param string $msg
     * @param array $data
     * @return string
     */
    public function jsonNok($msg = 'Not Ok', $data = [])
    {
        $resData = [
            'status' => 1,
            'msg' => $msg,
            'data' => $data,
        ];
        echo json_encode($resData);
        exit();
    }

}