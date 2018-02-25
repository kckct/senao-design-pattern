<?php

namespace App\ChainOfResponsibility;

/**
 * Class VerificationCodeChecker
 * @package App\ChainOfResponsibility
 */
class VerificationCodeChecker extends AbstractChecker
{
    /**
     * 驗證身分證檢查碼是否正確
     * @param string $id
     * @return bool
     */
    protected function processCheck(string $id): bool
    {
        $sum = 0;

        for ($i = 0; $i < strlen($id); $i++) {
            if ($i === 0) {
                // 英文字母
                $mappingNum = $this->getMappingNum($id[$i]);
                // 加權計算
                $sum = ($mappingNum / 10) % 10 + ($mappingNum % 10) * 9;
            } else if ($i === strlen($id) - 1) {
                // 最後一碼
                $sum += intval($id[$i]);
            } else {
                // 其他加權計算: 乘上 8,7,6,5,4,3,2,1
                $sum += intval($id[$i]) * (9 - $i);
            }
        }

        return $sum % 10 === 0;
    }

    /**
     * 取得英文轉換碼
     * @param string $first
     * @return string
     */
    private function getMappingNum(string $first): string
    {
        return [
            'A' => '10', 'B' => '11', 'C' => '12', 'D' => '13', 'E' => '14', 'F' => '15',
            'G' => '16', 'H' => '17', 'J' => '18', 'K' => '19', 'L' => '20', 'M' => '21',
            'N' => '22', 'P' => '23', 'Q' => '24', 'R' => '25', 'S' => '26', 'T' => '27',
            'U' => '28', 'V' => '29', 'X' => '30', 'Y' => '31', 'W' => '32', 'Z' => '33',
            'I' => '34', 'O' => '35'
        ][$first];
    }
}