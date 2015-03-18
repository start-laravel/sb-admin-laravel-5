@extends('layouts.dashboard')
@section('page_heading','Typoghraphy')
@section('section')
<div class="col-sm-12">
<div class="row">
	<div class="col-sm-4"> 
		@section ('typo1_panel_title','Headings')
		@section ('typo1_panel_body')
		<h1>Heading 1 <small>Sub-heading</small> </h1> 
		<h2>Heading 2 <small>Sub-heading</small> </h2> 
		<h3>Heading 3 <small>Sub-heading</small> </h3> 
		<h4>Heading 4 <small>Sub-heading</small> </h4>
		<h5>Heading 5 <small>Sub-heading</small> </h5> 
		<h6>Heading 6 <small>Sub-heading</small> </h6>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo1'))
	</div>
	<div class="col-sm-4"> 
		@section ('typo2_panel_title','Paragraphs')
		@section ('typo2_panel_body')
		<p class="lead">This is an example of lead body copy.</p>
		<p>This is an example of standard paragraph text. This is an example of <a href="#">link anchor text</a> within body copy.</p> <p> <small>This is an example of small, fine print text.</small> </p> 
		<p> <strong>This is an example of strong, bold text.</strong> </p> 
		<p> <em>This is an example of emphasized, italic text.</em> </p> <br> 
		<h4>Alignment Helpers</h4> 
		<p class="text-left">Left aligned text.</p> 
		<p class="text-center">Center aligned text.</p> 
		<p class="text-right">Right aligned text.</p> 
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo2'))
	</div>
	<div class="col-sm-4">
		@section ('typo3_panel_title','Emphasis Classes')
		@section ('typo3_panel_body')
		<p class="text-muted">This is an example of muted text.</p> 
		<p class="text-primary">This is an example of primary text.</p> 
		<p class="text-success">This is an example of success text.</p> 
		<p class="text-info">This is an example of info text.</p> 
		<p class="text-warning">This is an example of warning text.</p> 
		<p class="text-danger">This is an example of danger text.</p> 
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo3'))
	</div>
</div> 
<div class="row">
	<div class="col-sm-4">
		@section ('typo4_panel_title','Abbreviations')
		@section ('typo4_panel_body')
		<p>The abbreviation of the word attribute is <abbr title="attribute">attr</abbr>.</p> 
		<p> <abbr title="HyperText Markup Language" class="initialism">HTML</abbr>is an abbreviation for a programming language.
		</p> <br> 
		<h4>Addresses</h4> 
		<address> <strong>Twitter, Inc.</strong> <br>
		795 Folsom Ave, Suite 600 <br>
		San Francisco, CA 94107 <br> 
		<abbr title="Phone">P:</abbr>(123) 456-7890 </address> 
		<address> <strong>Full Name</strong> <br> 
		<a href="mailto:#">first.last@example.com</a> 
		</address> 
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo4'))
	</div>
	<div class="col-sm-4">
		@section ('typo5_panel_title','Blockquotes')
		@section ('typo5_panel_body')
		<h4>Default Blockquote</h4> 
		<blockquote> 
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		</blockquote> 
		<h4>Blockquote with Citation</h4> 
		<blockquote> 
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		<small>Someone famous in <cite title="Source Title">Source Title</cite> </small> 
		</blockquote> 
		<h4>Right Aligned Blockquote</h4>
		 <blockquote class="pull-right"> <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p> 
		 </blockquote> 
		 @endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo5'))
	</div>
	<div class="col-sm-4">
		@section ('typo6_panel_title','List')
		@section ('typo6_panel_body')
		<h4>Unordered List</h4> 
		<ul> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li> <ul> 
					<li>List Item</li> 
					<li>List Item</li> 
					<li>List Item</li> 
				</ul>
			</li> 
			<li>List Item</li> 
		</ul> 
		<h4>Ordered List</h4> 
		<ol> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li> 
		</ol> 
		<h4>Unstyled List</h4>
		<ul class="list-unstyled"> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li>
		</ul> 
		<h4>Inline List</h4> 
		<ul class="list-inline"> 
			<li>List Item</li> 
			<li>List Item</li> 
			<li>List Item</li> 
		</ul>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo6'))
	</div>
</div> 
<div class="row">
	<div class="col-sm-4">
		@section ('typo7_panel_title','Description Lists')
		@section ('typo7_panel_body')  
		<dl> 
		<dt>Standard Description List </dt>
		<dd>Description Text </dd>
		<dt>Description List Title </dt>
		<dd>Description List Text </dd>
		</dl> 
		<dl class="dl-horizontal">
		<dt>Horizontal Description List </dt>
		<dd>Description Text </dd>
		<dt>Description List Title </dt>
		<dd>Description List Text </dd>
		</dl>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo7'))
	</div>
	<div class="col-sm-4">
		@section ('typo8_panel_title','Code')
		@section ('typo8_panel_body') 
		<p>This is an example of an inline code element within body copy. Wrap inline code within a <code>&lt;code&gt;...&lt;/code&gt;</code>tag.</p>
		<pre>This is an example of preformatted text.</pre>
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'typo8'))
	</div>
</div>	
</div>
@stop