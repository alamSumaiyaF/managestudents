<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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


Route::view('/CreateStudentInfo','CreateStudentInfo');
Route::post('/CreateStudent',[StudentController::class,'saveStudent']);
Route::get('/StudentInfo',[StudentController::class,'getInfo']);
Route::get('/DeleteInfo/{id}',[StudentController::class,'deleteInfo']);
Route::get('/UpdateInfo/{id}',[StudentController::class,'updateInfo']);
Route::post('/UpdateInfo',[StudentController::class,'editInfo']);

Route::view('/InputStudentMark','InputStudentMark');
Route::post('/InputStudent',[StudentController::class,'saveMark']);
Route::get('/Mark',[StudentController::class,'getMark']);
Route::get('/DeleteMark/{id}',[StudentController::class,'deleteMark']);
Route::get('/UpdateMark/{id}',[StudentController::class,'updateMark']);
Route::post('/UpdateMar',[StudentController::class,'editMark']);

Route::get('/MarkSheet',[StudentController::class,'markRelation']);

Route::post('/SearchMarkInfo',[StudentController::class,'searchMark']);

Route::get('/TotalMark',[StudentController::class,'total']);

Route::get('/TotalDatabase',[StudentController::class,'table']);

Route::view('/InputTotal','InputTotal');
Route::post('/InputTotal',[StudentController::class,'saveTotal']);
Route::get('/Total',[StudentController::class,'getTotal']);
Route::get('/DeleteTotal/{id}',[StudentController::class,'deleteTotal']);
Route::get('/UpdateTotal/{id}',[StudentController::class,'updateTotal']);
Route::post('/UpdateTotal',[StudentController::class,'editTotal']);

Route::get('/FinalResult',[StudentController::class,'join']);

//Route::post('/SearchJoin',[StudentController::class,'searchJoin']);


