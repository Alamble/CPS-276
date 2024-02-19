<?php

class Calculator {
    public function calculate($operator, $operand1, $operand2) {

        if (!in_array($operator, ['+', '-', '*', '/'])) {
            throw new InvalidArgumentException("Invalid operator");
        }

        if (!is_numeric($operand1) || !is_numeric($operand2)) {
            throw new InvalidArgumentException("Invalid, must be numeric values");
        }

        if ($operator == '/' && $operand2 == 0) {
            throw new InvalidArgumentException("Cannot divide by 0");
        }

        if ($operator === null || $operand1 === null || $operand2 === null) {
            throw new InvalidArgumentException("Need to fulfill values");
        }

        switch ($operator) {
            case '+':
                $result = $operand1 + $operand2;
                break;
            case '-':
                $result = $operand1 - $operand2;
                break;
            case '*':
                $result = $operand1 * $operand2;
                break;
            case '/':
                $result = $operand1 / $operand2;
                break;
        }

        return $result;
    }
}

?>

