<?php

namespace App\Builder;

/**
 * Class DesktopBuilder
 * @package App\Builder
 */
class DesktopBuilder implements Builder
{
    /** @var Computer */
    private $computer;

    /**
     * DesktopBuilder constructor.
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
        $this->computer->add('Desktop CPU');
    }

    /**
     * 建 Ram
     * @return void
     */
    public function buildRam(): void
    {
        $this->computer->add('Desktop RAM');
    }

    /**
     * 建 Disk
     * @return void
     */
    public function buildDisk(): void
    {
        $this->computer->add('Desktop Disk');
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