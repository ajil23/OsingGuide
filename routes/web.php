<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\GuideAvailabilityController;
use App\Http\Controllers\GuideController;
use App\Http\Controllers\GuideProfileController;
use App\Http\Controllers\GuideReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
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
    return view('landing.landing-page');
});

Route::get('/booking-guide/booking', function () {
    return view('landing.booking');
});

Route::prefix('admin')->name('admin.')->middleware('role:admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/bookings', [AdminController::class, 'bookings'])->name('bookings');
    Route::post('/bookings/{id}/status', [AdminController::class, 'updateBookingStatus'])->name('booking.status');
    Route::get('/settings/commission', [AdminController::class, 'commissionSettings'])->name('settings.commission');
    Route::post('/settings/commission', [AdminController::class, 'updateCommission']);
    Route::get('/guides', [AdminController::class, 'manageGuides'])->name('guides');
    Route::post('/guides/{id}/level', [AdminController::class, 'updateGuideLevel'])->name('guide.level');
    Route::get('/guides/{id}', [AdminController::class, 'guideDetail'])->name('guide.detail');
    Route::post('/guides/{id}/toggle-status', [AdminController::class, 'toggleGuideStatus'])->name('guide.toggle');
    Route::get('/customers', [AdminController::class, 'manageCustomers'])->name('customers');
    Route::get('/customers/{id}', [AdminController::class, 'customerDetail'])->name('customer.detail');
});

Route::prefix('guide')->name('guide.')->middleware('role:guide')->group(function () {
    Route::get('/dashboard', [GuideController::class, 'dashboard'])->name('dashboard');
    Route::get('/bookings', [GuideController::class, 'bookings'])->name('bookings');
    Route::get('/profile/edit', [GuideProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [GuideProfileController::class, 'update'])->name('profile.update');
    Route::get('/availability', [GuideAvailabilityController::class, 'index'])->name('availability');
    Route::post('/availability', [GuideAvailabilityController::class, 'store'])->name('availability.store');
    Route::post('/availability/bulk', [GuideAvailabilityController::class, 'storeBulk'])->name('availability.bulk');
    Route::delete('/availability/{id}', [GuideAvailabilityController::class, 'destroy'])->name('availability.destroy');
    Route::get('/reviews', [GuideReviewController::class, 'index'])->name('reviews');
});

Route::prefix('customer')->name('customer.')->middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/dashboard', [CustomerController::class, 'dashboard'])->name('dashboard');
    Route::get('/list-guides', [CustomerController::class, 'guides'])->name('list-guides');
    Route::get('/bookings', [BookingController::class, 'bookings'])->name('bookings');
    Route::get('/bookings/create/{guideId}', [BookingController::class, 'create'])->name('booking.create');
    Route::post('/bookings', [BookingController::class, 'store'])->name('booking.store');
    Route::get('/reviews/create/{bookingId}', [ReviewController::class, 'create'])->name('review.create');
    Route::post('/reviews', [ReviewController::class, 'store'])->name('review.store');
});

require __DIR__ . '/auth.php';
