<?php
function normalize($rows)
{
    $normalized = [];
    foreach ($rows as $key => $value) {
        $normalized['byId'][$value['id']] = $value;
        $normalized['all'][] = +$value['id'];
    }
    
    return $normalized;
}
