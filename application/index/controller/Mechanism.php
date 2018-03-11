<?php
/**
 * 机构控制器
 * User: Administrator
 * Date: 2018/3/3
 * Time: 19:23
 */
namespace app\index\controller;

use think\Config;
use think\Controller;
use think\facade\Request;
use think\facade\Route;

class Mechanism extends Controller
{
    /**
     * 机构详情页
     */
    public function detail()
    {
        $id = Request::route('id');
        if(empty($id)){
            $this->error('招牌不存在');
        }
        $info = \app\common\model\Mechanism::get($id);
        if($info->uid != 1){ //uid todo
            $this->error('非法访问');
        }
        return $this->fetch('detail',[
            'info'  => $info,
        ]);
    }
    /**
     * 一个机构的反馈列表
     */
    public function feedback()
    {

    }

    /**
     * 创建机构
     */
    public function add()
    {
        if(Request::isPost()){
            $name = Request::post('name');
            $check = \app\common\model\Mechanism::get(['name'=>$name]);
            if(!empty($check)){
                return json(['status'=>0,'message'=>'该招牌名已使用']);
            }
            $count = \app\common\model\Mechanism::where(['uid'=>1])->count('id');
            if($count>=\think\facade\Config::get('mechanism_max_count')){
                return json(['status'=>0,'message'=>'您最多可创建10个招牌']);
            }
            $mch = new \app\common\model\Mechanism();
            $mch->save([
                'name'=> $name,
                'uid'   => 1, // uid todo
            ]);
            if(!empty($mch->id)){
                return json(['status'=>1,'id'=>$mch->id]);
            }else{
                return json(['status'=>0]);
            }
        }
        return $this->fetch();
    }

    /**
     * 删除机构
     */
    public function delete()
    {

    }
}