<?php
function quote($value) {
    if ($value) {
        return "'$value'";
    } else {
        return 'null';
    }
}
