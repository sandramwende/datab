<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>
<style>
body {background-color: #7f8c8d;
	color: black;
	text-align: center;
}
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  color:white;
  background-color: background;
}

</style>


</style>

</head>
<body>
	<h1>Orders </h1>
<!--	<a href="marks.php"><h4 style="color: white"> Add students marks </h4></a><br><br><br>-->

</body>
</html>

<?php

$connection = mysqli_connect("localhost","root","","Students");
$result= mysqli_query($connection,"SELECT *  FROM orders");
echo "<table><tr><th>Order No.</th><th>Amount</th><th>Date</th><tr>";
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
          //echo "Ord no:  " . $row["ord_no"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
          echo "<tr><td> " . $row["ord_no"]. "</td><td>" . $row["purch_amt"] . "</td><td>" . $row["ord_date"] ."<td><tr>";

	}
}
echo "</table>";

$result= mysqli_query($connection,"SELECT SUM(purch_amt) as sum FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT AVG(purch_amt) as avg FROM orders");
if (mysqli_num_rows($result)> 0) 
	while($row = mysqli_fetch_assoc($result)) {
            	echo "Average  Amount : " . $row["avg"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT COUNT(DISTINCT salesman_id) as count FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "number of Salesman : " . $row["count"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT COUNT(ALL grade) as grade FROM customer");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "number of customers who gets at least a gradation for his/her performance. : " . $row["grade"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
$result= mysqli_query($connection,"SELECT MAX(purch_amt) as max FROM orders");
if (mysqli_num_rows($result)> 0) {
	while($row = mysqli_fetch_assoc($result)) {
            	echo "maximum purchase amount of all the orders.: " . $row["max"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}
$result= mysqli_query($connection,"SELECT MIN(purch_amt) as min FROM orders");
if (mysqli_num_rows($result)> 0) {
	//while($row = mysqli_fetch_assoc($result)) {
            	echo "minimum purchase amount of all the orders. " . $row["min"]. "<br><br>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	//}
} 
else {
	echo "No mark ";
}
$result= mysqli_query($connection,"SELECT city,MAX(grade) as max FROM customer GROUP BY city");
if (mysqli_num_rows($result)> 0) {
    echo "highest grade for each of the cities of the customers";
    echo "<table><tr><th>City</th><th>max grade</th></tr>";
	while($row = mysqli_fetch_assoc($result)) {
            	echo "<tr><td>" . $row["city"]. "</td><td>".$row["max"]."</td></tr>";
		//echo "Purchase  Amount : " . $row["sum"]. "<br><br>";
                		//echo "Ord no:  " . $row["sum"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
	}
} 
else {
	echo "No mark ";
}


?>


 $result=mysqli_query($conn,"select sum(purch_amt) as total from orders");
        $values=mysqli_fetch_assoc($result);
        $purch_amt=$values['total'];
        echo"purchase amount";
        echo $purch_amt;

        $sql= "select avg(purch_amt) as total FROM orders";
        $result=mysqli_query($conn,$sql);
        $values=mysqli_fetch_assoc($result);
        $purch_amt=$values['total'];
        echo"avarage";
        echo $purch_amt;

        $sql= "select COUNT(*)FROM salesman ";
        $result=mysqli_query($conn,$sql);
        $values=mysqli_fetch_assoc($result);
        $count=$values['total'];
        echo $count;
        ?>