
function region_value(){
  var checkValue = [];
  var checked_reg = document.getElementsByName('region');
  for(i=0; i<checked_reg.length; i++){
    if(checked_reg[i].checked == true){ 
        checkValue.push(checked_reg[i].value);
        var pen = checkValue.join(' ", " ');
    }
  }
  var title = document.getElementsByName('title')[0].value;
  window.location.href = 'http://businessdirectory.com:8080/template/search.php?title=' + title + '&region=' + pen;
  //return checkValue;
  //console.log(checkValue);
}

function details_value(){
  var checkValue = [];
  var checked_det = document.getElementsByName('details');
  for(i=0; i<checked_det.length; i++){
    if(checked_det[i].checked == true){ 
        checkValue.push(checked_det[i].value);
        var act = checkValue.join(' ", " ');
    }
  }
  var title = document.getElementsByName('title')[0].value;
  window.location.href = 'http://businessdirectory.com:8080/template/search.php?title=' + title + '&details=' + act;
  //return checkValue;
  //console.log(checkValue);
}


/*$(document).ready(function() {
  $("#core").load("core.html");
  $('#search').keyup(function(e) {
    if (e.keyCode == 13) {
      search();
      $("#resultId").css("display", "block");
    }
  });
});
*/
  // search function
 /*var number, title;
  function search() {
    title = $("#search").val();
    if (title != "") {
      $.ajax({
        type: "get",
        url: "api/functions.php",
        data: "title=" + title,
        //dataType: "json",
        success: function(data) {
          alert('min pen');
        var i, n;
          var obj = jQuery.parseJSON(data);
          for (i = 0; i < obj.length; ++i) {
            $('#resultId ol').append('<li><div class="info"><a onclick="getCompanyData(' + obj[i].number + ');" class="name" id="' + obj[i].number + '">' + obj[i].name + '</a><span class="glyphicon glyphicon-pencil" onclick="editCompany(' + obj[i].number + ')" id="' + obj[i].number + '" style="float: right; margin-right: 5%"></span><span onclick="deleteCompany(' + obj[i].number + ');" class="glyphicon glyphicon-trash" style="float: right" id="' + obj[i].number + '"></span></div></li>');
          } 
        }
      });
    }
  }*/

