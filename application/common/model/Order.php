<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/2/10
 * Time: 15:35
 */
namespace app\common\model;

use think\Model;

class Order extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'createdTime';
    protected $updateTime = '';
}