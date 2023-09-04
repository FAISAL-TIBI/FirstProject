<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// استخدام الجيت فقط في جلب الصفحات
Route::get('Fisal', function () {
   return 'fisal Tibi';
});

// اسم الرابط يقبل متغير ولا يقبل فراغ
Route::get('user' , function(){
  return 'User';
});

// {var} : متغير يستخدم داخل الفانكشن
Route::get('get/{var}' , function($var){
return 'number is : ' . $var ;
});

// استخدام المتغير اختياري 
Route::get('get/{name?}' , function($name = null){ // معناه إذا بدي استخدم المتغير هيو موجود وإذا بديش عادي بطلعش خطأ
return 'Your name is ' . $name;
});

// فوق عشان نفس الاسم هيعمل اعادة استخدام وهينفذ الاول مش التاني لانو الاول اجباري اما التاني اختياري

Route::get('news/{new}' , function ($new = null) {
 if($new != null){
   return "Today news number is " . $new ;
 }
 return 'all news ..';
});


Route::put('put' , function(){});
Route::delete('delete' , function(){});


?>






















