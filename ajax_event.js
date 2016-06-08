 function $(el){
	  return document.getElementById(el);
  }
  function uploadEmail(){
	  var submit = $("sendEmail").tagname;
	  var formdata = new FormData();
	  formdata.append("sendEmail", submit);
	  var ajax = new XMLHttpRequest();
	  ajax.addEventListner("PROGRESS:", progressHandler(), false);
	  ajax.addEventListner("ERROR:", errorHandler(), false);
	  ajax.addEventListner("COMPLETE:", completeHandler(), false);
	  ajax.open("POST", "php/send_emails.php");
	  ajax.send(formdata);
	
  }
  function progressHandler(event){
	  $("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	  // FOR SOME WEIRD REASON THE LINE ABOVE IT STATES "Uncaught TypeError: Cannot read property 'loaded' of undefined" HELPPP!!!!
	  var percent = (event.loaded / event.total) * 100;
	  $("progressBar").style = "width:"+Math.round(percent)+"%";
	  $("status").innerHTML = Math.round(percent)+"%";
  }
  function completeHandler(event){
	  $("status").innerHTML = event.target.responseText;
	  $("progressBar").style = "width:0%";
	  
  }
   function completeHandler(event){
	  $("status").innerHTML = "Failed To Send Email";
	  
	  
  }