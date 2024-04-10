<?php

namespace App\Livewire;

use App\DataTypes\Customer;
use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('.:: Properties - Supported Types ::.')]
class SupportedTypesPage extends Component
{
    public string $title = 'My default title';

    public Customer $customer;

    public function mount(): void
    {
        $this->customer = new Customer('Armin', 'Hooshmand', 1001);
    }

    public function updateMe()
    {

    }
}
