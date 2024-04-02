<?php

namespace App\Livewire;

use App\DataTypes\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.:: Properties - Supported Types ::.')]
class SupportedTypesPage extends Component
{
    public string $title = 'My default title';
    public array $list = [];
    public bool $isTrue = false;
    public ?string $first_name = null;
    public int $age = 10;

    public function updateMe()
    {

    }
}
