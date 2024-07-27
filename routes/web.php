<?php

use App\Http\Controllers\AdminRoleController;
use App\Http\Controllers\API\AnalyticsController;
use App\Http\Controllers\API\NotificationController;
use App\Http\Controllers\API\PointTransactionController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ErrorController;
use App\Http\Controllers\MessagingController;
use App\Http\Controllers\WithdrawalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Route::middleware(['auth', 'admin'])->group(function () {
Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

Route::resource('users', UserController::class)->names('admin.users');
Route::resource('campaigns', CampaignController::class)->names('admin.campaigns');
Route::resource('withdrawals', WithdrawalController::class)->except(['create', 'store', 'destroy'])->names('admin.withdrawals');

Route::get('/analytics', [AnalyticsController::class, 'index'])->name('admin.analytics');
Route::get('/analytics/user-engagement', [AnalyticsController::class, 'userEngagement'])->name('admin.analytics.user-engagement');
Route::get('/analytics/campaign-performance', [AnalyticsController::class, 'campaignPerformance'])->name('admin.analytics.campaign-performance');

Route::resource('notifications', NotificationController::class)->except(['edit', 'update', 'destroy'])->names('admin.notifications');

Route::resource('point-transactions', PointTransactionController::class)->only(['index', 'show'])->names('admin.point-transactions');

Route::get('/messages', [MessagingController::class, 'index'])->name('admin.messages.index');
Route::get('/messages/create', [MessagingController::class, 'create'])->name('admin.messages.create');
Route::post('/messages/sms', [MessagingController::class, 'sendSMS'])->name('admin.messages.sendSMS');
Route::post('/messages/whatsapp', [MessagingController::class, 'sendWhatsApp'])->name('admin.messages.sendWhatsApp');

Route::resource('admin-roles', AdminRoleController::class)->names('admin.roles');
// });

Route::get('/error/{code}', [ErrorController::class, 'show'])->name('error');
