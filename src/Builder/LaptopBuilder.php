<?php

namespace App\Builder;

/**
 * Class LaptopBuilder
 * @package App\Builder
 */
class LaptopBuilder implements Builder
{
    /** @var Computer */
    private $computer;

    /**
     * LaptopBuilder constructor.
     */
    public function __construct()
    {
        $this->computer = new Computer();
    }

    /**
     * 建 Cpu
     * @return void
     */
    public function buildCpu(): void
    {
        $this->computer->add('Laptop CPU');
    }

    /**
     * 建 Ram
     * @return void
     */
    public function buildRam(): void
    {
        $this->computer->add('Laptop RAM');
    }

    /**
     * 建 Disk
     * @return void
     */
    public function buildDisk(): void
    {
        $this->computer->add('Laptop Disk');
    }

    /**
     * 取得 Computer
     * @return Computer
     */
    public function getComputer(): Computer
    {
        return $this->computer;
    }
}