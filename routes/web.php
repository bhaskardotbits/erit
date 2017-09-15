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

    Route::get('/', 'Auth\LoginController@showLoginForm');
    Auth::routes();
    Route::get('/home', 'DashboardController@index');
    Route::get('/logout', 'Auth\LoginController@logout');
    Route::get('/dashboard', 'DashboardController@index');

    Route::group(['middleware' => 'auth'], function() {

        Route::match(['get', 'post'], 'admin-profile', 'AdminModule\AdminModuleController@profile');
        Route::match(['get', 'post'], 'admin-change-password', 'AdminModule\AdminModuleController@updatePassword');

        Route::group(['prefix' => 'admin-module', 'namespace' => 'AdminModule'], function() {
            Route::get('/', 'AdminModuleController@index');
            Route::get('user-configuration', 'AdminModuleController@userConfiguration');
            Route::get('account-settings', 'AdminModuleController@accountSettings');
            Route::match(['get', 'post'], 'account-settings/add-account', 'AdminModuleController@addAccount');
            Route::post('ajax-submodules-list', 'AdminModuleController@ajaxSubmodulesList');
            Route::get('general-settings', 'AdminModuleController@generalSettings');
            Route::group(['prefix' => 'user-configuration', 'namespace' => 'UserConfiguration'], function() {
                Route::get('mssp-configuration', 'UserConfigurationController@msspConfiguration');
                Route::group(['prefix' => 'mssp-configuration', 'namespace' => 'MSSPConfiguration'], function() {
                    Route::match(['get', 'post'], 'add-user', 'MsspConfigurationController@addUser');

                });

            });
        });

        Route::group(['prefix' => 'mssp-dashboard', 'namespace' => 'MSSPDashboard'], function() {
            Route::get('/mssp-configuration', 'MsspDashboardController@msspConfiguration');
            Route::group(['prefix' => 'mssp-configuration', 'namespace' => 'MSSPConfiguration'], function() {
                Route::get('/domains', 'MsspConfigurationController@domains');
                Route::post('/add-domain', 'MsspConfigurationController@addDomain');
                Route::get('/domain-scan-launch', 'MsspConfigurationController@domainScanLaunch');
                Route::post('/domain-scan-launch', 'MsspConfigurationController@domainScanLaunch');
                Route::post('/add-domain-scan-launch', 'MsspConfigurationController@ajaxDomainScanLaunch');
            });

            Route::get('/mssp-services', 'MSSPDashboardController@msspServices');
            Route::group(['prefix' => 'mssp-services', 'namespace' => 'MSSPServices'], function() {
                Route::get('/professional-services', 'MSSPServicesController@professionalServices');
                Route::get('/reporting-services', 'MSSPServicesController@reportingServices');
                Route::group(['prefix' => 'reporting-services', 'namespace' => 'ReportingServices'], function() {
                    Route::match(['get', 'post'], 'vulnerability-scan-reports', 'ReportingServicesController@vulnerabilityScanReports');

                });

            });


        });

    });


    Route::get('check-qualys', function () {
        $qualys = App::make('\App\Adapters\Qualys');
        $params = [];
        $params['map_title'] = 'dotbits.com from API - 2';
        $params['domain'] = 'fastraxpos.com';
        $params['save_report'] = 'yes';

        $data = $qualys->get('msp/map-2.php', $params, 'v1');

        dd($data);
    });
