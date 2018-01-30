<?php

namespace App\Bridge;

/**
 * Class PrintOutput
 * @package App\Bridge
 */
class PrintOutput extends PrintDocumentAction
{
    /** @var resource */
    private $handle;

    /** @var string 文字 */
    private $text;

    /**
     * PrintOutput constructor.
     * @param string $text
     */
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    /**
     * 列印
     * @return void
     */
    public function print(): void
    {
        fwrite($this->handle, $this->text);
    }

    /**
     * 開啟
     * @return void
     */
    public function open(): void
    {
        $this->handle = fopen('./output.txt', 'w');
    }

    /**
     * 關閉
     * @return void
     */
    public function close(): void
    {
        fclose($this->handle);
    }
}