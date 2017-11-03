<?php
$n = $_POST['companyName'];
$g = $_POST['description'];

$j = file_get_contents('profile.json');
$d = json_decode($j, true);

if (count($d) == 0){ $c = 1; }
else { $c = count($d) + 1; }

$k = "Company".$c;

$a = array(
	"companyName" => $n,
	"description" => $g
);

$d[$k] = $a;

$j = json_encode($d);
file_put_contents('profile.json', $j);

header('location:profile.php');
?>