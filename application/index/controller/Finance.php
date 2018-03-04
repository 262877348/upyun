<?php
namespace app\index\controller;
use think\Controller;

class Finance extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function payLog()
    {
        return $this->fetch();
    }

    public function bill()
    {
        return $this->fetch();
    }

    public function coupon()
    {
        return $this->fetch();
    }

    public function invoice()
    {
        return $this->fetch();
    }
}
