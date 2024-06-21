<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QualificationController;
use App\Http\Controllers\StackController;
use App\Http\Controllers\TechController;
use App\Livewire\Home;
use App\Livewire\Projects;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/projects', Projects::class)->name('projects');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('/qualifications', [QualificationController::class, 'index'])->name('qualifications');
    Route::post('/qualifications/create', [QualificationController::class, 'store'])->name('qualification.create');
    Route::delete('/qualifications/delete/{qualification}', [QualificationController::class, 'destroy'])->name('qualification.destroy');

    Route::get('/projects-listing', [ProjectController::class, 'index'])->name('admin.projects');
    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::post('/project/create', [ProjectController::class, 'store'])->name('create.project');
    Route::get('/project/update/{project}', [ProjectController::class, 'edit'])->name('project.update');
    Route::patch('/project/{project}/update', [ProjectController::class, 'update'])->name('update.project');
    Route::delete('/project/delete/{project}', [ProjectController::class, 'destroy'])->name('project.destroy');
    Route::patch('/project/status/{project}', [ProjectController::class, 'status'])->name('project.status');
    Route::patch('/project/completed/{project}', [ProjectController::class, 'completed'])->name('project.completed');

    Route::get('/stacks', [StackController::class, 'index'])->name('stacks');
    Route::post('/stack/create', [StackController::class, 'store'])->name('stack.create');
    Route::delete('/stack/delete/{stack}', [StackController::class, 'destroy'])->name('stack.destroy');

    Route::get('/techs', [TechController::class, 'index'])->name('techs');
    Route::post('/tech/create', [TechController::class, 'store'])->name('tech.create');
    Route::delete('/tech/delete/{tech}', [TechController::class, 'destroy'])->name('tech.destroy');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';