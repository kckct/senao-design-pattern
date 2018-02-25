<?php

namespace App\ChainOfResponsibility;

/**
 * Class AbstractChecker
 * @package App\ChainOfResponsibility
 */
abstract class AbstractChecker implements CheckerInterface
{
    /** @var CheckerInterface */
    protected $nextChecker;

    /**
     * 設定下個驗證
     * @param AbstractChecker $checker
     * @return CheckerInterface
     */
    final public function setNextChecker(AbstractChecker $checker): CheckerInterface
    {
        return $this->nextChecker = $checker;
    }

    /**
     * COR 驗證流程
     * @param string $id
     * @return bool
     */
    final public function check(string $id): bool
    {
        if (!$this->processCheck($id)) {
            return false;
        }

        if (!$this->nextChecker) {
            return true;
        }

        return $this->nextChecker->check($id);
    }

    /**
     * 驗證身分證
     * @param string $id
     * @return bool
     */
    abstract protected function processCheck(string $id): bool;
}