<div class="dashboard-order">
    <h3>Order Menu</h3>

    @if(session('food_detail'))
        <form action="{{ url('/checkout', session('food_detail')->id) }}" method="post">
            @csrf

            <!-- Address -->
            <div class="order-address">
                <p>Address Delivery</p>
                <h4>{{ $city }}</h4>
                <h4>{{ $street }}</h4>
            </div>

            <!-- Image and price -->
            <div class="order-wrapper">
                <div class="order-card">
                    <img class="order-image" src="foodimage/{{ session('food_detail')->image }}" alt="Order Image">
                    <div class="order-detail">
                        <p><strong>{{ session('food_detail')->name }}</strong></p>
                        <p>{{ session('food_detail')->description }}</p>
                        <p><strong>{{ session('food_detail')->vendor_name }}</strong></p>

                    </div>
                    <h4 class="order-price">Rs. {{ session('food_detail')->price }}</h4>
                </div>
            </div>

            <hr class="divider">

            <!-- Pricing -->
            @php
                $price = session('food_detail') ? session('food_detail')->price : 0;
                $taxRate = 0.10; // 10% tax
                $deliveryFee = 3; // Fixed delivery fee
            @endphp

<div class="order-total">
    <!-- Quantity input -->
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="1" min="1">

    <p>Subtotal <span id="subtotal">Rs.{{ number_format($price, 2) }}.00</span></p>
    <p>Tax (10%) <span id="tax">Rs.{{ number_format($price * $taxRate, 2) }}.00</span></p>
    <p>Delivery fee <span id="delivery-fee">Rs.{{ number_format($deliveryFee, 2) }}</span></p>

    <div class="order-promo">
        <input class="input-promo" type="text" placeholder="Apply Voucher">
        <button type="button" class="button-promo">Find</button>
    </div>
    <hr class="divider">

    <p>Total <span id="total">Rs{{ number_format($price + ($price * $taxRate) + $deliveryFee, 2) }}</span></p>
</div>

<!-- JavaScript for Dynamic Calculation -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const price = {{ $price }};
        const taxRate = 0.10;
        const deliveryFee = 3;

        const quantityInput = document.getElementById('quantity');
        const subtotalElement = document.getElementById('subtotal');
        const taxElement = document.getElementById('tax');
        const totalElement = document.getElementById('total');

        // Function to calculate and update totals
        function updateTotals() {
            const quantity = parseInt(quantityInput.value) || 1;
            const subtotal = price * quantity;
            const tax = subtotal * taxRate;
            const total = subtotal + tax + deliveryFee;

            // Update HTML elements with new values
            subtotalElement.textContent = `Rs.${subtotal.toFixed(2)}`;
            taxElement.textContent = `Rs.${tax.toFixed(2)}`;
            totalElement.textContent = `Rs.${total.toFixed(2)}`;
        }

        // Event listener for quantity changes
        quantityInput.addEventListener('input', updateTotals);

        // Initial calculation
        updateTotals();
    });
</script>


            <button type="submit" class="checkout">Checkout</button>
        </form>
    @else
        <p>No food item selected for checkout.</p>
    @endif
</div>
