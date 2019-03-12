<div class="flex flex-column pr-3 positionmeny paddingt">
    @each('categories.partials.categories_recursive', $categories, 'category')
</div>

<style>
    @media screen and (max-width: 800px){
		.paddingt{
			padding-top:20%;
    }
  }
</style>
