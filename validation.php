<html>
<head>
	<title>jquery_validation</title>
    
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<style type="text/css">

.box{
	margin: 20px;
	background-color: #333333;
	padding: 20px;
	width: 500px;
}
.box{
	margin: 20px;
	background-color: #333333;
	padding: 20px;
	width: 500px;
}
table{
	width: 500px;
}
table tr td
{
	color: white;
	padding-left: 100px;
	text-align: center;
}
table tr th h3{
	color: white;
	text-align: center;
}
.error_msg td{
		height: 12px !important;
		font-size: 18px !important;
		color: red !important;
	}

</style>

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#submit").click(function(){
			var a=$('#fname').val();
			var b=$('#lname').val();
			var c=$('#addr').val();
			var d=$('#contact').val();
			var check=true;

            if (a=="")
             {
             	$('#fmsg').html("Please enter Your Name");
             	check = false;
             }
             else
             {
                 $('#fmsg').html("");
             }

             if (b=="")
             {
             	$('#lmsg').html("Please Enter Your Lastname");
             	check=false;
             }
             else
             {
             	$('#lmsg').html("");
             }

             if (c=="")
              {
              	$('#amsg').html("Enter Your Address");
              	check=false;
              }
              else
              {
              	$('#amsg').html("");
              }

              if (d=="")
              {
              	$('#cmsg').html("Enter Your Contact Number");
              	check=false;
              }
              else
              {
              	$('#cmsg').html("");
              }
              return check;


		});
	});

</script>



</head>
<body>
<div class="container">
<div class="box">
<form action="#" method="post">
<table class="table">
<tr><th colspan="2"><h3>Fill The Form</h3></th></tr>
<tr><td>First Name</td><td><input type="text" id="fname" ></td></tr>
<tr class="error_msg"><td></td><td id="fmsg"></td></tr>

<tr><td>Last Name</td><td><input type="text" id="lname"></td></tr>
<tr class="error_msg"><td></td><td id="lmsg"></td></tr>

<tr><td>Address</td><td><input type="text" id="addr"></td></tr>
<tr class="error_msg"><td></td><td id="amsg"></td></tr>

<tr><td>Contact</td><td><input type="text" id="contact"></td></tr>
 <tr class="error_msg"><td></td><td id="cmsg"></td></tr>
<tr><td colspan="2"><input type="submit" value="submit" role="button" class="btn btn-primary" id="submit"></td></tr><br>
</table>
</form>

</div>
</div>
</body>
</html>



	
