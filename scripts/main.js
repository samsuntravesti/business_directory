 $( document ).ready(function() {
 	$("#core").load("core.html");
    $("#core").on("click", "#editdata", function(){
    	$("#core").empty();	
    	$("#add").empty();	
    	$("#single").empty();
    	$("#edit").load('edit.html'); 
    });
 	$("a").click(function(){
 		$("#core").empty();	
 		$("#edit").empty();
 		$("#single").empty();
    	$("#add").load("add.html"); 
    });
 	$("#logoId").click(function(){
 		$("#add").empty();
 		$("#edit").empty();
 		$("#single").empty();
 		$("#core").load("core.html");
 	});
 	$("#core").on("click", ".name", function(){
 		$("#add").empty();
 		$("#edit").empty();
 		$("#core").empty();	
 		$("#single").load("single.html");
 	});

});

