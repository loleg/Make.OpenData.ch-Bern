/* Visualization of Bern sign ups by @loleg
 * created with https://code.google.com/apis/ajax/playground/
 */
function drawVisualization() {
    var data = new google.visualization.DataTable();
    data.addColumn('string', 'Title');
    data.addColumn('number', 'Count');
    data.addRows([['Datenbesitzer', 5],
                  ['Designer', 3],
                  ['Developer', 8],
                  ['Fachexpert', 5],
                  ['Forscher', 4],
                  ['Grafiker', 3],
                  ['Ideengeber', 5],
                  ['Informatikstudent', 8],
                  ['Journalist', 4],
                  ['Mobile', 3],
                  ['Softwareentwickler', 8],
                  ['Usabilityprofi', 3],
                  ['Web', 3]]);

    new google.visualization.BarChart(document.getElementById('visualization')).
      draw(data,
           {title:"MAKE.OPENDATA.CH Bern Registrations",
            width:600, height:400, legend:'none',
            colors: ['red'],
            vAxis: {title: ""},
            hAxis: {title: ""}}
      );
}
​