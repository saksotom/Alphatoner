{!! Form::open(['url' => '/products/'.$product->id, 'method' => 'DELETE', 'class' => 'inline-block' ]) !!}
	<input type="submit" value="desactivar" class="red-text mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect">
{!! Form::close() !!}