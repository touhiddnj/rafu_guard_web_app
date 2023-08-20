<?php

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GoogleController;

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

$controller_path = 'App\Http\Controllers';


Route::get('login', [LoginController::class, 'show']);
Route::get('register', [RegisterController::class, 'show']);




Route::group(['middleware' => 'auth'], function () use ($controller_path) {
    // Routes that require authentication

    // Main Page Route
    // Route::get('/', $controller_path . '\dashboard\Analytics@index')->name('dashboard-analytics');
    // Route::get('/', $controller_path . '\HomeController@index')->name('dashboard-analytics');
    Route::get('/', $controller_path . '\HomeController@overview')->name('overview');
    Route::get('overview', $controller_path . '\HomeController@overview')->name('overview');
    Route::get('CustomBlocking', $controller_path . '\HomeController@CustomBlocking')->name('custom-blocking');
    Route::get('disk-information', $controller_path . '\HomeController@diskInformation')->name('disk-information');
    Route::post('url-blocking-add', $controller_path . '\HomeController@CustomBlockingAdd')->name('custom-blocking-add');
    Route::get('custom-blocking/delete/{id}', $controller_path . '\HomeController@customBlockingRemove')->name('custom-blocking-remove');

    Route::get('Extensions', $controller_path . '\HomeController@extensionIndex')->name('extension-index');
    Route::get('Browsing', $controller_path . '\HomeController@browsingIndex')->name('browsing-index');
    Route::get('pc-protection', $controller_path . '\HomeController@pcProtection')->name('pc-security');

    Route::get('custom-blocking/enable-status/{id}', $controller_path . '\HomeController@enableStatus')->name('custom-blocking-enable');
    Route::get('custom-blocking/disable-status/{id}', $controller_path . '\HomeController@disableStatus')->name('custom-blocking-disable');

    Route::get('custom-blocking/domain-enable/{id}', $controller_path . '\HomeController@enableDomain')->name('custom-blocking-domain-enable');
    Route::get('custom-blocking/domain-disable/{id}', $controller_path . '\HomeController@disableDomain')->name('custom-blocking-domain-disable');


    // layout
    Route::get('/layouts/without-menu', $controller_path . '\layouts\WithoutMenu@index')->name('layouts-without-menu');
    Route::get('/layouts/without-navbar', $controller_path . '\layouts\WithoutNavbar@index')->name('layouts-without-navbar');
    Route::get('/layouts/fluid', $controller_path . '\layouts\Fluid@index')->name('layouts-fluid');
    Route::get('/layouts/container', $controller_path . '\layouts\Container@index')->name('layouts-container');
    Route::get('/layouts/blank', $controller_path . '\layouts\Blank@index')->name('layouts-blank');

    // pages
    Route::get('/pages/account-settings-account', $controller_path . '\pages\AccountSettingsAccount@index')->name('pages-account-settings-account');
    Route::get('/pages/account-settings-notifications', $controller_path . '\pages\AccountSettingsNotifications@index')->name('pages-account-settings-notifications');
    Route::get('/pages/account-settings-connections', $controller_path . '\pages\AccountSettingsConnections@index')->name('pages-account-settings-connections');
    Route::get('/pages/misc-error', $controller_path . '\pages\MiscError@index')->name('pages-misc-error');
    Route::get('/pages/misc-under-maintenance', $controller_path . '\pages\MiscUnderMaintenance@index')->name('pages-misc-under-maintenance');

    // authentication
    Route::get('/auth/login-basic', $controller_path . '\authentications\LoginBasic@index')->name('auth-login-basic');
    Route::get('/auth/register-basic', $controller_path . '\authentications\RegisterBasic@index')->name('auth-register-basic');
    Route::get('/auth/forgot-password-basic', $controller_path . '\authentications\ForgotPasswordBasic@index')->name('auth-reset-password-basic');


    // cards
    Route::get('/cards/basic', $controller_path . '\cards\CardBasic@index')->name('cards-basic');

    // User Interface
    Route::get('/ui/accordion', $controller_path . '\user_interface\Accordion@index')->name('ui-accordion');
    Route::get('/ui/alerts', $controller_path . '\user_interface\Alerts@index')->name('ui-alerts');
    Route::get('/ui/badges', $controller_path . '\user_interface\Badges@index')->name('ui-badges');
    Route::get('/ui/buttons', $controller_path . '\user_interface\Buttons@index')->name('ui-buttons');
    Route::get('/ui/carousel', $controller_path . '\user_interface\Carousel@index')->name('ui-carousel');
    Route::get('/ui/collapse', $controller_path . '\user_interface\Collapse@index')->name('ui-collapse');
    Route::get('/ui/dropdowns', $controller_path . '\user_interface\Dropdowns@index')->name('ui-dropdowns');
    Route::get('/ui/footer', $controller_path . '\user_interface\Footer@index')->name('ui-footer');
    Route::get('/ui/list-groups', $controller_path . '\user_interface\ListGroups@index')->name('ui-list-groups');
    Route::get('/ui/modals', $controller_path . '\user_interface\Modals@index')->name('ui-modals');
    Route::get('/ui/navbar', $controller_path . '\user_interface\Navbar@index')->name('ui-navbar');
    Route::get('/ui/offcanvas', $controller_path . '\user_interface\Offcanvas@index')->name('ui-offcanvas');
    Route::get('/ui/pagination-breadcrumbs', $controller_path . '\user_interface\PaginationBreadcrumbs@index')->name('ui-pagination-breadcrumbs');
    Route::get('/ui/progress', $controller_path . '\user_interface\Progress@index')->name('ui-progress');
    Route::get('/ui/spinners', $controller_path . '\user_interface\Spinners@index')->name('ui-spinners');
    Route::get('/ui/tabs-pills', $controller_path . '\user_interface\TabsPills@index')->name('ui-tabs-pills');
    Route::get('/ui/toasts', $controller_path . '\user_interface\Toasts@index')->name('ui-toasts');
    Route::get('/ui/tooltips-popovers', $controller_path . '\user_interface\TooltipsPopovers@index')->name('ui-tooltips-popovers');
    Route::get('/ui/typography', $controller_path . '\user_interface\Typography@index')->name('ui-typography');

    // extended ui
    Route::get('/extended/ui-perfect-scrollbar', $controller_path . '\extended_ui\PerfectScrollbar@index')->name('extended-ui-perfect-scrollbar');
    Route::get('/extended/ui-text-divider', $controller_path . '\extended_ui\TextDivider@index')->name('extended-ui-text-divider');

    // icons
    Route::get('/icons/boxicons', $controller_path . '\icons\Boxicons@index')->name('icons-boxicons');

    // form elements
    Route::get('/forms/basic-inputs', $controller_path . '\form_elements\BasicInput@index')->name('forms-basic-inputs');
    Route::get('/forms/input-groups', $controller_path . '\form_elements\InputGroups@index')->name('forms-input-groups');

    // form layouts
    Route::get('/form/layouts-vertical', $controller_path . '\form_layouts\VerticalForm@index')->name('form-layouts-vertical');
    Route::get('/form/layouts-horizontal', $controller_path . '\form_layouts\HorizontalForm@index')->name('form-layouts-horizontal');

    // tables
    Route::get('/tables/basic', $controller_path . '\tables\Basic@index')->name('tables-basic');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('ext-test', function () {
    // Set the item ID and access token
    $itemId = 'dpajfcckdohlcidmbjledcaenfkjaddo';
    $accessToken = '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';

    // Send the HTTP GET request
    $response = Http::withToken($accessToken)
        ->get("https://www.googleapis.com/chromewebstore/v1.1/items/$itemId");

    // Check for errors
    if ($response->failed()) {
        echo 'Error: ' . $response->body();
    } else {
        // Get the JSON response
        $data = $response->json();

        // Print the item information
        print_r($data);
    }
});
Route::get('token-test', function () {
    $token = '6|Z4bGZLnCgCnoRnWwLLtLpk0j8nTas9UVcWRcwbbW';
    $user = User::whereHas('tokens', function ($query) use ($token) {
        $query->where('tokenable_type', User::class)
            ->where('token', hash('sha256', $token))
            ->where('abilities', 'like', '%:api-token:%');
    })->first();
    dd($user);
});



Route::get('auth/google', [GoogleController::class, 'signInwithGoogle']);
Route::get('callback/google', [GoogleController::class, 'callbackToGoogle']);
