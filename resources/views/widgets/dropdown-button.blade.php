<div class="btn-group @if (isset($up)) dropup @endif">
	@if (isset($split)) 

		<button type="button" class="btn btn-{{{ isset($class) ? $class : 'default' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} @if (isset($size)) btn-{{$size}} @endif  {{{ isset($disabled) ? 'disabled' : '' }}}">{{ $value }}</button>
		<button type="button" class="btn btn-{{{ isset($class) ? $class : 'default' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} dropdown-toggle haha" data-toggle="dropdown" aria-expanded="false">
			<span class="caret"></span>
			<span class="sr-only"></span>
		</button> 

	@else

	<button type="button" class="btn btn-{{{ isset($class) ? $class : 'default' }}} {{{ isset($rounded) ? 'btn-rounded' : ''}}} {{{ isset($bordered) ? 'btn-bordered' : ''}}} @if (isset($size)) btn-{{$size}} @endif  {{{ isset($disabled) ? 'disabled' : '' }}} dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ $value }}
		<span class="caret"></span>
	</button>

@endif

	<ul class="dropdown-menu" role="menu">
		@if (isset($submenu))
			@foreach ($submenu as $menu)
				<li><a href="{{ $menu['link'] }}"> {{ $menu['name']  }}</a></li>
			@endforeach
		@endif
	</ul>
</div>
