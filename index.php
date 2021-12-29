<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Php site</title>
</head>
<body>
  <div class="container">

  <?php 
  echo "<h1>Welcome to PHP Begineers Syntax</h1>";
  echo "Hello World this is Auro";
  echo "<br>";
  ?>

  <?php 
  echo "Hello World this is Auro";
  echo "<br>";
  //  Single Line Comment

  /*This 
  is a multi line content*/ 
  ?>

<?php 
  $a=10;
  $b=5;

  // Operators in PHP
  echo "<h2>Operators in PHP</h2>";
  echo $a;
  echo "<br>";
  echo $b;
  echo "<br>";
  echo "Sum of two number is ";
  echo $a +$b;
  echo "<br>";

  echo "Difference of two number is ";
  echo $a - $b;
  echo "<br>";

  echo "Product of two number is ";
  echo $a * $b;
  echo "<br>";

  echo "Quotient of two number is ";
  echo $a / $b;
  echo "<br>";

  echo "Reminder of two number is ";
  echo $a % $b;
  echo "<br>";

  echo "<h2>Comparision Operators</h2>";
  echo "The value of a==b is ";
  echo var_dump($a==$b);
  echo "<br>";

  echo "The value of a<=b is ";
  echo var_dump($a<=$b);
  echo "<br>";

  echo "The value of a>=b is ";
  echo var_dump($a>=$b);
  echo "<br>";

  echo "The value of a!=b is ";
  echo var_dump($a!=$b);
  echo "<br>";

  echo "<h2>Increment/Decrement Operators</h2>";

  echo $a++ ;
  echo $b++ ;
  echo ++$a ;
  echo ++$b ;
  
  echo "<br>";

  echo "previous value of a ";
  echo $a;
  echo "<br>";
  echo $a--;
  echo "previous value of b ";
  echo $b;
  echo "<br>";
  echo $b--;
  echo "<br>";
  echo --$a;
  echo "<br>";
  echo --$b;
  echo "<br>";

  echo "<h2>Logical Operators</h2>";
  // and(&&)
  // or(||)
  // xor
  // not(!)
  echo "False and False is ";
  $myvar=(false and false);
  echo var_dump($myvar);
  echo "<br>";

  echo "False and True is ";
  $myvar=(false and true);
  echo var_dump($myvar);
  echo "<br>";

  echo "True and False is ";
  $myvar=(true and false);
  echo var_dump($myvar);
  echo "<br>";

  echo "True and True is ";
  $myvar=(true and true);
  echo var_dump($myvar);
  echo "<br>";


  echo "False or False is ";
  $myvar=(false or false);
  echo var_dump($myvar);
  echo "<br>";

  echo "False or True is ";
  $myvar=(false or true);
  echo var_dump($myvar);
  echo "<br>";

  echo "True or False is ";
  $myvar=(true or false);
  echo var_dump($myvar);
  echo "<br>";

  echo "True or True is ";
  $myvar=(true or true);
  echo var_dump($myvar);
  echo "<br>";

  echo "False xor False is ";
  $myvar=(false xor false);
  echo var_dump($myvar);
  echo "<br>";

  echo "False xor True is ";
  $myvar=(false xor true);
  echo var_dump($myvar);
  echo "<br>";

  echo "True xor False is ";
  $myvar=(true xor false);
  echo var_dump($myvar);
  echo "<br>";

  echo "True xor True is ";
  $myvar=(true xor true);
  echo var_dump($myvar);
  echo "<br>";

  echo "Finished";
  echo "<br>";


  ?>

  <?php 
  // Connecting to database
  // store a connection in a variable
  // It requires 4-parameters::(Host name,User name,password,name of the database)
  $conn= mysqli_connect('localhost','auro','Jmt@1405',"ninjapizza");

  // Check Connection

  if(!$conn){
    echo 'Connection error: ' . mysqli_connect_error();
  }

  // Setting up a query
  $query='SELECT * FROM pizza';

  // MAKE qUERY TO GET RESULTS Note the result expected is not in a proper format

  $results=mysqli_query($conn, $query);

  // Fetch the resulting rows as an array....Associative array
  $pizzas=mysqli_fetch_all($results,MYSQLI_ASSOC);


  // After completion and converting it to an associative array we need to free up the variable(good Practice)
  // Free Results from memory
  mysqli_free_result($results);

  // Close connection to the database
  mysqli_close($conn);

  print_r($pizzas)


  ?>
    <h3>This is my first Php website which the visible part via Inspect Element in the browser.</h3>
  </div>
  
<!--  For Database Connectivity-via Xampp Server and phpmyadmin  -->
   <?php 
    $servername = 'localhost';
    $username = 'root';
    $password = '';
    $db ='testdb';
    // First Create a testdb database http://localhost/phpmyadmin

    // Create connection
    $conn = mysqli_connect($servername, $username, $password,$db);
    
    // // Check connection
    // if (!$conn) {
    //   die("Connection failed: " . mysqli_connect_error());
    // }
    // echo "Connected successfully";

    //  Create a table

    // $sql = "CREATE TABLE MyGuests (
    //  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //  firstname VARCHAR(30) NOT NULL,
    //  lastname VARCHAR(30) NOT NULL,
    //  email VARCHAR(50),
    //  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    //  )";
     
    // Check Creation of Table
    //  if ($conn->query($sql) === TRUE) {
    //    echo "Table MyGuests created successfully";
    //  } else {
    //    echo "Error creating table: " . $conn->error;
    //  }
    
    // Insert Data in the table
    //  $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    //  VALUES ('AURO', 'KAUSHIK', 'AUROKAUSH@example.com')";
    //  if (mysqli_query($conn, $sql)) {
    //      echo "New record created successfully";
    //    } else {
    //      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    //    }

    // Select all the data from the database
    $sql = "SELECT * FROM MyGuests";
      $result = mysqli_query($conn, $sql);
      if (mysqli_num_rows($result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($result)) {
            echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "email: ". "  "  . $row["email"]. "reg_date   " . $row["reg_date"]."<br>";
        }
    } else {
        echo "0 results";
    }
       
     
     $conn->close();
    ?>
</body>
</html>
