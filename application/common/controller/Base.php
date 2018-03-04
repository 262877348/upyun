<?php
namespace app\common\controller;
use think\Controller;
use think\Url;

class Base extends Controller
{
    public function _initialize() {
		parent::_initialize();
		$var_pathinfo = config("var_pathinfo");
		Url::root("/index.php?{$var_pathinfo}=");
	}
}
