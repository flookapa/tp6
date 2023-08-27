<?php
namespace app\controller;
use app\BaseController;

class Test extends BaseController
{
	public function index()
	{
		//返回实际路径
		return "当前实际路径：" . $this->app->getBasePath() ."<br/>当前方法名：".$this->request->action();

	}
	public function hello($value = '')
	{
		return "hello " . $value;

	}
	public function arrayOutput()
	{
		$data = [
			'a'	=> 1,
			'b'	=> 2,
			'c'	=> 3
		];
		halt("中断输出。");

		return json($data);
	}
}
