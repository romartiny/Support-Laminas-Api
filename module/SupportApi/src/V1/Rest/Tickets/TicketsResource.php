<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;
use StatusLib\Entity;
use Laminas\ApiTools\Rest\AbstractResourceListener;
use Laminas\Stdlib\Parameters;
use Laminas\Db\TableGateway;

class TicketsResource extends AbstractResourceListener
{
    protected $_tableGateway;

    public function __construct(AdapterInterface $adapter)
    {
        $this->_tableGateway = new TableGateway\TableGateway('tickets', $adapter);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array|Parameters $params
     */
    public function fetchAll($params = [])
    {
        return $this->_tableGateway->select([]);
    }

    /**
     * @param $id
     * @return \Laminas\ApiTools\ApiProblem\ApiProblem|\Laminas\Db\ResultSet\ResultSetInterface|mixed
     */
    public function fetch($id)
    {
        return $this->_tableGateway->select(['id' => $id]);
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     */
    public function create($data)
    {
        //
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return Entity
     */
    public function update($id, $data): Entity
    {
        //
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return Entity
     */
    public function patch($id, $data): Entity
    {
        //
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return bool
     */
    public function delete($id): bool
    {
        //
    }
}
