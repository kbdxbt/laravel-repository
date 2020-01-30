<?php

namespace Kbdxbt\LaravelRepository;

use Kbdxbt\LaravelRepository\Contracts\QueryRelate as QueryRelateContract;
use Kbdxbt\LaravelRepository\Drivers\Eloquent\Eloquent;
use Kbdxbt\LaravelRepository\Drivers\Eloquent\QueryRelate;
use Kbdxbt\LaravelRepository\Drivers\RepositoryDriver;
use InvalidArgumentException;

/**
 * Class RepositoryFactory.
 */
class RepositoryFactory
{
    /**
     * @param string             $driver
     * @param AbstractRepository $repository
     *
     * @return RepositoryDriver
     */
    public static function driver(string $driver, AbstractRepository $repository): RepositoryDriver
    {
        switch ($driver) {
            case 'eloquent':
                return new Eloquent($repository);
            default:
                throw new InvalidArgumentException("Driver [{$driver}] not found");
        }
    }

    /**
     * @param string           $driver
     * @param RepositoryDriver $repositoryDriver
     *
     * @return QueryRelateContract
     */
    public static function query(string $driver, RepositoryDriver $repositoryDriver): QueryRelateContract
    {
        switch ($driver) {
            case 'eloquent':
                return new QueryRelate($repositoryDriver);
            default:
                throw new InvalidArgumentException("Driver [{$driver}] not found");
        }
    }
}
