@section('title')
    {{ 'Product Details' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="details-container">
    <div class="details-main-img-container">
            <img id="imgThumbnail"  src="/images/{{ $product['image'] }}" alt="product">
    </div>
    <div class="details-info-container">
        <div class="details-header">
            <h2>{{ $product['name'] }}</h2>
            <p>Price:<span>{{ $product['price'] }} &euro;</span></p>
        </div>
        <div>
            <b>Description:</b>
            <br>
            {{ $product['description'] }}
        </div>
        <div class="details-footer">
            <p>Category:<span>{{ $product['category']['name'] }}</span></p>
        </div>
    </div>
</div>

<div class="modal hidden">
    <button class="btn--close-modal">&times;</button>
    <img id="modalImage" src="" />
</div>
<div class="overlay hidden"></div>
@include('includes.footer')
{{-- <script src="~/Scripts/Navbar Toggle.js"></script>
    <script src="~/Scripts/open_modal.js"></script>
    <script src="~/Scripts/LiveSearch.js"></script>
    <script src="~/Scripts/WishList.js"></script>
    <script src="~/Scripts/AddToCart.js"></script>
    <script>
        let imgThumbnail = document.querySelectorAll('#imgThumbnail');
        let modalImage = document.querySelector('#modalImage');

        imgThumbnail.forEach(function (e) {
            e.addEventListener('click', function (t) {
                var target = t.target.getAttribute("data-target");
                var imageSrc = t.target.getAttribute("src");
                for (var i = 0; i <= target; i++) {
                    if (target == i) {
                        modalImage.src = imageSrc;
                    }
                }

            })
        })
    </script> --}}
