<?php
namespace app\index\controller;
use think\Controller;

class Account extends Controller
{
    public function index()
    {
        return $this->fetch();
    }

    public function info()
    {
        return $this->fetch();
    }

    public function users()
    {
        return $this->fetch();
    }

    public function share()
    {
        return $this->fetch();
    }

    public function card()
    {
        return $this->fetch();
    }
}
