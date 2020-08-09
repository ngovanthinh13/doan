<!DOCTYPE html>
<html>
<head>
<title>Creating Dynamic Data Graph using PHP and Chart.js</title>
<style type="text/css">
BODY {
    width: 80%;
}

#chart-container {
    width: 100%;
    height: auto;
}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/Chart.min.js"></script>


</head>
<body>
    <div id="chart-container">
        <canvas id="graphCanvas"></canvas>
        <canvas id="graphCanvas1"></canvas>
        <canvas id="graphCanvas2"></canvas>
        <canvas id="graphCanvas3"></canvas>
    </div>

    <script>
        $(document).ready(function () {
            showGraph();
        });


        function showGraph()
        {
            {
                $.post("chart.php",
                function (data)
                {
                    console.log(data);
                    var ngay = [];
                    var nhiptim = [];
                    var oxy = [];
                    var nhietdo = [];
                    var doam = [];
                    

                    for (var i in data) {
                        ngay.push(data[i].ngay);
                        nhiptim.push(data[i].nhiptim);
                        oxy.push(data[i].oxy);
                        nhietdo.push(data[i].nhietdo);
                        doam.push(data[i].doam);
                    }

                    var chartdata = {
                        labels: ngay,
                        datasets: [
                            {
                                label: 'nhip tim',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: nhiptim
                            }
                        ]
                    };
                    var chartdata1 = {
                        labels: ngay,
                        datasets: [
                            {
                                label: 'do bao hoa oxy',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: oxy
                            }
                        ]
                    };
                    var chartdata2 = {
                        labels: ngay,
                        datasets: [
                            {
                                label: 'nhiet do',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: nhietdo
                            }
                        ]
                    };
                    var chartdata3 = {
                        labels: ngay,
                        datasets: [
                            {
                                label: 'do am',
                                backgroundColor: '#49e2ff',
                                borderColor: '#46d5f1',
                                hoverBackgroundColor: '#CCCCCC',
                                hoverBorderColor: '#666666',
                                data: doam
                            }
                        ]
                    };

                    var graphTarget = $("#graphCanvas");
                    
                    var graphTarget1 = $("#graphCanvas1");
                    var graphTarget2 = $("#graphCanvas2");
                    var graphTarget3 = $("#graphCanvas3");
                    
                    var barGraph = new Chart(graphTarget, {
                        type: 'bar',
                        data: chartdata
                    });
                    var barGraph1 = new Chart(graphTarget1, {
                        type: 'bar',
                        data: chartdata1
                    });
                    var barGraph2 = new Chart(graphTarget2, {
                        type: 'bar',
                        data: chartdata2
                    });
                    var barGraph3 = new Chart(graphTarget3, {
                        type: 'bar',
                        data: chartdata3
                    });
                });
            }
        }
        </script>

</body>
</html>