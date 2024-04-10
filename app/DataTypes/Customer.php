<?php

namespace App\DataTypes;

use Livewire\Wireable;

class Customer implements Wireable
{
    /**
     * Construct the Customer Object
     *
     * @param string $first_name
     * @param string $last_name
     * @param string $subscription_code
     */
    public function __construct(
        public string $first_name,
        public string $last_name,
        public string $subscription_code,
    ) {}

    /**
     * Handle Dehydration process
     *
     * @return array
     */
    public function toLivewire(): array
    {
        return [
            'first_name'        => $this->first_name,
            'last_name'         => $this->last_name,
            'subscription_code' => $this->subscription_code,
        ];
    }

    /**
     * Handle Hydration process
     *
     * @param array $value
     *
     * @return static
     */
    public static function fromLivewire($value): self
    {
        return new self($value['first_name'], $value['last_name'], $value['subscription_code']);
    }
}
