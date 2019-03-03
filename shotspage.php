<?php include('head.php');?>

	<div class="">
		<h1 align="center" >OneShot</h1>
		<h6 align="center"><i>Coz Thats All You Get</i></h6>      
	</div>

	<div class="col-md-6 col-md-offset-3" id="msg-panel" style="background-color:lightblue; display: none;" >
		<br> 
		<p id="msg"></p>
		<br>
	</div>

	<div class="col-md-6 col-md-offset-3 form-group">
	    <br>
	    <button class="btn btn-success form-control" id="getshot">Read message!</button>
	    <br>
	</div>


	<div class="col-md-6 col-md-offset-3">
		<br>
		<a href="/oneshot" class="btn btn-primary btn-block">Create your own shot</a>
	</div>


<script>



$(document).ready(function(){
	$("#getshot").click(function(){
		url_code = '<?php echo $_GET['url_code']; ?>';
		var data = 'url_code=' + url_code;
		//console.log(url_code);
		$.ajax({
		  type: "POST",
		  url: "getshot.php",
		  data: data,
		  success: function(msg) {
	  		//console.log(msg);
	  		$('#msg-panel').fadeIn();
		    $('#msg').html(msg);
		    }
		}); 
   });
});

</script>

<?php include('footer.php');?>
