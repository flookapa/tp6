<?php
namespace app\Controller;
use think\facade\Db;
use app\model\User;
use app\model\Profile;

class DataTest
{
	public function index()
	{
		// $user = Db::connect('test')->table('tp_user')->select();
		//$user = Db::table('tp_user')->select();
		// $user = Db::name('user')->select();
		// $user = Db::table('tp_user')->find();
		// $user = Db::table('tp_user')->where('id',8)->find();
		
		// $user = Db::talbe('tp_user')->where('id',20)->findOrFail();
		// $user = Db::table('tp_user')->where('id',15)->findOrEmpty();

		$user = Db::table('tp_user')->select();	
		// return Db::getLastSql();
		return json($user);
	}
	public function demo(){

		//切换数据库
		$profile = Db::connect('demo')->table('tp_profile')->select();
		// $profile = Db::connect('demo')->name('profile')->select();
		return json($profile);
	}
	public function getUser()
	{
		$user = User::select();
		return json($user);
	}

	public function getProfile()
	{
		$profile = Profile::select();
		return json($profile);
	}

	public function insert()
	{
		// $data = [
        //     'username'      =>  '哈哈哈',
        //     'password'      =>  '123123',
        //     'gender'        =>  '男',
        //     'email'         =>  'sdf@153.com',
        //     'price'         =>  120,
        //     'details'       =>  '123',
        //     'status'        =>  -1,
        // ];
        // return Db::name('user')->insert($data);

        // $data = [
        // 	'username'		=>	'aloka',
        // 	'password'		=>	'123123',
        // 	'gender'		=>	'male',
        // 	'def'			=>	'sdf'
        // ];
        // return Db::name('user')->strict(false)->insert($data);

        // $data = [
        //     'username'      =>  '哈哈哈',
        //     'password'      =>  '123123',
        //     'gender'        =>  '男',
        //     'email'         =>  'sdf@153.com',
        //     'price'         =>  120,
        //     'details'       =>  '123',
        //     'status'        =>  -1,
        // ];

        //replace方法
        // Db::name('user')->insert($data);
        // Db::name('user')->replace()->insert($data);
        // return Db::getLastSql();

        //insertGetId()方法
        return Db::name('user')->insertGetId($data);

	}

	public function insertAll()
	{
		$dataAll	=	[
			[
	            'username'      =>  '版本并不',
	            'password'      =>  '123123',
	            'gender'        =>  '男',
	            'email'         =>  'sdf@153.com',
	            'price'         =>  120,
	            'details'       =>  '123',
	            'status'        =>  -1,
        	],
			[
	            'username'      =>  '巍峨反对',
	            'password'      =>  '123123',
	            'gender'        =>  '男',
	            'email'         =>  'sdf@153.com',
	            'price'         =>  120,
	            'details'       =>  '123',
	            'status'        =>  -1,
        	]
		];

		return Db::name('user')->insertAll($dataAll);
	}
	public function save()
	{
		$data = [
			'id'			=>	'41',
            'username'      =>  '哈哈哈',
            'password'      =>  '123123',
            'gender'        =>  '男',
            'email'         =>  'sdf@153.com',
            'price'         =>  120,
            'details'       =>  '123',
            'status'        =>  -1,
        ];
        return Db::name('user')->save($data);

	}
	public function update()
	{
		// $data = [
		// 	'username'	=>	'李强'
		// ];
		// return Db::name('user')->where('id',47)->update($data);

		// $data = [
		// 	'id'		=>	47,
		// 	'username'	=>	'黎明'
		// ];
		// return Db::name('user')->update($data);

		//exp方法：SQL操作函数
		// return Db::name('user')->where('id',48)
		// 					->exp('email','UPPER(email)')
		// 					->update();

		// return Db::name('user')->where('id',47)
		// 						->inc('price')
		// 						->dec('status',2)
		// 						->update();

		//raw方法修改数据
		// return Db::name('user')->where('id',46)
		// 						->update([
		// 							'email'		=>		Db::raw('UPPER(email)'),
		// 							'price'		=>		Db::raw('price +1'),
		// 							'status'	=>		Db::raw('status -2')]);

		//save()方法修改数据
		// return Db::name('user')->where('id',45)->save('username','小明');
		// return Db::name('user')->where('id',45)->save(['username' => '小明']);

		//delete()方法删除数据
		// return Db::name('user')->delete(45);
		// return Db::name('user')->delete([42,43]);
		// return Db::name('user')->where('id',44)->delete();
		return Db::name('user')->delete(true);
	}
}