console.log("Labas");

// IDEA: AJAX kodai apačioje

function pirkimuSuma() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     document.getElementById("isvestis").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET"," /ajaxLibrary/ajax_info.php", true);
  xhttp.send();
}
