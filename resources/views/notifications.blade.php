@extends ('layouts.dashboard')

@section ('page_heading','Alerts')

@section('section')
</div>
	@section ('alert1_panel_title','Regular Alerts')
	@section ('alert1_panel_body')
	@include('widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'))
	@include('widgets.alert', array('class'=>'info', 'message'=> 'My message'))
	@include('widgets.alert', array('class'=>'warning', 'message'=> 'My message'))
	@include('widgets.alert', array('class'=>'danger', 'message'=> 'My message', 'icon'=> 'remove'))
	@endsection
@include('widgets.panel', array('header'=>true, 'as'=>'alert1'))
<div class="row">
	<div class="col-sm-6">
		@section ('alert3_panel_title','Dismissable Alerts')
		@section ('alert3_panel_body')
		@include('widgets.alert', array('class'=>'success', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'check'))
		@include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
		@include('widgets.alert', array('class'=>'warning', 'dismissable'=>true, 'message'=> 'My message'))
		@include('widgets.alert', array('class'=>'danger', 'dismissable'=>true, 'message'=> 'My message', 'icon'=> 'remove'))
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'alert3'))
	</div>
	<div class="col-sm-6">
		@section ('alert2_panel_title','Links in Alerts')
		@section ('alert2_panel_body')
		@include('widgets.alert', array('class'=>'success', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'check'))
		@include('widgets.alert', array('class'=>'info', 'link'=> 'link', 'message'=> 'My message'))
		@include('widgets.alert', array('class'=>'warning', 'link'=> 'link', 'message'=> 'My message'))
		@include('widgets.alert', array('class'=>'danger', 'link'=> 'link', 'message'=> 'My message', 'icon'=> 'remove'))
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'alert2'))
	</div>
</div>
@stop
