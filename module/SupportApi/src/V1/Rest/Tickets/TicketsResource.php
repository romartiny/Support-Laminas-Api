<?php
namespace SupportApi\V1\Rest\Tickets;

use StatusLib\Collection;
use StatusLib\Entity;
use StatusLib\MapperInterface;
use Laminas\ApiTools\Rest\AbstractResourceListener;
use Laminas\Stdlib\Parameters;
use SupportApi\V1\Rest\Tickets\TicketsCollection;

class TicketsResource extends AbstractResourceListener
{
    protected $mapper;

    public function __construct(MapperInterface $mapper)
    {
        $this->mapper = $mapper;
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return Entity
     */
    public function create($data): Entity
    {
        return $this->mapper->create($data);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return bool
     */
    public function delete($id): bool
    {
        return $this->mapper->delete($id);
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return Entity
     */
    public function fetch($id): Entity
    {
        return $this->mapper->fetch($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array|Parameters $params
     * @return Collection
     */
    public function fetchAll($params = []): Collection
    {
        return $this->mapper->fetchAll();
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
        return $this->mapper->update($id, $data);
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
        return $this->mapper->update($id, $data);
    }
}
