<div class="wallpaper-container">
    <img src="{{ asset('img/banner.jpg') }}" alt="wallpaper">
    <div class="wallpaper-heading">
        <h2>Shop</h2>
        <p>Home/@if (request()->route())
                {{ ucfirst(request()->route()->getName()) }}
            @endif
        </p>
    </div>
</div>