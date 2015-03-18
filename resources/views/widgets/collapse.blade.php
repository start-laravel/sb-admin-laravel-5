<div class="panel-group" id="accordion">
<div class="panel panel-{{{ isset($class) ? $class : 'default' }}}">
		<div class="panel-heading">
			<h4 class="panel-title">
				<a data-toggle="collapse" data-parent="#accordion" 
				href="#collapse{{$id}}">
				{{ $header }}
			</a>
		</h4>
	</div>
	<div id="collapse{{$id}}" class="panel-collapse collapse {{{ isset($collapseIn) ? 'in' : ''}}}">
		<div class="panel-body">
			{{ $body }}
		</div>
	</div>
</div>
</div>