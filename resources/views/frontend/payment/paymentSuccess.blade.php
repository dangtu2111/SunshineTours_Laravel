<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Success</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: white;
        }
        .payment-success {
			height: auto;
            text-align: center;
            background: white;
            padding: 30px;
        }
        .payment-success img {
            width: 100%;
            height: 100%;
        }
        .payment-success h1 {
            font-size: 24px;
            margin-top: 20px;
            color: #333;
        }
        .payment-success p {
            color: #777;
        }
        .payment-success a {
            color: #007bff;
            text-decoration: none;
        }
        .payment-success a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="payment-success">
        <img src="{{asset('frontend\img\payment_success.png')}}" class="img-fluid " style="width: 80%; max-width: 500px; min-width: 230px; height: auto;" alt="Payment Success">
        <h1>Your Payment is Successful!</h1>
        <p>Thank you for your payment. An automated payment receipt will be sent to your registered email.</p>
        <a href="{{route('index')}}">Back to Home</a>
    </div>
</body>
</html>