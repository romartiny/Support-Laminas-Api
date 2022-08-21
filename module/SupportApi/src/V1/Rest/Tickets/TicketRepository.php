<?php

namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\TableGateway;


class TicketRepository {

    protected $_adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->_adapter = new TableGateway\TableGateway('tickets', $adapter) ;
    }

    public function createNewTicket($data): int
    {
        return $this->_adapter->insert($this->toArray($data));
    }

    public function delete(int $id)
    {
        return $this->_adapter->delete(['id' => $id]);
    }

    public function fetch(int $id): \Laminas\Db\ResultSet\ResultSetInterface
    {
        return $this->_adapter->select(['id' => $id]);
    }

    public function fetchAll($params = [])
    {
        return $this->_adapter->select(['id']);
    }

    public function update($id, $data): int
    {
        return $this->_adapter->update($this->toArray($data), ['id' => $id]);
    }

    public function toArray($data): array
    {
        return [
            'title' => $data->title,
            'question' => $data->question,
            'status' => $data->status
        ];
    }
}
