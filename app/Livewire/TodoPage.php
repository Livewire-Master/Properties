<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.:: Properties - Todo ::.')]
class TodoPage extends Component
{
    public $title = 'foo from property';
    public $tasks = [];

    public function mount()
    {
        $this->initTitle();
    }

    protected function initTitle()
    {
        $this->title = 'foo from mount';
    }

    public function add(): void
    {
        $this->tasks[] = $this->title;
        // $this->title = '';
        // $this->reset('title');
        $this->initTitle();
    }

    public function resetTasks()
    {
        // $this->tasks = [];
        $this->reset('tasks');
    }
}
