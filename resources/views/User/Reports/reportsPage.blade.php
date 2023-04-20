@extends('Layouts.Users.Main')
@section('content')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="contentPage">
    <div class="ContainerInsideKontent"">
        <div class="ContainerDateReports">
            
                <form action="" class="formGraphReport">
                    <div>
                        From
                    </div>
                    <div class="ContainerInputDateReports">
                        <div class="InputDateReports">
                            <input type="text" name="" id="datePickerFirst">
                            <div class=" ContainerIconInputDateReports">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                           
                        </div>
                    </div>
                    
                    <div>
                        to
                    </div>
                    <div class="ContainerInputDateReports">
                        <div class="InputDateReports">
                            <input type="text" name="" id="datePickerSecond">
                            <div class=" ContainerIconInputDateReports">
                                <i class="fa-solid fa-calendar-days"></i>
                            </div>
                           
                        </div>
                    </div>
               
                    <div class="ContainerBtnGraphReports">
                        <button class="btnGraphReports" type="submit">
                            <div class="titleBtnBtnGraphReports" >
                                Show Results
                            </div>
                            <div  class="ContainerIconbtnGraphReports">
                                <i class="fa-solid fa-arrow-right-long"></i>
                            </div>
                        </button>
                    </div>
                </form>              
        </div>
       
        <div class="ContainerGraphReport">
            <canvas id="myChart" class="GraphReport" ></canvas>
            {{-- <script>
                    canvas.width=500;
                canvas.height=500;
            </script> --}}
            <script>
                const grafik=document.getElementById('myChart');
                const ctx= grafik.getContext("2d");
                let data1={
                label: "Views",
                        data:[0,0,0,0,0,0,0],
                        // borderWidth:1,
                        lineTension:0,
                        fill:false,
                        borderColor: "red",
                        pointStyle: 'circle',
                        pointRadius:5,
                        pointHoverRadius: 10,
                        pointBorderColor:"gold",
                        pointBackgroundColor:"rgb(255, 0, 0)"
            };
            let data2={
                label: "Profits",
                        data:[0,0,0,0,0,0,0],
                        // borderWidth:1,
                        lineTension:0,
                        fill:false,
                        borderColor:'blue',
                        pointStyle: 'circle',
                        pointRadius: 5,
                        pointHoverRadius: 10,
                        pointBorderColor:"gold",
                        pointBackgroundColor:"rgb(0, 153, 255)"
            }
            // data.datasets[0].data=[0,0.25,0.5,0.75,1];
            const options={
                responsive:true,
                plugins:{ 
                    legend: {
                        display:false
                    }
                },
                maintainAspectRatio:false,
                scales:{
                        y:{
                          
                            max: 1,
                            // stepSize: 0.25,
                            ticks: {
                                beginAtZero: true,
                                stepSize:0.25,
                                callback:function(value,index,values){
                                    return (value * 1).toFixed(2);
                                }
                            
                            }
                            ,
                            grid:{
                                display:true,
                                color:'rgb(236, 239, 241)'
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

            new Chart(ctx,{
                type:'line',
                data:{
                    labels:['2023-03-14', '2023-03-15', '2023-03-16', '2023-03-17', '2023-03-18', '2023-03-19'],
                    datasets:[data1,data2]
                },
                options:options
                });
                   
            </script>
        </div>

        <div class="ContainerTableReports">
            <div class="TitleTableReports">
                Profit Statistics
            </div>
            <table   class="TableReports">
                <thead>
                    <tr>
                        <th>
                            Date
                        </th>
                        <th>
                            Views
                        </th>
                        <th>
                            Paid Views
                        </th>
                        <th>
                            Refferal Share
                        </th>
                        <th>
                            Total
                        </th>
                    </tr>
                </thead>               
                <tbody>
                    <tr>
                    
                        <td >
                            2023-03-01
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                    </tr>

                    <tr>
                    
                        <td >
                            2023-03-01
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                    </tr>

                    <tr>
                    
                        <td >
                            2023-03-01
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                    </tr>
                    
                    <tr>
                    
                        <td >
                            2023-03-01
                        </td>
                        <td>
                            0
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                        <td>
                            $0.00000
                        </td>
                    </tr>
                </tbody>
              
            </table>
        </div>
        

    </div>
    {{-- <h1>Reports page</h1> --}}
</div>  

@endsection