<?php   
    session_start();
	?>
<html>
    <head>
    
  <style>
     body {
           margin: 0;
           padding: 0;
          
            }
     .div1{
         padding-left: 3%;
         padding-top: 2%;
     }
  </style>
 </head>
 <body>

 <div class="div1">
 
<?php

    $con = mysqli_connect("localhost","root","","practical-25");

   if(isset($_POST['Samsungm21s']) or isset($_POST['phone']) or isset($_POST['DellLaptop'])  or isset($_POST['LanovoTab-7'])  or isset($_POST['NikonCamera']) or isset($_POST['mobile']))
   {
      $item = $_SESSION['item'];
	  
	  if($_SESSION['username']== 'shubham147')
	  {
		  $updt = "UPDATE bill SET cname='UPADHYAY SHUBHAM',cid='196490316147' WHERE item='$item'";
		  $result= mysqli_query($con,$updt) or die(mysqli_error($con));
	  }
	  
	  if($_SESSION['username']== 'hpjagad')
	  {
		  $updt = "UPDATE bill SET cname='HARDIK JAGAD',cid='123456789102' WHERE item='$item'";
		  $result= mysqli_query($con,$updt) or die(mysqli_error($con));
	  }
      $cmd = "SELECT * FROM bill WHERE item='$item'";
      $result= mysqli_query($con,$cmd) or die(mysqli_error($con));


if(!$con)
{                
	echo '<script>alert("error in database connection")</script>';
}
while($row=mysqli_fetch_array($result))
{
?>
    <center>
  <h1 style="color: green;"> &emsp;&emsp;<i>Payment Details </i> </h1>
  </center>
<table border="3" cellspacing="0" align="center">
<tr>

<tr>
<td  align="left" height="35px" width="260px"><br>
   <b> Payment Method <br/></b></td>
 
   <td align="left" height="35px" width="250px"><br>
   <?php echo $row['method']; ?>
</tr>

<tr>
<td  align="left" height="35px" width="260px"><br>
   <b> Email <br/></b></td>
 
   <td align="left" height="35px" width="250px"><br>
   <b> priyrajsinh552@gmail.com </b>
</tr>

<tr>
<td  align="left" height="35px" width="260px"><br>
   <b> Mobile <br/></b></td>
 
   <td align="left" height="35px" width="250px"><br>
   <?php echo $row['mobile']; ?>
</tr>

<tr>
<td  align="left" height="35px" width="260px"><br>
   <b> Item <br/></b></td>
 
   <td align="left" height="35px" width="250px"><br>
   <?php echo $row['item']; ?>
</tr>

<tr>
<td  align="left" height="35px" width="260px"><br>
   <b> Amount <br/></b></td>
 
   <td align="left" height="35px" width="250px"><br>
   <?php echo $row['amount']; ?>
</tr>

<?php
}
   }
?>

</table><br/><br/>
<form action="main.html">
<center>
 <input style="font-size: 22px; width: 150px; height: 55px;" type="submit" name="continue" value="Continue">
  </method>
<br/>   <h2> Prepared By :- Upadhyay Shubham </h2>
        <h2> Prepared By :- Shah Jainil </h2>
</center>
</div>
</body>
</html>






    








