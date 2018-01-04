<?php

namespace App\Builder;

/**
 * Class Computer
 * @package App\Builder
 */
class Computer
{
    /** @var array 零件陣列 */
    private $parts = [];

    /**
     * 加入零件
     * @param string $part
     * @return void
     */
    public function add(string $part): void
    {
        $this->parts[] = $part;
    }

    /**
     * 取得所有零件清單
     * @return array
     */
    public function show(): array
    {
        return $this->parts;
    }
}