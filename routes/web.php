<?php

use App\Livewire\ArticlesPage;
use App\Livewire\TodoPage;
use Illuminate\Support\Facades\Route;

Route::get('', ArticlesPage::class)->name('page.articles');
Route::get('todo', TodoPage::class)->name('page.todo');
