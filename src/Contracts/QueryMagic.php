<?php

namespace Kbdxbt\LaravelRepository\Contracts;

use Kbdxbt\LaravelRepository\AbstractRepository;

/**
 * Interface QueryMagic.
 */
interface QueryMagic
{
    /**
     * @param QueryRelate        $queryRelate
     * @param AbstractRepository $repository
     *
     * @return QueryRelate
     */
    public function magic(QueryRelate $queryRelate, AbstractRepository $repository): QueryRelate;
}
