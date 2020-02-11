<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm')->name('login.admin');
Route::get('/login/agent', 'Auth\LoginController@showAgentLoginForm')->name('login.agent');
Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm')->name('register.admin');
Route::get('/register/agent', 'Auth\RegisterController@showAgentRegisterForm')->name('register.agent');

Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/login/agent', 'Auth\LoginController@agentLogin');
Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('register.admin');
Route::post('/register/agent', 'Auth\RegisterController@createAgent')->name('register.agent');

Route::view('/home', 'home')->middleware('auth');
Route::group(['middleware' => 'auth:admin'], function () {
    Route::view('/admin', 'admin');
});
// agent route
Route::get('/admin/table_agent_list' ,'PageController@index');
Route::get('/admin/register' ,'PageController@createAgent');
Route::get('/admin/approve' ,'PageController@approve');
// report route
Route::get('/admin/report/weekly' ,'PageController@weekly');
Route::get('/admin/report/monthly' ,'PageController@monthly');
Route::get('/admin/report/yearly' ,'PageController@yearly');

//
// Route::group(['middleware' => 'auth:agent'], function () {
    // Route::view('/agent', 'agent');

    Route::get('/agent/dashboard','AgentController@index')->name('agent.dashboard');

// Property_


    Route::get('/agent/property/{property_id}/buying-contract/add','BuyingContractController@add')->name('bcontract.add');
    Route::post('/agent/property/{property_id}/buying-contract/save','BuyingContractController@save')->name('bcontract.save');

    // Route::get('/agent/buying-contracts','BuyingContractController@index')->name('bcontract.index');
    // Route::post('/agent/buying-contrats/data','BuyingContractController@data')->name('bcontract.data');
    Route::get('/agent/buying-contract/{bcontract_id}','BuyingContractController@detail')->name('bcontract.detail');
    Route::get('/agent/buying-contract/{bcontract_id}/invoices','BuyingContractController@invoices')->name('bcontract.invoices');
    Route::get('/agent/buying-contract/{bcontract_id}/invoice/add','BuyingContractController@addInvoice')->name('bcontract.invoice.add');
    Route::post('/agent/buying-contract/{bcontract_id}/invoice/save','BuyingContractController@saveInvoice')->name('bcontract.invoice.save');

    Route::get('/agent/invoices','InvoiceController@index')->name('invoice.index');
    Route::post('/agent/invoices/data','InvoiceController@data')->name('invoice.data');
    Route::get('/agent/invoice/{invoice_id}','InvoiceController@detail')->name('invoice.detail');

    Route::resource('/agent/property','PropertyController');
;



// });
