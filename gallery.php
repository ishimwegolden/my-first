<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.row{
			width: 100%;
			height:15%;
			float:left;
			
		}
		.column img{
			width: 20%;
			height:15%;
			float:left;
			padding:2%;
			}
	</style>
</head>
<body>

<div class="row" style="float:left;">
	<div class="column">
		<img src="m2.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
	<img src="m4.jpg" style="width: 20%; height: 3%;" onclick="myFunction(this);">
	</div>

	<div class="column">
		<img src="m6.jpg" onclick="myFunction(this);">
	</div>

	<div class="column">
		<img src="m3.png" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="10.jpg" onclick="myFunction(this);">
	</div>
	
	<div class="column">
		<img src="serena9.jpg" style="width: 16rem; height: 9.3rem;" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="image7.jpg" style="height: 9.3rem;" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="3.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="food2.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="food3.jpg" onclick="myFunction(this);">
	</div>
		<div class="column">
		<img src="food4.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="food6.jpeg"onclick="myFunction(this);">
	</div>
</div>
	<div class="row" style="float:left">
	<div class="column">
		<img src="clema2.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="clema.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="irise.jpg" style="width: 19%; height: 11rem;" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="gabo.jpg" style="width: 19%; height: 11rem;" onclick="myFunction(this);">
	</div>
	<div class="koko" style="float:left">
	<div class="column">
		<img src="kiko.jpg" style="width: 19%; height: 11rem;" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="kikoki.jpg" style="width: 19%; height: 11rem;"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="wawew.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="wawwww.jpg"onclick="myFunction(this);">
	</div>
	<div class="row" style="float: left">
<div class="column">
		<img src="meet.jpeg" style="width: 19%; height: 11rem;"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="kiki3.jpg" onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="kiki4.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="kiki5.png"onclick="myFunction(this);">
	</div>
	<div class="row" style="float: left">
	<div class="column">
		<img src="serena8.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="waww.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="wed.jpg"onclick="myFunction(this);">
	</div>
	<div class="column">
		<img src="waw.jpg" onclick="myFunction(this);">
		</div>
	
</div>
<div class="container">
	<span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
	<img id="expandImg" style="width:100%">
	<div id="imgtext"></div>
</div>
</body>
<script>
	function myFunction(imgs) {
  var expandImg = document.getElementById("expandedImg");
  var imgText = document.getElementById("imgtext");
  expandImg.src = imgs.src;
  imgText.innerHTML = imgs.alt;
  expandImg.parentElement.style.display = "block";
}
</script>
</html>