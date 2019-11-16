<!DOCTYPE html>
<html>
<head>
<title>order system</title>

</head>
<style>
 body {background-color: gray;
                text-align: center;
        }
table ,th,td{
        border: 1px solid black;
  border-collapse: collapse;
  color:white;
  background-color: background;}
</style>
</html>

<?php

//first question
         $connection=mysqli_connect("localhost","root","","students");
         $result=mysqli_query($connection, "SELECT * FROM orders");
         echo "ord no ,Date ,Amount";
         if (mysqli_num_rows ($result)>0) {
                 # code...
                while ($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "Ord no:  " . $row["ord_no"]. " Amount:  " . $row["purch_amt"] . "Date :  " . $row["ord_date"] ."<br><br>";
                }
         }

//second question
         $result=mysqli_query($connection, "SELECT SUM(purch_amt) as sum FROM orders");
         if (mysqli_num_rows($result)>0) {
                 # code...
                while($row = mysqli_fetch_assoc($result)) {
                        # code...
                        echo "purchase Amount:" .$row["sum"]. "<br><br>";


                }
         }

//third question
         $result=mysqli_query($connection, "SELECT AVG(purch_amt) as avg FROM orders");
         if (mysqli_num_rows($result)>0) {
                 # code...
                while ($row=mysqli_fetch_assoc($result)) {
                        # code...
                        echo "average is:" .$row["avg"]. "<br><br>";
                }
         }
 //fourth question
         $result=mysqli_query($connection, "SELECT COUNT(DISTINCT salesman_id) as count FROM orders");
         if (mysqli_num_rows($result)>0) {
                 # code...
                while ($row=mysqli_fetch_assoc($result)) {
                        # code...
                        echo "count of saleman_id:" .$row["count"]. "<br><br>";
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
               
        }
        echo "</table> <br>";
} 
else {
        echo "No mark ";
}
   //ninth question

   $result=mysqli_query($connection, "SELECT customer_id, MAX(purch_amt) as max FROM orders GROUP BY customer_id");
    echo "<table><tr><th>customer_id</th><th>max purch_amt</th></tr>";
   if (mysqli_num_rows($result)>0) {
            # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["customer_id"]."</td><td>".$row["max"]. "</td></tr>";
        }
        echo "</table> <br>";
    } 

//tenth question
    $result=mysqli_query($connection, "SELECT customer_id,ord_date, MAX(purch_amt) as max FROM orders GROUP BY customer_id");
     echo "<table><tr><th>customer_id</th><th>order date</th></tr>";
     if (mysqli_num_rows($result)>0) {
             # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["customer_id"]. "</td><td>" .$row["ord_date"]. "</td><td>" .$row["max"]. "</td></tr>";
        }
        echo "</table> <br>";
     }
//eleventh question
  $result=mysqli_query($connection, "SELECT ord_date,salesman_id, MAX(purch_amt) as max FROM orders WHERE ord_date='2012-08-17' GROUP BY salesman_id");
  echo "<table><tr><th>customer_id</th><th>order date</th></tr>";
  if (mysqli_num_rows($result)>0) {
          # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
        
        echo "<tr><td>" .$row["ord_date"]. "</td><td>" .$row["salesman_id"]. "</td><td>" .$row["max"]. "</td></tr>";
  }
   echo "</table> <br>";

}

//twelveth question
$result=mysqli_query($connection, "SELECT ord_date,customer_id, MAX(purch_amt) as max FROM orders WHERE purch_amt > '2000' GROUP BY customer_id ");
echo "<table><tr><th>ord_date</th><th>customer_id</th></tr>";
if (mysqli_num_rows($result)>0) {
        # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["ord_date"]. "</td><td>" .$row["customer_id"]. "</td><td>" .$row["max"]. "</td></tr>";
        }
        echo "</table> <br>";
}

