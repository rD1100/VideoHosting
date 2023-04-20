@extends('Layouts.Users.Main')
@section('content')

 {{-- content --}}
 
 {{-- <main> --}}
    
    <div class="contentPage">
        
        <div class="rowContent">

  
            <?php
                for ($i=0; $i <6 ; $i++) { 
            ?>
                     <div class="kontenView">
                        {{-- kontent --}}
                        <div class="columnKonten">
                            <div class="iconPosition" >
                                <i class="fa-regular fa-circle-play"></i>
                            </div>
                            <div class="kontenHeading">
                               <div class="zero">
                                0
                               </div>
                                <div>
                                    Lorem ipsum dolor 
                                </div>
                            </div>
            
                        </div>
                    </div>
            <?php
                }
            ?>
    
        </div>
        <div class="ContainerKontent">
            <div class="rowContent">
                <div>
                    <div class="graphTitle">
                        Last 7 days stats
                    </div>
                    <div class="ContainerGraph" >
                        <canvas id="myChart" class="GraphDashboard" ></canvas>
                        <script>
                            const grafik=document.getElementById('myChart');
                            let data1={
                            label: "Views",
                                    data:[0,0,0.8,0,0.20,0,0],
                                    tension: 0.1,
                                    fill:false,
                                    borderColor: "red",
                                    pointStyle: 'circle',
                                    pointRadius:5,
                                    pointHoverRadius: 10,
                                    // pointHitRadius: 10,
                                    pointBorderColor:"gold",
                                    pointBackgroundColor:"rgb(255, 0, 0)",
                                    // spanGaps: true
                        };
                        let data2={
                            label: "Profits",
                                    data:[0, 0, 0, 0.10, 0, 0],
                                    lineTension:0,
                                    fill:false,
                                    borderColor:'blue',
                                    pointStyle: 'circle',
                                    pointRadius: 5,
                                    pointHoverRadius: 10,
                                    pointBorderColor:"gold",
                                    pointBackgroundColor:"rgb(0, 153, 255)"
                        }
                        const options={
                            responsive:true,
                            plugins:{ 
                                legend: {
                                // position: 'top',
                                display:false
                            }
                            },
                           
                            scales:{
                                    y:{
                                        max: 1,
                                        ticks: {
                                            beginAtZero: true,
                                            stepSize:0.25,
                                            callback:function(value,index,values){
                                                return (value * 1).toFixed(2);
                                            }
                                        
                                        },
                                    
                                        grid:{
                                            display:true,
                                            color:'white',

                                        }
                                    },

                                    x: {
                                        position: 'bottom',         
                                        ticks: {
                                        beginAtZero: true
                                        },
                                        grid: {
                                            offset: true,
                                        }
                                     
                                    }
                                }
                              
                        }
    
                        new Chart(grafik,{
                            type:'line',
                            data:{
                                labels:['2023-03-14', '2023-03-15', '2023-03-16', '2023-03-17', '2023-03-18', '2023-03-19'],
                                datasets:[data1,data2]
                            },
                            options:options
                            });
                               
                        </script>
                    </div>
                </div>
    
                <div class="TopBorder">
                    <div class="graphTitle">
                        Top Views 7 Days 
                    </div>
                    <div class="viewBorder">
                        <div class="viewKontent">
                            No Views
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
     
     </div>
 </main>

 {{-- end content --}}

 @endsection
 