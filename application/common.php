<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


/**
 * 打印
 * @param array $array 数组
 * @param int $is_exit 默认不终止
 */
function dd($array = [], $is_exit = 0)
{
    if (is_array($array) || is_object($array)) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
    } else {
        echo $array . "\n";
    }

    if ($is_exit) {
        exit;
    }
}