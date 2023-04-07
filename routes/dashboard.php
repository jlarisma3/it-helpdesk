<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Ticket\TicketController;
use \App\Http\Controllers\Common\{
    User\UserController,
    Branch\BranchController,
    Branch\DepartmentController,
    Support\SupportGroupController
};

Route::get('/', function (\Illuminate\Http\Request $request) {
    return \Inertia\Inertia::render('Pages/Dashboard');
})->name('dashboard');

Route::resource('ticket', TicketController::class);

Route::prefix('admin')->group(function () {
    //user
    Route::get('user/all', [UserController::class, 'all'])->name('user.all');
    Route::resource('user', UserController::class);

    //department
    Route::resource('branch/department', DepartmentController::class);

    //branch
    Route::resource('branch', BranchController::class);

    //support
    Route::resource('support-group', SupportGroupController::class)
        ->parameters(['support_group' => 'supportGroup']);
});
