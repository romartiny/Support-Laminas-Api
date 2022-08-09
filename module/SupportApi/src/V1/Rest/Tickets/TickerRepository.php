<?php

namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\TableGateway;

class TickerRepository
{
    protected $_tableGateway;

    public function __construct(AdapterInterface $adapter)
    {
        $this->_tableGateway = new TableGateway\TableGateway('tickets', $adapter);
    }

    public function getTickets()
    {
        return $this->_tableGateway->select([]);
    }

    public function getTicketById(int $id)
    {
        return $this->_tableGateway->select(['id' => $id]);
    }

    public function createTicket($data)
    {
        $this->_tableGateway->insert(
            $this->toArray($data)
        );
    }

    public function updateTicket(array $data, int $id)
    {
        $this->_tableGateway->update(
            $this->toArray($data),
            ['id' => $id]
        );
    }

    public function deleteTicket(int $id)
    {
        $this->_tableGateway->delete(['id' => $id]);
    }

    private function toArray($data)
    {
        return [
          'title' => $data->title,
          'question' => $data->question,
        ];
    }
}