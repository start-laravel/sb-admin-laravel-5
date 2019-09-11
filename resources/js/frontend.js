var cline = document.getElementById("cline");
if (cline !== null) {
    new Chart(cline, {
        "type": "line",
        "data": {
            "labels": ["January","February","March","April","May","June","July"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [65,59,80,81,56,55,40],
                "fill": false,
                "borderColor": "rgb(75, 192, 192)",
                "lineTension": 0.1
            }]
        },
        "options": {
            "responsive": true
        }
    });
}

var cpie = document.getElementById("cpie");
if (cpie !== null) {
    new Chart(cpie, {
        "type": "pie",
        "data": {
            "labels": ["Red","Blue","Yellow"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [300,50,100],
                "backgroundColor": ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
            }]
        },
        "options": {
            "responsive": true
        }
    });
}

var cdonut = document.getElementById("cdonut");
if (cdonut !== null) {
    new Chart(cdonut, {
        "type": "doughnut",
        "data": {
            "labels": ["Red","Blue","Yellow"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [300,50,100],
                "backgroundColor": ["rgb(255, 99, 132)","rgb(54, 162, 235)","rgb(255, 205, 86)"]
            }],
            "cutoutPercentage": 33
        },
        "options": {
            "responsive": true
        }
    });
}

var cbar = document.getElementById("cbar");
if (cbar !== null) {
    new Chart(cbar, {
        "type": "bar",
        "data": {
            "labels": ["January","February","March","April","May","June","July"],
            "datasets": [{
                "label": "My First Dataset",
                "data": [65,59,80,81,56,55,40],
                "fill": false,
                "backgroundColor": ["rgba(255, 99, 132, 0.2)","rgba(255, 159, 64, 0.2)","rgba(255, 205, 86, 0.2)","rgba(75, 192, 192, 0.2)","rgba(54, 162, 235, 0.2)","rgba(153, 102, 255, 0.2)","rgba(201, 203, 207, 0.2)"],
                "borderColor": ["rgb(255, 99, 132)","rgb(255, 159, 64)","rgb(255, 205, 86)","rgb(75, 192, 192)","rgb(54, 162, 235)","rgb(153, 102, 255)","rgb(201, 203, 207)"],
                "borderWidth": 1
            }]
        },
        "options": {
            "scales": {
                "yAxes": [{
                    "ticks": {
                        "beginAtZero": true
                    }
                }]
            },
            "responsive": true
        }
    });
}
