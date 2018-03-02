<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostUpdateRequest;
use App\Console\Commands\PushMessage;
use Illuminate\Support\Facades\Validator;
use Queue;



class usersController extends Controller
{
   
   public function index(){
   
   }
   public function userShow1(){
    Queue::later(60, new PushMessage());// 推进队列
   // return view('welcome');
}
public function userShow2(){
    echo 'show2';
}
public function userShow3(){
    echo 'show3';
}

/**
 * 测试laravel的验证机制
 */
public function verifyTest(Request $request){
  //  var_dump($requst);
   // die;
/*$info=$this->validate($requst, [
        'username' => 'required|max:50',
        'password' => 'required',
    ]);*/
  /*  $validator = Validator::make($request->all(), [
        'username' => 'required|max:50',
        'password' => 'required',
    ]);*/

   /* if ($validator->fails()) {

        return $validator->errors()->all();
        return redirect('post/create')
                    ->withErrors($validator)
                    ->withInput();
    }*/
    $messages = [
        'username.required' => '请填写账户',
        'password.required'=>'请填写密码',
        'username.max'=>'最多填写10字符',
        'username.min'=>'最少填写3个字符'
    ];
    $rules=[
        //
        'username'=>'required',
        'username'=>'max:10|min:3',
        'password'=>'required'
    ];
    $validator = Validator::make($_POST, $rules, $messages);
    $info=array();
    $info=$validator->errors()->all();
    if(!empty($info)){
        echo $info[0];
    }
  

}
public function create(){
    echo '123456';
}



}
