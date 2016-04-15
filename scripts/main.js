$(document).ready(function() {
  $("#core").load("core.html");
  $("#core").on("click", "#editdata", function() {
    $("#core").empty();
    $("#add").empty();
    $("#single").empty();
    $("#edit").load('edit.html');
  });
  $("#logoId").click(function() {
    $("#add").empty();
    $("#edit").empty();
    $("#single").empty();
    $("#core").load("core.html");
  });
  /*
  $("#core").on("click", ".name", function() {
    $("#add").empty();
    $("#edit").empty();
    $("#core").empty();
    $("#single").load("single.html");
  });
*/

  // search function
  var number;
  function search() {
    var title = $("#search").val();
    if (title != "") {
    //  $("#resultId").html("<img alt="ajax search" src='ajax-loader.gif'/>");
      $.ajax({
        type: "get",
        url: "api/index.php",
        data: "title=" + title,
        success: function(data) {
          var i, n;
          var obj = jQuery.parseJSON(data);
          for (i = 0; i < obj.length; ++i) {
            $('#resultId ol').append('<li><div class="info"><a onclick="getCompanyData(' + obj[i].number + ');" class="name" id="' + obj[i].number + '">' + obj[i].name + '</a><span class="glyphicon glyphicon-pencil" id="editdata" style="float: right; margin-right: 3%"></span><span onclick="deleteCompany(' + obj[i].number + ');" class="glyphicon glyphicon-trash" style="float: right" id="' + obj[i].number + '"></span></div></li>');
          }
          $("#search").val("");
        }
      });
    }
  }
  $('#search').keyup(function(e) {
    if (e.keyCode == 13) {
      search();
      $("#resultId").css("display", "block");
    }
  });
});

function single() {
    $("#core").empty();
    $("#edit").empty();
    $("#add").empty();
    $("#single").load("single.html");
};

function getCompanyData(number) {
  single();
    $.ajax({
      type: "get",
      url: "api/single.php",
      data: "number=" + number,
      success: function(data){
        var data = jQuery.parseJSON(data);
        console.log(data);
        console.log(data[0].region);
        $('#firmName').html(data[0].name);
        $('#regionId').html(data[0].region);
        $('#addressId').html(data[0].address);
        $('#phoneId').html(data[0].phone);
        $('#dirId').html(data[0].director);
        $('#postId').html(data[0].post);
        $('#webId').html(data[0].web);
        $('#activityId').html(data[0].activity);
        $('#actId').html(data[0].act);
        $('#typeId').html(data[0].type);

      }
    });
  console.log(number);
}
function deleteCompany(number){
  $.ajax({
    type: "get",
      url: "api/delete.php",
      data: "number=" + number,
      success: function(data){
        alert("Hello");
      }
  });
}

