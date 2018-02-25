<?php

namespace App\ChainOfResponsibility;

/**
 * Interface CheckerInterface
 * @package App\ChainOfResponsibility
 */
interface CheckerInterface
{
    /**
     * 設定下個驗證
     * @param AbstractChecker $checker
     * @return CheckerInterface
     */
    public function setNextChecker(AbstractChecker $checker): CheckerInterface;

    /**
     * COR 驗證流程
     * @param string $id
     * @return bool
     */
    public function check(string $id): bool;
}