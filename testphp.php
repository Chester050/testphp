<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title></title>
</head>

<body>

  <h1> Hi </h1>

  <?php

  $customer = "Adam";
  $orderId = [];
  $itemInOrder['Order'] = [];
  $userId_sql = "SELECT USERID FROM TBL_CUSTOMERS WHERE NAME = '$customer'";
  $resultId = $conn->query($userId_sql);
  $user = $resultId->fetch_assoc();

  foreach ($user as $theUser);

  $orderId = findOrderIdForUser($theUser['USERID']);


  for ($x = 0; $x < count($orderId); $i++) {
    $idAndItem = array($id[$orderId] => itemInOrder($orderId[$i]));

    $itemInOrder['Order'] += $idAndItem;
  }


  $lastKey = end(array_keys($itemInOrder['Order']));

  echo "$customer has purchase";
  foreach ($itemInOrder['Order'] as $id => $item) {
    if ($id == $lastKey) {
      echo "and $item";
    } else {
      echo $item . ',';
    }
  }





  function itemInOrder($orderId)
  {
    $item = array();

    $select_item = "SELECT ITEM FROM TBL_TRANSACTIONS WHERE ORDERID = '$orderId'";
    $item_result = $conn->query($select_item);


    while ($row = $item_result->fetch_assoc()) {
      $item[] = $row['ITEM'];
    }

    return $item;
  }





  function findOrderIdForUser($id)
  {
    $orderId = array();
    $orderId_sql = "SELECT ORDERID FROM TBL_ORDERS WHERE USERID = '$id'";
    $resultId = $conn->query($orderId_sql);

    while ($row = $resultId->fetch_assoc()) {
      $orderId[] = $row['ORDERID'];
    }

    return $orderId;
  }

  ?>