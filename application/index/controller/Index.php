<?php
namespace app\index\controller;

use app\index\model\Picture;
use think\facade\Url;

class Index
{
    /**
     * 机构列表
     */
    public function index()
    {
        //echo Url::build('index/index/getPicToken');
    }
    
    public function getPicToken()
    {
        return json([
            'token'=> Picture::init()->getToken(),
        ]);
    }


}
