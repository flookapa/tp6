<?php
namespace app\controller;

use app\BaseController;
use think\facade\Db;
use think\facade\Env;
use think\facade\Config;
class Index extends BaseController
{
    public function index()
    {
        // $user = Db::name('user')->select();
        // $user = Db::table('tp_user')->select();
        //$user = Db::table('tp_user')->select()->toArray();

        // $user = Db::name('user')->where('id',111)->selectOrFail();
        // $username = Db::name('user')->where('id',4)->value('username');

        // $user = Db::name('user')->column('username');
        // $user = Db::name('user')->column('username','id');
        
        //分批查询
        // Db::name('user')->chunk(3,function($users){
        //     foreach($users as $user){
        //         //dump($user);
        //         echo Db::getLastSql()."<br/>";
        //     }
        // },'id');

        //游标查询
        // $cursor = Db::name('user')->cursor();
        // foreach( $cursor as $user)
        // {
        //     dump($user);
        // }

        // $user = Db::name('user');
        // $user = Db::name('user')->where('id',7)->order('id','desc');
        // $user = Db::name('user')->where('id',7)->order('id','desc')->find();
        // $user = Db::name('user')->where('id',7)->order('id','desc')->select();
        // $user = Db::name('user')->where('id',7)->find();


        // echo "单条数据查询";
        // dump($user);
        // $user = Db::name('user')->order('id','desc')->select();
        // echo "多条数据查询";
        // dump($user);


        // $userQuery = Db::name('user');
        // $userSelect = $userQuery->order('id','desc')->select();
        // echo "多条数据查询";
        // dump($userQuery);
        // $userFind = $userQuery->where('id',7)->find();
        // echo "单条数据查询";
        // dump($userFind);

        // $user = Db::name('user')->order('id','desc')->select();
        // echo "标准查询：";
        // dump($user);
        // $userQuery = Db::name('user');
        // $userSelect = $userQuery->order('id','desc')->select();
        // echo "查询对象单次实例化";
        // dump($userSelect);

        // $userQuery = Db::name('user');
        // $userFind = $userQuery->where('id',7)->find();
        // $userSelect = $userQuery->order('id','desc')->select();
        // return Db::getLastSql();

        // $userQuery = Db::name('user');
        // $userFind = $userQuery->where('id',7)->find();
        // dump($userFind);
        // $userSelect = $userQuery->removeOption('where')->order('id','desc')->select();
        // dump($userSelect);

        $data = [
            'username'      =>  '哈哈哈',
            'password'      =>  '123123',
            'gender'        =>  '男',
            'email'         =>  'sdf@153.com',
            'price'         =>  120,
            'details'       =>  '123',
            'status'        =>  -1,
        ];
        Db::name('user')->insert($data);
        // dump($user);
        // return Db::getLastSql();
        // return json($user);

        $student = [
            "name"  => "jack",
            "age"   => "18",
            "major" => "IT"
        ];
        dum($student);
        
    }

    public function config()
    {
        // echo Env::get('database.hostname');
        // echo Config::get('database.connections.mysql.hostname');
        // echo Env::has('database.hostname');
        // echo Config::has('database.connections.mysql.hostname');

        // return 123;
    }    

    public function insert_data()
    {
        
       $data = [
        [
            'id'        => '1',
            'username'      =>   '蜡笔小新',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  '23f@163.com',
            'price'     =>  '70',
            'details'     =>  '123',
            'uid'     =>  '1001',
            'status'     =>  '-1',
            'create_time'     =>  '2016-10-27 16:45:00',
            'update_time'     =>  '1997-01-01 01:01:01'
                        
        ],
        [
            'id'        => '2',
            'username'      =>   '疯狂诗坛',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  'xiaoda@163.com',
            'price'     =>  '60',
            'details'     =>  '123',
            'uid'     =>  '1002',
            'status'     =>  '-2',
            'create_time'     =>  '2016-10-27 16:55:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '3',
            'username'      =>   '樱桃小丸子',
            'password'       =>  '123456',
            'gender'    =>  '女',
            'email'     =>  'panada@163.com',
            'price'     =>  '90',
            'details'     =>  '123',
            'uid'     =>  '1003',
            'status'     =>  '0',
            'create_time'     =>  '2016-10-27 18:55:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '4',
            'username'      =>   '喵喵下科技',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  'miaomiao@163.com',
            'price'     =>  '100',
            'details'     =>  '123',
            'uid'     =>  '1004',
            'status'     =>  '-2',
            'create_time'     =>  '2017-1-2 16:55:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '5',
            'username'      =>   '恐龙康朗',
            'password'       =>  '123456',
            'gender'    =>  '女',
            'email'     =>  'konglongkang@163.com',
            'price'     =>  '50',
            'details'     =>  '123',
            'uid'     =>  '1005',
            'status'     =>  '-1',
            'create_time'     =>  '2017-5-21 13:35:12',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '6',
            'username'      =>   '走着看',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  'zouzhekan23@163.com',
            'price'     =>  '85',
            'details'     =>  '123',
            'uid'     =>  '1007',
            'status'     =>  '-2',
            'create_time'     =>  '2017-11-18 12:18:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '7',
            'username'      =>   '李冰冰',
            'password'       =>  '123456',
            'gender'    =>  '女',
            'email'     =>  'libing@163.com',
            'price'     =>  '120',
            'details'     =>  '123',
            'uid'     =>  '1008',
            'status'     =>  '0',
            'create_time'     =>  '2018-02-09 03:15:15',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '8',
            'username'      =>   '马云',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  'mama54@163.com',
            'price'     =>  '80',
            'details'     =>  '123',
            'uid'     =>  '1009',
            'status'     =>  '-2',
            'create_time'     =>  '2018-11-11 12:00:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ],
        [
            'id'        => '9',
            'username'      =>   '奔跑吧',
            'password'       =>  '123456',
            'gender'    =>  '男',
            'email'     =>  'benpaoba@163.com',
            'price'     =>  '90',
            'details'     =>  '123',
            'uid'     =>  '1010',
            'status'     =>  '-2',
            'create_time'     =>  '2019-01-12 13:35:10',
            'update_time'     =>  '1997-01-01 01:01:01'
        ]];

        Db::name('user')->insertAll($data);
        return "ok";
    }
} 