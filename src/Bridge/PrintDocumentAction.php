<?php

namespace App\Bridge;

/**
 * Class PrintDocumentAction
 * @package App\Bridge
 */
abstract class PrintDocumentAction
{
    /**
     * 列印
     * @return void
     */
    abstract public function print(): void;

    /**
     * 開啟
     * @return void
     */
    abstract public function open(): void;

    /**
     * 關閉
     * @return void
     */
    abstract public function close(): void;
}