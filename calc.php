<?php
if (isset($_POST['depositAmount'])&&(!empty($_POST['depositAmount'])) )
  $depositAmount = $_POST['depositAmount'];
if (isset($_POST['term'])&&(!empty($_POST['term'])))
  $term = $_POST['term'];
if (isset($_POST['percent'])&&(!empty($_POST['percent'])))
  $percent = $_POST['percent'];
if (isset($_POST['sum'])&&(!empty($_POST['sum'])))
  $sum = $_POST['sum'];
if (isset($_POST['startDate'])&&(!empty($_POST['startDate'])))
  $startDate = $_POST['startDate'];
if (isset($_POST['select'])&&(!empty($_POST['select']))){
  $select = $_POST['select'];
};

if ($select == 1)
  $term = $term * 12;

for ($i=0; $i < $term; $i++) {
  $sum = $sum + ($sum + $depositAmount) * 30 * (($percent / 100) / 365);
};
$sum = round($sum,2);

echo json_encode([$sum]);
?>
