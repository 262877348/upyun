<?php
namespace app\index\controller;
use think\Controller;

class Monitor extends Controller
{
    public function index()
    {
        return $this->fetch();
    }
}
