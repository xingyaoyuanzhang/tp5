<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use app\common\controller\Index as commonIndex;
class Index extends \think\Controller
{
    public function index()
    {
        $common = new commonIndex();
//        return $common->index();
        dump(config());
    }
    public function hello()
    {
    	// echo '1111';die();
        // $data = Db::name('data')->find();
        // dump($data);
        // $this->assign('result', $data);
        return $this->fetch('hello');
    }
    public function test($name = 'world', $city = 'shanghai')
    {
        return '   Hello    '.$name.'    come from    '.$city;
    }
}
