<?php
namespace SupportApi\V1\Rest\Tickets;

use Laminas\Db\Adapter\AdapterInterface;
use StatusLib\Entity;
use Laminas\ApiTools\Rest\AbstractResourceListener;
use Laminas\Stdlib\Parameters;

class TicketsResource extends AbstractResourceListener
{
    protected $adapter;

    public function __construct(AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     */
    public function create($data)
    {
        return $this->adapter->query('SELECT * FROM tickets');
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return bool
     */
    public function delete($id): bool
    {
        return $this->adapter->delete($id);
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return Entity
     */
    public function fetch($id): Entity
    {
        return $this->adapter->fetch($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array|Parameters $params
     */
    public function fetchAll($params = [])
    {
        return $this->adapter->query('SELECT * FROM tickets');
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
        return $this->adapter->update($id, $data);
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
        return $this->adapter->update($id, $data);
    }
}
