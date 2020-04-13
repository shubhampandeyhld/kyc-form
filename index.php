

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="index.css">

	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script></head>
<title></title>
</head>
<body >
<div class="header">
<label>KYC -Know your customer</label>
</div>

<div class="mymodal">
    <button class="btn-lg  modalcontent btn-dark w-100"></button>
    
    <button class="rounded-circle bg-info  closemodal">close</button>
</div>


<div class="container  mb-3 mt-3 form-container">
<form  action="" id="myform" method="POST" >
<label class="label" >Name</label>
<input type="text" name="cname"  id="uname"  value="<?php if(isset($_POST['cname'])) echo $_POST['cname'] ?>"><span class="name">Please Enter Your Name</span>
<br>


<label style="margin:0px;" class="label m-0">address</label>
<textarea name="address" id="address" value="<?php if(isset($_POST['address'])) echo $_POST['address'] ?>"></textarea><br>
<label class="label">mail</label>

<input type="text" id="email" name="email"    value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>"><span class="email">Invalid Email address</span><br>
<label class="label">mobile</label>

<input type="text" id="mobo" name="mobo"   value="<?php if(isset($_POST['mobo'])) echo $_POST['mobo'] ?>"><span class="mobo">Invalid Mobile Number</span><br>
<label class="label">addhaar</label>

<input type="text"  id="addhaar" name="addhaar"   value="<?php if(isset($_POST['addhaar'])) echo $_POST['addhaar'] ?>"><span class="addhaar">Please enter your Addhaar Number</span><br>
<label class="label">pan</label>

<input type="text"  id="pan" name="panno"   value="<?php if(isset($_POST['panno'])) echo $_POST['panno'] ?>"><span class="pan">Invalid Pan Number</span><br>
<label class="label">image</label>

<input type="file"  id="image" name="img" value="<?php if(isset($_POST['img'])) echo $_POST['img'] ?>">
<button type="submit" class="btn-outline-success" onclick="return vali()" name="sub" id="sub">Submit</button>
</form>
</div>



<?php 
error_reporting(0);
include('config.php');
if(isset($_POST['sub']))
{

	$username=$_POST['cname'];
	$usermail=$_POST['email'];
	$usermobileno=$_POST['mobo'];
	$useraddress=$_POST['address'];
	$useraddhaarno=$_POST['addhaar'];
	$userpanno=$_POST['panno'];
	$userimage=$_POST['img'];
	$query ="INSERT into kyc  values (null,'$username','$useraddress','$usermail','$usermobileno','$useraddhaarno','$userpanno','$userimage')";

$result =mysqli_query($conn,$query);
if($result){
echo"<script>
$('.mymodal').slideDown('slow');
$('.modalcontent').text('Your Kyc form is Submitted');
$('.closemodal').click(function(){
	$('.mymodal').slideUp('slow')
	})

</script>";
}
else{
	echo "no";
}


	}


	?>
<script type="text/javascript" src="index.js"></script>
</body>
</html>	