@extends ('layouts.dashboard')

@section ('page_heading','Documentation')

@section('section')

		@section ('dpanel_panel_title', 'Panel')
		@section ('dpanel_panel_body')
			@section ('inside_panel_title', 'Default title')
			@section ('inside_panel_body')
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			@endsection
			@include('widgets.panel', array('header'=>true, 'as'=>'inside'))
		@endsection	
		@section ('dpanel_panel_footer')
<pre class="codeWrapper">
<i class="fa fa-at"></i>section ('inside_panel_title', 'Default title')
<i class="fa fa-at"></i>section ('inside_panel_body')
&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&lt;/p&gt;
<i class="fa fa-at"></i>endsection
<i class="fa fa-at"></i>include('widgets.panel', array('header'=>true, 'as'=>'inside'))
</pre>
		@endsection
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'dpanel'))


		
		@section ('dcollapsible_panel_title', 'Collapssible')
		@section ('dcollapsible_panel_body')
			@include('widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
		@endsection	
		@section ('dcollapsible_panel_footer')
<pre class="codeWrapper">
<i class="fa fa-at"></i>include('widgets.collapse', array('id'=>'2', 'header'=> 'This is a header', 'body'=>'Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.'))
</pre>
		@endsection
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'dcollapsible'))

		

		@section ('dbutton_panel_title', 'Button')
		@section ('dbutton_panel_body')
			@include('widgets.button', array('value'=>'Info button', 'class'=>'info'))
			@include('widgets.button', array('class'=>'danger', 'size'=>'lg', 'value'=>'Large Button'))
			@include('widgets.button', array('class'=>'success btn-outline', 'value'=>'Primary'))
		@endsection	
		@section ('dbutton_panel_footer')
<pre class="codeWrapper">
<i class="fa fa-at"></i>include('widgets.button', array('value'=>'Info button', 'class'=>'info'))
<i class="fa fa-at"></i>include('widgets.button', array('class'=>'danger', 'size'=>'lg', 'value'=>'Large Button'))
<i class="fa fa-at"></i>include('widgets.button', array('class'=>'success btn-outline', 'value'=>'Primary'))
</pre>
		@endsection
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'dbutton'))

		


		@section ('doalert_panel_title', 'Alerts')
		@section ('doalert_panel_body')
			@include('widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'))
			@include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
		@endsection	
		@section ('doalert_panel_footer')
<pre class="codeWrapper">
<i class="fa fa-at"></i>include('widgets.alert', array('class'=>'success', 'message'=> 'You have an alert', 'icon'=> 'user'))
<i class="fa fa-at"></i>include('widgets.alert', array('class'=>'info', 'dismissable'=>true, 'message'=> 'My message'))
</pre>
		@endsection
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'doalert'))

		

		@section ('dprogress_panel_title', 'Progressbars')
		@section ('dprogress_panel_body')
			@include('widgets.progress', array('class'=> 'success', 'value'=>'44'))
			@include('widgets.progress', array('animated'=> true, 'value'=>'72'))
			@include('widgets.progress', array('class'=> 'danger', 'value'=>'12', 'badge'=>true))
		@endsection	
		@section ('dprogress_panel_footer')
<pre class="codeWrapper">
<i class="fa fa-at"></i>include('widgets.progress', array('class'=> 'success', 'value'=>'44'))
<i class="fa fa-at"></i>include('widgets.progress', array('animated'=> true, 'value'=>'72'))
<i class="fa fa-at"></i>include('widgets.progress', array('class'=> 'danger', 'value'=>'12', 'badge'=>true))
</pre>
		@endsection
		@include ('widgets.panel', array('class'=>'primary', 'header'=>true, 'footer'=>true, 'as'=>'dprogress'))

	
@stop
