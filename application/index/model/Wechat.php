<?php
/**
 * Created by PhpStorm.
 * User: tu6ge
 * Date: 2018/2/13
 * Time: 17:39
 */
namespace app\index\model;

use think\facade\Config;
use EasyWeChat\Factory;

class Wechat extends BaseModel
{
    protected $config = [];
    public function __construct()
    {
        $this->config = Config::get('wechat');
        $this->app = Factory::officialAccount($this->config);
    }
    public function getApp()
    {
        return $this->app;
    }
}