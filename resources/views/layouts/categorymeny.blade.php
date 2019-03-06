<h2>Categories</h2>
<div class="navwidth">
    <div class="accordion" id="accordionExample">
        @foreach($categories as $category)
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $category->name }}" aria-expanded="true" aria-controls="collapseOne">
                                    {{ $category->name }}
                        </button>
                    </h2>
                </div>
                <div class="accordion" id="accordionExampleone">
                    <div id="{{ $category->name }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            @foreach($category->products as $product)
                                <div class="card-header" id="headingOne">
                                    <h2 class="mb-0">
                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#{{ $product->name }}" aria-expanded="true" aria-controls="collapseOne">
                                                -{{ $product->name }}
                                        </button>
                                    </h2>
                                </div>
                            @endforeach
                            <div id="{{ $product->name }}" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExampleone">
                                <div class="card-body">
                                    @foreach($category->products as $product)
                                        <a class="nav-link my-1" href="/products/{{ $product->id }}">{{ $product->id }} {{ $product->name }}</a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<style>
h2{
    margin-left:10px;
}
.navwidth{
    display: inline-flex; 
    margin-left:10px;
    vertical-align: top;
}
h2.mb-0{
    width:150px;
}
.card-header, .card-body{
    padding:0px!important;
}
</style>