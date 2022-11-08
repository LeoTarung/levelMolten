@extends('main')

@section('content')
    {{-- CSS JAM --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jam.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.dataTables.min.css') }}">

    <style>
        .chartdiv {
            /* top: 20%; */
            width: 100%;
            height: 300px;
            font-size: 11px;
        }
    </style>
    <header id="header" class="header-transparent mt-2">

        <div class="container-fluid d-flex text-center border-bottom shadow-sm">
            <div class="col-md-4">
                <div class="d-flex justify-content-start text-center mb-2 ">
                    <img class="logo" src="{{ url('/img/nusametal.png') }}" alt="Image" />
                </div>
            </div>
            <div class="col-md-4">
                <div class="d-flex justify-content-center text-center ">
                    <h1 class="display-4 mt-4"><a class=" fw-semibold text-decoration-none text-dark fs-7"
                            href="/dashboard">Level
                            Molten Monitoring</a>
                    </h1>
                </div>
            </div>
            <div class="col-md-4">
                {{-- <div class="d-flex justify-content-end border-bottom text-right"> --}}
                <div class="d-flex justify-content-end ms-3 mt-4 ">
                    <label id="MyClockDisplay" class="clock shadow-sm rounded mt-3 px-5 " onload="showTime()">
                    </label>

                </div>
            </div>
        </div>

    </header>

    {{-- <div class="container-fluid">
        <div class="row align-items-start mt-3">
            <div class="col-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt1['mc'] }}"> --}}
    {{-- <div class="card-header bg-warning rounded-top fw-bold fs-15 text-center">
        <h2><strong>MC :
                {{ $molt1['mc'] }}</strong></h2>
    </div>
    <div class="card-body py-0 px-0">
        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
    {{-- <div class="card-content">
            <div id="chartdiv1" class="chartdiv">
            </div>
        </div>
    </div> --}}
    {{-- </a> --}}
    {{-- </div>
    </div> --} --}}
    <div class="container-fluid ">
        <div class="row align-items-start mt-3">
            <div class="col-2 none align-items-start">
                <div id="chartdiv1" class="chartdiv"></div>
            </div>
            <div class="col-2 none align-items-start ">
                <div class="d-flex justify-content-start">
                    <div id="chartdiv2" class="chartdiv"></div>
                </div>
            </div>
            <div class="col-2 none align-items-start ">
                <div class="d-flex justify-content-start">
                    <div id="chartdiv3" class="chartdiv"></div>
                </div>
            </div>
            <div class="col-2 none align-items-start ">
                <div class="d-flex justify-content-start">
                    <div id="chartdiv4" class="chartdiv"></div>
                </div>
            </div>
            <div class="col-2 none align-items-start ">
                <div class="d-flex justify-content-start">
                    <div id="chartdiv5" class="chartdiv"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Resources -->
    <script src="https://cdn.amcharts.com/lib/4/core.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
    <script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
    <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/chart.min.js') }}"></script>


    <script>
        function showTime() {
            var date = new Date();
            var h = date.getHours(); // 0 - 23
            var m = date.getMinutes(); // 0 - 59
            var s = date.getSeconds(); // 0 - 59
            var session = "WIB";

            // if (h == 0) {
            //     h = 12;
            // }

            // if (h > 12) {
            //     h = h - 12;
            //     session = "PM";
            // }

            h = (h < 10) ? "0" + h : h;
            m = (m < 10) ? "0" + m : m;
            s = (s < 10) ? "0" + s : s;

            var time = h + ":" + m + ":" + s + " " + session;
            console.log(time)
            document.getElementById("MyClockDisplay").innerText = time;
            document.getElementById("MyClockDisplay").textContent = time;

            setTimeout(showTime, 1000);

        }

        showTime();
    </script>

    <!-- Chart code -->
    <script>
        //tabung 1
        var max1 = {{ $molt1['max'] }};
        var v1 = ({{ $molt1['capacity'] }} / max1) * 100;
        var v1a = 100 - v1

        //tabung 2
        var max2 = {{ $molt2['max'] }};
        var v2 = ({{ $molt2['capacity'] }} / max2) * 100;
        var v2a = 100 - v2

        //tabung3
        var max3 = {{ $molt3['max'] }};
        var v3 = ({{ $molt3['capacity'] }} / max3) * 100;
        var v3a = 100 - v3

        // tabung4
        var max4 = {{ $molt4['max'] }};
        var v4 = ({{ $molt4['capacity'] }} / max4) * 100;
        var v4a = 100 - v4

        //tabung5
        var max5 = {{ $molt5['max'] }};
        var v5 = ({{ $molt5['capacity'] }} / max5) * 100;
        var v5a = 100 - v5


        console.log(v1a);
        console.log(2);
        am4core.ready(function() {
            //////////////////////////////////////////////////////////////////////////////////////////////////////////
            am4core.addLicense("ch-custom-attribution");
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end

            // Create chart instance
            var chart1 = am4core.create("chartdiv1", am4charts.XYChart3D);

            // chart.titles.create().text = "Crude oil reserves";

            // Add data


            chart1.data = [{
                "category": "2018 Q1",
                "value1": v1,
                "value2": v1a
            }];

            // Create axes
            var categoryAxis1 = chart1.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis1.dataFields.category = "category";
            categoryAxis1.renderer.grid.template.location = 0;
            categoryAxis1.renderer.grid.template.strokeOpacity = 0;
            // categoryAxis.renderer.labels.template.disabled = true;

            var valueAxis1 = chart1.yAxes.push(new am4charts.ValueAxis());
            valueAxis1.renderer.grid.template.strokeOpacity = 0;
            valueAxis1.min = -10;
            valueAxis1.max = 110;
            valueAxis1.strictMinMax = true;
            valueAxis1.renderer.baseGrid.disabled = true;
            valueAxis1.renderer.labels.template.disabled = true;
            // valueAxis.renderer.labels.template.adapter.add("text", function(text) {
            //     if ((text > 100) || (text < 0)) {
            //         return "";
            //     } else {
            //         return text + "%";
            //     }
            // })

            // Create series
            var series1a = chart1.series.push(new am4charts.ConeSeries());
            series1a.dataFields.valueY = "value1";
            series1a.dataFields.categoryX = "category";
            series1a.columns.template.width = am4core.percent(80);
            // series1a.columns.template.fill = am4core.color("#19d228");
            series1a.columns.template.stroke = am4core.color("#cdcdcd");
            series1a.columns.template.fillOpacity = 0.9;
            series1a.columns.template.strokeOpacity = 1;
            series1a.columns.template.strokeWidth = 2;
            series1a.sequencedInterpolation = true

            var series2a = chart1.series.push(new am4charts.ConeSeries());
            series2a.dataFields.valueY = "value2";
            series2a.dataFields.categoryX = "category";
            series2a.stacked = true;
            series2a.columns.template.width = am4core.percent(80);
            series2a.columns.template.fill = am4core.color("#cdcdcd");
            series2a.columns.template.fillOpacity = 0.1;
            series2a.columns.template.stroke = am4core.color("#cdcdcd");
            series2a.columns.template.strokeOpacity = 0.2;
            series2a.columns.template.strokeWidth = 2;
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////

            // am4core.addLicense("ch-custom-attribution");
            // // Themes begin
            // am4core.useTheme(am4themes_animated);
            // // Themes end

            // Create chart instance
            var chart3 = am4core.create("chartdiv2", am4charts.XYChart3D);
            chart3.data = [{
                "category": "2018 Q2",
                "value1": v2,
                "value2": v2a
            }];

            // Create axes
            var categoryAxis3 = chart3.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis3.dataFields.category = "category";
            categoryAxis3.renderer.grid.template.location = 0;
            categoryAxis3.renderer.grid.template.strokeOpacity = 0;
            // categoryAxis3.renderer.labels.template.disabled = true;

            var valueAxis3 = chart3.yAxes.push(new am4charts.ValueAxis());
            valueAxis3.renderer.grid.template.strokeOpacity = 0;
            valueAxis3.min = -10;
            valueAxis3.max = 110;
            valueAxis3.strictMinMax = true;
            valueAxis3.renderer.baseGrid.disabled = true;
            valueAxis3.renderer.labels.template.disabled = true;
            // valueAxis.renderer.labels.template.adapter.add("text", function(text) {
            //     if ((text > 100) || (text < 0)) {
            //         return "";
            //     } else {
            //         return text + "%";
            //     }
            // })

            // Create series
            var series1b = chart3.series.push(new am4charts.ConeSeries());
            series1b.dataFields.valueY = "value1";
            series1b.dataFields.categoryX = "category";
            series1b.columns.template.width = am4core.percent(80);
            series1b.columns.template.fill = am4core.color("#19d228");
            series1b.columns.template.stroke = am4core.color("#cdcdcd");
            series1b.columns.template.fillOpacity = 0.9;
            series1b.columns.template.strokeOpacity = 1;
            series1b.columns.template.strokeWidth = 2;

            var series2b = chart3.series.push(new am4charts.ConeSeries());
            series2b.dataFields.valueY = "value2";
            series2b.dataFields.categoryX = "category";
            series2b.stacked = true;
            series2b.columns.template.width = am4core.percent(80);
            series2b.columns.template.fill = am4core.color("#cdcdcd");
            series2b.columns.template.fillOpacity = 0.1;
            series2b.columns.template.stroke = am4core.color("#cdcdcd");
            series2b.columns.template.strokeOpacity = 0.2;
            series2b.columns.template.strokeWidth = 2;
            //////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //tabung 3

            var chart3 = am4core.create("chartdiv3", am4charts.XYChart3D);
            chart3.data = [{
                "category": "2018 Q2",
                "value1": v3,
                "value2": v3a
            }];

            // Create axes
            var categoryAxis3 = chart3.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis3.dataFields.category = "category";
            categoryAxis3.renderer.grid.template.location = 0;
            categoryAxis3.renderer.grid.template.strokeOpacity = 0;
            // categoryAxis3.renderer.labels.template.disabled = true;

            var valueAxis3 = chart3.yAxes.push(new am4charts.ValueAxis());
            valueAxis3.renderer.grid.template.strokeOpacity = 0;
            valueAxis3.min = -10;
            valueAxis3.max = 110;
            valueAxis3.strictMinMax = true;
            valueAxis3.renderer.baseGrid.disabled = true;
            valueAxis3.renderer.labels.template.disabled = true;
            // valueAxis.renderer.labels.template.adapter.add("text", function(text) {
            //     if ((text > 100) || (text < 0)) {
            //         return "";
            //     } else {
            //         return text + "%";
            //     }
            // })

            // Create series
            var series1c = chart3.series.push(new am4charts.ConeSeries());
            series1c.dataFields.valueY = "value1";
            series1c.dataFields.categoryX = "category";
            series1c.columns.template.width = am4core.percent(80);
            series1c.columns.template.fill = am4core.color("#19d228");
            series1c.columns.template.stroke = am4core.color("#cdcdcd");
            series1c.columns.template.fillOpacity = 0.9;
            series1c.columns.template.strokeOpacity = 1;
            series1c.columns.template.strokeWidth = 2;

            var series2c = chart3.series.push(new am4charts.ConeSeries());
            series2c.dataFields.valueY = "value2";
            series2c.dataFields.categoryX = "category";
            series2c.stacked = true;
            series2c.columns.template.width = am4core.percent(80);
            series2c.columns.template.fill = am4core.color("#cdcdcd");
            series2c.columns.template.fillOpacity = 0.1;
            series2c.columns.template.stroke = am4core.color("#cdcdcd");
            series2c.columns.template.strokeOpacity = 0.2;
            series2c.columns.template.strokeWidth = 2;
            /////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //tabung 4

            var chart5 = am4core.create("chartdiv4", am4charts.XYChart3D);
            chart5.data = [{
                "category": "2018 Q2",
                "value1": v4,
                "value2": v4a
            }];

            // Create axes
            var categoryAxis4 = chart5.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis4.dataFields.category = "category";
            categoryAxis4.renderer.grid.template.location = 0;
            categoryAxis4.renderer.grid.template.strokeOpacity = 0;
            // categoryAxis4.renderer.labels.template.disabled = true;

            var valueAxis4 = chart5.yAxes.push(new am4charts.ValueAxis());
            valueAxis4.renderer.grid.template.strokeOpacity = 0;
            valueAxis4.min = -10;
            valueAxis4.max = 110;
            valueAxis4.strictMinMax = true;
            valueAxis4.renderer.baseGrid.disabled = true;
            valueAxis4.renderer.labels.template.disabled = true;
            // valueAxis.renderer.labels.template.adapter.add("text", function(text) {
            //     if ((text > 100) || (text < 0)) {
            //         return "";
            //     } else {
            //         return text + "%";
            //     }
            // })

            // Create series
            var series1d = chart5.series.push(new am4charts.ConeSeries());
            series1d.dataFields.valueY = "value1";
            series1d.dataFields.categoryX = "category";
            series1d.columns.template.width = am4core.percent(80);
            series1d.columns.template.fill = am4core.color("#19d228");
            series1d.columns.template.stroke = am4core.color("#cdcdcd");
            series1d.columns.template.fillOpacity = 0.9;
            series1d.columns.template.strokeOpacity = 1;
            series1d.columns.template.strokeWidth = 2;

            var series2d = chart5.series.push(new am4charts.ConeSeries());
            series2d.dataFields.valueY = "value2";
            series2d.dataFields.categoryX = "category";
            series2d.stacked = true;
            series2d.columns.template.width = am4core.percent(80);
            series2d.columns.template.fill = am4core.color("#cdcdcd");
            series2d.columns.template.fillOpacity = 0.1;
            series2d.columns.template.stroke = am4core.color("#cdcdcd");
            series2d.columns.template.strokeOpacity = 0.2;
            series2d.columns.template.strokeWidth = 2;

            ////////////////////////////////////////////////////////////////////////////////////////////////////////////
            //tabung 5

            var chart5 = am4core.create("chartdiv5", am4charts.XYChart3D);
            chart5.data = [{
                "category": "2018 Q2",
                "value1": v5,
                "value2": v5a
            }];

            // Create axes
            var categoryAxis5 = chart5.xAxes.push(new am4charts.CategoryAxis());
            categoryAxis5.dataFields.category = "category";
            categoryAxis5.renderer.grid.template.location = 0;
            categoryAxis5.renderer.grid.template.strokeOpacity = 0;
            // categoryAxis5.renderer.labels.template.disabled = true;

            var valueAxis5 = chart5.yAxes.push(new am4charts.ValueAxis());
            valueAxis5.renderer.grid.template.strokeOpacity = 0;
            valueAxis5.min = -10;
            valueAxis5.max = 110;
            valueAxis5.strictMinMax = true;
            valueAxis5.renderer.baseGrid.disabled = true;
            valueAxis5.renderer.labels.template.disabled = true;
            // valueAxis.renderer.labels.template.adapter.add("text", function(text) {
            //     if ((text > 100) || (text < 0)) {
            //         return "";
            //     } else {
            //         return text + "%";
            //     }
            // })

            // Create series
            var series1d = chart5.series.push(new am4charts.ConeSeries());
            series1d.dataFields.valueY = "value1";
            series1d.dataFields.categoryX = "category";
            series1d.columns.template.width = am4core.percent(80);
            series1d.columns.template.fill = am4core.color("#19d228");
            series1d.columns.template.stroke = am4core.color("#cdcdcd");
            series1d.columns.template.fillOpacity = 0.9;
            series1d.columns.template.strokeOpacity = 1;
            series1d.columns.template.strokeWidth = 2;

            var series2e = chart5.series.push(new am4charts.ConeSeries());
            series2e.dataFields.valueY = "value2";
            series2e.dataFields.categoryX = "category";
            series2e.stacked = true;
            series2e.columns.template.width = am4core.percent(80);
            series2e.columns.template.fill = am4core.color("#cdcdcd");
            series2e.columns.template.fillOpacity = 0.1;
            series2e.columns.template.stroke = am4core.color("#cdcdcd");
            series2e.columns.template.strokeOpacity = 0.2;
            series2e.columns.template.strokeWidth = 2;
            ///////////////////////////////////////////////////////////////////////////////////////////////////////////
            function getSeries(urutan, value) {
                // var value = value1;
                switch (urutan) {
                    case 1:

                        // chart1.data.am4themes_animated = [{
                        //     "category": "2018 Q1",
                        //     "value1": v1,
                        //     "value2": v1a
                        // }];

                        if (value <= 20) {
                            // var gradient = new am4core.LinearGradient();
                            // gradient.addColor(am4core.color("#ff0000"));
                            // gradient.addColor(am4core.color("#fb7116"));
                            // gradient.addColor(am4core.color("#f6d32b"));
                            // gradient.addColor(am4core.color("#f4fb16"));
                            // gradient.addColor(am4core.color("#19d228"));

                            series1a.columns.template.fill = am4core.color("#ff0000");
                            series1a.columns.template.stroke = am4core.color("#ff0000");
                            series2a.columns.template.fill = am4core.color("#ff0000");
                            series2a.columns.template.stroke = am4core.color("#ff0000");
                            // gradient.rotation = -90;
                        } else if (value <= 40) {
                            series1a.columns.template.fill = am4core.color("#fb7116");
                        } else if (value <= 60) {
                            series1a.columns.template.fill = am4core.color("#f6d32b");
                        } else if (value <= 80) {
                            series1a.columns.template.fill = am4core.color("#f4fb16");
                        }
                        break;
                    case 2:
                        if (value <= 20) {
                            series1b.columns.template.fill = am4core.color("#ff0000");
                        } else if (value <= 40) {
                            series1b.columns.template.fill = am4core.color("#fb7116");
                        } else if (value <= 60) {
                            series1b.columns.template.fill = am4core.color("#f6d32b");
                        } else if (value <= 80) {
                            series1b.columns.template.fill = am4core.color("#f4fb16");
                        }
                        break;
                    case 3:
                        if (value <= 20) {
                            series1c.columns.template.fill = am4core.color("#ff0000");
                        } else if (value <= 40) {
                            series1c.columns.template.fill = am4core.color("#fb7116");
                        } else if (value <= 60) {
                            series1c.columns.template.fill = am4core.color("#f6d32b");
                        } else if (value <= 80) {
                            series1c.columns.template.fill = am4core.color("#f4fb16");
                        }
                        break;
                    case 4:
                        if (value <= 20) {
                            series1d.columns.template.fill = am4core.color("#ff0000");
                        } else if (value <= 40) {
                            series1d.columns.template.fill = am4core.color("#fb7116");
                        } else if (value <= 60) {
                            series1d.columns.template.fill = am4core.color("#f6d32b");
                        } else if (value <= 80) {
                            series1d.columns.template.fill = am4core.color("#f4fb16");
                        }
                        break;
                    case 5:
                        if (value <= 20) {
                            series1e.columns.template.fill = am4core.color("#ff0000");
                        } else if (value <= 40) {
                            series1e.columns.template.fill = am4core.color("#fb7116");
                        } else if (value <= 60) {
                            series1e.columns.template.fill = am4core.color("#f6d32b");
                        } else if (value <= 80) {
                            series1e.columns.template.fill = am4core.color("#f4fb16");
                        }
                        break;
                }
            }

            //////////////////////////////////////////////////////////////////
            setInterval(() => {
                $.ajax('http://localhost:8000/api/v1/molten', {
                    dataType: 'json', // type of response data
                    success: function(data, status, xhr) { // success callback function
                        for (let i = 0; i < data.data.length; i++) {
                            let capacity = data.data[i].capacity;
                            let max = data.data[i].max;
                            let realValue = (capacity / max) * 100;
                            getSeries(i + 1, realValue);
                            // function play(val) {

                            //     switch (val) {
                            //         case 1:
                            //             getSeries(i + 1, realvalue)
                            //             break;
                            //         case 2:
                            //             getSeries(i + 1, realvalue)
                            //             break;
                            //         case 3:
                            //             getSeries(i + 1, realvalue)
                            //             break;
                            //         case 4:
                            //             getSeries(i + 1, realvalue)
                            //             break;
                            //         case 4:
                            //             getSeries(i + 1, realvalue)
                            //             break;
                            //     }
                            console.log(realValue);
                            // }

                            // play(i + 1)
                        }
                    },
                    error: function(jqXhr, textStatus, errorMessage) { // error callback 
                        console.log(errorMessage);
                    }
                });
            }, 1000)

        }); // end am4core.ready()
    </script>
@endsection
