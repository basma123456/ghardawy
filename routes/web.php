<?php

use App\Models\Place;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

//Route::get('/login', 'HomeController@index')->middleware('guest')->name('login.show');
Route::get('/login/seller', 'Auth\LoginController@showSellerLoginForm')->middleware('guest:seller');
Route::post('/login/seller', 'Auth\LoginController@sellerLogin')->middleware('guest:seller');

Route::get('/register/seller', 'Auth\RegisterController@showSellerRegisterationForm')->middleware('guest:seller');
Route::post('/register/seller', 'Auth\RegisterController@createSeller')->middleware('guest:seller');
/***********************************/
Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->middleware('guest');
Route::post('/login/admin', 'Auth\LoginController@adminLogin')->middleware('guest');
/****************************/
Route::get('/login/super-admin', 'Auth\LoginController@showSuperAdminLoginForm')->middleware('guest');
Route::post('/login/super-admin', 'Auth\LoginController@superAdminLogin')->middleware('guest');
/**************************/
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout' , 'HomeController@logout')->name('logout');


Route::get('/empty' , function (){
    return view('front.index');
    $place = Place::latest()->first();
    dd($place ->likes_cats(28));
    return view('index_empty');
});




Auth::routes();

Route::get('/perms' , function (){
    return view('admin.permessions');
});

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){ //...
    Route::get('search/seller' , 'Admin\PlaceController@search')->name('search.seller');
    Route::get('search/places' , 'Admin\AdditionalController@search')->name('search.places');

    Route::get('search/region/branch' , 'Admin\PlaceRegionController@search')->name('search.region.branch');

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/', 'Front\MainController@index');

    Route::resource('main' , 'Front\MainController');
    Route::get('place_page/{id}' , 'Front\PlaceController@index')->name('my_page');

    Route::get('news' , 'Front\NewsController@index')->name('news.front');
    Route::get('places/{catId}' , 'Front\MainController@getPlacesByCatId');
//    Route::get('places/{catId}/{region_id}' , 'Front\MainController@getPlacesByCatIdRegionId');
    Route::get('places' , 'Front\MainController@getPlacesByCatIdRegionId')->name('get.cat.region');
    Route::post('comment/{id}' , 'Front\PlaceController@makeComment')->name('comment.submit')->middleware('auth');
    Route::resource('apply' , 'Front\ApplyPlaceController');
    Route::resource('about' , 'Front\AboutController');





    ################################Admin start###################################
        Route::group(['prefix'=> 'admin' , 'middleware' => 'auth:admin'] , function (){

            Route::resource('/roles' , 'Admin\RoleController');
            Route::resource('/sellers' , 'Admin\SellerController');
            Route::get('/unseen', 'Admin\SellerController@unseenSellers');
            Route::get('/un_active', 'Admin\SellerController@unActiveSellers');
            Route::get('/active', 'Admin\SellerController@ActiveSellers');

            Route::get('/dashboard', function () {
                return view('dashboard');
            });

            Route::get('/main', function () {
                return view('admin.main');
            })->middleware('auth:seller');

        });
    ####################################Admin end###############################









    ################################super-admin start###################################
    Route::group(['prefix'=> 'super-admin' ,'middleware' => 'auth:super-admin'] , function (){

        Route::resource('/roles' , 'Admin\RoleController');
        Route::resource('/main' , 'Admin\MainPageController');
        Route::resource('/sellers' , 'Admin\SellerController');
        Route::get('/unseen', 'Admin\SellerController@unseenSellers');
        Route::get('/un_active/sellers', 'Admin\SellerController@unActiveSellers');
        Route::get('/active/sellers', 'Admin\SellerController@ActiveSellers');
        Route::get('/dashboard', function () {
            return view('dashboard');
        });
        Route::resource('category' , 'Admin\CategoryController');
        Route::resource('places' , 'Admin\PlaceController');
        Route::resource('about_page' , 'Admin\AboutController');

        //here
        /**********************apply_place_part**************************/
        Route::resource('apply_place' , 'Admin\ApplyPlaceController');
        Route::get('unseen_applications', 'Admin\ApplyPlaceController@unseenApplications');
        Route::get('seen_applications', 'Admin\ApplyPlaceController@seenApplications');
        Route::get('called_applications', 'Admin\ApplyPlaceController@calledApplications');
        Route::get('postponed_applications', 'Admin\ApplyPlaceController@postponedApplications');
        Route::get('accepted_applications', 'Admin\ApplyPlaceController@acceptedApplications');
        Route::get('rejected_applications', 'Admin\ApplyPlaceController@rejectedApplications');
        Route::get('no_action_yet_applications', 'Admin\ApplyPlaceController@noActionYetApplications');

        /**********************end apply_place_part**************************/



        Route::resource('/regions' , 'Admin\RegionController');
        Route::resource('additions' , 'Admin\AdditionalController');
        Route::resource('news' , 'Admin\NewsController');
        Route::resource('newscats' , 'Admin\NewsCatsController');



        Route::get('/branch/{place}' , 'Admin\PlaceRegionController@index')->name('places.add.regions');
        Route::post('/branch/store' , 'Admin\PlaceRegionController@store')->name('places.add.regions.store');
        Route::get('/branch/{place}/{placeRegion}' , 'Admin\PlaceRegionController@editBranch')->name('branches.edit');
        Route::post('/branch/{place}/{placeRegion}' , 'Admin\PlaceRegionController@updateBranch')->name('branches.update');

        Route::get('/branches/all/{place}' , 'Admin\PlaceRegionController@showAll')->name('branches.show');
        Route::get('/branch/delete/{id}' , 'Admin\PlaceRegionController@destroy')->name('branch.destroy');



//        Route::get('/branch/{place}' , 'Admin\PlaceRegionController@index')->name('places.add.regions');


    });
    ####################################super-admin end###############################









    ################################seller start###################################
    Route::group(['prefix'=> 'seller' , 'middleware' => 'auth:seller'] , function (){

        Route::get('/main', function () {
            return view('admin.main');
        })->middleware('auth:seller');

    });
    ####################################seller end###############################





    ################################user start###################################
    Route::group(['prefix' => 'admin'] , function (){


    });
    ####################################user end###############################





    ####################################search routes################################

    ####################################search routes################################
});

