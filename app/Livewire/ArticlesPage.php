<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.:: Properties - Articles ::.')]
class ArticlesPage extends Component
{
    public $isTimerOn = true;
    public $description = 'you are viewing your articles.';
}
