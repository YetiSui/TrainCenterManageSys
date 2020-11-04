<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('test','TestController@test');



Route::prefix('supadmin')->namespace('SupAdmin')->group(function () {
    /**
    *陈淼
    */
    Route::get('labbordisplay', 'FormDetailsController@labBorDisplay'); //实验室借用申请表页面展示
    Route::post('labbordispalyinfo', 'FormDetailsController@labBorDispalyInfo'); //实验室借用申请表页面查看
    Route::post('labborselect', 'FormDetailsController@labBorSelect'); //实验室借用申请表页面搜索
    Route::get('labopendisplay', 'FormDetailsController@labOpenDisplay'); //开放实验室使用申请表页面展示
    Route::post('labopendisplayinfo', 'FormDetailsController@labOpenDisplayInfo'); //开放实验室使用申请表页面查看
    Route::post('labopenselect', 'FormDetailsController@labOpenSelect'); //开放实验室使用申请表页面搜索
    Route::get('labequipdisplay', 'FormDetailsController@labEquipDisplay'); //实验室仪器借用申请表页面展示
    Route::post('labequipdisplayinfo', 'FormDetailsController@labEquipDisplayInfo'); //实验室仪器借用申请表页面查看
    Route::post('labequipselect', 'FormDetailsController@labEquipSelect'); //实验室仪器借用申请表页面搜索
    Route::get('tearecorddisplay', 'FormDetailsController@TeaRecordDisplay'); //期末教学记录检查表页面展示
    Route::post('tearecorddispalyinfo', 'FormDetailsController@TeaRecordDisplayInfo'); //期末教学记录检查表页面查看
    Route::post('tearecordselect', 'FormDetailsController@TeaRecordSelect'); //期末教学记录检查表页面搜索

  /**
  *唐邦彦
  */
    Route::get('showdepartment','ClassController@showdepartment');//系部管理页面展示
    Route::get('reshowdepartment','ClassController@reshowdepartment');//回显当前数据的系部
    Route::post('deletedepartment','ClassController@deletedepartment');//删除系部
    Route::post('adddepartment','ClassController@adddepartment');//增加系部
    Route::post('modifydepartment','ClassController@modifydepartment');//修改系部
    Route::get('finddepartment','ClassController@finddepartment');//查询系部
    Route::get('showclass','ClassController@showclass');//班级管理页面展示
    Route::get('reshowclass','ClassController@reshowclass');//回显当前数据的班级和系部
    Route::post('deleteclass','ClassController@deleteclass');//删除班级
    Route::post('addclass','ClassController@addclass');//增加班级
    Route::post('modifyclass','ClassController@modifyclass');//修改班级
    Route::get('findclass','ClassController@findclass');//查询班级

  /**
  *张巾巾
  */
    Route::post('adddevice', 'EquipmentController@addDevice'); //新增设备
    Route::get('searchnew', 'EquipmentController@searchNew'); //查询设备
    Route::get('goback', 'EquipmentController@goBack'); //回显
    Route::post('exitnew', 'EquipmentController@exitNew'); //修改设备信息
    Route::post('rmnew', 'EquipmentController@rmNew'); //删除设备信息
    Route::get('shownew', 'EquipmentController@showNew'); //设备管理页面展示
});


