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


