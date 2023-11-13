<?php

class AdvancedCalculator {
    public function add($a, $b) {
        return $a + $b;
    }

    public function subtract($a, $b) {
        return $a - $b;
    }

    public function multiply($a, $b) {
        return $a * $b;
    }

    public function divide($a, $b) {
        if ($b != 0) {
            return $a / $b;
        } else {
            return "error";
        }
    }

    public function power($base, $exponent) {
        return pow($base, $exponent);
    }

    public function squareRoot($number) {
        if ($number >= 0) {
            return sqrt($number);
        } else {
            return "error";
        }
    }

    public function sin($angle) {
        return sin($angle);
    }

    public function cos($angle) {
        return cos($angle);
    }

    public function tan($angle) {
        return tan($angle);
    }

    public function logarithm($base, $number) {
        return log($number, $base);
    }
}

$calculator = new AdvancedCalculator();

if ($argc < 4) {
    echo "операция 1пер 2пер\n";
    exit(1);
}


$operation = $argv[1];
$arg1 = (float)$argv[2];
$arg2 = (float)$argv[3];


switch ($operation) {
    case 'add':
        $result = $calculator->add($arg1, $arg2);
        break;
    case 'subtract':
        $result = $calculator->subtract($arg1, $arg2);
        break;
    case 'multiply':
        $result = $calculator->multiply($arg1, $arg2);
        break;
    case 'divide':
        $result = $calculator->divide($arg1, $arg2);
        break;
    case 'power':
        $result = $calculator->power($arg1, $arg2);
        break;
    case 'squareRoot':
        $result = $calculator->squareRoot($arg1);
        break;
    case 'sin':
        $result = $calculator->sin($arg1);
        break;
    case 'cos':
        $result = $calculator->cos($arg1);
        break;
    case 'tan':
        $result = $calculator->tan($arg1);
        break;
    case 'logarithm':
        $result = $calculator->logarithm($arg1, $arg2);
        break;
    default:
        echo "Неверная операция. Доступные операции: add, subtract, multiply, divide, power, squareRoot, sin, cos, tan, logarithm\n";
        exit(1);
}

echo "Результат: $result\n";
?>
