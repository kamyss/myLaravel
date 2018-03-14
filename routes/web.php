<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Index', function () {
    return '123';
});
/*Route::get('user/profile',[
    'as'=>'profile',//redirect制定的时候用
    'uses'=>'UsersController@index'
]);*/
/**
*laravel的
*/
Route::group(['prefix'=>'user'],function(){
    $controller='UsersController@';
    Route::get('userShow1',['as'=>'userShow1','uses'=>$controller.'userShow1']);
    Route::get('userShow2',['as'=>'userShow2','uses'=>$controller.'userShow2']);
    Route::get('userShow3',['as'=>'userShow3','uses'=>$controller.'userShow3']);
    Route::post('verifyTest',['as'=>'verifyTest','uses'=>$controller.'verifyTest']);
});
Route::group(['prefix'=>'queue'],function(){
    $controller='queueController@';
    Route::get('index',['as'=>'index','uses'=>$controller.'index']);
    Route::get('advanceTest',['as'=>'advanceTest','uses'=>$controller.'advanceTest']);
});




