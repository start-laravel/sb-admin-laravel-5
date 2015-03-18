@extends('layouts.dashboard')
@section('page_heading','Buttons')
@section('section')
	<div class="col-sm-6">
		@section ('5button_panel_title','Default Buttons')
		@section ('5button_panel_body')
		<h4>Normal Buttons</h4>
		<p>
		@include('widgets.button', array('value'=>'Primary', 'class'=>'primary'))
		@include('widgets.button', array('class'=>'primary', 'value'=>'Primary'))
		@include('widgets.button', array('class'=>'success', 'value'=>'Success'))
		@include('widgets.button', array('class'=>'warning', 'value'=>'Warning'))
		@include('widgets.button', array('class'=>'danger', 'value'=>'Danger'))
		</p>
		<br>
		<h4>Disabled Buttons</h4>
		<p>
		@include('widgets.button', array('value'=>'Default', 'disabled'=>true))
		@include('widgets.button', array('class'=>'primary', 'value'=>'Primary', 'disabled'=>true))
		@include('widgets.button', array('class'=>'success', 'value'=>'Success', 'disabled'=>true))
		@include('widgets.button', array('class'=>'warning', 'value'=>'Warning', 'disabled'=>true))
		@include('widgets.button', array('class'=>'danger', 'value'=>'Danger', 'disabled'=>true))
		</p>
		<br>
		<h4>Button Sizes</h4>
		<p>
		@include('widgets.button', array('class'=>'primary', 'size'=>'lg', 'value'=>'Large Button'))
		@include('widgets.button', array('class'=>'primary', 'value'=>'Default'))
		@include('widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Small'))
		@include('widgets.button', array('class'=>'primary', 'size'=>'xs', 'value'=>'Extra Small'))
		<br>
		<br>
		@include('widgets.button', array('class'=>'primary', 'size'=>'lg btn-block', 'value'=>'Block level Button'))

		@endsection
		@include('widgets.panel', array('as'=>'5button', 'header'=>true))
		
		@section ('6button_panel_title','Default Buttons')
		@section ('6button_panel_body')
		<h4>Normal Circle Buttons</h4>
	    @include('widgets.button', array('class'=>'default btn-circle', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'primary btn-circle', 'value'=>'<i class="fa fa-list"></i>'))
	    @include('widgets.button', array('class'=>'success btn-circle', 'value'=>'<i class="fa fa-link"></i>'))
	    @include('widgets.button', array('class'=>'info btn-circle', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'warning btn-circle', 'value'=>'<i class="fa fa-times"></i>'))
	    @include('widgets.button', array('class'=>'danger btn-circle', 'value'=>'<i class="fa fa-heart"></i>'))
	    <br>
	    <br>
		<h4>Large Circle Buttons</h4>
        @include('widgets.button', array('class'=>'default btn-circle', 'size'=>'lg', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'primary btn-circle', 'size'=>'lg', 'value'=>'<i class="fa fa-list"></i>'))
	    @include('widgets.button', array('class'=>'success btn-circle', 'size'=>'lg', 'value'=>'<i class="fa fa-link"></i>'))
	    @include('widgets.button', array('class'=>'info btn-circle', 'size'=>'lg', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'warning btn-circle', 'size'=>'lg', 'value'=>'<i class="fa fa-times"></i>'))
	    @include('widgets.button', array('class'=>'danger btn-circle', 'size'=>'lg','value'=>'<i class="fa fa-heart"></i>'))
	    <br>
	    <br>
	    <h4>Extra Large Circle Buttons</h4>
	    @include('widgets.button', array('class'=>'default btn-circle', 'size'=>'xl', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'primary btn-circle', 'size'=>'xl', 'value'=>'<i class="fa fa-list"></i>'))
	    @include('widgets.button', array('class'=>'success btn-circle', 'size'=>'xl', 'value'=>'<i class="fa fa-link"></i>'))
	    @include('widgets.button', array('class'=>'info btn-circle', 'size'=>'xl', 'value'=>'<i class="fa fa-check"></i>'))
	    @include('widgets.button', array('class'=>'warning btn-circle', 'size'=>'xl', 'value'=>'<i class="fa fa-times"></i>'))
	    @include('widgets.button', array('class'=>'danger btn-circle', 'size'=>'xl','value'=>'<i class="fa fa-heart"></i>'))
		@endsection
		@include('widgets.panel', array('as'=>'6button', 'header'=>true))


	</div>
	<div class="col-sm-6">
		@section ('9button_panel_title','Outline buttons with smooth transition')
		@section ('9button_panel_body')
		<h4>Outline Buttons</h4>
		<p>
		@include('widgets.button', array('value'=>'Default', 'class'=>'default btn-outline'))
		@include('widgets.button', array('class'=>'primary btn-outline', 'value'=>'Primary'))
		@include('widgets.button', array('class'=>'success btn-outline', 'value'=>'Success'))
		@include('widgets.button', array('class'=>'warning btn-outline', 'value'=>'Warning'))
		@include('widgets.button', array('class'=>'danger btn-outline', 'value'=>'Danger'))
		</p>
		<br>
		<h4>Outline Button Sizes</h4>
		<p>
		@include('widgets.button', array('class'=>'primary btn-outline', 'size'=>'lg', 'value'=>'Large Button'))
		@include('widgets.button', array('class'=>'primary btn-outline', 'value'=>'Default'))
		@include('widgets.button', array('class'=>'primary btn-outline', 'size'=>'sm', 'value'=>'Small'))
		@include('widgets.button', array('class'=>'primary btn-outline', 'size'=>'xs', 'value'=>'Extra Small'))
		<br>
		<br>
		@include('widgets.button', array('class'=>'primary btn-o', 'size'=>'lg btn-block', 'value'=>'Block level Button'))
	</div>
		@endsection
		@include('widgets.panel', array('as'=>'9button', 'header'=>true))




	
