<?php
namespace app\paradise\Controller;
use think\Controller;
use service\ToolsService;
use think\Request;
use think\Response;

/**
 * Created by sapphire.php@gmail.com
 * User: yongze
 * Date: 2018/1/13
 * Time: 下午10:57
 */
class Basic extends Controller
{
    /**
     * 访问请求对象
     * @var Request
     */
    public $request;

    /**
     * 当前访问身份
     * @var string
     */
    public $token;

    /**
     * 基础接口SDK
     * @param Request|null $request
     */
    public function __construct(Request $request = null)
    {
        // CORS 跨域 Options 检测响应
        ToolsService::corsOptionsHandler();
        // 输入对象
        $this->request = is_null($request) ? Request::instance() : $request;
    }

    /**
     * 输出返回数据
     * @param string $msg 提示消息内容
     * @param string $code 业务状态码
     * @param mixed $data 要返回的数据
     * @param string $type 返回类型 JSON XML
     * @return Response
     */
    public function response($data = [],$msg = 'SUCCESS', $code = 'SUCCESS', $status = 200 ,$type='json')
    {
        $result = ['msg' => $msg, 'code' => $code, 'data' => $data];
        return Response::create($result, $type)->header(ToolsService::corsRequestHander())->code($status);
    }

}
