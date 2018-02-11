<?php
/**
 * 评价
 * User: Administrator
 * Date: 2018/2/10
 * Time: 15:32
 */

namespace app\common;

use think\Model;

class Comment extends Model
{
    protected $autoWriteTimestamp = 'datetime';
    protected $createTime = 'createdTime';
    protected $updateTime = '';
}