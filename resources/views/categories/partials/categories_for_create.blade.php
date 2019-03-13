


	
	@if ($category->has_child_category() == true)
		<optgroup label="{{ $category->name }}">
	@else 
		<option value="{{ $category->id}}">{{ $category->name }}</option>
	@endif
			<option>
				@foreach($category->child_categories() as $category)
			        @include('categories.partials.categories_for_create', $category)
			    @endforeach
			 </option>
		</optgroup>    
	@else

		
		
		<li>
			
		 </li>
	@endif




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