<?php

/* Change database details according to your database */
$dbConnection = mysqli_connect('localhost', 'root', '', 'students'); 
       

mysqli_autocommit($dbConnection, false);

$flag = true;

$query1 = "INSERT INTO payment(ord_no ,purch_amt, P_DATE, customer_id) VALUES ('70061' ,'678.9', '2012-12-30', '3002')";
$query2 = "INSERT INTO orders(purch_amt, ord_date, customer_id, salesman_id) VALUES ('678.9', '2012-11-20', '3002', '5005')";

$result = mysqli_query($dbConnection, $query2);

if (!$result) {
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
    echo "All queries were executed successfully";
} else {
	mysqli_rollback($dbConnection);
    echo "All queries were rolled back";
} 

mysqli_close($dbConnection);

?>




