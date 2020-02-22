
<html>
<head>
    <meta charset="UTF-8">
    <title>BraintreePHPExample</title>
    <link rel=stylesheet type=text/css href="{{asset('css/app.css')}}">
    <link rel=stylesheet type=text/css href="{{asset('css/overrides.css')}}">
</head>


<body>

<header class="main">
    <div class="container wide">
        <div class="content slim">
            <div class="set">
                <div class="fill">
                    <a class="pseudoshop" href="/">PSEUDO<strong>SHOP</strong></a>
                </div>

                <div class="fit">
                    <a class="braintree" href="https://developers.braintreepayments.com/guides/drop-in" target="_blank">Braintree</a>
                </div>
            </div>
        </div>
    </div>

    <div class="notice-wrapper">
        <?php if(isset($_SESSION["errors"])) : ?>
        <div class="show notice error notice-error">
                <span class="notice-message">
                    <?php
                    echo($_SESSION["errors"]);
                    unset($_SESSION["errors"]);
                    ?>
                    <span>
        </div>
        <?php endif; ?>
    </div>
</header>


<div class="wrapper">
    <div class="checkout container">

        <header>
            <h1>Hi, <br>Let's test a transaction</h1>
            <p>
                Make a test payment with Braintree using PayPal or a card
            </p>
        </header>

        <form method="post" id="payment-form" action="{{route('checkout')}}">
            {{csrf_field()}}
            <section>
                <label for="amount">
                    <span class="input-label">Amount</span>
                    <div class="input-wrapper amount-wrapper">
                        <input id="amount" name="amount" type="tel" min="1" placeholder="Amount" value="10">
                    </div>
                </label>

                <div class="bt-drop-in-wrapper">
                    <div id="bt-dropin"></div>
                </div>
            </section>

            <input id="nonce" name="payment_method_nonce" type="hidden" />
            <button class="button" type="submit"><span>Test Transaction</span></button>
        </form>
    </div>
</div>
<script src="https://js.braintreegateway.com/web/dropin/1.16.0/js/dropin.min.js"></script>
<script>
    var form = document.querySelector('#payment-form');
    var client_token = "{{$token}}";
    braintree.dropin.create({
        authorization: client_token,
        selector: '#bt-dropin',
        vaultManager: true,
        paypal: {
            flow: 'vault'
        }
    }, function (createErr, instance) {
        if (createErr) {
            console.log('Create Error', createErr);
            return;
        }
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            instance.requestPaymentMethod(function (err, payload) {
                if (err) {
                    console.log('Request Payment Method Error', err);
                    return;
                }
                // Add the nonce to the form and submit
                document.querySelector('#nonce').value = payload.nonce;
                form.submit();
            });
        });
    });
</script>
<script src="{{asset('js/demo.js')}}"></script>
</body>
</html>