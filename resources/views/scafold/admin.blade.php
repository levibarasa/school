<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<html lang="en">
<head>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../../assets/img/favicon.png">

    <title>@if(@isset($title))

        Inv-{{str_pad($title, 8, '0', STR_PAD_LEFT)}}

        @else
        {{ config('app.name', 'Laravel') }}
        @endif
    </title>
    <!--     <title>{{ config('app.name', 'Laravel') }}</title>
     -->
    <!-- vendor css -->
    <link href="../../lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="../../lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="../../lib/jqvmap/jqvmap.min.css" rel="stylesheet">
    <link href="../lib/select2/css/select2.min.css" rel="stylesheet">

    <link href="../lib/datatables.net-responsive-dt/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- DashForge CSS -->
    <link rel="stylesheet" href="../../assets/css/dashforge.css">
    <link rel="stylesheet" href="../../assets/css/dashforge.dashboard.css">
    <link rel="stylesheet" href="../assets/css/dashforge.demo.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.brighttheme.css" integrity="sha256-ORNtFDEBLYZySXRt9MmGRxW9DA1h8cE18AkwcGqbCRk=" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">

    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
</head>
<body>

<aside class="aside aside-fixed">
    <div class="aside-header">
        <a href="/home" class="aside-logo">P<span>DP</span></a>
        <a href="#" class="aside-menu-link">
            <i data-feather="menu"></i>
            <i data-feather="x"></i>
        </a>
    </div>
    <div class="aside-body">
        <div class="aside-loggedin">
            <div class="d-flex align-items-center justify-content-start">
                <a href="#" class="avatar"><img  class="rounded-circle" alt=""></a>
                <div class="aside-alert-link">
                    <a  href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();" data-toggle="tooltip" title="Sign out"><i data-feather="log-out"></i></a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </div>
            <div class="aside-loggedin-user">
                <a href="##loggedinMenu" class="d-flex align-items-center justify-content-between mg-b-2" data-toggle="collapse">
                    <h6 class="tx-semibold mg-b-0">  name</h6>
                    <i data-feather="chevron-down"></i>
                </a>

            </div>

        </div><!-- aside-loggedin -->
        <ul class="nav nav-aside">
                        <li class="nav-label mg-t-25">Members Management</li>
            <li class="nav-item"><a href="/members" class="nav-link"><i data-feather="users"></i> <span>Member List</span></a></li>
            <li class="nav-item"><a href="/invoices" class="nav-link"><i data-feather="printer"></i> <span>Payments</span></a></li>


            <li class="nav-label mg-t-25">Events Management</li>
            <li class="nav-item with-sub">
                <a href="#" class="nav-link"><i data-feather="user"></i> <span>Events List</span></a>
            </li>

        </ul>
    </div>
</aside>

<div class="content ht-100v pd-0">
    <div class="content-header">
        <div class="content-search">
            <i data-feather="search"></i>
            <input  id="searchX" type="search" class="form-control" placeholder="Search...">
        </div>
        <nav class="nav">
            <a href="#" class="nav-link"><i data-feather="log-out"></i></a>
        </nav>
    </div><!-- content-header -->

    <div class="content-body">
        @yield('content')

    </div>
</div>

<script src="../../lib/jquery/jquery.min.js"></script>
<script src="../../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../../lib/feather-icons/feather.min.js"></script>
<script src="../../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../../lib/jquery.flot/jquery.flot.js"></script>
<script src="../../lib/jquery.flot/jquery.flot.stack.js"></script>
<script src="../../lib/jquery.flot/jquery.flot.resize.js"></script>
<script src="../../lib/chart.js/Chart.bundle.min.js"></script>
<script src="../../lib/jqvmap/jquery.vmap.min.js"></script>
<script src="../../lib/jqvmap/maps/jquery.vmap.usa.js"></script>

<script src="../../assets/js/dashforge.js"></script>
<script src="../../assets/js/dashforge.aside.js"></script>
<script src="../../assets/js/dashforge.sampledata.js"></script>

<!-- append theme customizer -->
<script src="../../lib/js-cookie/js.cookie.js"></script>
<script src="../../assets/js/dashforge.settings.js"></script>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.2.1/pnotify.js" integrity="sha256-Wdie7xDu6PuVG6BqNy/dEEYY0jK2JutDYnn0sI19yTw=" crossorigin="anonymous"></script>

