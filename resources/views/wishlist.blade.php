@section('title')
{{ 'Home' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.banner')

<div class="empty-space"></div>
<div class="wishlist-container">
    <table>
        @foreach ($favourites as $favourite)
        <tr>
            <td>
                @if (auth()->check())
                <form class="favForm" action="{{ route('remove_favourite', $favourite->product) }}" method="POST">
                    @csrf
                    <button type="submit" class="favBtnSubmit" style="display: none">
                    </button>
                    <i class="fas fa-times remove-wishlist-button" onclick="submitFavForm();"></i>
                </form>
                @endif
            </td>
            <td>
                <img src="/images/{{ $favourite['product']['image'] }}" alt="">
            </td>
            <td>
                <h5>{{ $favourite['product']['name'] }}</h5>
            </td>
            <td>
                <h4>{{ $favourite['product']['price'] }} &euro;</h4>
            </td>
            <td>
                <span>{{ $favourite['product']['qty'] }} In Stock</span>
            </td>
        </tr>
        @endforeach
        <tr>
            <td style="text-align:center;">
                {{ $message }}
            </td>
        </tr>
    </table>
</div>
<div class="empty-space"></div>
<script>
    function submitFavForm() {
    document.querySelector('.favForm').submit();
}
</script>
