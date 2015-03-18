@extends('layouts.dashboard')

@section('page_heading','Panels and Collapsibles')

@section('section')
	<div class="col-sm-6">
		@section ('panel1_panel_title', 'Default title')
		@section ('panel1_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'panel1'))
		@section ('panel2_panel_title', 'Inverse Header')
		@section ('panel2_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		 tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		 quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		 consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		 cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		 proident, sunt in culpa qui officia deserunt mollit anim id est laborum. 
		@endsection
		@include('widgets.panel', array('class'=>'primary', 'header'=>true, 'as'=>'panel2'))
		@section ('panel3_panel_title', 'Header')
		@section ('panel3_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		@endsection
		@section ('panel3_panel_footer', 'Footer')
		@include('widgets.panel', array('class'=>'success', 'header'=>true, 'footer'=>true, 'as'=>'panel3'))
	</div>
	<div class="col-sm-6">
		@section ('panel4_panel_title', 'Hello World!')
		@section ('panel4_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		@endsection
		@include('widgets.panel', array('class'=>'info', 'header'=> true, 'as'=>'panel4'))
		@section ('panel5_panel_title', 'Warning')
		@section ('panel5_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		@endsection
		@include('widgets.panel', array('class'=>'warning', 'header'=>true, 'as'=>'panel5'))
		@section ('panel6_panel_title', 'Danger')
		@section ('panel6_panel_body')
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		@endsection
		@include('widgets.panel', array('class'=>'danger', 'header'=>true, 'as'=>'panel6'))
	</div>
	<div class="col-sm-12">
		@section ('collapsible_panel_title', 'Collapsible Panel Group')
		@section ('collapsible_panel_body')
		@include('widgets.collapse', array('id'=>'1', 'class'=>'primary', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.','collapseIn'=>true))
		@include('widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
		@include('widgets.collapse', array('id'=>'3', 'class'=>'success', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'collapsible'))
	</div>
@stop