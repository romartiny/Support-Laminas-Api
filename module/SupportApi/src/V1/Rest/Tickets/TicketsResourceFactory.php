<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\Adapter\Adapter;

class TicketsResourceFactory
{
    public function __invoke($services)
    {
        return new TicketsResource($services->get(AdapterInterface::class));
    }
}
