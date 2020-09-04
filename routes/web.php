<?php

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

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

            Route::post('/post-login','AdminController@login')->name('post.login');
             
            //dang xuat admin
            Route::get('/logout','AdminController@logout');

            //hien thi giao diên admin
            

Route::group(['prefix' => 'admin','middleware' => 'adminlogin'], function () {
    Route::group(['prefix' => 'news'], function () {
            //tin tuc
        Route::get('/add-news','NewsController@add_news')->name('news.add');
        Route::get('/all-news','NewsController@all_news')->name('news.all');
        //them tin tucc
        Route::post('/save-news','NewsController@save_news')->name('news.save');
        //danh sach tin tuc
        Route::get('/news/all-news', 'NewsController@all_news')->name('news.all');
        //xoa tin tuc
        Route::DELETE('/delete/{id}', 'NewsController@destroy')->name('news.delete');
        //sua tin tuc
        Route::get('/edit/{id}', 'NewsController@edit')->name('news.edit');
        //update tin tuc
        Route::PATCH('/all-news-update/{id}', 'NewsController@update')
            ->name('news_update');
    });

    Route::group(['prefix' => 'categorytour'], function () {
        //tour
        Route::get('/add-tour','CategoryTourController@add_tour')->name('tour.add');
        Route::get('/all-tour','CategoryTourController@all_tour')->name('tour.all');
        //them tour
        Route::post('/save-category-tour','CategoryTourController@save_category_tour')->name('tour.save');
        //danh sach tour
        Route::get('/all-tour', 'CategoryTourController@all_tour')->name('tour.all');
        //sua tour
        // /admin/tour/edit/{id}: đường dẫn trang cập nhật có chứa id.
        Route::get('/tour/edit/{id}', 'CategoryTourController@edit')->name('tour.edit');
        //cap nhat tour
        Route::PATCH('/all-tour-update/{id}', 'CategoryTourController@update')->name('tour_update');
        //xoa tour
        Route::DELETE('/tour/delete/{id}', 'CategoryTourController@destroy')->name('tour.delete');
    });

    Route::group(['prefix' => 'users'], function () {
        //nguoi dung
        Route::get('/add-users','UsersController@add_users')->name('users.add');
        Route::get('/all-users','UsersController@all_users')->name('users.all');
        //thêm người dùng
        Route::post('/save-users','UsersController@save_users')->name('users.save');

        //danh sach nguoi dung
        Route::get('/all-users','UsersController@all_users')->name('users.all');
        //xoa nguoi dung
        Route::DELETE('/delete/{id}', 'UsersController@destroy')->name('users.delete');
        //sua nguoi dung
        Route::get('/edit/{id}', 'UsersController@edit')->name('users.edit');
        //update nguoi dung
        Route::PATCH('/all-users-update/{id}', 'UsersController@update')->name('users_update');
        Route::get('/passwordedit/{id}', 'UsersController@passwordedit')->name('password.edit');
        Route::PATCH('/all-password-update/{id}', 'UsersController@updatepassword')->name('password_update');
    });


    //hien thi danh sach ordertour
    Route::get('/quanlydattour', 'OrderToursController@quanlydattour')->name('quanlydattour');
    //sua dat tour
    Route::get('/quanlydattour/edit/{id}', 'OrderToursController@edit')->name('quanlydattour.edit');
    //update dat tour
    Route::PATCH('/quanlydattour-update/{id}', 'OrderToursController@update')->name('quanlydattour_update');



//hien thi danh sach lien he
    Route::get('/quanlyphanhoi', 'ContactController@quanlyphanhoi')->name('quanlyphanhoi');
    //sua lien he
    Route::get('/edit/{id}', 'ContactController@edit')->name('quanlyphanhoi.edit');
    //update lien he
    Route::PATCH('/quanlyphanhoi-update/{id}', 'ContactController@update')->name('quanlyphanhoi_update');



    Route::get('/admin','AdminController@index')->name('getLogin');
     //hien thi admin dashboard
   Route::get('/dashboard','AdminController@show_dashboard')->name('dashboard');



           
});



         
//danh sách tour nước ngoài
Route::get('/alltournuocngoai', 'HomeController@alltournuocngoai')->name('alltournuocngoai');            
//danh sách tour trong nước
 Route::get('/alltourtrongnuoc', 'HomeController@alltourtrongnuoc')->name('alltourtrongnuoc');

Route::get('/', 'HomeController@index')->name('home');
//dang ky nguoi dung
Route::post('/save-users','UsersController@save_users');
//hien thi trang tourchongoi
Route::get('/tourchongoi','HomeController@show_tour')->name('tourchongoi'); //gọi để in ra tour noi bật
//hien thi trang tin tuc
Route::get('/diemdulich','HomeController@news')->name('diemdulich');
//hien thi chi tiet news
Route::get('/chitietnews/{id}', 'HomeController@chitietnews')->name('chitietnews');
//hien thi chi tiet tour
Route::get('/chitiettour/{id}', 'HomeController@chitiet')->name('chitiettour');
//them ordertour
Route::post('/save-order-tours','OrderToursController@save_order_tours')->name('orderTour');
//them lien he
Route::post('/save-contact','ContactController@save_contact')->name('conTact');
//hien thi tim kiem
Route::get('/timkiem','CategoryTourController@timkiem')->name('timkiem');


Route::get('quenmatkhau','ForgotPasswordController@getFormResetPassword')->name('quenmatkhau');

Route::post('SendCodeResetPassword','ForgotPasswordController@SendCodeResetPassword')->name('post.send');

Route::get('resetpassword','ForgotPasswordController@resetPassword')->name('resetpassword');

Route::post('resetpassword','ForgotPasswordController@saveResetPassword');

//hien thi trang index gioi thieu
Route::get('/',function (){
    return view('index');
            })->name('index');

Route::get('/hotrothanhtoan',function (){
    return view('hotrothanhtoan');
            })->name('hotrothanhtoan');

Route::get('/lienhe',function (){
    return view('lienhe');
			})->name('lienhe');

Route::get('/admin_login',function (){
    return view('admin_login');
			})->name('admin_login');

Route::get('/dangky',function (){
    return view('dangky');
			})->name('dangky');


Route::get('/reset',function (){
    return view('reset');
            })->name('reset');


Route::get('/thongbaodattour',function (){
    return view('thongbaodattour');
            })->name('thongbaodattour');




























//count users

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
