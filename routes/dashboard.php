<?php
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Ticket\TicketController;

Route::get('/', function (\Illuminate\Http\Request $request) {
    return \Inertia\Inertia::render('Pages/Dashboard');
})->name('dashboard');

Route::resource('ticket', TicketController::class);
