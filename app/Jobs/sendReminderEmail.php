<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use App\Http\Model\Users;
//use App\Http\Facades\Test;
use Illuminate\Support\Facades\DB;

class sendReminderEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $users;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Users $users)
    {
        
        $this->users=$users;
      
       
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
     /* $users=$this->users;
       $users->name='zjh';
       $users->email='11057309472332@qq.com'.rand(1000,9999);
       $users->password='123456';
       $users->save();*/
       DB::table('command')->insert(['content'=>'测试任务']);
      
    }
}
