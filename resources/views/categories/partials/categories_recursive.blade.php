<li><a href="/categories/{{ $category->id }}">{{ $category->name }}</a></li>
	@if ($category->has_child_category())
	    <ul>
	    @foreach($category->child_categories() as $category)
	        @include('categories.partials.categories_recursive', $category)
	    @endforeach
	    </ul>
	@endif


{{-- 

<a data-toggle="collapse" href="#link{{ $key }}" role="button" aria-expanded="false" aria-controls="collapseExample">
	{{ $category->name }}
</a>

<div class="collapse border" id="link{{ $key }}">
	@if ($category->has_child_category())
		@foreach($category->child_categories() as $key => $category)
			<br>
			@include('categories.partials.categories_recursive', [
				'category' => $category,
				'key' => $key
			])
		@endforeach
	@endif
</div>



 --}}