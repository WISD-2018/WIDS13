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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD

Route::get('/aa/a1', function () {
    return view('aa.a1');
});
=======
Route::get('/bb/b1',function(){
  return view('bb.b1');
})

Route::get('/bb/b2',function(){
  return view('bb.b2');
})
<<<<<<< HEAD

Route::get('/bb/b3',function(){
  return view('bb.b3');
})

Route::get('/bb/b4',function(){
  return view('bb.b4');
})
=======
>>>>>>> 35cb63a72ebbb57b62bdff94a88bd93d08d12826
>>>>>>> d7a24023294a1efcda04c71abad1908a6f84ef42
