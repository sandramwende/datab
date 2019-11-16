<?php

/* Change database details according to your database */
$dbConnection = mysqli_connect('localhost', 'root', '', 'students');
    $ordno = $_POST['order'];
    $amount = $_POST['amount'];
  //  echo $ordno;
mysqli_autocommit($dbConnection, false);

$flag = true;

$query1 = "INSERT INTO payment(ord_no ,purch_amt, P_DATE, customer_id) VALUES ($ordno ,$amount, '2012-12-30', '3002')";
$query2 = "INSERT INTO orders(purch_amt, ord_date, customer_id, salesman_id) VALUES ($amount, '2012-11-20', '3002', '5005')";
$query2="SELECT * FROM orders WHERE ord_no = $ordno";
$result = mysqli_query($dbConnection, $query2);

if (!mysqli_num_rows($result)> 0) {
$flag = false;
    echo "Error details: " . mysqli_error($dbConnection) . ".";
}

$result = mysqli_query($dbConnection, $query1);

if (!$result) {
$flag = false;
    echo "Error details: " . mysqli_error($dbConnection) . ".";
}

if ($flag) {
    mysqli_commit($dbConnection);
    header("location:orders.php");
   // echo "All queries were executed successfully";
} else {
mysqli_rollback($dbConnection);
    echo "All queries were rolled back";
}

mysqli_close($dbConnection);

?>
