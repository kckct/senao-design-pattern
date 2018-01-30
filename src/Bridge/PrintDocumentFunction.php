<?php

namespace App\Bridge;

/**
 * Class PrintDocumentFunction
 * @package App\Bridge
 */
abstract class PrintDocumentFunction
{
    /** @var PrintDocumentAction $action 列印文件實作 */
    private $action;

    /**
     * PrintDocumentFunction constructor.
     * @param PrintDocumentAction $action
     */
    public function __construct(PrintDocumentAction $action)
    {
        $this->action = $action;
    }

    /**
     * 列印
     * @return void
     */
    public function print(): void
    {
        $this->action->print();
    }

    /**
     * 開啟
     * @return void
     */
    public function open(): void
    {
        $this->action->open();
    }

    /**
     * 關閉
     * @return void
     */
    public function close(): void
    {
        $this->action->close();
    }

    /**
     * 顯示
     * @return void
     */
    public final function display(): void
    {
        $this->open();
        $this->print();
        $this->close();
    }
}