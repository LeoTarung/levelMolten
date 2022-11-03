@extends('main')
@section('content')
<header id="header" class=" d-flex align-items-center header-transparent mt-5">
    <div class="container d-flex justify-content-center text-center">
      
        <h1 class="logo"><a class="text-decoration-none text-dark fw-bold " href="/dashboard">Level Molten</a></h1>
  </header>
    <div class="container-fluid">


        <form action="{{ route('detail.update',$molt->first())}}" method="POST" enctype="multipart/form-data">
         @csrf
         {{ method_field('PUT') }}

        <table class="table mt-3">
            <thead class="table-dark textf-center fw-bold">
            <tr>
            <td>
               MESIN
            </td>
            <td>
                CAPACITY
            </td>
            <td>
                MIN
            </td>
            <td>
                MAX
            </td>
            <td>
                ACTION
            </td>


            </thead>
            <tbody>
                @foreach ($molt as $a)
            <tr>
                <td class="text-center">
                   <div class="col-sm">
                      <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['mc'] }}" name="mc" readonly>
                   
                    </div>
                </td>
                 <td class="text-center">
                    <input type="text" class="form-control text-center" aria-label="City" value="{{ $a['capacity'] }}" name="capacity" readonly>
                   
                </td>
                <td class="text-center">
                    <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['min'] }}" name="min"  >
                   
                </td>
                <td class="text-center">
                    <input type="text" class="form-control text-center"  aria-label="City" value="{{ $a['max'] }}" name ="max" >
                   
                </td>
                <td class="text-center">
                    <button type="submit" class="btn btn-outline-warning">Edit</button>
                    {{-- <button type="delete" class="btn btn-outline-danger">Hapus</button> --}}
                </td>
            </tr>
            @endforeach 

                {{-- <div class="row g-3">
                    
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="State" aria-label="State">
                    </div>
                    <div class="col-sm">
                      <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                    </div>
                    <div class="col-sm">
                        <input type="text" class="form-control" placeholder="Zip" aria-label="Zip">
                      </div>
                    <div class="col-sm">
                        <td class="text-center">
                            <button type="button" class="btn btn-outline-warning">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Hapus</button>
                        </td>
                    </div> --}}
                  </div>
            </tbody>
            
            
        </table>
    </form>
    <div class="card-content mt-1">
        <div id="chartdiv" class="chartdiv">
        </div>
    </div>


    <script src="{{ asset('js/amcharts5gauge/index.js') }}"></script>
    <script src="{{ asset('js/amcharts5gauge/xy.js') }}"></script>
    <script src="{{ asset('js/amcharts5gauge/radar.js') }}"></script>
    <script src="{{ asset('js/amcharts5gauge/animated.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.1.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script> 


   {{-- <script>     
   var min = {{ $molt['min'] }};
   var max = {{ $molt['max'] }};

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
        min: max,
        max: min,
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
///////////////////////////////////////////////////////////////////
    setInterval(() => {
          $.ajax('http://localhost:8000/api/v1/molten', {
            dataType: 'json', // type of response data
            success: function(data, status, xhr) { // success callback function
              for (let i = 0; i < data.data.length; i++) {
                getAjax(i + 1, data.data[i].capacity, data.data[i].min, data.data[i].max)
                console.log(data.data[i].capacity, data.data[i].min, data.data[i].max) //ini untuk cek console
              }

            },
            error: function(jqXhr, textStatus, errorMessage) { // error callback 
              console.log(errorMessage);
            }
          });
        }, 3000)
</script> --}}
@endsection