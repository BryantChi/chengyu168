<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CasesController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Artisan;
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

Route::any('/clear-cache', function () {
    Artisan::call('optimize:clear');
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    // return "All Cache is cleared";
    // $pageInfo = PageSettingInfo::getHomeBanner('/index');
    // return view('index', ['pageInfo' => $pageInfo]);
    return redirect()->route('index');
});

Route::get('/', [IndexController::class, 'index'])->name('index');

Route::get('/about', [AboutController::class, 'index'])->name('about');

Route::get('/news', [NewsController::class, 'index'])->name('news');

// Route::get('/news/{id}', [NewsController::class, 'show'])->name('news.show');

Route::get('news-details-mock', function (){
    return view('news-details');
})->name('news-details-mock');

Route::get('products', [ProductsController::class, 'index'])->name('products');
// Route::get('products/{id}', [ProductsController::class, 'show'])->name('products.show');
Route::get('products-details-mock', function (){
    return view('products-details');
})->name('products-details-mock');

Route::get('cases', [CasesController::class, 'index'])->name('cases');
// Route::get('cases/{id}', [CasesController::class, 'show'])->name('cases.show');
Route::get('cases-details-mock', function (){
    return view('cases-details');
})->name('cases-details-mock');

Route::get('catalog', function (){
    return view('catalog');
})->name('catalog');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');

Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');

Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');

Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');

Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');

Route::post(
    'generator_builder/generate-from-file',
    '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile'
)->name('io_generator_builder_generate_from_file');

Route::prefix('admin')->group(function () {
    Route::middleware(['auth'])->group(function () {
        Route::resource('seoSettings', App\Http\Controllers\Admin\SeoSettingController::class, ["as" => 'admin']);
        // Route::resource('marqueeInfos', App\Http\Controllers\Admin\MarqueeInfoController::class, ["as" => 'admin']);
        // Route::resource('newsInfos', App\Http\Controllers\Admin\NewsInfoController::class, ["as" => 'admin']);

        // AJAX 預覽清洗結果的路由
        Route::post('/seo/preview', [App\Http\Controllers\Admin\SeoSettingController::class, 'preview'])->name('admin.seo.preview');

        Route::any('adminUsers', [App\Http\Controllers\Admin\AdminAccountController::class, 'index'])->name('admin.adminUsers.index');
        Route::any('adminUsers/create', [App\Http\Controllers\Admin\AdminAccountController::class, 'create'])->name('admin.adminUsers.create');
        Route::any('adminUsers/store', [App\Http\Controllers\Admin\AdminAccountController::class, 'store'])->name('admin.adminUsers.store');
        Route::any('adminUsers/show/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'show'])->name('admin.adminUsers.show');
        Route::any('adminUsers/edit/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'edit'])->name('admin.adminUsers.edit');
        Route::any('adminUsers/update/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'update'])->name('admin.adminUsers.update');
        Route::any('adminUsers/destroy/{id}', [App\Http\Controllers\Admin\AdminAccountController::class, 'destroy'])->name('admin.adminUsers.destroy');
    });
});
