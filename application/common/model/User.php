<?php
/**
 * 用户
 * User: Administrator
 * Date: 2018/2/10
 * Time: 15:29
 */
namespace app\common\model;

use think\Model;

class User extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'createdTime';
    protected $updateTime = '';
}