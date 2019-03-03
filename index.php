<?php include('head.php');?>

<div>
	<h2 align="center"><a href="/"><img src="/favicon.png" alt="Webtiara Logo" style="width: 32px; margin-top: 50px;"></a></h2>
	<h1 align="center" >OneShot</h1>
	<h6 align="center"><i>Coz Thats All You Get</i></h6>
</div>

<div class="col-md-6 col-md-offset-3 form-group">
	<textarea class="form-control" rows="3" id="shotmsg"></textarea>
	<br>
	<button class="btn btn-danger form-control" id="submitshot">Make a shot</button>
</div>

<div class="panel-group col-md-6 col-md-offset-3" style="display:none;" id="error">
	<p align="center" class="text-danger">Please enter a message.</p>
</div>

<div class="panel-group col-md-6 col-md-offset-3" style="display:none;" id="linkdiv">
	<i><p align="center" id="linkshare"></p></i>
	<button  display="block" class="btn btn-primary btn-block" id="btn" data-clipboard-target="#linkshare">Copy Link</button>	
</div>

<div class="panel-group col-md-6 col-md-offset-3" style="display:none;" id="share">
	<button class="btn btn-success"  style="width: 100%;">
		<a id="whatsapp-link" style="color: #fff; text-decoration: none;">Share on WhatsApp</a>
	</button>
</div>

<div class="panel-group col-md-6 col-md-offset-3" id="accordion">
	<div class="panel panel-default">
		<div class="panel-heading">
			<p class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">What the heck is this?</a>
			</p>
		</div>
	</div>
	<div id="collapse1" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				Imagine if you wanted to tell a secret, or something that might land you in trouble, 
				Oneshot aLllows you to writesShort messages and send them to people so that they can read it. The Fun Part is that
				very true to its name, shots written on OneShot can only be viewed once. They get deleted automatically once they have been read.	
			</p>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<p class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse2">What if someone screenshots my message and url?</a>
			</p>
		</div>
	</div>
	<div id="collapse2" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				The unique urls that get deleted after viewing may get allocated to someone else in future.
				So no one can ever be sure if the screenshot they have is from your message or somebody else's. And besides.. Maine banaya hai Pencho!	
			</p>
		</div>
	</div>
	<div class="panel panel-default">
		<div class="panel-heading">
			<p class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" href="#collapse3">What does this website do?</a>
			</p>
		</div>
	</div>
	<div id="collapse3" class="panel-collapse collapse">
		<div class="panel-body">
			<p>
				It was very clear in the first question.
				And here's some literature by shri shri Eminem Maharaj.
				<i><br><br>Look, if you had one shot, one opportunity 
					<br>To seize everything you ever wanted 
					<br>One moment 
					<br>Would you capture it or just let it slip?	<i>
					<br>
					<br>
					<a href="https://geo.itunes.apple.com/us/album/lose-yourself/1018049?i=1018037&mt=1&app=music" style="display:inline-block;overflow:hidden;background:url(https://tools.applemusic.com/assets/shared/badges/en-us/music-lrg.svg) no-repeat;width:158px;height:45px;"></a>
				</p>
		</div>
	</div>
</div>

<script>
	$(document).ready(function(){
		$("#submitshot").click(function(){
			var shotmsg = $("#shotmsg").val();
			if(shotmsg){
				$.post("linkgen.php", {shotmsg: shotmsg},
					function(result){
						$("#error").fadeOut();
						$("#submitshot").fadeOut();
						$("#linkdiv").fadeIn();
						$("#linkshare").fadeIn().html(result);
						$("#share").fadeIn();

						var whatsapp = document.getElementById('whatsapp-link');
						whatsapp.href = 'whatsapp://send?text='+result;
					});
			}
			else{
				$("#error").fadeIn();
			}
		});
	});
	new Clipboard('#btn');
</script>


	<?php include('footer.php');?>