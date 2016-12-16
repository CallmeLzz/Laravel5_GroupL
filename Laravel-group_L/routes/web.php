<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/
//================================== Front-end ==================================//
	Route::get('/', [
		'as' => 'home',
		'uses' => 'HomeController@index'
		]);
	Route::get('/front/detail', [
		'as' => 'detail',
		'uses' => 'DetailController@index'
		]);
	Route::get('/front/category', [
		'as' => 'category',
		'uses' => 'CategoryController@index'
		]);
//==================================================================================//
//==================================================================================//
//================================== Back-end ==================================//
	/*
	*
	*	DO NOT EDIT ANY ROUTE FROM BACK-END, JUST FOR ADMINISTRATOR
	*
	*/
		//================ Admin ================//
			Route::get('/admin/page', [
				'as' => 'admin',
				'uses' => 'Admin\AdminController@index'
				]);
			Route::get('/admin/showLogin', [
				'as' => 'showLogin',
				'uses' => 'Admin\AdminController@showLogin'
				]);
			Route::get('/admin/login', [
				'as' => 'login',
				'uses' => 'Admin\AdminController@doLogin'
				]);
			Route::get('/admin/search', [
				'as' => 'adminSearch',
				'uses' => 'Admin\AdminController@search'
				]);
		//================ Menu ================//
			Route::get('/admin/menu', [
				'as' => 'adminMenu',
				'uses' => 'Admin\AdminHomeController@indexMenu'
				]);
		//================ Banner ================//
			Route::get('/admin/banner', [
				'as' => 'adminBanner',
				'uses' => 'Admin\AdminHomeController@indexBanner'
				]);
		//================ Category ================//
			Route::get('/admin/category', [
					'as' => 'adminCategory',
					'uses' => 'Admin\AdminCategoryController@indexCategory'
					]);
		//================ Detail ================//
			//============ Main ============//
				Route::get('/admin/detail', [
						'as' => 'adminDetail',
						'uses' => 'Admin\AdminDetailController@index'
						]);
			//============ Price ============//
				Route::get('/admin/detail-price', [
						'as' => 'adminDetailPrice',
						'uses' => 'Admin\AdminDetailController@indexPrice'
						]);
	//================================== Menu ==================================//
		//================ Edit ================//
			Route::get('/admin/editMenu', [
				'as' => 'editMenu',
				'uses' => 'Admin\AdminHomeController@editMenu'
				]);
		//================ Delete ================//
			Route::get('/admin/deleteMenu', [
				'as' => 'deleteMenu',
				'uses' => 'Admin\AdminHomeController@deleteMenu'
				]);
		//================ Add ================//
			Route::get('/admin/addMenu', [
				'as' => 'addMenu',
				'uses' => 'Admin\AdminHomeController@addMenu'
				]);
		//================ Search ================//
			Route::get('/admin/searchMenu', [
				'as' => 'searchMenu',
				'uses' => 'Admin\AdminHomeController@searchMenu'
				]);
		//================ Export to Excel ================//
			Route::get('/admin/exportMenu', [
				'as' => 'exportMenu',
				'uses' => 'Admin\AdminHomeController@exportMenu'
				]);
	//================================== Banner ==================================//
		//================ Add ================//
			Route::get('/admin/addBannerView', [
				'as' => 'addBannerView',
				'uses' => 'Admin\AdminHomeController@addBannerView'
				]);
			Route::post('/admin/addBanner', [
				'as' => 'addBanner',
				'uses' => 'Admin\AdminHomeController@addBanner'
				]);
		//================ Edit ================//
			Route::get('/admin/editBannerView', [
				'as' => 'editBannerView',
				'uses' => 'Admin\AdminHomeController@editBannerView'
				]);
			Route::post('/admin/editBanner', [
				'as' => 'editBanner',
				'uses' => 'Admin\AdminHomeController@editBanner'
				]);
		//================ Delete ================//
			Route::get('/admin/deleteBanner', [
				'as' => 'deleteBanner',
				'uses' => 'Admin\AdminHomeController@deleteBanner'
				]);
		//================ Search ================//
			Route::get('/admin/searchBanner', [
				'as' => 'searchBanner',
				'uses' => 'Admin\AdminHomeController@searchBanner'
				]);
		//================ Export to Excel ================//
			Route::get('/admin/exportBanner', [
				'as' => 'exportBanner',
				'uses' => 'Admin\AdminHomeController@exportBanner'
				]);
	//================================== Category ==================================//
		//================ Add ================//
			Route::get('/admin/addCategoryView', [
				'as' => 'addCategoryView',
				'uses' => 'Admin\AdminCategoryController@addCategoryView'
				]);
			Route::post('/admin/addCategory', [
				'as' => 'addCategory',
				'uses' => 'Admin\AdminCategoryController@addCategory'
				]);
		//================ Edit ================//
			Route::get('/admin/editCategoryView', [
				'as' => 'editCategoryView',
				'uses' => 'Admin\AdminCategoryController@editCategoryView'
				]);
			Route::post('/admin/editCategory', [
				'as' => 'editCategory',
				'uses' => 'Admin\AdminCategoryController@editCategory'
				]);
		//================ Delete ================//
			Route::get('/admin/deleteCategory', [
				'as' => 'deleteCategory',
				'uses' => 'Admin\AdminCategoryController@deleteCategory'
				]);
		//================ Export to Excel ================//
			Route::get('/admin/exportCategory', [
				'as' => 'exportCategory',
				'uses' => 'Admin\AdminCategoryController@exportCategory'
				]);
	//================================== Detail ==================================//
		//========================== Main ==========================//
			//================ Add ================//
				Route::get('/admin/addDetailView', [
					'as' => 'addDetailView',
					'uses' => 'Admin\AdminDetailController@addDetailView'
					]);
				Route::post('/admin/addDetail', [
					'as' => 'addDetail',
					'uses' => 'Admin\AdminDetailController@addDetail'
					]);
			//================ Edit ================//
				Route::get('/admin/editDetailView', [
					'as' => 'editDetailView',
					'uses' => 'Admin\AdminDetailController@editDetailView'
					]);
				Route::post('/admin/editDetail', [
					'as' => 'editDetail',
					'uses' => 'Admin\AdminDetailController@editDetail'
					]);
			//================ Delete ================//
				Route::get('/admin/deleteDetail', [
					'as' => 'deleteDetail',
					'uses' => 'Admin\AdminDetailController@deleteDetail'
					]);
			//================ Export to Excel ================//
				Route::get('/admin/exportDetail', [
					'as' => 'exportDetail',
					'uses' => 'Admin\AdminDetailController@exportDetail'
					]);
		//========================== Prices ==========================//
			//================ Add ================//
				Route::get('/admin/addPrice', [
					'as' => 'addPrice',
					'uses' => 'Admin\AdminDetailController@addPrice'
					]);
				Route::get('/getDetailTypeDynamicData', 
					'Admin\AdminDetailController@getDetailTypeDynamicData');
			//================ Edit ================//
				Route::get('/admin/editPrice', [
					'as' => 'editPrice',
					'uses' => 'Admin\AdminDetailController@editPrice'
					]);
			//================ Delete ================//
				Route::get('/admin/deletePrice', [
					'as' => 'deletePrice',
					'uses' => 'Admin\AdminDetailController@deletePrice'
					]);
			//================ Export to Excel ================//
				Route::get('/admin/exportPrice', [
					'as' => 'exportPrice',
					'uses' => 'Admin\AdminDetailController@exportPrice'
					]);


	Route::get('/admin/uploadFileView', 'Admin\AdminController@uploadFileView');
	Route::post('/admin/uploadFile', 'Admin\AdminController@uploadFile');
//================================== End Back-end ==================================//
//==================================================================================//
//==================================================================================//