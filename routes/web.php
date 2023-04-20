<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroController;
use App\Http\Controllers\Admin\PortfolioItemController;
use App\Http\Controllers\Admin\PortfolioSectionSetting;
use App\Http\Controllers\Admin\PortfolioSectionSettingController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SkillItemController;
use App\Http\Controllers\Admin\SkillSectionSettingController;
use App\Http\Controllers\Admin\TyperTitleController;
use App\Http\Controllers\Frontend\HomeController;
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

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/blog', function () {
    return view('frontend.blog');
});
Route::get('/blog-details', function () {
    return view('frontend.blog-details');
});
// Route::get('/portfolio-details', function () {
//     return view('frontend.portfolio-details');
// });

Route::get('/dashboard',[DashboardController::class,'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/**Ruta para consultar el detalle del  portfolio item */
Route::get('portfolio-details/{id}',[HomeController::class, 'showPortfolio'])->name('show.portfolio');

//->name(admin.hero)
/**Admin Routes */
Route::group(['middleware'=>['auth'], 'prefix'=> 'admin', 'as'=>'admin.'],function(){
  Route::resource('hero', HeroController::class);
  Route::resource('typer-title', TyperTitleController::class);

  //   Services Route  
  Route::resource('service', ServiceController::class);
  //   About Route 
  //Crear una nueva ruta al about aun usando resource, se tien que crear antes de
  Route::get('resume/download',[AboutController::class, 'resumeDownload'])->name('resume.download'); 
  Route::resource('about', AboutController::class);
  
  // Category Route
  Route::resource('category', CategoryController::class);

  // POrtfolio Item Route
  Route::resource('portfolio-item', PortfolioItemController::class);

  // POrtfolio Section Setting Route
   Route::resource('portfolio-section-setting', PortfolioSectionSettingController::class);

   //**Skill Section Route */
   Route::resource('skill-section-setting',SkillSectionSettingController::class);
   //**Skill Items Route */
   Route::resource('skill-item',SkillItemController::class);
});