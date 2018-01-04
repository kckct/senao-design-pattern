<?php

namespace App\Builder;

/**
 * Interface Builder
 * @package App\Builder
 */
interface Builder
{
    /**
     * 建 Cpu
     * @return void
     */
    public function buildCpu(): void;

    /**
     * 建 Ram
     * @return void
     */
    public function buildRam(): void;

    /**
     * 建 Disk
     * @return void
     */
    public function buildDisk(): void;

    /**
     * 取得 Computer
     * @return Computer
     */
    public function getComputer(): Computer;
}