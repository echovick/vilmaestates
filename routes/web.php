<?php

use App\Http\Controllers\Site\SiteController;
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

Route::get('/', [SiteController::class, 'homePage']);
Route::get('/about', [SiteController::class, 'aboutPage']);
Route::get('/team', [SiteController::class, 'teamPage']);
Route::get('/team/{member}', [SiteController::class, 'teamMemberPage']);
Route::get('/portfolio', [SiteController::class, 'portfolioPage']);
Route::get('/faqs', [SiteController::class, 'faqPage']);
Route::get('/our-locations', [SiteController::class, 'locationsPage']);
Route::get('/properties', [SiteController::class, 'propertiesPage']);
Route::get('/properties/{property}', [SiteController::class, 'propertyPage']);
Route::get('/services', [SiteController::class, 'servicesPage']);
Route::get('/services/{service}', [SiteController::class, 'servicePage']);
Route::get('/blog', [SiteController::class, 'blogPage']);
Route::get('/post/{post}', [SiteController::class, 'blogPostPage']);
Route::get('/contact', [SiteController::class, 'contactPage']);
