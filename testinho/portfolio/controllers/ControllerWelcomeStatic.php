<?php

function getStaticData($con) {
    $rr = mysqli_query($con, "SELECT * FROM static");
    if ($rr) {
        $r = mysqli_fetch_row($rr);
        $stitle = $r[1];
        $stext = $r[2];
        $ufile = $r[3];
        
        return [$stitle, $stext, $ufile];
    } else {
        // Lidere com erros na consulta SQL
        return null;
    }
}

// Usage:
$data = getStaticData($con);
if ($data) {
    [$stitle, $stext, $ufile] = $data;
    // Use the variables $stitle, $stext, $ufile as needed
}

//var_dump($r);
