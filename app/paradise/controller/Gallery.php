<?php
namespace app\paradise\Controller;
use service\DataService;

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


    public function create_no()
    {
        $data = DataService::createSequence(10,'ORDER');
        return $this->response($data);
    }
}
