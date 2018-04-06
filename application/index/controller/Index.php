<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
class Index extends \think\Controller
{
    public function index()
    {
        return 'Hello world!';
    }
    public function hello()
    {
    	// echo '1111';die();
        $data = Db::name('data')->find();
        // dump($data);
        $this->assign('result', $data);
        return $this->fetch('index');
    }
}
