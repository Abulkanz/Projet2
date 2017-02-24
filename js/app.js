$(document).ready(function () {

    //Graph Taille
    $.ajax({
        url: "http://localhost/Projet2/modele/jsonG/graphTaille.php",
        method: "GET",
        success: function (data) {
            console.log(data);
            var espece = [];
            var espece2 = [];
            var taille = [];
            var taille2 = [];
            var i = 0;

            for (i = 0; i <= 11; i++) {
                espece.push(data[i].nomEspece);
                taille.push(data[i].tMoyenne);
            }

            var chartdata = {
                labels: espece,
                datasets: [
                    {
                        label: 'Taille Moyenne',
                        backgroundColor: 'rgba(97, 229, 161, 0.75)',
                        borderColor: 'rgba(255, 255, 255, 0.5)',
                        hoverBackgroundColor: 'rgba(97, 229, 161, 1)',
                        hoverBorderColor: 'rgba(255, 255, 255, 0.75)',
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

            for (var i = 0; i <= 11; i++) {
                espece.push(data[i].nomEspece);
                poids.push(data[i].pMoyen);
            }

            var chartdata = {
                labels: espece,
                datasets: [
                    {
                        label: 'Poids moyen',
                        backgroundColor: 'rgba(200, 200, 200, 0.75)',
                        borderColor: 'rgba(200, 200, 200, 0.75)',
                        hoverBackgroundColor: 'rgba(200, 200, 200, 1)',
                        hoverBorderColor: 'rgba(200, 200, 200, 1)',
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

