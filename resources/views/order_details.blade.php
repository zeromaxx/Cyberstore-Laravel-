@section('title')
    {{ 'Order Details' }}
@endsection

@include('includes.header')
@include('includes.navbar')
@include('includes.alt_nav_search_bar')
@include('includes.banner')

{{-- <div class="order-details-container">
    <div class="order-details-card-container">
        <div class="order-details-card-1">
            <h2>Order Details</h2>
            <table>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="24" height="24" viewBox="0 0 20 21" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M19 3.40002C18.4 3.40002 18 3.80002 18 4.40002V8.40002H14V4.40002C14 3.80002 13.6 3.40002 13 3.40002C12.4 3.40002 12 3.80002 12 4.40002V8.40002H8V4.40002C8 3.80002 7.6 3.40002 7 3.40002C6.4 3.40002 6 3.80002 6 4.40002V8.40002H2V4.40002C2 3.80002 1.6 3.40002 1 3.40002C0.4 3.40002 0 3.80002 0 4.40002V19.4C0 20 0.4 20.4 1 20.4H19C19.6 20.4 20 20 20 19.4V4.40002C20 3.80002 19.6 3.40002 19 3.40002ZM18 10.4V13.4H14V10.4H18ZM12 10.4V13.4H8V10.4H12ZM12 15.4V18.4H8V15.4H12ZM6 10.4V13.4H2V10.4H6ZM2 15.4H6V18.4H2V15.4ZM14 18.4V15.4H18V18.4H14Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M19 0.400024H1C0.4 0.400024 0 0.800024 0 1.40002V4.40002C0 5.00002 0.4 5.40002 1 5.40002H19C19.6 5.40002 20 5.00002 20 4.40002V1.40002C20 0.800024 19.6 0.400024 19 0.400024Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        Date Added
                    </td>
                    <td>createdAt</td>
                </tr>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M3.20001 5.91897L16.9 3.01895C17.4 2.91895 18 3.219 18.1 3.819L19.2 9.01895L3.20001 5.91897Z"
                                    fill="currentColor"></path>
                                <path opacity="0.3"
                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21C21.6 10.9189 22 11.3189 22 11.9189V15.9189C22 16.5189 21.6 16.9189 21 16.9189H16C14.3 16.9189 13 15.6189 13 13.9189ZM16 12.4189C15.2 12.4189 14.5 13.1189 14.5 13.9189C14.5 14.7189 15.2 15.4189 16 15.4189C16.8 15.4189 17.5 14.7189 17.5 13.9189C17.5 13.1189 16.8 12.4189 16 12.4189Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M13 13.9189C13 12.2189 14.3 10.9189 16 10.9189H21V7.91895C21 6.81895 20.1 5.91895 19 5.91895H3C2.4 5.91895 2 6.31895 2 6.91895V20.9189C2 21.5189 2.4 21.9189 3 21.9189H19C20.1 21.9189 21 21.0189 21 19.9189V16.9189H16C14.3 16.9189 13 15.6189 13 13.9189Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        Payment Method
                    </td>
                    <td>
                        payment.Name
                    </td>
                </tr>
                <tr>
                    <td>
                        <span>
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M20 8H16C15.4 8 15 8.4 15 9V16H10V17C10 17.6 10.4 18 11 18H16C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18H21C21.6 18 22 17.6 22 17V13L20 8Z"
                                    fill="currentColor"></path>
                                <path opacity="0.3"
                                    d="M20 18C20 19.1 19.1 20 18 20C16.9 20 16 19.1 16 18C16 16.9 16.9 16 18 16C19.1 16 20 16.9 20 18ZM15 4C15 3.4 14.6 3 14 3H3C2.4 3 2 3.4 2 4V13C2 13.6 2.4 14 3 14H15V4ZM6 16C4.9 16 4 16.9 4 18C4 19.1 4.9 20 6 20C7.1 20 8 19.1 8 18C8 16.9 7.1 16 6 16Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>

                        Shipping Method
                    </td>
                    <td>
                        Shipping.Name
                    </td>
                </tr>
            </table>
        </div>
        <div class="order-details-card-2">
            <h2>Customer Details</h2>
            <table>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                    fill="currentColor"></path>
                                <rect x="7" y="6" width="4" height="4" rx="2"
                                    fill="currentColor"></rect>
                            </svg>
                        </span>
                        Fisrt Name
                    </td>
                    <td>
                        firstName
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z"
                                    fill="currentColor"></path>
                                <rect x="7" y="6" width="4" height="4" rx="2"
                                    fill="currentColor"></rect>
                            </svg>
                        </span>
                        Last Name
                    </td>
                    <td>
                        lastName
                    </td>
                </tr>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path opacity="0.3"
                                    d="M21 19H3C2.4 19 2 18.6 2 18V6C2 5.4 2.4 5 3 5H21C21.6 5 22 5.4 22 6V18C22 18.6 21.6 19 21 19Z"
                                    fill="currentColor"></path>
                                <path
                                    d="M21 5H2.99999C2.69999 5 2.49999 5.10005 2.29999 5.30005L11.2 13.3C11.7 13.7 12.4 13.7 12.8 13.3L21.7 5.30005C21.5 5.10005 21.3 5 21 5Z"
                                    fill="currentColor"></path>
                            </svg>
                        </span>
                        Email
                    </td>
                    <td>Name</td>
                </tr>
                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M5 20H19V21C19 21.6 18.6 22 18 22H6C5.4 22 5 21.6 5 21V20ZM19 3C19 2.4 18.6 2 18 2H6C5.4 2 5 2.4 5 3V4H19V3Z"
                                    fill="currentColor"></path>
                                <path opacity="0.3" d="M19 4H5V20H19V4Z" fill="currentColor"></path>
                            </svg>
                        </span>
                        Phone
                    </td>
                    <td>
                        phoneNumber
                    </td>
                </tr>

                <tr>
                    <td>
                        <span class="svg-icon svg-icon-2 me-2">
                            <?xml version="1.0" ?>
                            <svg width="24" height="24" viewBox="0 0 512 512"
                                xmlns="http://www.w3.org/2000/svg">
                                <title />
                                <g id="Street_sign">
                                    <path
                                        d="M458.0884,234.4116l-47.5-47.5a17.0681,17.0681,0,0,0-12.0884-5.01H273.0981V47a17.0981,17.0981,0,1,0-34.1962,0V67.9019H113.5a17.0681,17.0681,0,0,0-12.0884,5.01l-47.5,47.5a17.0893,17.0893,0,0,0,0,24.1768l47.5,47.5a17.0681,17.0681,0,0,0,12.0884,5.01H238.9019V447.9019H180a17.0981,17.0981,0,0,0,0,34.1962H332a17.0981,17.0981,0,0,0,0-34.1962H273.0981V311.0981H398.5a17.0681,17.0681,0,0,0,12.0884-5.01l47.5-47.5A17.0893,17.0893,0,0,0,458.0884,234.4116Z"
                                        fill="#a1a5b7" />
                                </g>
                            </svg>
                        </span>
                        Street
                    </td>
                    <td>
                        address
                    </td>
                </tr>

            </table>
        </div>

    </div>
</div>

<br>
<br> --}}
<div class="order-listing-container">

    <div class="order-listing-header">
        <h2>Order Details</h2>
    </div>
    <div class="order-listing-table">
        <table>
            <thead>
                <tr>
                    <th class="text-left">Product</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            @foreach ($order_details as $order_detail)
                <tr>
                    <td data-label="Product" class="td-left">
                        <img width="50px" src="/images/{{ $order_detail['product']['image'] }}" alt="" />
                    </td>
                    <td data-label="Name">
                        <span class="span-color">{{ $order_detail['product']['name'] }}</span>
                    </td>
                    <td data-label="Qty" class="span-color-1">
                        <span>{{ $order_detail['quantity'] }}</span>
                    </td>
                    <td data-label="Unit Price" class="span-color-1">
                        <span>{{ $order_detail['price'] }} &euro;</span>
                    </td>
                    <td data-label="Total" class="admin-btns-container">
                        <span class="span-color-1">{{ $order_detail['price'] * $order_detail['quantity'] }}
                            &euro;</span>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td colspan="4" class="span-color-1">Subtotal</td>
                <td>
                    <span class="span-color-1"
                        id="subTotal">{{ $order_detail['order']['total'] - $order_detail['order']['shipping'] }}
                    </span><span class="span-color-1">
                        &euro;</span>
                </td>
            </tr>
            <tr>
                <td colspan="4" class="span-color-1">Shipping Rate</td>
                <td>
                    <span class="span-color-1 shipping-rate"
                        id="shipping-rate">{{ $order_detail['order']['shipping'] }} &euro;</span>
                </td>
            </tr>
            <tr>
                <td colspan="4">Grand Total</td>
                <td>
                    <span id="grand-total">{{ $order_detail['order']['total'] }}</span><span class="span-color-1">
                        &euro;</span>
                </td>
            </tr>

        </table>
    </div>
</div>
@include('includes.footer')
