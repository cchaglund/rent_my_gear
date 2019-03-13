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