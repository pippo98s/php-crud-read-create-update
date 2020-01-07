$(document).ready(init);


function init(){
  getAllConfigurations();
  $("#myForm").submit(postNewConfiguration);
  $("#update").submit(updateConfiguration);
};

function getAllConfigurations(){
  $("#configurations").html("");
  $.ajax({
    url: "getAllConfigurations.php",
    method: "GET",
    success: function (data) {
      printData(data);
    },
    error: function (error) {
      console.log("error", error);
    }
  });
}

function postNewConfiguration(){
  var me = $(this);
  $.ajax({
    url: "postNewConfiguration.php",
    method: "POST",
    data : me.serialize(),
    success: function (data) {
      getAllConfigurations();
    },
    error: function (error) {
      console.log("error", error);
    }
  });
  me.find("input[type=text]").val("");
  return false;
}


function updateConfiguration() {
  var me = $(this);

  $.ajax({
    url: "updateConfiguration.php",
    method: "POST",
    data: me.serialize(),
    success: function (data) {
      getAllConfigurations();
    },
    error: function (error) {
      console.log("error", error);
    }
  });
  me.find("input[type=text]").val("");
  return false;
}



function printData(data) {
  var source = $("#entry-template").html();
  var template = Handlebars.compile(source);
  for (var i = 0; i < data.length; i++) {
    var info = data[i];
    var html = template(info);
    $("#configurations").append(html);
  }
}