{{--  <script>
    $(function(){
        'use strict'

        var plot = $.plot('#flotChart', [{
            data: df3,
            color: '#69b2f8'
        },{
            data: df1,
            color: '#d1e6fa'
        },{
            data: df2,
            color: '#d1e6fa',
            lines: {
                fill: false,
                lineWidth: 1.5
            }
        }], {
            series: {
                stack: 0,
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 0,
                    fill: 1
                }
            },
            grid: {
                borderWidth: 0,
                aboveData: true
            },
            yaxis: {
                show: false,
                min: 0,
                max: 350
            },
            xaxis: {
                show: true,
                ticks: [[0,''],[8,'Jan'],[20,'Feb'],[32,'Mar'],[44,'Apr'],[56,'May'],[68,'Jun'],[80,'Jul'],[92,'Aug'],[104,'Sep'],[116,'Oct'],[128,'Nov'],[140,'Dec']],
                color: 'rgba(255,255,255,.2)'
            }
        });


        $.plot('#flotChart2', [{
            data: [[0,55],[1,38],[2,20],[3,70],[4,50],[5,15],[6,30],[7,50],[8,40],[9,55],[10,60],[11,40],[12,32],[13,17],[14,28],[15,36],[16,53],[17,66],[18,58],[19,46]],
            color: '#69b2f8'
        },{
            data: [[0,80],[1,80],[2,80],[3,80],[4,80],[5,80],[6,80],[7,80],[8,80],[9,80],[10,80],[11,80],[12,80],[13,80],[14,80],[15,80],[16,80],[17,80],[18,80],[19,80]],
            color: '#f0f1f5'
        }], {
            series: {
                stack: 0,
                bars: {
                    show: true,
                    lineWidth: 0,
                    barWidth: .5,
                    fill: 1
                }
            },
            grid: {
                borderWidth: 0,
                borderColor: '#edeff6'
            },
            yaxis: {
                show: false,
                max: 80
            },
            xaxis: {
                ticks:[[0,'Jan'],[4,'Feb'],[8,'Mar'],[12,'Apr'],[16,'May'],[19,'Jun']],
                color: '#fff',
            }
        });

        $.plot('#flotChart3', [{
            data: df4,
            color: '#9db2c6'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 60
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart4', [{
            data: df5,
            color: '#9db2c6'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 80
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart5', [{
            data: df6,
            color: '#9db2c6'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 80
            },
            xaxis: { show: false }
        });

        $.plot('#flotChart6', [{
            data: df4,
            color: '#9db2c6'
        }], {
            series: {
                shadowSize: 0,
                lines: {
                    show: true,
                    lineWidth: 2,
                    fill: true,
                    fillColor: { colors: [ { opacity: 0 }, { opacity: .5 } ] }
                }
            },
            grid: {
                borderWidth: 0,
                labelMargin: 0
            },
            yaxis: {
                show: false,
                min: 0,
                max: 60
            },
            xaxis: { show: false }
        });

        $('#vmap').vectorMap({
            map: 'usa_en',
            showTooltip: true,
            backgroundColor: '#fff',
            color: '#d1e6fa',
            colors: {
                fl: '#69b2f8',
                ca: '#69b2f8',
                tx: '#69b2f8',
                wy: '#69b2f8',
                ny: '#69b2f8'
            },
            selectedColor: '#00cccc',
            enableZoom: false,
            borderWidth: 1,
            borderColor: '#fff',
            hoverOpacity: .85
        });


        var ctxLabel = ['6am', '10am', '1pm', '4pm', '7pm', '10pm'];
        var ctxData1 = [20, 60, 50, 45, 50, 60];
        var ctxData2 = [10, 40, 30, 40, 55, 25];

        // Bar chart
        var ctx1 = document.getElementById('chartBar1').getContext('2d');
        new Chart(ctx1, {
            type: 'horizontalBar',
            data: {
                labels: ctxLabel,
                datasets: [{
                    data: ctxData1,
                    backgroundColor: '#69b2f8'
                }, {
                    data: ctxData2,
                    backgroundColor: '#d1e6fa'
                }]
            },
            options: {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false,
                    labels: {
                        display: false
                    }
                },
                scales: {
                    yAxes: [{
                        gridLines: {
                            display: false
                        },
                        ticks: {
                            display: false,
                            beginAtZero: true,
                            fontSize: 10,
                            fontColor: '#182b49'
                        }
                    }],
                    xAxes: [{
                        gridLines: {
                            display: true,
                            color: '#eceef4'
                        },
                        barPercentage: 0.6,
                        ticks: {
                            beginAtZero: true,
                            fontSize: 10,
                            fontColor: '#8392a5',
                            max: 80
                        }
                    }]
                }
            }
        });

    })
</script> --}}

@stack('scripts')

</body>
</html>
