@extends ('layouts.dashboard')

@section('page_title')	Progressbar @stop
@section('page_heading','Progressbar')
@section('section')


<div class="row">
	<div class="col-sm-6">
		@section ('progress_panel_body')
		<h3>Regular</h3>
		@include('widgets.progress', array('class'=> '', 'value'=>'47'))

		<h3>With label</h3>
		@include('widgets.progress', array('class'=> '', 'value'=>'47', 'badge'=>true))
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'progress'))
	</div>
	<div class="col-sm-6">
		@section ('cprogress_panel_title','Contextual Progressbars')
		@section ('cprogress_panel_body')
		@include('widgets.progress', array('class'=> 'success', 'value'=>'97'))
		@include('widgets.progress', array('class'=> 'info', 'value'=>'52'))
		@include('widgets.progress', array('class'=> 'warning', 'value'=>'31'))
		@include('widgets.progress', array('class'=> 'danger', 'value'=>'16'))
		@endsection
		@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'cprogress'))
	</div>
</div>


<div class="rpw">
	<div class="col-sm-6">
		@section ('sprogress_panel_title','Striped Progresbars')
		@section ('sprogress_panel_body')
		@include('widgets.progress', array('class'=> 'success', 'striped'=> true, 'value'=>'97'))
		@include('widgets.progress', array('class'=> 'info', 'striped'=> true, 'value'=>'52'))
		@include('widgets.progress', array('class'=> 'warning', 'striped'=> true, 'value'=>'31'))
		@include('widgets.progress', array('class'=> 'danger', 'striped'=> true, 'value'=>'16'))
		@endsection
		@include('widgets.panel', array('controls'=>true, 'header'=>true, 'as'=>'sprogress'))
	</div>
	<div class="col-sm-6">
		@section ('stprogress_panel_body')
		<h3>Animated</h3>
		@include('widgets.progress', array('animated'=> true, 'value'=>'72'))

		<h3>Stacked</h3>
		@include('widgets.stacked-progress', array('class1'=>'progress-bar-danger progress-bar-striped', 'value1'=> '13', 'class2'=>'progress-bar-warning', 'value2'=> '23','class3'=>'progress-bar-success', 'value3'=> '39'))
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'stprogress'))
	</div>
</div>
@stop