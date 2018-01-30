<?php

namespace App\Bridge;

/**
 * Class PrintRandomTimes
 * @package App\Bridge
 */
class PrintRandomTimes extends PrintDocumentFunction
{
    /**
     * PrintRandomTimes constructor.
     * @param PrintDocumentAction $action
     */
    public function __construct(PrintDocumentAction $action)
    {
        parent::__construct($action);
    }

    /**
     * 列印隨機次數
     * @return void
     */
    public function printRandom(): void
    {
        $this->open();

        for ($i = 0; $i < rand(1, 5); $i++) {
            $this->print();
        }

        $this->close();
    }
}