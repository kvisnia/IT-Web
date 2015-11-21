function loadpage(onoma,did,element) {
  var nanobar = new Nanobar();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 1){

      nanobar.go(20)
    }
    if (xhttp.readyState == 2){
      nanobar.go(40)
    }
    if (xhttp.readyState == 3){
      nanobar.go(60)
    }
    if (xhttp.readyState == 4 && xhttp.status == 200) {

    if (did==1){
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
       document.getElementById("subinfo1").innerHTML =  element.options[ element.selectedIndex ].text;
       document.getElementById("labinfo1").innerHTML =  element.options[ element.selectedIndex ].getAttribute("erg");
       document.getElementById("theinfo1").innerHTML =  element.options[ element.selectedIndex ].getAttribute("the");
    }
    else if(did==2){
        //2ο εξαμηνο
    }
    else if(did==3){
       document.getElementById("tableresult3").innerHTML = xhttp.responseText;
       document.getElementById("subinfo3").innerHTML =  element.options[ element.selectedIndex ].text;
       document.getElementById("labinfo3").innerHTML =  element.options[ element.selectedIndex ].getAttribute("erg");
       document.getElementById("theinfo3").innerHTML =  element.options[ element.selectedIndex ].getAttribute("the");
    }
    else if(did==4){
       document.getElementById("tableresult4").innerHTML = xhttp.responseText;
    }
    else if(did==5){
       document.getElementById("tableresult5").innerHTML = xhttp.responseText;
       document.getElementById("subinfo5").innerHTML =  element.options[ element.selectedIndex ].text;
       document.getElementById("labinfo5").innerHTML =  element.options[ element.selectedIndex ].getAttribute("erg");
       document.getElementById("theinfo5").innerHTML =  element.options[ element.selectedIndex ].getAttribute("the");
    }
    else if(did==6){
       document.getElementById("tableresult6").innerHTML = xhttp.responseText;
    }
    else if(did==7){
       document.getElementById("tableresult7").innerHTML = xhttp.responseText;
    }
    else{
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
    }
    nanobar.go(100)

    }
  }
  /*sendString = onoma.substring(1);*/
  /*xhttp.open("GET", "phpscripts/getsem.php?cid="+onoma+"", true);*/
  xhttp.open("GET", "data/"+onoma+".html", true);
  xhttp.send();
}

function loadpage2(onoma,did) {
  var nanobar = new Nanobar();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 1){

      nanobar.go(20)
    }
    if (xhttp.readyState == 2){
      nanobar.go(40)
    }
    if (xhttp.readyState == 3){
      nanobar.go(60)
    }
    if (xhttp.readyState == 4 && xhttp.status == 200) {

    if (did==1){
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
    }
    else if(did==2){
        //2ο εξαμηνο
    }
    else if(did==3){
       document.getElementById("tableresult3").innerHTML = xhttp.responseText;

    }
    else if(did==4){
       document.getElementById("tableresult4").innerHTML = xhttp.responseText;
    }
    else if(did==5){
       document.getElementById("tableresult5").innerHTML = xhttp.responseText;

    }
    else if(did==6){
       document.getElementById("tableresult6").innerHTML = xhttp.responseText;
    }
    else if(did==7){
       document.getElementById("tableresult7").innerHTML = xhttp.responseText;
    }
    else{
       document.getElementById("tableresult").innerHTML = xhttp.responseText;
    }
    nanobar.go(100)

    }
  }
  /*sendString = onoma.substring(1);*/
  /*xhttp.open("GET", "phpscripts/getsem.php?cid="+onoma+"", true);*/
  xhttp.open("GET", "data/"+onoma+".html", true);
  xhttp.send();
}

function mainloader(onoma) {
  var nanobar = new Nanobar();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 1){

      nanobar.go(20)
    }
    if (xhttp.readyState == 2){
      nanobar.go(40)
    }
    if (xhttp.readyState == 3){
      nanobar.go(60)
    }
    if (xhttp.readyState == 4 && xhttp.status == 200) {

       document.getElementById("homecontainer").innerHTML = xhttp.responseText;

    nanobar.go(100)

    }
  }
  /*sendString = onoma.substring(1);*/
  xhttp.open("GET", "pages/"+onoma+".html", true);
  xhttp.send();
}

function mainmenuload() {
  var nanobar = new Nanobar();
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 1){

      nanobar.go(20)
    }
    if (xhttp.readyState == 2){
      nanobar.go(40)
    }
    if (xhttp.readyState == 3){
      nanobar.go(60)
    }
    if (xhttp.readyState == 4 && xhttp.status == 200) {

       document.getElementById("mainmenu").innerHTML = xhttp.responseText;

    nanobar.go(100)

    }
  }
  /*sendString = onoma.substring(1);*/
  xhttp.open("GET", "pages/panels/menu.html", true);
  xhttp.send();
}

function getcanname(element) {
document.getElementById("semname").innerHTML = element.text;
}
