
    <a href="/products/@yield('id')">
      <div class="container productbox">
            <div class="card productpadding">
                <div class="container-fluid">
                    <div class="wrapper row">
                        <div class="preview col-md-6">
                            
                            <div class="preview-pic tab-content">
                              <div class="tab-pane active" id="pic-1"><img src="@yield('src')" /></div>
                            </div>
                            
                        </div>
                        <div class="details col-md-6">
                            <h3 class="product-title">@yield('name')</h3>
                            <hr>
                            <div class="rating">
                                <p class="product-description">@yield('desc')</p>
                            </div>
                            <hr>
                            
                            <h4 class="price">current price: <span>$@yield('price')</span></h4>
                            <h5 class="sizes">Time to rent:
                                <span class="size" data-toggle="tooltip" title="oneweek">1 week</span>
                                <span class="size" data-toggle="tooltip" title="twoweeks">| 2 weeks</span>
                                <span class="size" data-toggle="tooltip" title="threeweeks">| 3 weeks</span>
                                <span class="size" data-toggle="tooltip" title="fourweeks">| 4 weeks</span>
                            </h5>
                            <h5 class="colors">colors:
                            </h5>
                            <div class="action">
                                <button class="add-to-cart btn btn-outline-secondary" type="button">Rent It Now!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </a>
