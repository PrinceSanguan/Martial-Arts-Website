<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'index'])->name('welcome');

Route::get('discipine/mixed-martial-arts', [MainController::class, 'mma'])->name('mma');
Route::get('discipine/combat-jiu-jitsu', [MainController::class, 'cjj'])->name('cjj');
Route::get('discipine/brazilian-jiu-jitsu', [MainController::class, 'bjj'])->name('bjj');
Route::get('discipine/submission-grappling', [MainController::class, 'sg'])->name('sg');

Route::get('mma-programs/mma-programs-for-kids', [MainController::class, 'mmaForKids'])->name('mma.for.kids');
Route::get('mma-programs/mma-programs-for-adults', [MainController::class, 'mmaForAdults'])->name('mma.for.adults');

Route::get('bjj-programs/bjj-programs-for-kids', [MainController::class, 'bjjForKids'])->name('bjj.for.kids');
Route::get('bjj-programs/bjj-programs-for-adults', [MainController::class, 'bjjForAdults'])->name('bjj.for.adults');

Route::get('sub-grappling-programs/sub-grappling-programs-for-kids', [MainController::class, 'subGrapplingForKids'])->name('sub.grappling.for.kids');
Route::get('sub-grappling-programs/sub-grappling-programs-for-adults', [MainController::class, 'subGrapplingForAdults'])->name('sub.grappling.for.adults');

Route::get('self-defense/self-defense-programs-for-kids', [MainController::class, 'selfDefenseForKids'])->name('self.defense.for.kids');
