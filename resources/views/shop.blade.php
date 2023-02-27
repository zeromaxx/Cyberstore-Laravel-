@section('title')
    {{ 'Shop' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.alt_nav_search_bar')
@include('includes.banner')
<div class="products-shop-container">
    <div class="products-shop-categories">
        <div>
            <h4>Categories</h4>
            <ul>
                @foreach ($categories as $category)
                    <li><a href="{{ route('shop', ['category' => $category['id']]) }}">{{ $category['name'] }}</a></li>
                @endforeach
            </ul>
        </div>
        <div>
            <h4>Price Range</h4>
            <ul>
                <li><a href="{{ route('shop') }}">All</a></li>
                <li><a href="{{ route('shop', ['sortBy' => '0_200']) }}">0 - 200</a></li>
                <li><a href="{{ route('shop', ['sortBy' => '200_400']) }}">200 - 400</a></li>
                <li><a href="{{ route('shop', ['sortBy' => '600+']) }}">600+</a></li>
            </ul>
        </div>



    </div>
    <div class="products-container">
        @foreach ($products as $product)
            <div class="product-single">
                <div class="product-single-category">
                    <h6>{{ $product['category']['name'] }}</h6>
                    @if (auth()->check())
                        <form class="favForm" action="{{ route('add_favourite', $product) }}" method="POST">
                            @csrf
                            <i
                                class="fa-regular fa-heart favourite-button 
                                {{ auth()->user()->hasFavourited($product)? 'blue-heart': 'grey-heart' }}">
                            </i>

                            <button type="submit" class="favBtnSubmit">
                            </button>

                        </form>
                    @endif
                </div>
                <div style="position: relative;">
                    <a href="{{ route('product_details', $product['id']) }}">
                        <img src="/images/{{ $product['image'] }}" alt="product">
                        @if ($product['qty'] == 0)
                            <span class="out-of-stock">Out Of Stock</span>
                        @endif
                    </a>
                </div>
                <div class="product-single-info">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <a href="{{ route('product_details', $product['id']) }}">
                        <h5>{{ $product['name'] }}</h5>
                    </a>
                    <h6>Quantity: {{ $product['qty'] }}</h6>
                    <div>
                        <h3>{{ $product['price'] }} &euro;</h3>
                        @if (Auth::check())
                            @if ($product['qty'] == 0)
                                <svg width="24px" height="24px" viewBox="0 0 512 512"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path fill="#ff4b4b"
                                        d="M256 0C114.6 0 0 114.6 0 256s114.6 256 256 256s256-114.6 256-256S397.4 0 256 0zM64 256c0-41.4 13.3-79.68 35.68-111.1l267.4 267.4C335.7 434.7 297.4 448 256 448C150.1 448 64 361.9 64 256zM412.3 367.1L144.9 99.68C176.3 77.3 214.6 64 256 64c105.9 0 192 86.13 192 192C448 297.4 434.7 335.7 412.3 367.1z" />
                                </svg>
                            @else
                                @if (!auth()->user()->hasAddedToCart($product))
                                    <form action="{{ route('add_to_cart', $product) }}" method="POST"
                                        class="cart-div add-to-cart-btn">

                                        <svg class="arrow-svg" baseProfile="tiny" height="24px" version="1.2"
                                            viewBox="0 0 24 24" width="24px" xml:space="preserve"
                                            xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Layer_1">
                                                <path
                                                    d="M16.707,13.293c-0.391-0.391-1.023-0.391-1.414,0L13,15.586V8c0-0.552-0.447-1-1-1s-1,0.448-1,1v7.586l-2.293-2.293   c-0.391-0.391-1.023-0.391-1.414,0s-0.391,1.023,0,1.414L12,19.414l4.707-4.707C17.098,14.316,17.098,13.684,16.707,13.293z" />
                                            </g>
                                        </svg>
                                        <svg class="cart-svg" id="Layer_1" data-name="Layer 1"
                                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256">
                                            <defs>
                                            </defs>
                                            <rect class="cls-1" width="256" height="256" />
                                            <circle class="cls-2" cx="80" cy="216" r="18" />
                                            <circle class="cls-4" cx="184" cy="216" r="18" />
                                            <path class="cls-3"
                                                d="M42.3,72H221.7l-26.4,92.4A15.91,15.91,0,0,1,179.9,176H84.1a15.91,15.91,0,0,1-15.4-11.6L32.5,37.8A8,8,0,0,0,24.8,32H8" />
                                        </svg>

                                    </form>
                                @else
                                    <div>
                                        <svg width="50" height="50" id="Layer_1"
                                            style="enable-background:new 0 0 30 30;" version="1.1" viewBox="0 0 30 30"
                                            xml:space="preserve" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <path fill="#3e71fa"
                                                d="M15,3C8.373,3,3,8.373,3,15c0,6.627,5.373,12,12,12s12-5.373,12-12C27,8.373,21.627,3,15,3z M21.707,12.707l-7.56,7.56  c-0.188,0.188-0.442,0.293-0.707,0.293s-0.52-0.105-0.707-0.293l-3.453-3.453c-0.391-0.391-0.391-1.023,0-1.414s1.023-0.391,1.414,0  l2.746,2.746l6.853-6.853c0.391-0.391,1.023-0.391,1.414,0S22.098,12.316,21.707,12.707z" />
                                        </svg>
                                    </div>
                                @endif
                            @endif
                        @else
                            <p style="color: #5677fc">Login to continue</p>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach

        <div class="no-results">
            @if (count($products) == 0)
                <h4>No results were found.</h4>
            @endif
        </div>
    </div>
</div>
<div id="favourite-toast"></div>
@include('includes.footer')
<script src="{{ asset('js/cart.js') }}"></script>
