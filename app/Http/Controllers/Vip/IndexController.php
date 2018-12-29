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
}
