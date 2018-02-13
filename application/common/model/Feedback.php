<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/10
 * Time: 15:33
 */
namespace app\common\model;

use think\Model;

class Feedback extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'createdTime';
    protected $updateTime = '';
}