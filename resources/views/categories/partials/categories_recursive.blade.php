

<div class="pb-1 pl-4" id="hideon">
	@if ($category->has_child_category() == true)
		<a data-toggle="collapse" class="category text-primary" href="#category_{{ $category->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">{{ $category->name }}</a>
	@else
		<a class="category text-primary" href="/categories/{{ $category->id }}" role="button" aria-expanded="false" aria-controls="collapseExample">{{ $category->name }}</a>
	@endif
	
	@if ($category->has_child_category())
	    <div class="collapse" id="category_{{ $category->id }}">
	    @foreach($category->child_categories() as $category)
	        @include('categories.partials.categories_recursive', $category)
	    @endforeach
	    </div>
	@endif
</div>



{{-- <li><a href="/categories/{{ $category->id }}">{{ $category->name }}</a>
	@if ($category->has_child_category())
	    <ul>
	    @foreach($category->child_categories() as $category)
	        @include('categories.partials.categories_recursive', $category)
	    @endforeach
	    </ul>
	@endif
</li> --}}


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