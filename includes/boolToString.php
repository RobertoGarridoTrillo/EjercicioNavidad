<?php

function boolToString(bool $bool):string {
    return $bool ? "true" : "false";
}

function stringToBool(String $string):bool {
    return $string == strtolower(trim("true"));
}