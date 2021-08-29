<div id="paypal-button-container" style="width: 20rem;"></div>

@section('custom-js')
<script src="https://www.paypal.com/sdk/js?client-id=AVhzVhyuAlAVzQTKY2YQUaRVCARoGi1eqtWEwZ6TBoP3R_YdaE3HYZ-k6E3AB2GJ_XhQkT3okLBE_rQ0&components=buttons&currency=USD&locale={{app()->islocale('ar')? 'ar_EG' : 'en_US'}}"></script>
<script>
paypal.Buttons({
    createOrder: async function(data, actions) {
      // Set up the transaction
      amount =  '10.00'
      order  = await actions.order.create({
        purchase_units: [{
          amount: {
            value: amount
          }
        }]  
      });
      
      $.ajax({
        url: "{{route('register.payment')}}",
        method: 'POST',
        data: {
          _token: $('meta[name=token]').attr('content') ,
          order_id: order ,
          responds: getStorage().responds,
          amount: amount,
          gender: $('#gt_gender').val()
        },
        success: function(data) {
          console.log(data);
          
        }
      })
      
      return order;
      
    },
    onApprove: function(data, actions) {
        // This function captures the funds from the transaction.
        return actions.order.capture().then(function(details) {
            console.log(details);
            clearStorage()
            location.href = "{{route('main.checkout.success')}}"
        // This function shows a transaction success message to your buyer.
        // alert('Transaction completed by ' + details.payer.name.given_name);
        });
    },
    onCancel: function (data) {
        // Show a cancel page, or return to cart
        console.log(data);
    },
    onError: function (err) {
      console.log(err);
    }
  }).render('#paypal-button-container');
</script>
@endsection
