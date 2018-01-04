<?php

namespace App\Builder;

/**
 * Class Director
 * @package App\Builder
 */
class Director
{
    /**
     * 建造
     * @param Builder $builder
     * @return void
     */
    public function construct(Builder $builder): void
    {
        $builder->buildCpu();
        $builder->buildRam();
        $builder->buildDisk();
    }
}