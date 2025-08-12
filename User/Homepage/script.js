function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

// function openform() {
//   document.getElementById("myform").style.display = "block";
//   document.getElementById("myform").style.backdropFilter = "brightness(20%)";
//   // document.getElementById("myform").style.backdropFilter="blur(20px)";
// }
function openform() {
  document.getElementById("myform").style.display = "block";
  document.getElementById("myform").style.display = "block";
  document.getElementById("myform").style.backdropFilter = "brightness(20%)";
}

function closeform() {
  document.getElementById("myform").style.display = "none";
}

function openform2() {
  document.getElementById("myform2").style.display = "block";
  document.getElementById("myform2").style.backdropFilter = "brightness(20%)";
  // document.getElementById("myform").style.backdropFilter="blur(20px)";
}

function closeform2() {
  document.getElementById("myform2").style.display = "none";
}

function generateReport() {
  window.location.href = "#mycourses";
}
function generateReport() {
  window.location.href = "#enroll";
}

function showbtn() {
  document.getElementById("addemail").style.display="block";
}
function condelete() {
  document.getElementById("cdelete").style.display="block";
}
function showHint(str) {
  if (str.length == 0) {
      document.getElementById("txtHint").innerHTML = "";
      return;
  } else {
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
          if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
              document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
          }
      }
      xmlhttp.open("GET", "hint.php?q="+str, true);
      xmlhttp.send();
  }
}
// show
function showModule1() {
  document.getElementById("show-info1").style.display="block"
}
function showModule2() {
  document.getElementById("show-info2").style.display="block"
}
function showModule3() {
  document.getElementById("show-info3").style.display="block"
}
function showModule4() {
  document.getElementById("show-info4").style.display="block"
}
function showModule5() {
  document.getElementById("show-info5").style.display="block"
}
// hide
function hideModule1() {
  document.getElementById("show-info1").style.display = "none";
}

function hideModule2() {
  document.getElementById("show-info2").style.display = "none";
}

function hideModule3() {
  document.getElementById("show-info3").style.display = "none";
}

function hideModule4() {
  document.getElementById("show-info4").style.display = "none";
}
function hideModule5() {
  document.getElementById("show-info5").style.display = "none";
}
