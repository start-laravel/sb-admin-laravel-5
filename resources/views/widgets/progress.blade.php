
<div class="progress">
  <div class="progress-bar progress-bar-{{{ isset($class) ? $class : 'default' }}} {{{ isset($striped) ? 'progress-bar-striped' : '' }}} {{{ isset($animated) ? 'progress-bar-striped active' : '' }}}" role="progressbar" aria-valuenow="{{ $value }}" aria-valuemin="0" aria-valuemax="100" style="width: {{ $value }}%;">{{{ isset($badge) ? $value: ''}}}
   
  </div>
</div>