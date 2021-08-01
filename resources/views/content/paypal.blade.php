<div id="paypal-button-container" style="width: 20rem;"></div>

@section('custom-js')
<script src="https://www.paypal.com/sdk/js?client-id=AdO-VGqI9QR5_16e9cxoRHB8O6HS4YEVQ4lsFfXO0-XxyFZnT-SFO3KkwbRbhDG69jgO0F8rurvK8bW-&components=buttons&vault=false"></script>
<script>
paypal.Buttons({
    env: 'sandbox', // Or 'production'
    createOrder: function(data, actions) {
      // Set up the transaction
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '0.01'
          },
          // application_context: { 
          //   shipping_preference: 'NO_SHIPPING' 
          // }
        }]
      });
    },
    onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            console.log(details);
            
        // This function shows a transaction success message to your buyer.
        // alert('Transaction completed by ' + details.payer.name.given_name);
        });
    },
    onCancel: function (data) {
        // Show a cancel page, or return to cart
        alert(JSON.stringify(data))
    },
    onError: function (err) {
        alert(err)
    }
  }).render('#paypal-button-container');
</script>
@endsection
