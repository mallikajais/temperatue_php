<?php
if(isset ($_POST['submit']))
{
    $temp=$_POST['temperature'];
    $deg=$_POST["D"];
    if($deg=='Celsius'){
        $result1=$temp*9/5+32;
        // echo $result1;
    }
    else{
        $result1=($temp-32)*5/9;
        // echo $result1;
    }
    
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Temperature Converter</title>
	<style type="text/css">
	.bgimg{
		background-image: url('w1.jpg');
		width: 100%;
		height: 71vh;
		border-radius: 10px;
		background-size: cover;
		background-repeat: no-repeat;margin-top: 40px;
	}
	.btn{
	  font-size: 30px;
	  text-align: center;
	  color:#3F51B5;
	  background-color:#dcdff3;
	  border: 2px solid #3F51B5;
	  border-radius: 15px;
	  padding:10px;
	  }
	</style>
</head>
<body style="background-color: #2196f317">
	<div class="container">
		<div class="text-center"><h1 style="text-align: center;padding-top: 20px;color: white;padding-bottom:20px;background-image: linear-gradient(#3f51b5, #2196f324);border-radius: 10px;font-size: 50px;"><b>Temperature Converter</b></h1></div>
		<div class="container bgimg">
			<div class="container" style="background-image: linear-gradient(#3F51B5, #ffeb3b0f);width: 70%;height: 65vh;margin-left:15%;border-radius: 10px;padding-top: 37px; ">
				<form method="POST">
					<div style="padding-top: 30px;text-align: center;">
						<label  style=" padding-top: 25px;font-size: 35px;text-align: center;color: white;"> Degree - </label>
						<select style="margin-top: 20px;border-radius: 10px;border:2px solid #3F51B5;width: 20%;height: 5vh;" name="D">
							<option value="Fahrenheit" style="font-size:21px;">Fahrenheit</option>
					  		<option value="Celsius" style="font-size:21px;">Celsius</option>
						</select>
					</div>
					<div style="padding-top: 30px; text-align: center;">
						<label style="margin-top: 40px;font-size: 35px;color: white;"> Temperature - </label>
						<input type="number"  name="temperature" style="border-radius: 10px;border:2px solid #3F51B5;height: 5vh;">
					</div>
					<div style="padding-top: 30px;text-align: center;">
						<label style="color: white; font-size:35px;"> Result - </label>
						<input type="number"   style="padding: 20px;border-radius: 10px;border:2px solid #3F51B5;"  value="<?php echo $result1 ?>"/>
					</div>
					<div style="padding-top: 50px;text-align: center;">
						<input type="submit" name="submit" style="border-radius: 10px;border:2px solid #3F51B5;height: 5vh;" >
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>



 





