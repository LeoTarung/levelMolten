@extends('main')

@section('content')
    {{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jquery.dataTables.min.css') }}">

    {{-- CSS JAM --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/jam.css') }}">

    {{-- style untuk Gauge Chart --}}
    <style>
        .chartdiv {
            width: 100%;
            height: 140px;
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


    <div class="container-fluid">
        <div class="row align-items-start mt-3">
            <div class="col-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt1['mc'] }}"> --}}
                    <div class="card-header bg-warning rounded-top fw-bold fs-15 text-center">
                        <h2><strong>MC :
                                {{ $molt1['mc'] }}</strong></h2>
                    </div>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>

            <div class="col-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt2['mc'] }}"> --}}
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : {{ $molt2['mc'] }}
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv1" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt3['mc'] }}"> --}}
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : {{ $molt3['mc'] }}</h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}

                        {{-- {{ $molt->min }} --}}
                        <div class="card-content">
                            <div id="chartdiv2" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt4['mc'] }}"> --}}
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : {{ $molt4['mc'] }}</h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv3" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card card-rounded card-back shadow">
                    {{-- <a class="text-decoration-none text-dark" href="/detail/{{ $molt5['mc'] }}"> --}}
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : {{ $molt5['mc'] }}</h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv4" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card card-rounded card-back shadow">
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : {{ $molt6['mc'] }}</h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv5" class="chartdiv">
                            </div>
                        </div>
                    </div>
                    {{-- </a> --}}
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card card-rounded card-back shadow">
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : </h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv1" class="chartdiv">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3 mt-3">
                <div class="card card-rounded card-back shadow">
                    <div class="card-header bg-warning rounded-top fw-bold  text-center">
                        <h2><strong>MC : </h2>
                    </div>
                    </strong>
                    <div class="card-body py-0 px-0">
                        {{-- <h6 class="card-title text-center fs-6"></h6> --}}
                        <div class="card-content">
                            <div id="chartdiv1" class="chartdiv">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <script src="{{ asset('js/amcharts5gauge/index.js') }}"></script>
            <script src="{{ asset('js/amcharts5gauge/xy.js') }}"></script>
            <script src="{{ asset('js/amcharts5gauge/radar.js') }}"></script>
            <script src="{{ asset('js/amcharts5gauge/animated.js') }}"></script>
            <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
            <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
            <script src="{{ asset('js/chart.min.js') }}"></script>

            {{-- 
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.easing@1.4.1/jquery.easing.min.js" integrity="sha256-H3cjtrm/ztDeuhCN9I4yh4iN2Ybx/y1RM7rMmAesA0k=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.9.1/dist/chart.min.js" integrity="sha256-+8RZJua0aEWg+QVVKg4LEzEEm/8RFez5Tb4JBNiV5xA=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/radar.js"></script>
    <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script> --}}


            {{-- JS TANGGAL --}}
            <script>
                var date = new Date();
                var tahun = date.getFullYear();
                var bulan = date.getMonth();
                var tanggal = date.getDate();
                var hari = date.getDay();
                var jam = date.getHours();
                var menit = date.getMinutes();
                var detik = date.getSeconds();
                switch (hari) {
                    case 0:
                        hari = 'Minggu';
                        break;
                    case 1:
                        hari = 'Senin';
                        break;
                    case 2:
                        hari = 'Selasa';
                        break;
                    case 3:
                        hari = 'Rabu';
                        break;
                    case 4:
                        hari = 'Kamis';
                        break;
                    case 5:
                        hari = "Jum'at";
                        break;
                    case 6:
                        hari = 'Sabtu';
                        break;
                }
                switch (bulan) {
                    case 0:
                        bulan = 'Januari';
                        break;
                    case 1:
                        bulan = 'Februari';
                        break;
                    case 2:
                        bulan = 'Maret';
                        break;
                    case 3:
                        bulan = 'April';
                        break;
                    case 4:
                        bulan = 'Mei';
                        break;
                    case 5:
                        bulan = 'Juni';
                        break;
                    case 6:
                        bulan = 'Juli';
                        break;
                    case 7:
                        bulan = 'Agustus';
                        break;
                    case 8:
                        bulan = 'September';
                        break;
                    case 9:
                        bulan = 'Oktober';
                        break;
                    case 10:
                        bulan = 'November';
                        break;
                    case 11:
                        bulan = 'Desember';
                        break;
                }
                var tampilTanggal = hari + "," + ' ' + tanggal + ' ' + bulan + ' ' + tahun;
                document.getElementById('date-1').innerHTML = tampilTanggal;
            </script>

            {{-- JS JAM --}}
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

            {{-- JS GAUGE CHARTS --}}
            <script>
                // Min 
                var min1 = {{ $molt1['min'] }}
                var min2 = {{ $molt2['min'] }}
                var min3 = {{ $molt3['min'] }}
                var min4 = {{ $molt4['min'] }}
                var min5 = {{ $molt5['min'] }}
                var min6 = {{ $molt6['min'] }}


                //Max
                var max1 = {{ $molt1['max'] }}
                var max2 = {{ $molt2['max'] }}
                var max3 = {{ $molt3['max'] }}
                var max4 = {{ $molt4['max'] }}
                var max5 = {{ $molt5['max'] }}
                var max6 = {{ $molt6['max'] }}
                //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                am5.ready(function() {

                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root1 = am5.Root.new("chartdiv");

                    root1._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root1.setThemes([
                        am5themes_Animated.new(root1)
                    ]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart1 = root1.container.children.push(
                        am5radar.RadarChart.new(root1, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer1 = am5radar.AxisRendererCircular.new(root1, {
                        innerRadius: -10,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root1, {
                            rotation: 0,
                            stops: [{
                                    color: am5.color(0xff0000)
                                },
                                //{ color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                },

                            ]
                        })
                    });
                    var xAxis1 = chart1.xAxes.push(
                        am5xy.ValueAxis.new(root1, {
                            maxDeviation: 0,
                            min: max1,
                            max: min1,
                            strictMinMax: true,
                            renderer: axisRenderer1
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem1 = xAxis1.makeDataItem({
                        value: 1000,
                        // endValue: 2475,
                        // startValue: 525
                    });
                    axisDataItem1.set("value");

                    var bullet1 = axisDataItem1.set("bullet", am5xy.AxisBullet.new(root1, {
                        sprite: am5radar.ClockHand.new(root1, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis1.createAxisRange(axisDataItem1);

                    axisDataItem1.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart1.appear(1000, 100);
                    // end am5.ready()

                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root2 = am5.Root.new("chartdiv1");

                    root2._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root2.setThemes([
                        am5themes_Animated.new(root2)
                    ]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart2 = root2.container.children.push(
                        am5radar.RadarChart.new(root2, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer2 = am5radar.AxisRendererCircular.new(root2, {
                        innerRadius: -10,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root2, {
                            rotation: 0,
                            stops: [{
                                    color: am5.color(0xff0000)
                                },
                                //{ color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                }
                            ]
                        })
                    });

                    var xAxis2 = chart2.xAxes.push(
                        am5xy.ValueAxis.new(root2, {
                            maxDeviation: 0,
                            min: max2,
                            max: min2,
                            strictMinMax: true,
                            renderer: axisRenderer2
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem2 = xAxis2.makeDataItem({
                        value: 1000
                    });
                    axisDataItem2.set("value");

                    var bullet2 = axisDataItem2.set("bullet", am5xy.AxisBullet.new(root2, {
                        sprite: am5radar.ClockHand.new(root2, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis2.createAxisRange(axisDataItem2);

                    axisDataItem2.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart2.appear(1000, 100);


                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
                    // Create root element
                    // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                    var root3 = am5.Root.new("chartdiv2");

                    root3._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root3.setThemes([
                        am5themes_Animated.new(root3)
                    ]);

                    // Create chart
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart3 = root3.container.children.push(
                        am5radar.RadarChart.new(root3, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer3 = am5radar.AxisRendererCircular.new(root3, {
                        innerRadius: -10,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root3, {
                            rotation: 0,
                            stops: [{
                                    color: am5.color(0xff0000)
                                },
                                //{ color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                }
                            ]
                        })
                    });

                    var xAxis3 = chart3.xAxes.push(
                        am5xy.ValueAxis.new(root3, {
                            maxDeviation: 0,
                            min: max3,
                            max: min3,
                            strictMinMax: true,
                            renderer: axisRenderer3
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem3 = xAxis3.makeDataItem({});
                    axisDataItem3.set("value", 1000);

                    var bullet3 = axisDataItem3.set("bullet", am5xy.AxisBullet.new(root3, {
                        sprite: am5radar.ClockHand.new(root3, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis3.createAxisRange(axisDataItem3);

                    axisDataItem3.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart3.appear(1000, 100);

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    // Create chart
                    var root4 = am5.Root.new("chartdiv3");

                    root4._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root4.setThemes([
                        am5themes_Animated.new(root4)
                    ]);

                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart4 = root4.container.children.push(
                        am5radar.RadarChart.new(root4, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer4 = am5radar.AxisRendererCircular.new(root4, {
                        innerRadius: -10,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root4, {
                            rotation: 0,
                            stops: [{
                                    color: am5.color(0xff0000)
                                },
                                // { color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                }
                            ]
                        })
                    });

                    var xAxis4 = chart4.xAxes.push(
                        am5xy.ValueAxis.new(root4, {
                            maxDeviation: 0,
                            minDeviation: 0,
                            min: max4,
                            max: min4,
                            strictMinMax: true,
                            renderer: axisRenderer4
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem4 = xAxis4.makeDataItem({});
                    axisDataItem4.set("value", 1000);

                    var bullet4 = axisDataItem4.set("bullet", am5xy.AxisBullet.new(root4, {
                        sprite: am5radar.ClockHand.new(root4, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis4.createAxisRange(axisDataItem4);

                    axisDataItem4.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart4.appear(1000, 100);



                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    var root5 = am5.Root.new("chartdiv4");

                    root5._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root5.setThemes([
                        am5themes_Animated.new(root5)
                    ]);

                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart5 = root5.container.children.push(
                        am5radar.RadarChart.new(root5, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer5 = am5radar.AxisRendererCircular.new(root5, {
                        innerRadius: -20,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root5, {
                            rotation: 0,
                            stops: [

                                {
                                    color: am5.color(0xff0000)
                                },
                                {
                                    color: am5.color(0xff0000)
                                },
                                //{ color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                }
                            ]
                        })
                    });

                    var xAxis5 = chart5.xAxes.push(
                        am5xy.ValueAxis.new(root5, {
                            maxDeviation: 0,
                            min: max5,
                            max: min5,
                            strictMinMax: true,
                            renderer: axisRenderer5
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem5 = xAxis5.makeDataItem({});
                    axisDataItem5.set("value", 0);

                    var bullet5 = axisDataItem5.set("bullet", am5xy.AxisBullet.new(root5, {
                        sprite: am5radar.ClockHand.new(root5, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis5.createAxisRange(axisDataItem5);

                    axisDataItem5.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart5.appear(1000, 100);

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    var root6 = am5.Root.new("chartdiv5");

                    root6._logo.dispose();
                    // Set themes
                    // https://www.amcharts.com/docs/v5/concepts/themes/
                    root6.setThemes([
                        am5themes_Animated.new(root6)
                    ]);

                    // https://www.amcharts.com/docs/v5/charts/radar-chart/
                    var chart6 = root6.container.children.push(
                        am5radar.RadarChart.new(root6, {
                            panX: false,
                            panY: false,
                            startAngle: 180,
                            endAngle: 360
                        })
                    );

                    // Create axis and its renderer
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Axes
                    var axisRenderer6 = am5radar.AxisRendererCircular.new(root6, {
                        innerRadius: -20,
                        strokeOpacity: 1,
                        strokeWidth: 15,
                        strokeGradient: am5.LinearGradient.new(root6, {
                            rotation: 0,
                            stops: [

                                {
                                    color: am5.color(0xff0000)
                                },
                                {
                                    color: am5.color(0xff0000)
                                },
                                //{ color: am5.color(0xfb7116) },
                                {
                                    color: am5.color(0xf6d32b)
                                },
                                {
                                    color: am5.color(0xf4fb16)
                                },
                                {
                                    color: am5.color(0x19d228)
                                }
                            ]
                        })
                    });

                    var xAxis6 = chart6.xAxes.push(
                        am5xy.ValueAxis.new(root6, {
                            maxDeviation: 0,
                            min: max6,
                            max: min6,
                            strictMinMax: true,
                            renderer: axisRenderer6
                        })
                    );

                    // Add clock hand
                    // https://www.amcharts.com/docs/v5/charts/radar-chart/gauge-charts/#Clock_hands
                    var axisDataItem6 = xAxis6.makeDataItem({});
                    axisDataItem6.set("value", 0);

                    var bullet6 = axisDataItem6.set("bullet", am5xy.AxisBullet.new(root6, {
                        sprite: am5radar.ClockHand.new(root6, {
                            radius: am5.percent(99)
                        })
                    }));

                    xAxis6.createAxisRange(axisDataItem6);

                    axisDataItem6.get("grid").set("visible", false);

                    // Make stuff animate on load
                    chart6.appear(1000, 100);

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    function getAjax(axis, data, min, max) {
                        if (axis == 1) {
                            axisDataItem1.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });
                            // chart1.xAxes.push(
                            //     am5xy.ValueAxis.new(root1, {
                            //         maxDeviation: 0,
                            //         min: min,
                            //         max: max,
                            //         strictMinMax: true,
                            //         renderer: axisRenderer1
                            //     })
                            // );
                        } else if (axis == 2) {
                            axisDataItem2.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });

                        } else if (axis == 3) {
                            axisDataItem3.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });

                        } else if (axis == 4) {
                            axisDataItem4.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });

                        } else if (axis == 5) {
                            axisDataItem5.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });
                        } else if (axis == 6) {
                            axisDataItem6.animate({
                                key: "value",
                                to: data,
                                duration: 800,
                                easing: am5.ease.out(am5.ease.cubic)
                            });
                        }
                    }

                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    setInterval(() => {
                        $.ajax('http://localhost:8000/api/v1/molten', {
                            dataType: 'json', // type of response data
                            success: function(data, status, xhr) { // success callback function
                                for (let i = 0; i < data.data.length; i++) {
                                    let capacity = data.data[i].capacity;
                                    let min = data.data[i].min;
                                    let max = data.data[i].max;
                                    let floor = min - ((max - min) / 2);
                                    let ceiling = max + ((max - min) / 2);
                                    if (capacity < floor) {
                                        capacity = floor
                                    } else if (capacity > ceiling) {
                                        capacity = ceiling
                                    }
                                    getAjax(i + 1, capacity, data.data[i].min, data.data[i].max)
                                    console.log(data.data[i].capacity, data.data[i].min, data.data[i]
                                        .max) //ini untuk cek console
                                }

                            },
                            error: function(jqXhr, textStatus, errorMessage) { // error callback 
                                console.log(errorMessage);
                            }
                        });
                    }, 1000)
                    // end am5.ready()
                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                });
            </script>
        @endsection
