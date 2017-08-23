<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"> 
    <meta name="description" content="Oneshot - Your Secrets are safe">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/1.7.1/clipboard.min.js"></script>
    
  </head>

<body style="background-color:#ffffe6;">s
  <div class="page-header">
    <h1 align="center" >OneShot</h1>
    <h6 align="center"><i>Coz Thats All You Get</i></h6>      
  </div>
<div class="col-md-6 col-md-offset-3 form-group">

<textarea class="form-control" rows="3" id="shotmsg"></textarea>

<button class="btn btn-danger form-control" id="submitshot">Make a shot</button>
</div>

<div class="panel-group col-md-6 col-md-offset-3" style="display:none;" id="linkdiv">
	

<h4 align="center" id="linkshare"></h4>
<button  display="block" class="btn btn-primary btn-block" id="btn" data-clipboard-target="#linkshare">Copy Link</button>	
</div>

<div class="panel-group col-md-6 col-md-offset-3" id="accordion">
<div class="panel panel-default">
  <div class="panel-heading">
	<h3 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What the fuck is this?</a>
	</h3>
  </div>
  </div>
  <div id="collapse1" class="panel-collapse collapse">
	<div class="panel-body"><h5>
		Imagine if you wanted to tell a secret, or something That might land you in trouble, 
		Oneshot ALllows you to Write Short Messages and send them to people so that they can read it. The Fun Part is that
		very true to its name, shots written on OneShot can only be viewed once. They delete automatically once they have been read.	
		</h5></div>
  </div>
<div class="panel panel-default">
  <div class="panel-heading">
	<h3 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What if someone screenshots my message and url?</a>
	</h3>
  </div>
  </div>
  <div id="collapse2" class="panel-collapse collapse">
	<div class="panel-body"><h5>
		The Unique urls that get deleted after viewing may get allocated to someone else in future,
		 So noone can ever be sure if the scrnshot they have is from your message or somebody else's,
		 Besides.. Maine banaya hai BC!..	
		</h5></div>
  </div> 
<div class="panel panel-default">
  <div class="panel-heading">
	<h3 class="panel-title">
	  <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What Does this Website Do?</a>
	</h3>
  </div>
  </div>
  <div id="collapse3" class="panel-collapse collapse">
	<div class="panel-body"><h5>
		Imagine if you wanted to tell a secret, or something That might land you in trouble, 
		Oneshot ALllows you to Write Short Messages and send them to people so that they can read it. The Fun Part is that
		very true to its name, shots written on OneShot can only be viewed once. They delete automatically once they have been read.	
		</h5></div>
  </div>
  
</div>
<script>
$(document).ready(function(){
    $("#submitshot").click(function(){
        var shotmsg = $("#shotmsg").val()
        $.post("linkgen.php", {shotmsg: shotmsg},
        function(result){
			$("#linkdiv").show();
			$("#linkshare").html(result);
        });
    });
});

new Clipboard('#btn');
</script>
</body>

</html>
