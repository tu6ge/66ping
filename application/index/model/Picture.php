<?php
/**
 * Created by PhpStorm.
 * User: tu6ge
 * Date: 2018/2/13
 * Time: 11:55
 */
namespace app\index\model;

use Qiniu\Auth;
use think\facade\Config;

class Picture extends BaseModel
{
    protected $config = [];
    protected $policy = [];
    protected $expires = 3600;
    protected $returnBody = '{"key":"$(key)","hash":"$(etag)","fsize":$(fsize),"bucket":"$(bucket)","name":"$(x:name)"}';
    public function __construct()
    {
        $this->config = Config::get('qiniu');
        $this->setPolicy([
            'returnBody'        => $this->returnBody,
            'callbackBodyType'  => 'application/json',
        ]);
    }
    
    public function getToken()
    {
        return (new Auth($this->config['access_key'], $this->config['secret_key']))
            ->uploadToken($this->config['bucket'], null, $this->expires, $this->policy, true);
    }

    public function setPolicy($policy)
    {
        $this->policy = $policy;
    }
    public function setExpires($expires)
    {
        $this->expires = $expires;
    }
}