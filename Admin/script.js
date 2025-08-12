function myFunction() {
    var x = document.getElementById("mySide-bar");
    if (x.className === "side-bar") {
      x.className += " responsive";
    } else {
      x.className = "side-bar";
    }
  }
  
  function bgchange() {
    var body = document.body;
    var textColor = body.style.color;
    var bgColor = body.style.backgroundColor;

    if (bgColor === "whitesmoke") {
        body.style.backgroundColor = "black";
        body.style.color = "white";
        icon.textContent = "☀️";
    } else {
        body.style.backgroundColor = "whitesmoke";
        body.style.color = "black";
        icon.textContent = "🌙";
    }
}
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

function drawChart() {
const data = google.visualization.arrayToDataTable([
  ['Courses', 'Users'],
  ['HTML',2],
  ['CSS',0],
  ['JS',1],
  ['PHP',0],
  ['SQL',0],
  ['JAVA',0],
  ['Python',0],
  ['C',0],
  ['C++',0]
]);

const options = {
  title:'Total Courses and their Users'
};

const chart = new google.visualization.PieChart(document.getElementById('myChart'));
  chart.draw(data, options);
}