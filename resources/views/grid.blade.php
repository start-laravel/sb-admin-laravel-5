@extends('layouts.dashboard')
@section('page_heading','Grid System')
@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-12">
		@section ('grid1_panel_body')
		<div class="text-center"><h4>Twelve</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid1'))
	</div>
</div>
<div class="row">
	<div class="col-sm-6">
		@section ('grid2_panel_body')
		<div class="text-center"><h4>Six</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid2'))
	</div>

	<div class="col-sm-6">
		@section ('grid3_panel_body')
		<div class="text-center"><h4>Six</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid3'))
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		@section ('grid4_panel_body')
		<div class="text-center"><h4>Four</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid4'))
	</div>

	<div class="col-sm-4">
		@section ('grid5_panel_body')
		<div class="text-center"><h4>Four</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid5'))
	</div>

	<div class="col-sm-4">
		@section ('grid6_panel_body')
		<div class="text-center"><h4>Four</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid6'))
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		@section ('grid7_panel_body')
		<div class="text-center"><h4>Three</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid7'))
	</div>
	<div class="col-sm-3">
		@section ('grid8_panel_body')
		<div class="text-center"><h4>Three</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid8'))
	</div>
	<div class="col-sm-3">
		@section ('grid9_panel_body')
		<div class="text-center"><h4>Three</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid9'))
	</div>
	<div class="col-sm-3">
		@section ('grid10_panel_body')
		<div class="text-center"><h4>Three</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid10'))
	</div>
</div>
<div class="row">
	<div class="col-sm-5">
		@section ('grid11_panel_body')
		<div class="text-center"><h4>Five</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid11'))
	</div>
	<div class="col-sm-7">
		@section ('grid12_panel_body')
		<div class="text-center"><h4>Seven</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid12'))
	</div>
</div>
<div class="row">
	<div class="col-sm-4">
		@section ('grid13_panel_body')
		<div class="text-center"><h4>Four</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid13'))
	</div>
	<div class="col-sm-8">
		@section ('grid14_panel_body')
		<div class="text-center"><h4>Eight</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid14'))
	</div>
</div>
<div class="row">
	<div class="col-sm-3">
		@section ('grid15_panel_body')
		<div class="text-center"><h4>Three</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid15'))
	</div>
	<div class="col-sm-9">
		@section ('grid16_panel_body')
		<div class="text-center"><h4>Nine</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid16'))
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		@section ('grid17_panel_body')
		<div class="text-center"><h4>Two</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid17'))
	</div>
	<div class="col-sm-10">
		@section ('grid18_panel_body')
		<div class="text-center"><h4>Ten</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid18'))
	</div>
</div>
<div class="row">
	<div class="col-sm-1">
		@section ('grid19_panel_body')
		<div class="text-center"><h4>One</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid19'))
	</div>
	<div class="col-sm-11">
		@section ('grid20_panel_body')
		<div class="text-center"><h4>Eleven</h4></div>
		@endsection
		@include('widgets.panel', array('controls'=> true, 'as'=> 'grid20'))
	</div>
</div>
</div>
@stop