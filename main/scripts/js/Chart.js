var hourly = ['00:00','01:00','02:00','03:00','04:00','05:00','06:00','07:00','08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00'
,'21:00','22:00','23:00'
];
var chartdata = {
labels: hourly,

datasets : [
{
label : '',
backgroundColor: ["#a3e46c", "#6c9ce4", "#dde46c", "#e46c6c", "#ad6ce4", "#a3e46c", "#6c9ce4", "#dde46c", "#e46c6c", "#ad6ce4", "#a3e46c", "#6c9ce4"],
borderColor: 'rgba(200, 200, 200, 0.75)',
hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
hoverBorderColor: 'rgba(200, 200, 200, 1)',

data: ['5','100']
}
]
};

var ctx = document.querySelector("#mycanvas");

var barGraph = new Chart(ctx, {
type: 'bar',
data: chartdata
});

