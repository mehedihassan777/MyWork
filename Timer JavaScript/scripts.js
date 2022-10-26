var stp;
function timer() {
	var Hour = document.getElementById("h").value;
	var Munite = document.getElementById("m").value;
	var Second = document.getElementById("s").value;

	if(Hour > 0){
		if(Munite > 0){
			if (Second == 0) {
				Second = Second + 60;
				Munite --;
			}
			Second--;
		}
	    else if(Munite == 0){
			    Munite = Munite + 60;
			    Hour --;
		}
	}
	else if(Munite > 0){
		if (Second == 0) {
			Second = Second + 60;
			Munite --;
		}
		Second--;
	}
	else if(Second > 0){
		Second--;
	}
	document.getElementById("h").value = Hour;
	document.getElementById("m").value = Munite;
	document.getElementById("s").value = Second;
	}

function stop(){
	clearInterval(stp);
}
function start(){
	var intv = setInterval(timer,1000);
	stp = intv;
}