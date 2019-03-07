<div class="category-box">
    <ul>
        @foreach ($categories as $category)
            <li><a href="category/{{ $category->id }}">{{ $category->name }}<a></li>
        @endforeach
    </ul>
</div>

<style>
    .category-box {
        background-color: #fff;
        z-index: 500;
        position: fixed;
        top: 0;
        bottom: 0;
        width: 200px;
        padding-top: 55px;
        box-shadow: 2px 0 4px rgba(0,0,0,.04);
    }

    .category-box ul {
        list-style-type: none;
        padding: 10px 20px;
    }

    .category-box ul li {
        font-size: 16px;
    }
</style>