
function region_value(){
  var checkValue = [];
  var checked_reg = document.getElementsByName('region');
  for(i=0; i<checked_reg.length; i++){
    if(checked_reg[i].checked == true){ 
        checkValue.push(checked_reg[i].value);
    }
  }
  checkValue = checkValue.join('","');
  if (checkValue) {
    checkValue = '' + checkValue + '';
  }
  return checkValue;
}

function details_value(){
  var checkValue = [];
  var checked_det = document.getElementsByName('details');
  for(i=0; i<checked_det.length; i++){
    if(checked_det[i].checked == true){ 
        checkValue.push(checked_det[i].value);
    }
  }
  checkValue = checkValue.join('","');
  if (checkValue) {
    checkValue = '' + checkValue + '';
  }
  return checkValue;
}

function search() {
  var region = region_value(),
    details = details_value(),
    title = document.getElementsByName('title')[0].value,
    host = 'http://businessdirectory.com:8080/search.php',
    search = [];
    if (title) {
      search.push("title=" + title);
    }
    if (region) {
      search.push('region=' + region);
    }
    if (details) {
      search.push("details=" + details);
    }
    if (search) {
      host = host + "?" + search.join('&');
    }
    //debugger;
    location.href = host;

}

$(document).ready(function() {
  $("[type='checkbox']").change(function(){
    search();
  });
/*  $("#search").change(function(){
    search();
  });*/
});

function message() {
    window.location.assign("http://businessdirectory.com:8080/modification.php");
}


