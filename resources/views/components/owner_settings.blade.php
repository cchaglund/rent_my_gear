@if ( isset($user) && $user->id == $product->user_id || isset($user) && $user->id == 0)

<div class="d-flex">
	<a href="/products/{{ $product->id }}/edit">
		<button class="m-1 add-to-cart btn btn-warning" type="button">Edit</button>
	</a>
	<form method="POST" action="/products/{{ $product->id }}">
		{{ csrf_field() }}
		{{ method_field('PATCH') }}
		<button type="submit" name="toggle_hide" value="toggle_hide" class="m-1 add-to-cart btn btn-dark" type="button">{{ $product->hidden ? 'Unhide' : 'Hide' }}</button>
	</form>
	<form method="POST" action="/products/{{ $product->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit" name="delete" class="m-1 add-to-cart btn btn-danger" type="button">Delete</button>
	</form>
</div>

	@endif