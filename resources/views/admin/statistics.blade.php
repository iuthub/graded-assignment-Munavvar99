@extends('layouts.admin')


@section('style')
<style>

    #charts_container{
        display: table-cell;
        vertical-align: middle;
    }
</style>
@endsection


@section('content')

   <div class="container" style="margin-top: 10%;">
       <div class="row" id="charts_container">
           <div class="col-md-6 col-sm-12">
               <canvas id="pieChart" class="chart"></canvas>
           </div>
           <div class="col-md-6 col-sm-12">
               <canvas id="horizontalBar"></canvas>
           </div>
       </div>
       <div class="dataHolder" rejected="{{ $rejected }}" accepted="{{ $success }}" news="{{ $news }}" total="{{ $total }}"></div>
   </div>

@endsection


@section('js')
    <script>
        //pie
        let rejected = document.getElementsByClassName('dataHolder')[0].attributes.rejected.value;
        let accepted = document.getElementsByClassName('dataHolder')[0].attributes.accepted.value;
        let newp = document.getElementsByClassName('dataHolder')[0].attributes.news.value;

        var ctxP = document.getElementById("pieChart").getContext('2d');
        var myPieChart = new Chart(ctxP, {
            type: 'pie',
            data: {
                labels: ["Rejected", "Accepted", "New products"],
                datasets: [{
                    data: [rejected, accepted, newp],
                    backgroundColor: ["#F7464A", "#46BFBD", "#FDB45C"],
                    hoverBackgroundColor: ["#FF5A5E", "#5AD3D1", "#FFC870"]
                }]
            },
            options: {
                responsive: true
            }
        });

        let totalR = rejected;
        let total = rejected+accepted+newp;
        let totalI=newp;

        //Details
        new Chart(document.getElementById("horizontalBar"), {
            "type": "horizontalBar",
            "data": {
                "labels": ["Total rejected", "Total pure items(accepted)", "Total items(accepted and rejected)"],
                "datasets": [{
                    "label": "Total items history",
                    "data": [totalR, total, totalI,50],
                    "fill": false,
                    "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)",
                        "rgba(255, 205, 86, 0.2)"
                    ],
                    "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)"
                    ],
                    "borderWidth": 1
                }]
            },
            "options": {
                "scales": {
                    "xAxes": [{
                        "ticks": {
                            "beginAtZero": true
                        }
                    }]
                }
            }
        });
    </script>
@endsection
