<?php
/**
 * 机构
 * User: Administrator
 * Date: 2018/2/10
 * Time: 15:34
 */
namespace app\common\model;

use think\Model;

class Mechanism extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'createdTime';
    protected $updateTime = '';
}