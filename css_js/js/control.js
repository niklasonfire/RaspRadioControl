
//Set-up mpc on startup
setMpc();


$('#play').on("click", function(){
 	play();
});
$('#pause').on("click", function(){
 	pause();
});
$('#volUp').on("click", function(){
 	volUp();
});
$('#volDown').on("click", function(){
 	volDown();
});
$('#prev').on("click", function(){
 	prev();
});
$('#next').on("click", function(){
 	next();
});

function setMpc(){
  $.ajax({
    type: 'POST',
    async: true,
    url: 'css_js/php/mpcSettings.php'

  });
}

function setVolume(volume){
	//Sende die Value an range.php und verarbeite sie
	$.ajax({
		type: 'POST',
		async: true,   // WICHTIG!
		//URL = Name der PHP Datei
		url: 'css_js/php/range.php',
		data: ({
			volume: volume
		})
	});
}

function play(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/play.php'
  });
}


function pause(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/pause.php'
  });
}


function volUp(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/volUp.php'
  });
}

function volDown(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/volDown.php'
  });
}

function next(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/next.php'
  });
}

function prev(){

  $.ajax({
    type: 'POST',
    async: true,
    url:'css_js/php/prev.php'
  });
}
