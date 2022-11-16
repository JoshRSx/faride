<!--  Reporte del proceso de los clientes (tiempo estimado,)
//material usado en x tiempo (semana, mes, año);
//chartJS 
-->

<!DOCTYPE html>
<html lang="es">
<head>
    @extends('components.head')
    <link rel="stylesheet" href="../resources/css/gestionTelas.css">
    <title>Portal Supervisor</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body style="background: #eee">
  

    @extends('components.Supervisor.headerSupervisor')
    @extends('components.Supervisor.sectionListSupervisor')
    
    <section class="row option-selection" >

        <div class="col-md-3 cont">

        <div class="">
            
        <h6 class="text-center">Gasto Tela (Ultimos 6 meses) </h6><br>
            <canvas id="pie-chart-tela"></canvas>
        </div>

    
        


        </div>

        <div class="col-md-3 cont">
        <div class="">
            
         <h6 class="text-center">Gasto Hilo (Ultimos 6 meses) </h6><br>
                <canvas id="pie-chart-hilo"></canvas>
            </div>



        </div>



        <div class="col-md-3 cont">
            <div class="">
            
                <h6 class="text-center">Articulos vendidos(Ultimos 6 meses) </h6><br>
           
                       <canvas id="pie-chart-art"></canvas>
           
                   </div>
                   

        </div>


        <br><br><br>
        <div class="col-10">

       
            <div class="cont">
                <div class="">
                
                    <h6 class="text-center">Articulos vendidos(Ultimos 6 meses) </h6><br>
               
                           <canvas id="bar-chart-gastot"></canvas>
               
                       </div>
                       
    
            </div>


        </div>





    </section>




 


<script>
  new Chart(document.getElementById("pie-chart-tela"), {
    type: 'pie',    
    data: {
      labels: ['January', 'February', 'March'],
      datasets: [{
        data: [50445, 33655, 15900],
        backgroundColor: ['#FF6384', '#36A2EB','#FFCE56']
      }]
    },
    options: {
      responsive: true,
      maintainAspectRatio: true,
      plugins: {
        labels: {
          render: 'percentage',
          fontColor: ['green', 'white', 'red'],
          precision: 2
        }
      },
    }
});




new Chart(document.getElementById("pie-chart-hilo"), {
    type: 'pie',
    data: {
      labels: ["Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
      datasets: [{
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#322"],
        data: [2478,5267,734,784,433,423]
      }]
    },
    options: {
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});


new Chart(document.getElementById("pie-chart-art"), {
    type: 'pie',
    data: {
      labels: ["Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
      datasets: [{
        
        label: "Population (millions)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#322"],
        data: [2478,5267,734,784,433,423]
      }]
    },
    options: {
        
      title: {
        display: true,
        text: 'Predicted world population (millions) in 2050'
      }
    }
});




new Chart(document.getElementById("bar-chart-gastot"), {
    type: 'bar',
    data: {
      labels: ["Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"],
      datasets: [{

        label:"Gastos en (Soles)",
        backgroundColor: ["#3e95cd", "#8e5ea2","#3cba9f","#e8c3b9","#c45850", "#322"],
        data: [2478,5267,734,784,433,423]
        
      }]
    },
    options: {
      title: {
        display: true,
      }
    }
});
</script>
 
    
</body>
</html>