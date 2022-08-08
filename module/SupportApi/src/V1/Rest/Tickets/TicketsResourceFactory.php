<?php
namespace SupportApi\V1\Rest\Tickets;

class TicketsResourceFactory
{
    public function __invoke($services)
    {
        return new TicketsResource();
    }
}
