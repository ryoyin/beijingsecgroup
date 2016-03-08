$( document ).ready(function() {

	//Generate Index Data
	$.getJSON( "json/index.json", function( data ) {
		$.each( data, function( key, val ) {
		  var indexJson = val;

		  $.each( indexJson, function( key1, val1 ) {
		    var indexName = key1;
		    var indexValue = val1

		    // console.log(indexName);
		    var newIndexObj = $(".index-temp").clone().appendTo(".index-tbody");
		    newIndexObj.removeClass("index-temp").addClass("new-index-temp");

		    $(".new-index-temp th").html(indexName);
		    var indexCounter = 0;
		    $.each( indexValue, function( key2, val2 ) {
		      // console.log(key2 + val2);
		      if(indexCounter == 1) {
		        if(val2 > 0) {
		          var glyphicon = "glyphicon-arrow-up";
		          var text_color = "green";
		        } else {
		          var glyphicon = "glyphicon-arrow-down";
		          var text_color = "red";
		        }
		        $(".new-index-temp td:eq("+indexCounter+")").html("<span class=\"glyphicon "+glyphicon+"\" aria-hidden=\"true\"></span> " + val2).css("color", text_color).css("font-weight", "bold");
		      } else {
		        $(".new-index-temp td:eq("+indexCounter+")").html(val2);                
		      }
		      indexCounter ++;
		    });

		    $(".new-index-temp .glyphicon").addClass("abc");

		    $(".new-index-temp").removeClass("new-index-temp");
		  });
		});
	});
	
});