@include('includes.admin_header')
@include('includes.admin_sidebar')


<div class="chart-area">
    <div class="chart-container">
        <div>
            <figure class="highcharts-figure">
                <div id="container-1"></div>
            </figure>
        </div>
        <div>
            <figure class="highcharts-figure">
                <div id="container-2"></div>
            </figure>
        </div>
    </div>

    <div class="chart-container-1">
        <figure class="highcharts-figure">
            <div id="container-3"></div>
        </figure>
    </div>
</div>

{{-- <button style="width: 200px;height:200px" id="test">test</button> --}}

@include('includes.admin_footer')
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
