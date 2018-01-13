<?php
/**
 * Created by sapphire.php@gmail.com
 * User: yongze
 * Date: 2018/1/13
 * Time: 下午9:47
 */
namespace app\wechat\controller;

use controller\BasicAdmin;
use Think\Db;

class Mini extends BasicAdmin
{
    /**
     * 定义当前默认数据表
     * @var string
     */
    public $table = 'WechatFansTags';

    /**
     * 显示粉丝标签列表
     * @return array|string
     */
    public function index()
    {
        $this->title = '微信粉丝标签管理';
        $get = $this->request->get();
        $db = Db::name($this->table)->order('id asc');
        foreach (['name'] as $key) {
            if (isset($get[$key]) && $get[$key] !== '') {
                $db->where($key, 'like', "%{$get[$key]}%");
            }
        }
        return parent::_list($db);
    }

}