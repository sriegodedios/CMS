






function CheckColors(val){
 var element=document.getElementById('package_description_hidden');
 if(val=='other')
   element.style.display='block';
 else  
   element.style.display='none';

 if(val!=='no'){
	$('#toggle_1').attr('data-toggle', 'collapse');
    $('#toggle_1').removeAttr('style');
	$('#fa_one').removeAttr('class');
	$('#fa_one').attr('class', 'fa fa-check-circle');
	$('#fa_one').attr('style', 'color:green;');
 }



}
function hide_No(){
	$('#fa_three').removeAttr('class');
					$('#fa_three').attr('class', 'fa fa-check-circle');
					$('#fa_three').attr('style', 'color:green;');
	
	
	
}
function CheckLocation(val){
 var element=document.getElementById('package_location_hidden');

 if(val=='other'){
   element.style.display='block';
   }else {
   element.style.display='none';
  }


if(val!=='no'){
	$('#toggle_2').attr('data-toggle', 'collapse');
	 $('#toggle_2').removeAttr('style');
	 $('#fa_two').removeAttr('class');
	$('#fa_two').attr('class', 'fa fa-check-circle');
	$('#fa_two').attr('style', 'color:green;');
}
} 

function hideNo(){
  if (document.getElementById('hide_no')) {
					document.getElementById('question').style.display = 'none';
                    document.getElementById('confirmNo').style.display = 'block';
					$('#add_packages').removeAttr('class');
					$('#add_packages').attr('class', 'btn btn-primary');
		
  }
 }
 
 function addInfo(){
  if (document.getElementById('show_yes')) {
					document.getElementById('question').style.display = 'none';
                    document.getElementById('addIti').style.display = 'block';
					$('#add_packages').removeAttr('class');
					$('#add_packages').attr('class', 'btn btn-primary');
					
  }
 }
 