//thirteenth question
 $result=mysqli_query($connection, "SELECT ord_date,customer_id, MAX(purch_amt) as max FROM orders WHERE purch_amt BETWEEN '2000' AND '6000' GROUP BY customer_id");
 echo "<table><tr><th>ord_date</th><th>customer_id</th></tr>";
 if (mysqli_num_rows($result)>0) {
                                     # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["ord_date"]. "</td><td>" .$row["customer_id"]. "</td><td>" .$row["max"]. "</td></tr>";   
        }
        echo "</table> <br>";
 }

//fifth question
  $result=mysqli_query($connection, "SELECT ord_date,customer_id, MAX(purch_amt) as max FROM orders WHERE customer_id BETWEEN '3002' AND '3007' GROUP BY customer_id");
 echo "<table><tr><th>ord_date</th><th>customer_id</th></tr>";
 if (mysqli_num_rows($result)>0) {
         # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["ord_date"]. "</td><td>" .$row["customer_id"]. "</td><td>" .$row["max"]. "</td></tr>";   
        }
        echo "</table> <br>";
 }

 //seventeenth question

  $result=mysqli_query($connection, "SELECT salesman_id, MAX(purch_amt) as max FROM orders WHERE salesman_id BETWEEN '5003' AND '5008' GROUP BY salesman_id");
 echo "<table><tr><th>salesman_id</th></tr>";
 if (mysqli_num_rows($result)>0) {
         # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["salesman_id"]. "</td><td>" .$row["max"]. "</td></tr>";   
        }
        echo "</table> <br>";
 }
 
 //eighteenth
 $result= mysqli_query($connection,"SELECT COUNT(*) as count  FROM orders WHERE ord_date='2012-08-17'");
  echo "<table><tr><th>orders</th></tr>";
if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["count"]. "</td></tr>";
}echo "</table><br>";
}

 //nineteenth question
  $result= mysqli_query($connection,"SELECT COUNT(*) as count,city as city FROM salesman WHERE city != '' GROUP BY city");
  echo "<table><tr><th>city</th></tr>";
if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['city']." </td><td>" . $row["count"]. "</td></tr>";
}echo "</table><br>";
}

//twentyoneth
 $result=mysqli_query($connection, "SELECT ord_date,customer_id, COUNT(salesman_id) as count FROM orders GROUP BY ord_date");
echo "<table><tr><th>ord_date</th><th>customer_id</th></tr>";
 if (mysqli_num_rows($result)>0) {
         # code...
        while ($row=mysqli_fetch_assoc($result)) {
                # code...
                echo "<tr><td>" .$row["ord_date"]. "</td><td>" .$row["customer_id"]. "</td><td>" .$row["count"]. "</td></tr>";   
        }
        echo "</table> <br>";
 }
//twentytwo
 $result= mysqli_query($connection,"SELECT COUNT(*) as count FROM item_mast WHERE
 PRO_PRICE>='350'");
  echo "<table><tr><th>item_mast</th></tr>";
if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>" . $row["count"]. "</td></tr>";
}echo "</table><br>";
}

 //twentythreeth
 $result= mysqli_query($connection,"SELECT PRO_COM, AVG(PRO_PRICE) as avg FROM item_mast GROUP BY PRO_ID");
  echo "<table><tr><th>PRO_COM</th></tr>";
if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['PRO_COM']." </td><td>" . $row["avg"]. "</td></tr>";
}echo "</table><br>";}

//twentyfive
$result= mysqli_query($connection,"SELECT DPT_CODE, COUNT(*) as count FROM emp_department GROUP BY DPT_CODE");
  echo "<table><tr><th>DPT_CODE</th></tr>";
if (mysqli_num_rows($result)> 0) {
        while($row = mysqli_fetch_assoc($result)) {
                echo "<tr><td>".$row['DPT_CODE']." </td><td>" . $row["count"]. "</td></tr>";
}echo "</table><br>";
}
       ?>