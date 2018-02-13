<?php
/**
 * Created by PhpStorm.
 * User: tu6ge
 * Date: 2018/2/13
 * Time: 14:13
 */

namespace app\index\model;

class BaseModel
{
    final public static function init()
    {
        return new static();
    }
}