<?php

namespace App\Livewire;

use Carbon\Carbon;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.:: Properties - Articles ::.')]
class ArticlesPage extends Component
{
    public $isTimerOn;
    public $description;

    public function mount()
    {
        $this->isTimerOn = $this->timerStatus();
        $this->description = $this->currentDescription();

        $this->fill(
            [
                'isTimerOn' => true,
                'description' => 'Bulk filling....'
            ]
        );

        // $this->fill(auth()->user()->only(['x', 'y'])); # sample
    }

    protected function timerStatus()
    {
        return false;
    }

    protected function currentDescription()
    {
        return 'You are visiting your articles at ' . Carbon::now()->format('d F Y - H:i');
    }
}
