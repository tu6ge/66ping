<?php
namespace app\index\controller;

use app\index\model\Picture;
use think\Controller;
use think\facade\Config;
use think\facade\Url;

class Index extends Controller
{
    /**
     * 机构列表
     */
    public function index()
    {
        $condition = [
            'uid'   => 1, //uid todo
        ];
        $list = \app\common\model\Mechanism::where($condition)
            ->limit(Config::get('mechanism_max_count'))->order('id','desc')->select();
        $count = count($list);
        $can_add = $count < Config::get('mechanism_max_count');
        return $this->fetch('index',[
            'page_title'    => '小茄子聆听',
            'list'          => $list,
            'can_add'       => $can_add,
        ]);
    }

    /**
     * 获取七牛上传图片的凭证
     * @return \think\response\Json
     */
    public function getPicToken()
    {
        return json([
            'token'=> Picture::init()->getToken(),
        ]);
    }


}
