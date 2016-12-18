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
	Route::get('/front/reservation', [
		'as' => 'reservation',
		'uses' => 'CategoryController@reservation'
		]);
//==================================================================================//
//==================================================================================//
//================================== Back-end ==================================//
	/*
	*
	*	DO NOT EDIT ANY ROUTE FROM BACK-END, JUST FOR ADMINISTRATOR
	*
	*/
	//================================== Admin ==================================//
				Route::get('/admin', [
					'as' => 'showLogin',
					'uses' => 'Admin\AdminController@showLogin'
					]);
				Route::get('/admin/page', [
					'as' => 'admin',
					'uses' => 'Admin\AdminController@index'
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
			//============ Main ============//
				Route::get('/admin/category', [
						'as' => 'adminCategory',
						'uses' => 'Admin\AdminCategoryController@indexCategory'
						]);
			//============ Reservation ============//
				Route::get('/admin/categoryReservation', [
						'as' => 'adminReservation',
						'uses' => 'Admin\AdminCategoryController@indexReservation'
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
			//============ Feature ============//
					Route::get('/admin/detail-feature', [
							'as' => 'adminDetailFeature',
							'uses' => 'Admin\AdminDetailController@indexFeature'
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
		//========================== Main ==========================//
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
			//================ Search ================//
				Route::get('/admin/searchCategory', [
					'as' => 'searchCategory',
					'uses' => 'Admin\AdminCategoryController@searchCategory'
					]);
			//================ Export to Excel ================//
				Route::get('/admin/exportCategory', [
					'as' => 'exportCategory',
					'uses' => 'Admin\AdminCategoryController@exportCategory'
					]);
		//========================== Reservation ==========================//
			//================ Export to Excel ================//
				Route::get('/admin/exportReservation', [
					'as' => 'exportReservation',
					'uses' => 'Admin\AdminCategoryController@exportReservation'
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
				//================ Search ================//
					Route::post('/admin/searchDetail', [
						'as' => 'searchDetail',
						'uses' => 'Admin\AdminDetailController@searchDetail'
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
				//================ Search ================//
					Route::get('/admin/searchPrice', [
						'as' => 'searchPrice',
						'uses' => 'Admin\AdminDetailController@searchPrice'
						]);
				//================ Export to Excel ================//
					Route::get('/admin/exportPrice', [
						'as' => 'exportPrice',
						'uses' => 'Admin\AdminDetailController@exportPrice'
						]);
		//========================== Features ==========================//
				//================ Add ================//
					Route::get('/admin/addFeature', [
						'as' => 'addFeature',
						'uses' => 'Admin\AdminDetailController@addFeature'
						]);
				//================ Edit ================//
					Route::get('/admin/editFeature', [
						'as' => 'editFeature',
						'uses' => 'Admin\AdminDetailController@editFeature'
						]);


	Route::get('/admin/uploadFileView', 'Admin\AdminController@uploadFileView');
	Route::post('/admin/uploadFile', 'Admin\AdminController@uploadFile');
//================================== End Back-end ==================================//
//==================================================================================//
//==================================================================================//