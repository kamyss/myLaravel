<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\sendReminderEmail;
use App\Http\Model\Users;
class queueController extends Controller
{
    //对队列和任务进行测试哦
    public function Index(){
        $users=new Users();
        
        //推送任务到队列
        $rs=$this->dispatch(new sendReminderEmail($users));
        dd($rs);
    }
    //对任务和队列进行高级测试
    public function advanceTest(){
        echo 'advanceTest';
    }
}
