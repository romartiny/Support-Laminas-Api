<?php

declare(strict_types=1);

namespace StatusLib;

use Laminas\Db\Adapter\AdapterInterface;
use Laminas\Db\ResultSet\HydratingResultSet;
use Laminas\Db\Sql\TableIdentifier;
use Laminas\Db\TableGateway\TableGateway as LaminasTableGateway;
use Laminas\Hydrator\ObjectPropertyHydrator;

use function class_exists;

/**
 * Custom TableGateway instance for StatusLib
 *
 * Creates a HydratingResultSet seeded with an ObjectProperty hydrator and Entity instance.
 */
class TableGateway extends LaminasTableGateway
{
    /**
     * @param string|TableIdentifier|array $table
     * @param null $features
     */
    public function __construct($table, AdapterInterface $adapter, $features = null)
    {
        $hydratorClass = class_exists(ObjectPropertyHydrator::class)
            ? ObjectPropertyHydrator::class
            : ObjectPropertyHydrator::class;
        $resultSet     = new HydratingResultSet(new $hydratorClass(), new Entity());
        return parent::__construct($table, $adapter, $features, $resultSet);
    }
}
