<?php

namespace App\Http\Controllers\Vip;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\User\UserModel;

class IndexController extends Controller
{
    //
    public function index($id){
        $user=UserModel::where(['id'=>$id])->first()->toArray();
        echo '<pre>';print_r($user);
    }
    public function add(){
        $data=[

            'add_price'=>1300,

        ];
        $res=UserModel::insert($data);
        dump($res);
    }
    public function update($id){
        $where=[
            'cart_id'=>$id,

        ];
        $data=[
            'add_price'=>3000
        ];
        $res=UserModel::where($where)->update($data);
        dump($res);
    }
    public function delete($id){
        $where=[
            'cart_id'=>$id,

        ];

        $res=UserModel::where($where)->delete();
        dump($res);
    }
    public function show(){
        $list=UserModel::all()->toArray();
        $data=[
            'list'=>$list,
            'page'=>666
        ];
        return view('user.userindex',$data);
    }

}
