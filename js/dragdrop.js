var counter = 0;
var numbers = [ 1, 2, 3, 4, 5 ];
var acceptType = "#type1 div, #type2 div, #type3 div, .clonetype";
var acceptTypeTrash = ".clonetype";

$(document).ready(function() {

  //var jsonUrl = "http://id.am/uplanit/images/json/?callback=?";
  //var jsonUrl = "http://id.am/uplanit/images/json/";
  var savedJsonUrl = "http://id.am/uplanit/images/json/loaddata.php?mapid=1";
  var jsonUrl = "icons.json";

  $.getJSON(jsonUrl)
    .done(function( data ) {
      $.each( data, function( i, item ) {
       $('<div><img id="img-'+ i +'" src="'+item.url+'" /></div>').data( 'number', numbers[i] ).attr( 'id', 'type-'+i).appendTo( '#type'+item.tab_category );
        /*if ( i === 3 ) {
          return false;
        }*/
      });
      
      $.getJSON(savedJsonUrl)
      	.done(function( mapResultData ) {
            	console.log(mapResultData);
      });
      
      

      $('#type1 div, #type2 div, #type3 div').data('type', "type").data('isClone', false).addClass("tempDragClass");

      // Make top icons draggable
      $("#type1 div, #type2 div, #type3 div").draggable( {
        containment: '#content',
        cursor: 'move',
        helper: "clone",
        revert: 'invalid',
        appendTo: '#content'
      });  
    });
  
/*  for ( var i=4; i<32; i++ ) {
      $('<div><img src="images/item'+i+'.png" /></div>').data( 'number', numbers[i] ).attr( 'id', 'type-'+numbers[i] ).appendTo( '#type' );
  }*/


  // build first item type drop spots
  for (var i=0; i < 270; i++) {
    $('<div id="slot-'+ i +'"></div>').data('type', "type").addClass("slottype").appendTo('#locs');
  }

  // make type 1 drop spots droppable
  $(".slottype").droppable( {
    accept: acceptType,
    hoverClass: "typehover",
    drop: onDrop
  });

  $('#type1, #type2, #type3').droppable({
    accept: acceptTypeTrash,
    drop: onDropTrash
  });
  
  $('#arrow-left').click(function(){
  	var savedData = returnJSON();
  	var dataSend = 'userId=0&'+'savedData='+savedData;
  	$.ajax({
  				url : "save.php",
				type : "POST",
				data : dataSend,
				success : function(message){
					alert(message);
				},
				error: function() { 
		                    alert("Error: Something was wrong "); 
		                }  
			});
  });

});


/*
 * onDrop
 */
function onDrop( event, ui ) {
  var slotType = $(this).data('type'); 
  var iconType = ui.draggable.data('type');

  var cloneId = "typeclone" + counter;

  var pos = $(this).position();

  // If this icon is a clone (that is, NOT one of the original top icons), we want
  // to append it to its new slot and position it at the upper left in that spot
  // Otherwise, we need to create a clone to drop in the slot instead.
  if (ui.draggable.data('isClone')) {
    ui.draggable.detach().css({position: 'absolute', top: pos.top,left: pos.left}).appendTo(this);
  }
  else {
    var clone = $(ui.draggable).clone(); // clone the draggable so we keep a copy

    clone.detach().css({position: 'absolute', top: pos.top,left: pos.left}).appendTo(this); // position the clone at the upper left of its spot

    // set some of the data we need to check to determine whether we’re dealing with a clone or a new icon
    clone.attr("id", cloneId);
    clone.data('type', iconType);
    clone.data('isClone', true);

    var cloneClass = "clonetype";

    clone.addClass(cloneClass);

    // We need to make the clone into a new draggable so that it can be re-positioned. We give it the same options as the original, except NO HELPER this time, because we want to move the actual icon, not make it look as though we are copying it again.
    $("#" + cloneId).removeClass("tempDragClass").draggable({
      containment: '#content',
      cursor: 'move',
      revert: 'invalid',
      appendTo: '#locs'
    });

    counter++;
  }

  // disallow the recent slot from accepting any more tiles
  // re-set any empty tiles to once again accept drops
  $(this).droppable("option", "accept", "");
  if (iconType == "type") {
    $(".slottype:empty").droppable("option", "accept", acceptType);
  }
};

/*
 * onDrop to trash
 */
function onDropTrash(event, ui) {
  $(ui.draggable).detach();
  // re-set any empty tiles to once again accept drops
  $(".slottype:empty").droppable("option", "accept", acceptType);
  $('body').css('cursor', 'auto');
}


function returnJSON() {
   var i = 0;

   var gridData = [];
   var savedData = "";
   var index = 0;
  $("#locs img").each(function(index, element) {

  	
        var data = { 
          position: $(this).parents("div").parents("div").attr("id"), 
          image: $(this).attr("id")
        };

        gridData.push(data);
        savedData += JSON.stringify(data);
        
        if(index != $("#locs img").length - 1){
        	index++;
        	savedData += ",";
        }
        
       
  });
  console.log(gridData);
  
  return savedData;
}