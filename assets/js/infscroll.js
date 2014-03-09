$(document).ready(function(){ 
var reachedEnd = false; /*Flag to check the end of records*/
var load = false; 
/*checking the end of the document*/
$(window).scroll(function(){
  if ($(window).scrollTop() == $(document).height() - $(window).height() && load==false){

    /*calling the function to get the ajax data*/
	document.getElementById('chargementContenu').style.display = 'block';
    lastPostFunc();
	document.getElementById('chargementContenu').style.display = 'none';
  }
});

function lastPostFunc() {

  var trs = $('.Post'); /*get the number of trs*/
  var count = trs.length; /*this will work as the offset*/

  /*Restricting the request if the end is reached.*/
  if (reachedEnd == false) {
	load = true;
    $.ajax({
      url: "UMustSee/ajax_contenu_list/" + count,
      async: false,
      dataType: "html",
      success: function(data) {
        if (data != "End")
		{
			$('.rowContenu').append(data);
		}
        else
		{
			reachedEnd = true;
			document.getElementById('finContenuDisponible').style.display = 'block';
		}
      }
    })
	load = false;
  }
}
})