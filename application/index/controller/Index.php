<?php
namespace app\index\controller;
use app\common\controller\Base;

class Index extends Base
{
	public function _initialize() {
		parent::_initialize();
	}

    public function index()
    {
        return $this->fetch();
    }

    public function pay()
    {
        return $this->fetch();
    }
}
