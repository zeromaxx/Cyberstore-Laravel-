<script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
<div class="footer">
            <div class="footer-container">
                <div class="links-container">
                    <h4>Shopping</h4>
                    <a href="{{ route('shop') }}">Shop</a>
                </div>
                <div class="links-container">
                    <h4>Customer Service</h4>
                    <a href="{{ route('login') }}">My Account</a>
                </div>
                <div class="links-container">
                    <h4>Quick Links</h4>
                    <a href="{{ route('shop', ['category' => 3]) }}">Cpu</a>
                    <a href="{{ route('shop', ['category' => 1]) }}">Monitors</a>
                    <a href="{{ route('shop', ['category' => 4]) }}">Motherboards</a>
                    <a href="{{ route('shop', ['category' => 2]) }}">Graphics Cards</a>
                </div>
                <div class="links-container newsletter-container">
                    <h4>Sign up to Newsletter</h4>
                    <div class="email-container">
                        <form method="post">
                            <input name="receiver" id="receiverEmail" class="email" type="email"
                                placeholder="Your Email Adress..." />

                            <button type="submit" id="email-submit-btn" class="submit-email">
                                <img src="{{ asset('img/email-arrow.png') }}" alt="">
                            </button>
                            <p id="emailResult"></p>
                        </form>
                    </div>
                    <h6 class="gray">Stay up to date with all the actions that we are <br>saved for all our customers
                    </h6>
                </div>
            </div>
            {{-- <div class="footer-container sub-footer">
                <p class="gray">2022 All Rights Reserved</p>
                <div>
                    <img src="~/Images/Icons/visa.png" alt="visa">
                    <img src="~/Images/Icons/mastercard.png" alt="mastercard">
                    <img src="~/Images/Icons/paypal.png" alt="paypal">
                    <img src="~/Images/Icons/western.png" alt="western">
                </div>
            </div> --}}
            {{-- <div class="toast-container">
                <div class="toast-icon">
                    <i class="fas fa-paper-plane"></i>
                </div>
                <div class="toast-header">
                    <h3>Success</h3>
                    <p id="status"></p>
                </div>
            </div> --}}
        </div>
        </body>
