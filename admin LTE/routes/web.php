<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboards/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard-v2', function () {
    return view('dashboards/dashboard-v2');
})->middleware(['auth', 'verified'])->name('dashboard-v2');

Route::get('/dashboard-v3', function () {
    return view('dashboards/dashboard-v3');
})->middleware(['auth', 'verified'])->name('dashboard-v3');

Route::get('/widgets', function () {
    return view('pages/widgets');
})->middleware(['auth', 'verified'])->name('widgets-show');

//   Layout routes

Route::get('/layout/box', function () {
    return view('pages/layout/boxed');
})->middleware(['auth', 'verified'])->name('boxed-layout');

Route::get('/layout/collapsed/sidebar', function () {
    return view('pages/layout/collapsed-sidebar');
})->middleware(['auth', 'verified'])->name('collapsed-sidebar');

Route::get('/fixed/sidebar', function () {
    return view('pages/layout/fixed-sidebar');
})->middleware(['auth', 'verified'])->name('fixed-sidebar');

Route::get('/fixed/footer', function () {
    return view('pages/layout/fixed-footer');
})->middleware(['auth', 'verified'])->name('fixed-footer');

Route::get('/fixed/topnav', function () {
    return view('pages/layout/fixed-topnav');
})->middleware(['auth', 'verified'])->name('fixed-topnav');

Route::get('/top-nav + sidebar', function () {
    return view('pages/layout/top-nav-sidebar');
})->middleware(['auth', 'verified'])->name('top-nav-sidebar');

Route::get('/top-nav', function () {
    return view('pages/layout/top-nav');
})->middleware(['auth', 'verified'])->name('top-nav');

//   Layout routes End

// Charts
Route::get('/chart', function () {
    return view('pages/charts/chartjs');
})->middleware(['auth', 'verified'])->name('chart');

Route::get('/charts/flot', function () {
    return view('pages/charts/flot');
})->middleware(['auth', 'verified'])->name('flot-chart');


Route::get('/charts/inline', function () {
    return view('pages/charts/inline');
})->middleware(['auth', 'verified'])->name('inline-chart');



// Charts End

// UI route

Route::get('/UI/general', function () {
    return view('pages/UI/general');
})->middleware(['auth', 'verified'])->name('general-UI');

Route::get('/UI/icons', function () {
    return view('pages/UI/icons');
})->middleware(['auth', 'verified'])->name('icons-UI');

Route::get('/UI/buttons', function () {
    return view('pages/UI/buttons');
})->middleware(['auth', 'verified'])->name('buttons-UI');

// UI route End

// Form Route
Route::get('/forms/advanced', function () {
    return view('pages/forms/advanced');
})->middleware(['auth', 'verified'])->name('advanced-forms');

Route::get('/forms/editors', function () {
    return view('pages/forms/editors');
})->middleware(['auth', 'verified'])->name('editors-forms');

Route::get('/forms/general', function () {
    return view('pages/forms/general');
})->middleware(['auth', 'verified'])->name('general-forms');

Route::get('/forms/validation', function () {
    return view('pages/forms/validation');
})->middleware(['auth', 'verified'])->name('validation-forms');
// Form Route End

// Table Route

Route::get('/data/table', function () {
    return view('pages/tables/data');
})->middleware(['auth', 'verified'])->name('data-tables');


Route::get('/js-grid/table', function () {
    return view('pages/tables/jsgrid');
})->middleware(['auth', 'verified'])->name('js-grid-tables');


Route::get('/simple/table', function () {
    return view('pages/tables/simple');
})->middleware(['auth', 'verified'])->name('simple-tables');
// Table Route end


Route::get('/calender', function () {
    return view('pages/calender');
})->middleware(['auth', 'verified'])->name('calender');

Route::get('/gallery', function () {
    return view('pages/gallery');
})->middleware(['auth', 'verified'])->name('gallery');

// Mailbox Route

Route::get('/mailbox', function () {
    return view('pages/mailbox/mailbox');
})->middleware(['auth', 'verified'])->name('mailbox');


Route::get('/compose-mail', function () {
    return view('pages/mailbox/compose');
})->middleware(['auth', 'verified'])->name('compose');


Route::get('/read-mail', function () {
    return view('pages/mailbox/read-mail');
})->middleware(['auth', 'verified'])->name('read-mail');


