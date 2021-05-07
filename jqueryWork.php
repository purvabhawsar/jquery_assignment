<html>
<head><title></title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<script type="text/javascript">
	
	$(document).ready(function(){
		$("#btn").click(function(){
			$(".hs").hide(1000)
		});
		$("#btn1").click(function(){
			$(".hs").show(1000)
		});

		$("#btn3").click(function(){
			$(".f").fadeIn(2000)
		});
		$("#btn3").click(function(){
			$(".f").fadeOut(4000)
		});
		$("#a1").click(function(){
			$(".a").animate({right:'800px'})
		});
		$("#a2").click(function(){
			$(".a").animate({height:'150px',width:'150px',left:'500px',opacity:'0.7'})
		})
		$("#a3").click(function(){
			$(".a").animate({height:'toggle'})
		})
		$("#chn").click(function(){
			$('.colr').css('background-color','blue')
		});
		$("#e1").click(function(){
			alert("This is onclick event.This button is run on click");
		})
		$("#e2").mouseenter(function(){
			alert("This event is run when you enter mouse on button");
		})
		$("#e3").keydown(function(){
			alert("This event run when tour click down button on keyboard");
		})
		$("#e4").keyup(function(){
			alert("This event is run when you push the up button on keyboard");
		})
		$("#e5").dblclick(function(){
			alert("This event is run on double click")
		})
	



	});




</script>



<body>
<div class="container">
<h2>Show / Hide </h2>

<div class="hs"></div>
<center><button id="btn"class="btn btn-danger m-3">Hide</button>
<button  id="btn1" class="btn btn-success m-3">Show</button></center>
<hr><hr>
<h2>FadeIn / FadeOut Slider</h2>
<center><button id="btn3" class="btn btn-dark">About Programming Languages</button></center>
<div class="f">
<h5>
	A programming language is a formal language comprising a set of instructions that produce various kinds of output.
	 Programming languages are used in computer programming to implement algorithms. 
	 Most programming languages consist of instructions for computers.

</h5>

	
</div>
<hr><hr>
<h2>Animations</h2>

<center><button class="btn btn-info" id="a1">Shift the box</button>
<button class="btn btn-info" id="a2"> Shift with blur</button>
<button class="btn btn-info" id="a3"> close and open</button></center><br><br>

<div class="a"></div>
<br><br><br><br><br><br>
<hr><hr>
<h2>colour Change</h2>

<center><button  id="chn"class="btn btn-warning text-light">Change The color</button><center></center>
<div class="colr"></div>
<br><br><hr><hr>
<h2> Click Events</h2>
<button id="e1" class="btn btn-secondary">OnClick</button>
<button id="e2" class="btn btn-secondary">MouseEnter</button>
<button id="e3"class="btn btn-secondary">KeyDown</button>
<button id="e4"class="btn btn-secondary">KeyUp</button>
<button id="e5"class="btn btn-secondary">dblClick</button>

<br><br>
<hr><hr>




</div>

	
</body>
</html>