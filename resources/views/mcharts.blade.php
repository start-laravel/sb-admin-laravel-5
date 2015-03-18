@extends ('layouts.dashboard')
@section('page_heading','Charts')
@section('section')
<div class="col-sm-12">	
	<div class="row">
		<div class="col-sm-6">
			@section ('cchart1_panel_title','Line Chart')
			@section ('cchart1_panel_body')
			@include('widgets.charts.clinechart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart1'))
		</div>
		<div class="col-sm-6">
			@section ('cchart2_panel_title','Pie Chart')
			@section ('cchart2_panel_body')
			@include('widgets.charts.cpiechart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart2'))
		</div>
	</div>
	<div class="row">
		<div class="col-sm-6">
			@section ('cchart3_panel_title','Donut Chart')
			@section ('cchart3_panel_body')
			@include('widgets.charts.cdonutchart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart3'))
		</div>
	<div class="col-sm-6">
			@section ('cchart4_panel_title','Bar Chart')
			@section ('cchart4_panel_body')
			@include('widgets.charts.cbarchart')
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'cchart4'))
		</div> 
	</div>
</div>
@stop
