<?php
/**
 * 反馈
 * 暂不支持删除功能
 * User: Administrator
 * Date: 2018/3/3
 * Time: 19:30
 */

namespace app\index\controller;



use think\Controller;
use think\facade\Request;

class Feedback extends Controller
{
    /**
     * 机构收集反馈的页面
     */
    public function collect()
    {
        $id = Request::route('id',0);
        if(empty($id)){
            $this->error('招牌不存在');
        }
        $info = \app\common\model\Mechanism::get(['id'=>$id]);
        if(empty($info)){
            $this->error('招牌不存在');
        }
        return $this->fetch('',[
            'info'=> $info,
        ]);
    }

    /**
     * 添加反馈
     */
    public function add()
    {
        $id = Request::route('id',0);
        if(empty($id)){
            $this->error('招牌不存在');
        }
        $info = \app\common\model\Mechanism::get(['id'=>$id]);
        if(empty($info)){
            $this->error('招牌不存在');
        }

        return $this->fetch('',[
            'info'      => $info,
        ]);
    }

    /**
     * 一条反馈的详情页
     */
    public function detail()
    {

    }

    /**
     * 评论列表的ajax数据源
     */
    public function comment()
    {

    }

    /**
     * 发表评论
     */
    public function commentAdd()
    {

    }

    /**
     * 打赏确认页
     */
    public function reward()
    {

    }

    /**
     * 发起打赏页
     */
    public function rewardAdd()
    {

    }
}