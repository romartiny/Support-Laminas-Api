<?php
namespace SupportApi\V1\Rest\Tickets;

use StatusLib\Mapper;

class TicketsResourceFactory
{
    public function __invoke($services)
    {
        return new TicketsResource($services->get(Mapper::class));
    }
}
