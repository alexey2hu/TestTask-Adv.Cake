<?php

function reverseWithCase($str): string {
    $len = strlen($str);
    $result = '';

    for ($i = 0; $i < $len; $i++) {
        $originalChar = $str[$i];
        $reversedChar = $str[$len - 1 - $i];

        // Сохраняем регистр оригинальной позиции
        if (ctype_upper($originalChar)) {
            $result .= strtoupper($reversedChar);
        } else {
            $result .= strtolower($reversedChar);
        }
    }

    return $result;
}

// Пример использования
$input = 'aBcdEfg';
$output = reverseWithCase($input);
echo $output; // gFedCba