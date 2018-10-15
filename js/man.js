// IDEA: pasitikrinu ar veikia scriptas
console.log("Labas");

// IDEA: kontaktų puslapyje uždedu paaiškinimą taisyklių pažymėjimui
function salyguŽinutė () {
  document.getElementById("field_terms").setCustomValidity("Pirma sutikite mums patikėti ir tavrkyti savo asmeninius duomenis");
  }

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
      alert(phpresponse);
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
      alert(phpresponse);
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
      alert(phpresponse);
    }
  });
}