@stop



{{-- <div class="row">
	<div class="col-sm-12">
		@section ('button_panel_title','Default')
		@section ('button_panel_body')
		<p>
			@include('widgets.button', array('value'=>'Custom value'))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'success', 'value'=>'Disabled button'))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Custom value'))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'button', 'header'=>true))
	</div>
</div>	
<div class="row">
	<div class="col-sm-6">
		@section ('sbutton_panel_title','Small')
		@section ('sbutton_panel_body')
		<p>
			@include('widgets.button', array('size'=>'sm', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'primary', 'size'=>'sm', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'success', 'size'=>'sm', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'warning', 'size'=>'sm', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'danger', 'size'=>'sm', 'value'=>'Custom value'))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'sbutton', 'header'=>true))
	</div>
	<div class="col-sm-6">
		@section ('xsbutton_panel_title','Extra Small')
		@section ('xsbutton_panel_body')
		<p>
			@include('widgets.button', array('size'=>'xs', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'primary', 'size'=>'xs', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'success', 'size'=>'xs', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'warning', 'size'=>'xs', 'value'=>'Custom value'))
			@include('widgets.button', array('class'=>'danger', 'size'=>'xs', 'value'=>'Custom value'))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'xsbutton', 'header'=>true))
	</div>
</div>
<div class="row">
<div class="col-sm-12">
		@section ('dbutton_panel_title','Disabled')
		@section ('dbutton_panel_body')
		<p>
			@include('widgets.button', array('value'=>'Custom value', 'disabled'=>true))
			@include('widgets.button', array('class'=>'primary', 'value'=>'Custom value', 'disabled'=>true))
			@include('widgets.button', array('class'=>'success', 'value'=>'Disabled button', 'disabled'=>true))
			@include('widgets.button', array('class'=>'warning', 'value'=>'Custom value', 'disabled'=>true))
			@include('widgets.button', array('class'=>'danger', 'value'=>'Custom value', 'disabled'=>true))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'dbutton', 'header'=>true))
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		@section ('ddbutton_panel_title','Dropdown (Single button)')
		@section ('ddbutton_panel_body')
		<p>
			@include('widgets.dropdown-button', array('value'=>'Custom value', 'submenu'=> array( 'lists' => array(
			'name' => 'test', 'link' => '#'))))
			@include('widgets.dropdown-button', array('class'=>'primary', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('class'=>'success', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('class'=>'warning', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('class'=>'danger', 'value'=>'Custom value'))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'ddbutton', 'header'=>true))
	</div>
	<div class="col-sm-6">	
		@section ('mbutton_panel_title','Dropdown (Multi button)')
		@section ('mbutton_panel_body')
		<p>
			@include('widgets.dropdown-button', array('split'=>true, 'size'=>'', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'primary', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'success', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'warning', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('split'=>true, 'class'=>'danger', 'value'=>'Custom value'))

		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'mbutton', 'header'=>true))
	</div>
</div>	
<div class="row">
	<div class="col-sm-6">
		@section ('dubutton_panel_title','Dropup')
		@section ('dubutton_panel_body')
		<p>
			@include('widgets.dropdown-button', array('up'=>true, 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'primary', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'success', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'warning', 'value'=>'Custom value'))
			@include('widgets.dropdown-button', array('up'=>true, 'class'=>'danger', 'value'=>'Custom value'))
		</p>
		@endsection
		@include('widgets.panel', array('controls'=>true, 'as'=>'dubutton', 'header'=>true))
	</div>
</div> --}}


