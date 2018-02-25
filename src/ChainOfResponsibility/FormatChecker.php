<?php

namespace App\ChainOfResponsibility;

/**
 * Class FormatChecker
 * @package App\ChainOfResponsibility
 */
class FormatChecker extends AbstractChecker
{
    /**
     * 驗證身分證格式是否正確
     * @param string $id
     * @return bool
     */
    protected function processCheck(string $id): bool
    {
        return preg_match('/^[A-Z]{1}[1-2]{1}[0-9]{8}+$/', $id);
    }
}