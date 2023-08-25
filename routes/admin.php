<?php


use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PriorityController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\StatusController;
use App\Http\Controllers\Admin\TicketController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

Route::group([
    'prefix' => 'admin',
    'as' => 'admin.',
//    'namespace' => 'Admin',
    'middleware' => ['auth', 'verified']
], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
// Permissions
    Route::delete('permissions/destroy', [PermissionController::class, 'massDestroy'])->name('permissions.massDestroy');
    Route::resource('permissions', PermissionController::class);

// Roles
    Route::delete('roles/destroy', [RoleController::class, 'massDestroy'])->name('roles.massDestroy');
    Route::resource('roles', RoleController::class);

// Users
    Route::delete('users/destroy', [UserController::class, 'massDestroy'])->name('users.massDestroy');
    Route::resource('users', UserController::class);

// Statuses
    Route::delete('statuses/destroy', [StatusController::class, 'massDestroy'])->name('statuses.massDestroy');
    Route::resource('statuses', StatusController::class);

// Priorities
    Route::delete('priorities/destroy', [PriorityController::class, 'massDestroy'])->name('priorities.massDestroy');
    Route::resource('priorities', PriorityController::class);

// Categories
    Route::delete('categories/destroy', [CategoryController::class, 'massDestroy'])->name('categories.massDestroy');
    Route::resource('categories', CategoryController::class);

// Tickets
    Route::delete('tickets/destroy', [TicketController::class, 'massDestroy'])->name('tickets.massDestroy');
    Route::post('tickets/media', [TicketController::class, 'storeMedia'])->name('tickets.storeMedia');
    Route::post('tickets/comment/{ticket}', [TicketController::class, 'storeComment'])->name('tickets.storeComment');
    Route::resource('tickets', TicketController::class);

// Comments
    Route::delete('comments/destroy', [CommentController::class, 'massDestroy'])->name('comments.massDestroy');
    Route::resource('comments', CommentController::class);

// Audit Logs
    Route::resource('audit-logs', AuditLogController::class, ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);
});
