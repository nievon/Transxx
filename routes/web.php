<?php
<<<<<<< HEAD

=======
>>>>>>> 6533f795cc7ff97ddd4089318e0b0f5cdd0ddb89
use App\Http\Controllers\product;
use App\Http\Controllers\adminpanel;
use Illuminate\Support\Facades\Route;
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
<<<<<<< HEAD

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

=======
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
>>>>>>> 6533f795cc7ff97ddd4089318e0b0f5cdd0ddb89
Route::get('/where', function () {
    return view('where');
});
//Ссылки админ панели
<<<<<<< HEAD
Route::get('/admin',[adminpanel::class,'admin'])->name('admin')->middleware('administartor');//Админ панель
Route::get('/admin/product',[adminpanel::class,'prod'])->middleware('administartor');//Форма создания товара
Route::post('/admin/product/create',[adminpanel::class,'prodcreate'])->name('createprod'); // Отправка данных в базу данных
Route::get('/admin/product/delete/{id}',[adminpanel::class,'proddel'])->middleware('administartor');//Удаление продукта из базы данных
Route::get('/admin/category',function (){
    return view('createcat');
})->middleware('administartor');//Форма создания категорий
Route::post('/admin/category/create',[adminpanel::class,'catcreate'])->name('createcat');
Route::get('/admin/category/delete/{id}',[adminpanel::class,'catdel'])->middleware('administartor');//Удаление категории из базы данных
=======
Route::get('/admin',[adminpanel::class,'admin'])->name('admin');//Админ панель
Route::get('/admin/product',[adminpanel::class,'prod']);//Форма создания товара
Route::post('/admin/product/create',[adminpanel::class,'prodcreate'])->name('createprod'); // Отправка данных в базу данных
Route::get('/admin/product/delete/{id}',[adminpanel::class,'proddel']);//Удаление продукта из базы данных
Route::get('/admin/category',function (){
    return view('createcat');
});//Форма создания категорий
Route::post('/admin/category/create',[adminpanel::class,'catcreate'])->name('createcat');
Route::get('/admin/category/delete/{id}',[adminpanel::class,'catdel']);//Удаление категории из базы данных
>>>>>>> 6533f795cc7ff97ddd4089318e0b0f5cdd0ddb89
//Конец ссылок админ панели
Route::get('/catalog/product/{id}',[App\Http\Controllers\oneproduct::class, 'onelist']);
Route::get('/catalog',[product::class,'prodlist']);
Route::get('/catalog/filter/{id}', [product::class, 'filterr']);
Route::get('/catalog/sort/{name}/{sort}', [product::class, 'prodlist']);
Route::get('/about', [App\Http\Controllers\about::class, 'slider']);
<<<<<<< HEAD
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
=======
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
>>>>>>> 6533f795cc7ff97ddd4089318e0b0f5cdd0ddb89
