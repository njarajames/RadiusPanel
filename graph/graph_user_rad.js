// Récupérer les éléments du formulaire et du graphique
const form = document.getElementById("radius-form");
const usernameInput = document.getElementById("username");
const startDateInput = document.getElementById("date_deb");
const endDateInput = document.getElementById("date_fin");
const chartCanvas = document.getElementById("usage-chart").getContext("2d");
let chart;




let scrollPosition = 0;

function drawChart() {
   
    const username = usernameInput.value;
    const startDate = startDateInput.value;
    const endDate = endDateInput.value;
   
    console.log(username)
    console.log(startDate)
    console.log(endDate)
 
   scrollPosition = window.scrollY;

    // Effectuer une requête au serveur PHP pour récupérer les données
    axios.get(`graph/graph_user_rad.php?username=${username}&start_date=${startDate}&end_date=${endDate}`)
        .then((response) => {
            const data = response.data;
            console.log(data)
            // Mettre à jour le graphique
            if (chart) {
                chart.destroy();
            } 
            if(startDate == "" && endDate == ""){
               
                chart = new Chart(chartCanvas, {
                    type: "bar",
                    data: {
                        labels: ["Données Entré/Sortie en Mo"],
                        datasets: [
                            {
                                label: "Mo en sortie",
                                backgroundColor: "#EE0505",
                                data: data.outputOctets,
                                borderColor: "#EE0505",
                                fill: false,
                            },
                            {
                                label: "Mo en entrée",
                                backgroundColor: "#0548EE",
                                data: data.inputOctets,
                                borderColor: "#0548EE",
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        //maintainAspectRatio: true,
                    },
                });
                  
            }
            else{
            
                chart = new Chart(chartCanvas, {
                    type: "bar",
                    data: {
                        labels: data.timestamps,
                        datasets: [
                            {
                                label: "Mo en sortie",
                                backgroundColor: "#EE0505",
                                data: data.outputOctets,
                                borderColor: "#EE0505",
                                fill: false,
                            },
                            {
                                label: "Mo en entrée",
                                backgroundColor: "#0548EE",
                                data: data.inputOctets,
                                borderColor: "#0548EE",
                                fill: true,
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        //maintainAspectRatio: true,
                    },
                });
               // setInterval(drawChart, 1000);  
            }
            
           window.scrollTo(0, scrollPosition);
           
        })
        .catch((error) => {
            console.log(error);
        });
       
}
    
//setInterval(drawChart, 1000);  


