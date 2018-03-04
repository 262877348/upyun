<?php
namespace app\common\behavior;
use think\Config as ThinkConfig;

class Config 
{
    public function run(&$params)
    {
        defined('MODULE_NAME') or define('MODULE_NAME', empty($params['module'][0]) ? ThinkConfig::get('default_module') : $params['module'][0]);

    	$config =[];
        //头信息
        $header_info = request()->header();

        $module_public_url = '/public/'.strtolower(MODULE_NAME).'/';

        $config['view_replace_str'] = [
                '__ROOT__'        => '/',
                '__BASE__'        => BASE_PATH.'/public/base',
                '__PUBLIC__'      => BASE_PATH.'/public',
                '__STATIC__'      => BASE_PATH.'/public/static',
                '__LIBS__'        => BASE_PATH.'/public/static/libs',
                '__MODULE_IMG__'  => $module_public_url.'images',
                '__MODULE_CSS__'  => $module_public_url.'css',
                '__MODULE_JS__'   => $module_public_url.'js',
                '__MODULE_LIBS__' => $module_public_url.'libs'
        ];

        ThinkConfig::set($config);
    }
}