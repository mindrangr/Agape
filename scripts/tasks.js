class tasks{
	constructor(){
		this.taskList=[];
		this.rowdy();
	}

	hrRequest(){
		xmlhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
		      document.getElementById("demo").innerHTML = this.responseText;
		    }
	  	};
	 	xhttp.open("GET", "demo.php?fname=Henry&lname=Ford", true);
	  	xhttp.send();
	}
	rowdy(){
		alert("sam")
	}



}