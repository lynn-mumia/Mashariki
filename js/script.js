var slide = 0;
carousel();

function carousel(){
	var i;
	var x = document.getElementsByClassName("slide");
	for(i=0; i< x.length; i++){
		x[i].style.display="none";
	}

	slide++;
	if(slide >x.length){
		slide =1
	}

	x[slide-1].style.display ="block";
	setTimeout(carousel,3500);
}

function giveDetails(){
	var button = document.getElementsByTagName("button")[0];

     alert("Please go to the contact page and fill your details then download");
}