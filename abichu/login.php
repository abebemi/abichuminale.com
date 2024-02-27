<?php

$NAME=" ";

$ID_NUMBER=" ";
$err=" ";

//database connection

$conn= mysqli_connect("localhost","root","", "dbd");

if(isset($_POST['LOGIN'])){

$NAME=mysqli_real_escape_string($conn, $_POST['name']);

$ID_NUMBER=mysqli_real_escape_string($conn,$_POST['id_number']);

$sql="select *from abichuu where NAME='".$NAME."' and

ID_NUMBER='".$ID_NUMBER."' limit 1";

$result = mysqli_query($conn,$sql);

if(empty($_post["NAME"])) {

$err="username is required!";

}else  {   $NAME =($_POST["NAME"]);
}

if(empty($ID_NUMBER)) {

$err="password is required!";
echo " password is required!";
}
else if(mysqli_num_rows($result)==1){
    header('location:home.php');
    }
    else{
    $err="username or password is is incorrect!";
    }
}
?>

<html>

<head>
<tittle>  </tittle>
<style>
form{
background-color:wheat;
  max-width:200px;
  margin:2rem auto;
  border:2px solid burlywood ;
  padding:2rem;
  border-radius: 10%;
}
.ab{
  background-color: white;
  width: 85%;
  border-radius: 4%;
}
.err{
  color: red;
}
.button{
width: 85%;
}
</style>
</head>
<body>
<h1 style="text-align: center;">LOGIN Here</h1>
<div class="err">
<?php echo $err;?>
</div>
<form action="login.php" method="post">
  <div class="ab">
<input type="text" name="name" id="" placeholder ="Enter username"></br>
<input type="id_number" name="id_number" id="" placeholder="Enter password"></br>
<input type="submit" value="LOGIN" name="LOGIN"></br>
Not yet a member? <a href="soderestore.html" style="color:blue;text-decoration: none;">singup</a>
</form>
</div>
</body>
</html>