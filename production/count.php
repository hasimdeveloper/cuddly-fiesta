<!DOCTYPE html>
<head></head>
<body>
 
   <?php 
//    $serverName = "localhost";
//    $userName = "root";
//    $password = "";
//    $dbName = "crud";
//   $conn = mysqli_connect($serverName,$userName,$password,$dbName);

  // $sql = "SELECT count(id) as total FROM users";
  // $result = mysqli_query($conn,$sql);

      include "db/db.php";

         $gender = "male";
        // $gender = $_REQUEST['gender'];
         $sql = "SELECT count(id) as total FROM users WHERE gender = '$gender'";
       // $sql = "SELECT count(id) as total FROM users";

//execute the query

         $result = $conn->query($sql);


   $values = mysqli_fetch_assoc($result);
   $num_rows = $values['total'];
   echo $num_rows;
   ?>

</body>
</html>