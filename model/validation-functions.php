<?php
/**
 * Validate color
 *
 * @param String color
 * @return boolean
 */

function validColor($color) {
    global $f3;
    return in_array($color, $f3->get('colors'));
}

function validString($animal) {
    if (!empty($animal) && ctype_alpha($animal))
    {
        return true;
    }
    return false;
}

