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

Route::get('/',['uses'=>'BlogController@getIndex',
    'as'=>'index']);



Route::get('/{BlogId}',
 ['uses'=>'BlogController@fetchBlog',
   'as'=>'fetchBlog']);


   Route::post('/{BlogId}',
   ['uses'=>'BlogController@postFetchBlog',
     'as'=>'fetchBlog']);








Route::group(['prefix'=>'Admin'],function ()
{

  Route::group(['middleware'=>'auth'],function()
  {




    Route::get('/Dashboard',['uses'=>'usersController@getDashboard',
  'as'=>'Admin.Dashboard']);

  
  /**  start Add Blog Routes */

  Route::get('/AddBlog',     
  ['uses'=>'BlogController@getAddBlog',
    'as'=>'Blog.AddBlog'
  ]
  );
  
  Route::post('/AddBlog',[
    'uses'=>'BlogController@postAddBlog',
    'as'=>'Blog.AddBlog'
  ]);

/** end Add Blog Routes */





/** start Delete Blog Routes */

Route::get('/DelBlog', [
  'uses'=>'BlogController@getDelBlog',
  'as'=>'Blog.DelBlog'
]);


Route::post('/DelBlog',[
  'uses'=>'BlogController@postDelBlog',
  'as'=>'Blog.DelBlog'
]);

/** end Delete Blog Routes */






/**start update Blog route */


Route::get('/UpdateBlog',[
  'uses'=>'BlogController@getUpdateBlog',
  'as'=>'Blog.UpdateBlog'
]); 


Route::get('/UpdateBlog/{BlogId}',[
  'uses'=>'BlogController@getUpdateBlog2',
  'as'=>'BlogUpdateBlog2'
]);

Route::post('/UpdateBlog/{BlogId}',[
    'uses'=>'BlogController@postUpdateBlog',
    'as'=>'Blog.UpdateBlog'
]);



/**end update Blog route */




/**start catigory routes */




Route::get('/Catigory',[
  'uses'=>'BlogController@getCatigory',
  'as'=>'Blog.CatigoryMain'
]);


Route::post('/Catigory',[
  'uses'=>'BlogController@postCatigoryAdd',
  'as'=>'Blog.CatigoryMain'
]);


Route::get('/Catigory/del/{catigoryName}',[
  'uses'=>'BlogController@getCatigoryDel',
  'as'=>'Blog.CatigoryDel'
]);


/**end catigory routes */




Route::get('/logOut',['uses'=>'usersController@getLogOut',
    'as'=>'Admin.LogOut']);











  });





  Route::group(['middleware'=>'guest'],function()
  {


  

  Route::get('/SignIn',['uses'=>'usersController@getAdminSignIn',  
    'as'=>'Admin.SignIn'
  ]);
  
  
  Route::post('/SignIn',['uses'=>'usersController@postAdminSignIn',
    'as'=>'Admin.SignIn'
  ]);
  






  });



























});




