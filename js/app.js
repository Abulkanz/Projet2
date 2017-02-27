$(document).ready(function () {

    //Graph Taille
    $.ajax({
        url: "http://localhost/Projet2/modele/jsonG/graphTaille.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var espece = [];
            var taille = [];
            var lgTab = data.length;

            for (var i = 0; i < lgTab; i++) {
                espece.push(data[i].nomEspece);
                taille.push(data[i].tMoyenne);
            }

            var chartdata = {
                labels: espece,
                datasets: [
                    {
                        label: 'Taille Moyenne',
                        backgroundColor: 'rgba(54, 127, 89, 0.75)',
                        borderColor: 'rgba(27, 64, 45, 0.75)',
                        hoverBackgroundColor: 'rgba(54, 127, 89, 1)',
                        hoverBorderColor: 'rgba(27, 64, 45, 1)',
                        data: taille
                    }
                ]
            };
            
            var ctx = $('#tailleEsp');
            var barGraph = new Chart(ctx, {
                type: 'bar',
                data: chartdata,
                options: {
                    tooltips: {
                        mode: 'label',
                        callbacks: {
                            label: function (tooltipItems, data) {
                                return tooltipItems.yLabel + " cm";
                            }
                        }
                    }
                },
                responsive: true
            });
        },
        error: function (data) {
            console.log(data);
        }
    });

    //Graph Poids
    $.ajax({
        url: "http://localhost/Projet2/modele/jsonG/graphPoids.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var espece = [];
            var poids = [];
            var lgTab = data.length;

            for (var i = 0; i < lgTab; i++) {
                espece.push(data[i].nomEspece);
                poids.push(data[i].pMoyen);
            }

            var chartdata = {
                labels: espece,
                datasets: [
                    {
                        label: 'Poids moyen',
                        backgroundColor: 'rgba(229, 176, 74, 0.75)',
                        borderColor: 'rgba(127, 98, 41, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(127, 98, 41, 1)',
                        data: poids
                    }
                ]
            };
            
            var ctx = $('#poidsEsp');
            var barGraph = new Chart(ctx, {
                type: 'line',
                data: chartdata,
                options: {
                    tooltips: {
                        mode: 'label',
                        callbacks: {
                            label: function (tooltipItems, data) {
                                return tooltipItems.yLabel + " kg";
                            }
                        }
                    }
                },
                responsive: true
            });
        },
        error: function (data) {
            console.log(data);
        }
    });
});

