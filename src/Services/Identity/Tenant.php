<?php

namespace Hostville\Modulo\Services\Identity;


use Hostville\Modulo\Services\AbstractService;

class Tenant extends AbstractService
{
    /**
     * @inheritdoc
     */
    public function requiresAuthorization(): bool
    {
        return true;
    }

    /**
     * Returns the name of the service.
     *
     * @return string
     */
    function getName(): string
    {
        return 'Tenant';
    }
}