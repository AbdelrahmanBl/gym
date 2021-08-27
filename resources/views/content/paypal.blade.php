<div id="paypal-button-container" style="width: 20rem;"></div>

@section('custom-js')
<script src="https://www.paypal.com/sdk/js?client-id=AVhzVhyuAlAVzQTKY2YQUaRVCARoGi1eqtWEwZ6TBoP3R_YdaE3HYZ-k6E3AB2GJ_XhQkT3okLBE_rQ0&components=buttons&locale={{app()->islocale('ar')? 'ar_EG' : 'en_US'}}"></script>
<script>
paypal.Buttons({
    createOrder: function(data, actions) {
      // Set up the transaction
      return actions.order.create({
        purchase_units: [{
          amount: {
            value: '10.00'
          }
        }]
        
      });
    },
    onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            console.log(details);
            alert("Approved !")
        // This function shows a transaction success message to your buyer.
        // alert('Transaction completed by ' + details.payer.name.given_name);
        });
    },
    onCancel: function (data) {
        // Show a cancel page, or return to cart
        // alert(JSON.stringify(data))
        console.log(data);
        alert("Canceled !")
    },
    onError: function (err) {
      console.log(err);
      // alert(err.data.name)
    }
  }).render('#paypal-button-container');
</script>
@endsection
