<?php
function convertTypes($schema, $rows)
{
    foreach ($rows as $rowsKey => $rowsValue) {
        foreach ($rows[$rowsKey] as $rowKey => $rowValue) {
            if ($schema[$rowKey] == 'json') {
                $rows[$rowsKey][$rowKey] =
                    json_decode($rowValue);
            } else {
                $rows[$rowsKey][$rowKey] =
                    $schema[$rowKey]($rowValue);
            }
        }
    }
    
    return $rows;
}
