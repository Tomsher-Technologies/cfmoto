<?php

use App\Http\Controllers\FrontendController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\ForgotPasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/zforce1000sportr', [FrontendController::class, 'zforce1000sportr'])->name('zforce1000sportr');
Route::get('/productdetails', [FrontendController::class, 'productdetails'])->name('productdetails');
Route::get('/t250clx', [FrontendController::class, 't250clx'])->name('t250clx');
Route::get('/t250nk', [FrontendController::class, 't250nk'])->name('t250nk');
Route::get('/t250sr1', [FrontendController::class, 't250sr1'])->name('t250sr1');
Route::get('/t250sr2', [FrontendController::class, 't250sr2'])->name('t250sr2');
Route::get('/t300clx', [FrontendController::class, 't300clx'])->name('t300clx');
Route::get('/t300nk', [FrontendController::class, 't300nk'])->name('t300nk');
Route::get('/t300sr', [FrontendController::class, 't300sr'])->name('t300sr');
Route::get('/f450clc', [FrontendController::class, 'f450clc'])->name('f450clc');
Route::get('/f450nk', [FrontendController::class, 'f450nk'])->name('f450nk');
Route::get('/f450sr', [FrontendController::class, 'f450sr'])->name('f450sr');
Route::get('/f450srs', [FrontendController::class, 'f450srs'])->name('f450srs');
Route::get('/s650gt', [FrontendController::class, 's650gt'])->name('s650gt');
Route::get('/s650mt', [FrontendController::class, 's650mt'])->name('s650mt');
Route::get('/s650nk', [FrontendController::class, 's650nk'])->name('s650nk');
Route::get('/s700clxadventure', [FrontendController::class, 's700clxadventure'])->name('s700clxadventure');
Route::get('/s700clxheritage', [FrontendController::class, 's700clxheritage'])->name('s700clxheritage');
Route::get('/s700clxsport', [FrontendController::class, 's700clxsport'])->name('s700clxsport');
Route::get('/s700mt', [FrontendController::class, 's700mt'])->name('s700mt');
Route::get('/e800mtexplore', [FrontendController::class, 'e800mtexplore'])->name('e800mtexplore');
Route::get('/e800mtsport', [FrontendController::class, 'e800mtsport'])->name('e800mtsport');
Route::get('/e800mttouring', [FrontendController::class, 'e800mttouring'])->name('e800mttouring');
Route::get('/e800nk', [FrontendController::class, 'e800nk'])->name('e800nk');
Route::get('/o1250trg', [FrontendController::class, 'o1250trg'])->name('o1250trg');
Route::get('/aboutbrand', [FrontendController::class, 'aboutbrand'])->name('aboutbrand');
Route::get('/asparracing', [FrontendController::class, 'asparracing'])->name('asparracing');
Route::get('/becomeadistributor', [FrontendController::class, 'becomeadistributor'])->name('becomeadistributor');
Route::get('/brands', [FrontendController::class, 'brands'])->name('brands');
Route::get('/cforce110', [FrontendController::class, 'cforce110'])->name('cforce110');
Route::get('/cforce450l', [FrontendController::class, 'cforce450l'])->name('cforce450l');
Route::get('/cforce625touring', [FrontendController::class, 'cforce625touring'])->name('cforce625touring');
Route::get('/cforce625touringoverland', [FrontendController::class, 'cforce625touringoverland'])->name('cforce625touringoverland');
Route::get('/cforce850touring', [FrontendController::class, 'cforce850touring'])->name('cforce850touring');
Route::get('/cforce850xc', [FrontendController::class, 'cforce850xc'])->name('cforce850xc');
Route::get('/cforce1000', [FrontendController::class, 'cforce1000'])->name('cforce1000');
Route::get('/cforce1000overland', [FrontendController::class, 'cforce1000overland'])->name('cforce1000overland');
Route::get('/cforce1000touring', [FrontendController::class, 'cforce1000touring'])->name('cforce1000touring');
Route::get('/cforceev110', [FrontendController::class, 'cforceev110'])->name('cforceev110');
Route::get('/companyoverview', [FrontendController::class, 'companyoverview'])->name('companyoverview');
Route::get('/contactus', [FrontendController::class, 'contactus'])->name('contactus');
Route::get('/cx2e', [FrontendController::class, 'cx2e'])->name('cx2e');
Route::get('/cx5e', [FrontendController::class, 'cx5e'])->name('cx5e');
Route::get('/global', [FrontendController::class, 'global'])->name('global');
Route::get('/privacy', [FrontendController::class, 'privacy'])->name('privacy');
Route::get('/marketing', [FrontendController::class, 'marketing'])->name('marketing');

Route::get('/index2', [FrontendController::class, 'index2'])->name('index2');
Route::get('/menu', [FrontendController::class, 'menu'])->name('menu');
Route::get('/news', [FrontendController::class, 'news'])->name('news');
Route::get('/newsbk', [FrontendController::class, 'newsbk'])->name('newsbk');
Route::get('/blog/{slug}', [FrontendController::class, 'newsdetails'])->name('newsdetails');
// Route::get('/newsdetails', [FrontendController::class, 'newsdetails'])->name('newsdetails');
Route::get('/productdetails', [FrontendController::class, 'productdetails'])->name('productdetails');
Route::get('/racing', [FrontendController::class, 'racing'])->name('racing');
Route::get('/ride', [FrontendController::class, 'ride'])->name('ride');
Route::get('/stpapio', [FrontendController::class, 'stpapio'])->name('stpapio');
Route::get('/uae', [FrontendController::class, 'uae'])->name('uae');
Route::get('/uforce600', [FrontendController::class, 'uforce600'])->name('uforce600');
Route::get('/uforce1000', [FrontendController::class, 'uforce1000'])->name('uforce1000');
Route::get('/uforce1000xl', [FrontendController::class, 'uforce1000xl'])->name('uforce1000xl');
Route::get('/xopapioracer', [FrontendController::class, 'xopapioracer'])->name('xopapioracer');
Route::get('/xopapiotrail', [FrontendController::class, 'xopapiotrail'])->name('xopapiotrail');
Route::get('/zforce800trail', [FrontendController::class, 'zforce800trail'])->name('zforce800trail');
Route::get('/zforce950sport', [FrontendController::class, 'zforce950sport'])->name('zforce950sport');
Route::get('/zforce950sport4', [FrontendController::class, 'zforce950sport4'])->name('zforce950sport4');
Route::get('/zforce1000sportr', [FrontendController::class, 'zforce1000sportr'])->name('zforce1000sportr');


Route::group(['middleware' => ['auth','web']], function () {

    Route::get('/account', [FrontendController::class, 'account'])->name('account');

    Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
});

include_once('admin.php');
