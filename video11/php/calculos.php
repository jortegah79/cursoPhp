<?php

function calculo($n1, $n2, $op)
{
    if (!strcmp($op, "suma")) {
        return $n1 + $n2;
    }
    if (!strcmp($op, "resta")) {
        return $n1 - $n2;
    }
    if (!strcmp($op, "multiplicacion")) {
        return $n1 * $n2;
    }
    if (!strcmp($op, "division")) {
        if ($n1 == 0 || $n2 == 0) {
            return "   ERROR   ";
        }
        else {
            return $n1 / $n2;
        }

    }
    if (!strcmp($op, "modulo")) {
        if ($n1 == 0 || $n2 == 0) {
            return "   ERROR   ";
        }
        else {
            return $n1 % $n2;
        }
    }
    if (!strcmp($op, "incremento")) {

        return ++$n1;
    }


    if (!strcmp($op, "decremento")) {

        return --$n1;
    }
    if (!strcmp($op, "potencia")) {
        return pow($n1,$n2);
    }




}