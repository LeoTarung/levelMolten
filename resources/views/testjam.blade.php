@extends('main')

@section('content')
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('/css/jam.css') }}"> --}}
    <style>
        body {
            background: black;
        }

        .clock {
            /* position: absolute;
                                                                                                                    top: 50%;
                                                                                                                    left: 50%; */
            /* transform: translateX(-50%) translateY(-50%); */
            color: #17D4FE;
            font-size: 18px;
            font-family: Orbitron;
            letter-spacing: 7px;
        }

        .date {
            color: #17D4FE;
            font-size: 18px;
            font-family: 'Open Sans';
            letter-spacing: 7px;
        }
    </style>


    {{-- <script src="{{ asset('js/jam.js') }}"></script> --}}
    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <h4 id="date-1" class="date"></h4>
            </li>
            <li class="nav-item px-1">
                <h4 id="MyClockDisplay" class="clock" onload="showTime()"></h4>
            </li>

            {{-- <div id="MyClockDisplay" class="clock" onload="showTime()"></div> --}}
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
                        bulan = 'Jan';
                        break;
                    case 1:
                        bulan = 'Feb';
                        break;
                    case 2:
                        bulan = 'Mar';
                        break;
                    case 3:
                        bulan = 'Apr';
                        break;
                    case 4:
                        bulan = 'Mei';
                        break;
                    case 5:
                        bulan = 'Jun';
                        break;
                    case 6:
                        bulan = 'Jul';
                        break;
                    case 7:
                        bulan = 'Ags';
                        break;
                    case 8:
                        bulan = 'Sep';
                        break;
                    case 9:
                        bulan = 'Okt';
                        break;
                    case 10:
                        bulan = 'Nov';
                        break;
                    case 11:
                        bulan = 'Des';
                        break;
                }
                var tampilTanggal = tanggal + ' ' + bulan + ' ' + tahun + ',';
                document.getElementById('date-1').innerHTML = tampilTanggal;
            </script>
            <script>
                function showTime() {
                    var date = new Date();
                    var h = date.getHours(); // 0 - 23
                    var m = date.getMinutes(); // 0 - 59
                    var s = date.getSeconds(); // 0 - 59
                    var session = "AM";

                    if (h == 0) {
                        h = 12;
                    }

                    if (h > 12) {
                        h = h - 12;
                        session = "PM";
                    }

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
            {{-- <script>
        setInterval(() => {
            const time = document.querySelector("digital-clock");
            let date = new Date();
            let hours = date.getHours();
            let minutes = date.getMinutes();
            let seconds = date.getSeconds();
            // let AM_PM = "Am";

            // if (hours > 11){
            //     AM_PM ="PM";
            //     hours = hours - 12;
            // }
            if (seconds < 10) {
                seconds = "0" + seconds;
            }

            if (minutes < 10) {
                minutes = "0" + minutes;
            }

            if (hours < 10) {
                hours - "0" + hours;
            }

            console.log(hours + ":" + minutes + ":" + seconds)
            // time.textContent = hours + ":" + minutes + ":" + seconds;

        });
    </script> --}}
        @endsection
