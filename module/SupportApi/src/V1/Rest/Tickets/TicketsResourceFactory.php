<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;

class TicketsResourceFactory
{
    public function __invoke($services)
    {
        $ticketRepository = new TickerRepository($services->get(AdapterInterface::class));

        return new TicketsResource($ticketRepository);
    }
}
