 $( document ).ready(function() {
 	$("#core").load("core.html");
    $("#core").on("click", "#editdata", function(){
    	$("#core").empty();	
    	$("#add").empty();	
    	$("#single").empty();
    	$("#edit").load('edit.html'); 
    });
    var single=function() {
    	$("li div a").click(function(){
    		$("#core").empty();	
    		$("#edit").empty();
    		$("#add").empty();
      	$("#single").load("single.html"); 
      });
    };
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

 // search function 
 function search(){
      var title=$("#search").val();

      if(title!=""){
      //  $("#resultId").html("<img alt="ajax search" src='ajax-loader.gif'/>");
         $.ajax({
            type:"get",
            url:"api/index.php",
            data:"title="+title,
            success:function(data){

              var i, n;
              var obj=jQuery.parseJSON(data);
                console.log(obj);
              
           
               for(i=0; i<obj.length; ++i){
                $('#resultId ol').append('<li><div class="info"><a href="#" class="name" id="resultName">' +obj[i].name + '</a><span class="glyphicon glyphicon-pencil" id="editdata" style="float: right; margin-right: 3%"></span><span class="glyphicon glyphicon-trash" style="float: right" id="delete"></span></div></li>');
                single();
                //$("#resultName").append(obj[i].name);
                $("#firmName").append('<h4 class="headName">' +obj[i].name + '</h4>');
                $("#search").val("");
                    console.log(obj[i].name);
                   //  console.log(obj[i].region);
              }
             }
          });

      }     
 }

      $('#search').keyup(function(e) {
         if(e.keyCode == 13) {
            search();
          }
      });
});