/*function single() {
    $("#core").empty();
    $("#edit").empty();
    $("#add").empty();
    $("#single").load("single.html");
};

// Data single
function getCompanyData(number) {
  single();
    $.ajax({
      type: "get",
      url: "api/single.php",
      data: "number=" + number,
      success: function(data){
        var data = jQuery.parseJSON(data);
       // console.log(data);
      //  console.log(data[0].region);  
        $('#firmName').html(data[0].name);
        $('#regionId').html(data[0].region);
        $('#addressId').html(data[0].address);
        $('#phoneId').html(data[0].phone);
        $('#dirId').html(data[0].president);
        $('#postId').html(data[0].email);
        $('#webId').html(data[0].website);
        $('#activityId').html(data[0].activity);
        $('#actId').html(data[0].details);
        $('#typeId').html(data[0].type);
      }
    });
  //console.log(number);
}
// Data delete
function refresh(){
  $("#core").load("core.html");
}
function deleteCompany(number){
  $.ajax({
    type: "get",
      url: "api/delete.php",
      data: "number=" + number,
      success: function(data){
        alert("You have just deleted 1 item!");
        refresh();
      }
  });
}

// Data edit
function editCompany(number){ 
  $("#core").empty();
  $("#edit").load('edit.html');
  $.ajax({
    url: "api/edit.php",
    type: "get",
    data: "number=" + number,
    dataType: "json",
    success: function(data){
      console.log(data);
      $('#inputId')[0].value = data[0].number;
      $('#inputName')[0].value = data[0].name;
      $('#sel3')[0].value = data[0].region;
      $('#inputAddress')[0].value = data[0].address;
      $('#inputTel')[0].value = data[0].phone;
      $('#inputDir')[0].value = data[0].president;
      $('#inputMail')[0].value = data[0].email;
      $('#inputWeb')[0].value = data[0].website;
      $('#sel4')[0].value = data[0].activity;
      $('#sel2')[0].value = data[0].details;
      $('#sel1')[0].value = data[0].type;
    }
  });
}
// Data UPDATE
function updateCompany(number){
  var id = $('#inputId').val();
  var name = $('#inputName').val();
  var type = $('#sel1').val();
  var actType = $('#sel2').val();
  var region = $('#sel3').val();
  var act = $('#sel4').val();
  var address = $('#inputAddress').val();
  var website = $('#inputWeb').val();
  var phone = $('#inputTel').val();
  var email = $('#inputMail').val();
  var direct = $('#inputDir').val();
  if(id !== "" & name !== "" & type !== "" & region !== ""){
  $.ajax({ 
      type: "GET",        
      url: "api/update.php",
      data: {'number': id, 'name':name, 'inputType': type, 'inputActivityType': actType, 'inputRegion': region, 'inputAct': act, 'inputAddress': address, 'inputWeb': website, 'inputTel': phone, 'inputMail': email, 'inputDir': direct},
      success: function(data) {
        alert('Data has been updated successfully!');
        $( '#formId' ).each(function(){
          this.reset();
        });
      }
  });
}else{ alert("Fill the required fields!!"); }
}

// Data add 

function add(){
  $("#core").empty();
  $("#edit").empty();
  $("#single").empty();
  $("#add").load("add.html");
}
function addCompany(){
      var id = $('#inputId').val();
      var name = $('#inputName').val();
      var type = $('#sel1').val();
      var actType = $('#sel2').val();
      var region = $('#sel3').val();
      var act = $('#sel4').val();
      var address = $('#inputAddress').val();
      var website = $('#inputWeb').val();
      var phone = $('#inputTel').val();
      var email = $('#inputMail').val();
      var direct = $('#inputDir').val();
      if(id !== "" & name !== "" & type !== "" & region !== ""){
      $.ajax({ 
          type: "GET",        
          url: "api/add.php",
          data: {'number': id, 'name':name, 'inputType': type, 'inputActivityType': actType, 'inputRegion': region, 'inputAct': act, 'inputAddress': address, 'inputWeb': website, 'inputTel': phone, 'inputMail': email, 'inputDir': direct},
          success: function(data) {
              alert('Data has been stored to database successfully');
              $( '#formId' ).each(function(){
                this.reset();
              });
          }
      });
    }else{ alert("Fill the required fields!!"); }
}

//  FILTER
var title, region, details;
function region(region_name) {
  var i, obj;
  title = $("#search").val();
   $.ajax({
      type: "get",
      url: "api/filter.php",
      data: {"title": title, "region": region_name, "activity": details},
      success: function(data){
        console.log(data);
        $('#resultId ol').empty();  
        for(n = 0; n < 4; ++n){
         if(document.getElementsByName('activity[]')[n].checked == true){
          details = document.getElementsByName('activity[]')[n].value;
         }
        }
        obj = jQuery.parseJSON(data);
         if(Object.keys(obj).length !== 0){
        for (i = 0; i < obj.length; ++i) {
          $('#resultId ol').append('<li><div class="info"><a onclick="getCompanyData(' + obj[i].number + ');" class="name" id="' + obj[i].number + '">' + obj[i].name + '</a><span class="glyphicon glyphicon-pencil" onclick="editCompany(' + obj[i].number + ')" id="' + obj[i].number + '" style="float: right; margin-right: 5%"></span><span onclick="deleteCompany(' + obj[i].number + ');" class="glyphicon glyphicon-trash" style="float: right" id="' + obj[i].number + '"></span></div></li>');
        }
        }else{
         alert("No result!");
        }
      }
});
}

var title, details, reg;
function filter_activity(act) {
  var i, n, obj;
  title = $("#search").val();
   $.ajax({
      type: "get",
      url: "api/filter_activity.php",
      data: {"title": title, "details": act, "region": reg},
      success: function(data){  
        console.log(data);
        $('#resultId ol').empty();  
        for(n = 0; n < 8; ++n){
         if(document.getElementsByName('check[]')[n].checked == true){
          reg = document.getElementsByName('check[]')[n].value;
         }
        }
        obj = jQuery.parseJSON(data);
         if(Object.keys(obj).length !== 0){
        for (i = 0; i < obj.length; ++i) {
          $('#resultId ol').append('<li><div class="info"><a onclick="getCompanyData(' + obj[i].number + ');" class="name" id="' + obj[i].number + '">' + obj[i].name + '</a><span class="glyphicon glyphicon-pencil" onclick="editCompany(' + obj[i].number + ')" id="' + obj[i].number + '" style="float: right; margin-right: 5%"></span><span onclick="deleteCompany(' + obj[i].number + ');" class="glyphicon glyphicon-trash" style="float: right" id="' + obj[i].number + '"></span></div></li>');
        }
        }else{
         alert("No result!");
        }
      }
});
}

*/


