<?php
/**
 * Created by PhpStorm.
 * User: zs
 * Date: 2018/11/21
 * Time: 22:29
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}