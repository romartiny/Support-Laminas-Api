<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;

class TicketsResourceFactory
{
    public function __invoke($services)
    {
        return new TicketsResource($services->get(AdapterInterface::class));
    }
}
