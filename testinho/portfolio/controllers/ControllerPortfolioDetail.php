<?php
function getPortfolioDetail($con, $todo) {
    $rt = mysqli_query($con, "SELECT * FROM portfolio where id='$todo'");
    $tr = mysqli_fetch_array($rt);
    $porti_title = "$tr[porti_title]";
    $porti_detail = "$tr[porti_detail]";
    $porti_desc = "$tr[porti_desc]";
    $upadated_at = "$tr[upadated_at]";
    $ufile = "$tr[ufile]";
    
    return array(
        'porti_title' => $porti_title,
        'porti_detail' => $porti_detail,
        'porti_desc' => $porti_desc,
        'upadated_at' => $upadated_at,
        'ufile' => $ufile
    );
}

// Usage:
$portfolioDetail = getPortfolioDetail($con, $todo);
$porti_title = $portfolioDetail['porti_title'];
$porti_detail = $portfolioDetail['porti_detail'];
$porti_desc = $portfolioDetail['porti_desc'];
$upadated_at = $portfolioDetail['upadated_at'];
$ufile = $portfolioDetail['ufile'];
?>
