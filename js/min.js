// IDEA: pasitikrinu ar veikia scriptas
console.log("Labas");

// IDEA: valdymo puslapio mygtuko pozicija prilausomai nuo ekrano dyžio
var mygtukas = $("#varduID");
var mygtukas1 = $("#varduID1");
var mygtukas2 = $("#varduID2");
var mygtukas3 = $("#varduID3");


onRisize = function() {
  if ($ (window).width() < 1100) {

      $("div.mobileMeniu").append(mygtukas);
      $("div.mobileMeniu1").append(mygtukas1);
      $("div.mobileMeniu2").append(mygtukas2);
      $("div.mobileMeniu3").append(mygtukas3);

      }
    }

 onRisize2 = function() {
   if ($ (window).width() > 1100) {

        $("div.valdymoKaire").append(mygtukas1, mygtukas2);
        $("div.valdymoDesnia").append(mygtukas, mygtukas3);

   }
}

$(document).ready(onRisize);
$(window).resize(onRisize);
$(window).resize(onRisize2);


// IDEA: AJAX kodai apačioje valdymasAdmin.php puslapiui
function pirkimuSuma () {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("isvestis").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET"," /ajaxLibrary/ajax_info.php", true);
  xhttp.send();
}

// IDEA: pradedu daug ajax užklausų naudodamas Jquery metodą.
 $(document).ready(function() {


   $("#varduID").click(function(){
      pirkėjuVardai ();
   });

   $("#varduID2").click(function(){
      pirkėjuVardai2 ();
   });

   $("#varduID3").click(function(){
      pirkėjuVardai3 ();
   });

 });


  function pirkėjuVardai () {
    var method = "vardai";
    var data = "Method=" + method;

  $.ajax ({
    cache: false,
    url: "/ajaxLibrary/daugajax.php",
    type: "post",
    data: data,
    success: function(phpresponse){
      $('#isvestis').html(phpresponse);
    }
  });
}

  function pirkėjuVardai2 () {
    var method = "vardai2";
    var data = "Method=" + method;

  $.ajax ({
    cache: false,
    url: "/ajaxLibrary/daugajax.php",
    type: "post",
    data: data,
    success: function(phpresponse){
        $('#isvestis').html(phpresponse);
    }
  });
}

  function pirkėjuVardai3 () {
    var method = "vardai3";
    var data = "Method=" + method;

  $.ajax ({
    cache: false,
    url: "/ajaxLibrary/daugajax.php",
    type: "post",
    data: data,
    success: function(phpresponse){
      $('#isvestis').html(phpresponse);
    }
  });
}
