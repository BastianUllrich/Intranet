<?php

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\InstallationBundle\Database;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\DBALException;
use Doctrine\DBAL\DriverManager;

/**
 * Creates a database connection object.
 *
 * @author Leo Feyer <https://github.com/leofeyer>
 */
class ConnectionFactory
{
    /**
     * Returns the database connection object.
     *
     * @param array $parameters
     *
     * @return Connection|null
     */
    public static function create(array $parameters)
    {
        $params = [];

        $params['driver'] = 'pdo_mysql';
        $params['host'] = $parameters['parameters']['database_host'];
        $params['port'] = $parameters['parameters']['database_port'];
        $params['user'] = $parameters['parameters']['database_user'];
        $params['password'] = $parameters['parameters']['database_password'];
        $params['dbname'] = $parameters['parameters']['database_name'];

        try {
            return DriverManager::getConnection($params);
        } catch (DBALException $e) {
            // ignore
        }

        return null;
    }
}
