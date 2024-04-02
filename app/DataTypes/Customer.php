<?php

namespace App\DataTypes;

class Customer
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
}
