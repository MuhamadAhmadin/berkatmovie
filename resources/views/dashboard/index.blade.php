@extends('layouts.app')

@push('css')
@endpush

@section('content')
    <div class="main-content">

        <div class="page-content">
            <div class="container-fluid">

                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                            <div class="page-title-right">
                                <ol class="breadcrumb m-0">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">{{ env('APP_NAME') }}</a>
                                    </li>
                                    <li class="breadcrumb-item active">Dashboard</li>
                                </ol>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- end page title -->

                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Produk</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="{{ $total_produk }}">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Total Customer</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="{{ $total_customer }}">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Transaksi Penjualan</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="{{ $total_transaksi_jual }}">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->

                    <div class="col-xl-3 col-md-6">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-12">
                                        <span class="text-muted mb-3 lh-1 d-block text-truncate">Transaksi Pembelian</span>
                                        <h4 class="mb-3">
                                            <span class="counter-value" data-target="{{ $total_transaksi_beli }}">0</span>
                                        </h4>
                                    </div>
                                </div>
                            </div><!-- end card body -->
                        </div><!-- end card -->
                    </div><!-- end col -->
                </div><!-- end row-->

                <div class="row">
                    <div class="col-xl-5">
                        <!-- card -->
                        <div class="card card-h-100">
                            <!-- card body -->
                            <div class="card-body">
                                <div class="d-flex flex-wrap align-items-center mb-4">
                                    <h5 class="card-title me-2">Produk Terlaris</h5>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-sm">
                                        <div id="pieProdukTerlaris" class="amchart"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                    <div class="col-xl-7">
                        <div class="row">
                            <div class="col-xl-12">
                                <!-- card -->
                                <div class="card card-h-100">
                                    <!-- card body -->
                                    <div class="card-body">
                                        <div class="d-flex flex-wrap align-items-center mb-4">
                                            <h5 class="card-title me-2">Grafik Transaksi</h5>
                                        </div>

                                        <div class="row align-items-center">
                                            <div class="col-sm">
                                                <div class="card-header">
                                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                                        <select id="tahun" class="form-control">
                                                            @php
                                                                $check_year = \App\Models\TransaksiPenjualan::where('created_at', '!=', '0000-00-00')
                                                                    ->orderBy('created_at', 'ASC')
                                                                    ->first();
                                                                if ($check_year) {
                                                                    $oldest_year = $check_year->created_at;
                                                                } else {
                                                                    $oldest_year = date('Y-m-d');
                                                                }
                                                                $oldest_year2 = \Carbon\Carbon::parse($oldest_year)->year;
                                                                for ($y = $oldest_year2; $y <= date('Y'); $y++) {
                                                                    echo '<option value= ' . $y . ' ' . ($y == date('Y') ? 'selected' : '') . '>' . $y . '</option>';
                                                                }
                                                            @endphp
                                                        </select>
                                                        <span class="mx-2"></span>
                                                        <select id="bulan" class="form-control">
                                                            <option value="1"
                                                                {{ \Carbon\Carbon::now()->format('m') == '1' ? 'selected' : '' }}>
                                                                Januari</option>
                                                            <option value="2"
                                                                {{ \Carbon\Carbon::now()->format('m') == '2' ? 'selected' : '' }}>
                                                                Februari</option>
                                                            <option value="3"
                                                                {{ \Carbon\Carbon::now()->format('m') == '3' ? 'selected' : '' }}>
                                                                Maret</option>
                                                            <option value="4"
                                                                {{ \Carbon\Carbon::now()->format('m') == '4' ? 'selected' : '' }}>
                                                                April</option>
                                                            <option value="5"
                                                                {{ \Carbon\Carbon::now()->format('m') == '5' ? 'selected' : '' }}>
                                                                Mei</option>
                                                            <option value="6"
                                                                {{ \Carbon\Carbon::now()->format('m') == '6' ? 'selected' : '' }}>
                                                                Juni</option>
                                                            <option value="7"
                                                                {{ \Carbon\Carbon::now()->format('m') == '7' ? 'selected' : '' }}>
                                                                Juli</option>
                                                            <option value="8"
                                                                {{ \Carbon\Carbon::now()->format('m') == '8' ? 'selected' : '' }}>
                                                                Agustus</option>
                                                            <option value="9"
                                                                {{ \Carbon\Carbon::now()->format('m') == '9' ? 'selected' : '' }}>
                                                                September</option>
                                                            <option value="10"
                                                                {{ \Carbon\Carbon::now()->format('m') == '10' ? 'selected' : '' }}>
                                                                Oktober</option>
                                                            <option value="11"
                                                                {{ \Carbon\Carbon::now()->format('m') == '11' ? 'selected' : '' }}>
                                                                November</option>
                                                            <option value="12"
                                                                {{ \Carbon\Carbon::now()->format('m') == '12' ? 'selected' : '' }}>
                                                                Desember</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <div class="chart-container">
                                                        <div id="barTransaksiHarian" class="amchart"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end col -->
                </div> <!-- end row-->

                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header align-items-center d-flex">
                                <h4 class="card-title mb-0 flex-grow-1">5 Transaksi Terbaru</h4>
                                <div class="flex-shrink-0">
                                    <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" data-bs-toggle="tab" href="#transactions-buy-tab"
                                                role="tab">
                                                Pembelian
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" data-bs-toggle="tab" href="#transactions-sell-tab"
                                                role="tab">
                                                Penjualan
                                            </a>
                                        </li>
                                    </ul>
                                    <!-- end nav tabs -->
                                </div>
                            </div><!-- end card header -->

                            <div class="card-body px-0">
                                <div class="tab-content">
                                    <!-- end tab pane -->
                                    <div class="tab-pane active" id="transactions-buy-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <div class="table-responsive">
                                                <table class="table mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>No. Faktur</th>
                                                            <th>Customer</th>
                                                            <th>Tanggal</th>
                                                            <th>Grand Total</th>
                                                            <th>Profit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($latest_transaksi_jual as $item)
                                                            <tr>
                                                                <th scope="row">{{ $loop->iteration }}</th>
                                                                <td><a target="_blank"
                                                                        href="{{ route('dashboard.transaksi_penjualan.print', $item->id) }}">{{ $item->no_faktur }}</a>
                                                                </td>
                                                                <td>{{ $item->customer->nama }}</td>
                                                                <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') . ' Jam ' . \Carbon\Carbon::parse($item->created_at)->format('H:i') }}
                                                                </td>
                                                                <td>Rp {{ MyHelper::formatNumber($item->grand_total) }}
                                                                </td>
                                                                <td>Rp {{ MyHelper::formatNumber($item->profit) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                    <div class="tab-pane" id="transactions-sell-tab" role="tabpanel">
                                        <div class="table-responsive px-3" data-simplebar style="max-height: 352px;">
                                            <table class="table mb-0">
                                                <thead>
                                                    <tr>
                                                        <th>#</th>
                                                        <th>No. Faktur</th>
                                                        <th>Tanggal</th>
                                                        <th>Grand Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($latest_transaksi_beli as $item)
                                                        <tr>
                                                            <th scope="row">{{ $loop->iteration }}</th>
                                                            <td><a target="_blank"
                                                                    href="{{ route('dashboard.transaksi_pembelian.print', $item->id) }}">{{ $item->no_faktur }}</a>
                                                            </td>
                                                            <td>{{ \Carbon\Carbon::parse($item->created_at)->format('d M Y') . ' Jam ' . \Carbon\Carbon::parse($item->created_at)->format('H:i') }}
                                                            </td>
                                                            <td>{{ MyHelper::formatNumber($item->grand_total) }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <!-- end tab pane -->
                                </div>
                                <!-- end tab content -->
                            </div>
                            <!-- end card body -->
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div><!-- end row -->
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->
    @endsection

    @push('js')
        <!-- AMChart -->
        <script src="{{ asset('theme/assets/libs/amchart/core.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/amchart/charts.js') }}"></script>
        <script src="{{ asset('theme/assets/libs/amchart/themes/animated.js') }}"></script>

        <script>
            // Themes begin
            am4core.useTheme(am4themes_animated);
            // Themes end
        </script>

        {{-- Produk Terlaris Chart Code --}}
        <script>
            let chartTopSalesProductData;

            function loadPieTopSalesProduct(data = []) {
                var s = $('#pieProdukTerlaris').parents(".card");
                s.addClass("is-loading")
                $.ajax({
                    url: "{{ route('v1.statistik.get_top_sales_product') }}",
                    dataType: 'json',
                    method: 'POST',
                    data: data,
                    success: function(response) {
                        s.removeClass("is-loading");
                        typeof chartTopSalesProductData === 'object' ? chartTopSalesProductData.dispose() : '';
                        var chartTopSalesProduct = am4core.create("pieProdukTerlaris", am4charts.PieChart3D);
                        let title = chartTopSalesProduct.titles.create();
                        title.text = "Top Sales Product";
                        title.fontSize = 18;
                        title.marginBottom = 10;

                        // Legend
                        chartTopSalesProduct.legend = new am4charts.Legend();
                        chartTopSalesProduct.legend.valueLabels.template.text = "{value.value}";



                        var data = response.map(el => {
                            return {
                                'nama': el['nama'],
                                'sales_count': el['total']
                            }
                        })

                        // Add data
                        chartTopSalesProduct.data = data;

                        // Add and configure Series
                        var pieSeries = chartTopSalesProduct.series.push(new am4charts.PieSeries3D());
                        pieSeries.dataFields.value = "sales_count";
                        pieSeries.dataFields.category = "nama";
                        pieSeries.slices.template.stroke = am4core.color("#fff");
                        pieSeries.slices.template.strokeWidth = 2;
                        pieSeries.slices.template.strokeOpacity = 1;

                        pieSeries.colors.list = [
                            am4core.color("#845EC2"),
                            am4core.color("#FF6F91"),
                            am4core.color("#F9F871")
                        ];


                        // Color enable
                        pieSeries.slices.template.propertyFields.fill = "color";
                        pieSeries.labels.template.text = "{status}: {value.value}";

                        // This creates initial animation
                        pieSeries.hiddenState.properties.opacity = 1;
                        pieSeries.hiddenState.properties.endAngle = -90;
                        pieSeries.hiddenState.properties.startAngle = -90;

                        // Cursor
                        chartTopSalesProduct.padding(10, 10, 10, 10);

                        chartTopSalesProductData = chartTopSalesProduct;
                    }
                })
            }


            $(document).ready(function() {
                let data = {
                    'user_id': '{{ auth()->user()->id }}',
                    'jumlah_produk': '{{ isset($jumlah_produk) ? $jumlah_produk : 3 }}'
                }
                loadPieTopSalesProduct(data);
            });
        </script>

        {{-- Grafik Harian Chart Code --}}
        <script>
            let chartPenjualanHarianData;

            var theDate = new Date();
            var firstDate = new Date(theDate.getFullYear(), theDate.getMonth(), 1);
            var curDate = theDate.getDate()
            var curYear = theDate.getFullYear();
            var totalDay = new Date(theDate.getFullYear(), theDate.getMonth() + 1, 0).getDate();
            firstDate.setDate(firstDate.getDate());

            function loadLinePenjualanHarian(data = []) {
                var s = $('#barTransaksiHarian').parents(".card");
                s.addClass("is-loading")
                $.ajax({
                    url: "{{ route('v1.statistik.get_penjualan_harian') }}",
                    dataType: 'json',
                    method: 'POST',
                    data: data,
                    success: function(response) {
                        s.removeClass("is-loading");
                        // Create chart instance
                        typeof chartPenjualanHarianData === 'object' ? chartPenjualanHarianData.dispose() : '';
                        var chartPenjualanHarian = am4core.create("barTransaksiHarian", am4charts.XYChart);

                        let title = chartPenjualanHarian.titles.create();
                        title.text = "Statistik Harian";
                        title.fontSize = 20;
                        title.marginBottom = 10;

                        am4core.useTheme(am4themes_animated);

                        // Increase contrast by taking evey second color
                        // chartPenjualanHarian.colors.step = 2;
                        // manually define color set
                        chartPenjualanHarian.colors.list = [
                            am4core.color("#77dd77"),
                            am4core.color("#FFC75F"),
                            am4core.color("#FF6F91")
                        ];

                        // Add data
                        chartPenjualanHarian.data = generateChartData();

                        // Create axes
                        var dateAxis = chartPenjualanHarian.xAxes.push(new am4charts.DateAxis());
                        dateAxis.renderer.minGridDistance = 50;
                        dateAxis.renderer.grid.template.location = 0;
                        dateAxis.renderer.grid.template.location = 0;
                        dateAxis.renderer.minGridDistance = 10;
                        dateAxis.renderer.labels.template.horizontalCenter = "right";
                        dateAxis.renderer.labels.template.verticalCenter = "middle";
                        dateAxis.renderer.labels.template.rotation = 270;
                        dateAxis.tooltip.disabled = false;
                        dateAxis.fontSize = 12;
                        dateAxis.renderer.minHeight = 110;

                        // Create series
                        function createAxisAndSeries(field, name, opposite, bullet) {
                            var valueAxis = chartPenjualanHarian.yAxes.push(new am4charts.ValueAxis());
                            if (chartPenjualanHarian.yAxes.indexOf(valueAxis) != 0) {
                                valueAxis.syncWithAxis = chartPenjualanHarian.yAxes.getIndex(0);
                            }

                            var series = chartPenjualanHarian.series.push(new am4charts.LineSeries());
                            series.dataFields.valueY = field;
                            series.dataFields.dateX = "date";
                            series.strokeWidth = 2;
                            series.yAxis = valueAxis;
                            series.name = name;
                            series.tooltipText = "{name}: [bold]{valueY}[/]";
                            series.tensionX = 0.8;
                            series.showOnInit = true;

                            var interfaceColors = new am4core.InterfaceColorSet();

                            switch (bullet) {
                                case "triangle":
                                    var bullet = series.bullets.push(new am4charts.Bullet());
                                    bullet.width = 12;
                                    bullet.height = 12;
                                    bullet.horizontalCenter = "middle";
                                    bullet.verticalCenter = "middle";

                                    var triangle = bullet.createChild(am4core.Triangle);
                                    triangle.stroke = interfaceColors.getFor("background");
                                    triangle.strokeWidth = 2;
                                    triangle.direction = "top";
                                    triangle.width = 12;
                                    triangle.height = 12;
                                    break;
                                case "rectangle":
                                    var bullet = series.bullets.push(new am4charts.Bullet());
                                    bullet.width = 10;
                                    bullet.height = 10;
                                    bullet.horizontalCenter = "middle";
                                    bullet.verticalCenter = "middle";

                                    var rectangle = bullet.createChild(am4core.Rectangle);
                                    rectangle.stroke = interfaceColors.getFor("background");
                                    rectangle.strokeWidth = 2;
                                    rectangle.width = 10;
                                    rectangle.height = 10;
                                    break;
                                default:
                                    var bullet = series.bullets.push(new am4charts.CircleBullet());
                                    bullet.circle.stroke = interfaceColors.getFor("background");
                                    bullet.circle.strokeWidth = 2;
                                    break;
                            }

                            valueAxis.renderer.line.strokeOpacity = 1;
                            valueAxis.renderer.line.strokeWidth = 2;
                            valueAxis.renderer.line.stroke = series.stroke;
                            valueAxis.renderer.labels.template.fill = series.stroke;
                            valueAxis.renderer.opposite = opposite;
                        }

                        createAxisAndSeries("transaksi_penjualan", "Transaksi Penjualan", true, "");
                        createAxisAndSeries("transaksi_pembelian", "Transaksi Pembelian", true, "rectangle");

                        // Add legend
                        chartPenjualanHarian.legend = new am4charts.Legend();

                        // Add cursor
                        chartPenjualanHarian.cursor = new am4charts.XYCursor();
                        chartPenjualanHarian.scrollbarX = new am4core.Scrollbar();
                        chartPenjualanHarian.scrollbarY = new am4core.Scrollbar();

                        // generate some random data, quite different range
                        function generateChartData() {
                            var chartData = [];


                            var transaksi_pembelian = 0;
                            var transaksi_penjualan = 0;
                            for (var i = 0; i < response.length; i++) {
                                // we create date objects here. In your data, you can have date strings
                                // and then set format of your dates using chartPenjualanHarian.dataDateFormat property,
                                // however when possible, use date objects, as this will speed up chart rendering.
                                var firstDate = new Date(response[i].tahun, ("0" + (response[i].bulan + 1)).slice(-
                                    2));
                                var newDate = new Date(firstDate);
                                var tmp = (parseInt(response[i].bulan, 10) - 1);
                                newDate.setDate(newDate.getDate() + i);
                                newDate.setMonth(tmp);

                                transaksi_pembelian = response[i].transaksi_pembelian;
                                transaksi_penjualan = response[i].transaksi_penjualan;

                                chartData.push({
                                    date: newDate,
                                    transaksi_pembelian: transaksi_pembelian,
                                    transaksi_penjualan: transaksi_penjualan,
                                });
                            }
                            return chartData;
                        }

                        chartPenjualanHarianData = chartPenjualanHarian;
                    }
                })
            }

            $("#date_from_barTransaksiHarian, #date_to_barTransaksiHarian").on('change', function(e) {
                chartPenjualanHarianData.dispose();

                let data = {
                    'date_from': $("#date_from_barTransaksiHarian").val(),
                    'date_to': $("#date_to_barTransaksiHarian").val(),
                    'user_id': '{{ auth()->user()->id }}'
                };

                loadLinePenjualanHarian(data)
            })

            $("#tahun, #bulan").change(function() {
                chartPenjualanHarianData.dispose();

                let data = {
                    'bulan': $("#bulan").val(),
                    'tahun': $("#tahun").val(),
                    'user_id': '{{ auth()->user()->id }}'
                };

                if ($('#bulan').val() == (theDate.getMonth() + 1) && $('#tahun').val() == theDate.getFullYear()) {
                    // means today, limit the day only for current day
                    data['jumlah_hari'] = curDate;
                }
                loadLinePenjualanHarian(data)
            })

            $(document).ready(function() {
                let data = {
                    'user_id': '{{ auth()->user()->id }}',
                    'bulan': ("0" + (theDate.getMonth() + 1)).slice(-2),
                    'tahun': curYear,
                    'jumlah_hari': curDate,
                }
                loadLinePenjualanHarian(data);
            });
        </script>
    @endpush
