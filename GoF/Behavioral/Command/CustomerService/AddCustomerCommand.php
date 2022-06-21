<?php

declare(strict_types=1);

namespace GoF\Behavioral\Command\CustomerService;

use GoF\Behavioral\Command\Framework\CommandInterface;

class AddCustomerCommand implements CommandInterface
{
    private CustomerService $service;

    public function __construct(CustomerService $service)
    {
        $this->service = $service;
    }

    public function execute(): void
    {
        $this->service->addCustomer();
    }
}
