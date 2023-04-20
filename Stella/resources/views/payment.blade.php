@extends('layouts.main')

@section('content')
    <section>
        <div class="container mt-5 my-3 py-5">
            <h4>Payment</h4>

            @if (Session::has('total') && Session::get('total') !== null)
                @if (Session::has('order_id') && Session::get('order_id') !== null)
                    <h4 style="color: blue" class="my-5">Total: ${{ Session::get('total') }}</h4>

                    <!-- Set up a container element for the button -->
                    <div id="paypal-button-container"></div>

                    <script src="https://www.paypal.com/sdk/js?client-id=AYutXbRk_f9Lpapb7nxLbwLjxBS1d8dPytLSAuoZZ9aDVMh3tSe6uR97mWiRrljKi4UvCqXgCV9F-jgE&currency=USD"></script>

                    <script>
                        if (typeof paypal === 'undefined') {
                            document.write('<p style="color:red;">Unable to load PayPal SDK. Please check your internet connection.</p>');
                        } else {
                            paypal.Buttons({
                                createOrder: function(data, actions) {
                                    return actions.order.create({
                                        purchase_units: [{
                                            amount: {
                                                value: "{{Session::get('total')}}" // Replace with the amount you want to charge
                                            }
                                        }]
                                    });
                                },
                                onApprove: function(data, actions) {
                                    return actions.order.capture().then(function(orderData) {

                                        console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
                                        var transaction = orderData.purchase_units[0].payments.captures[0];
                                        alert('Transaction ' + transaction.status + ': ' + transaction.id + '\n\n See console for all available details');
                                        // Replace the alert with code to show a success message or redirect to a success page
                                        window.location.href = "/verify_payment/" + transaction.id;
                                    });
                                }
                            }).render('#paypal-button-container');
                        }
                    </script>
                @endif
            @endif
        </div>
    </section>
@endsection
