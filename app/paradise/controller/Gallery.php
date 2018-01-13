<?php
namespace app\paradise\controller;

/**
 * Created by sapphire.php@gmail.com
 * User: yongze
 * Date: 2018/1/13
 * Time: 下午10:55
 */

class Gallery extends Basic
{
    public function index()
    {
        $data = ['xxx'=>'bbbb'];
        return $this->response($data);
    }
}
