
<?php 
// this php script is for connecting with database 
// data have to fetched from local server 
define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// function to connect with database having  
// argument host and user name 
//$DB_DATABASE ="db";
$conn = mysqli_connect(DB_SERVER , DB_USER, DB_PASSWORD);
///// mysqli_select_db($conn,'test');
//$q ="insert into student values('fff','ffvf66');";
	//$w= mysqli_query($conn,$q);

if(!$conn) { 
   die("Database connection failed: " . mysql_error()); 
}else{
   $db_select = mysqli_select_db($conn,"data");
   if (!$db_select) { 
       die("Database selection failed: " . mysqli_error()); 
   } 
   else{
//$query="select *from users";
   	//echo"<li>.connected to".mysqli_get_server_info($conn)."</li>";
   /*	echo "<h1>user data</h1>";
echo "<table border=4>";
echo"<tr>";
echo"<th>Fname</th>";
echo"<th>lname</th>";
echo"<th>email</th>";
echo"<th>password</th>";
echo"<th>registration</th></tr>";

   	$result=mysqli_query($conn,$query);

   	   while($row =mysqli_fetch_assoc($result))
{
echo"<tr><td>".$row['f_name']."</td>";
echo"<td>".$row['l_name']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".($row['password'])."</td>";
echo"<td>".$row['registration date']."</td></tr>";

   	}
   }*/
}}
	?>
	
