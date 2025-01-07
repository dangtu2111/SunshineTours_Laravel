<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
    <style>
        body {
            background-color: #f7fafc;
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: white;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .header {
            background-color: #38b2ac;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
            font-weight: bold;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin-bottom: 16px;
        }

        .content h2 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .content h3 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .details {
            margin-bottom: 16px;
        }

        .details div {
            display: flex;
            justify-content: space-between;
            margin-bottom: 8px;
        }

        .footer {
            background-color: #38b2ac;
            color: white;
            text-align: center;
            padding: 10px 0;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Booking Confirmation</h1>
        </div>
        <div class="content">
            <p>Dear, [name]</p>
            <p>You have successfully made the trip booking. Your booking information is listed below.</p>
            <h2>Booking Trips ([booking_trips_count])</h2>
            <p>[booking_details]</p>
            <h3>Billing Details</h3>
            <div class="details">
                @foreach($mailData as $key => $value)
                <div>
                    <span><strong>{{ ucfirst(str_replace('_', ' ', $key)) }}:</strong></span>

                    @if(is_array($value) || is_object($value))
                    <!-- Kiểm tra nếu giá trị là mảng hoặc đối tượng -->
                    @if($value instanceof \Illuminate\Support\Collection || is_array($value))
                    <span>{{ implode(', ', $value) }}</span>
                    @elseif($value instanceof \stdClass)
                    <!-- Nếu là đối tượng, chúng ta có thể duyệt qua các thuộc tính của đối tượng -->
                    <span>
                        @foreach((array) $value as $subKey => $subValue)
                        <strong>{{ ucfirst(str_replace('_', ' ', $subKey)) }}:</strong> {{ $subValue }}<br>
                        @endforeach
                    </span>
                    @endif
                    @else
                    <!-- Nếu giá trị không phải là mảng hoặc đối tượng, hiển thị trực tiếp -->
                    <span>{{ $value }}</span>
                    @endif
                </div>
                @endforeach

            </div>

        </div>
        <div class="footer">
            <p>Powered by WP Travel Engine</p>
        </div>
    </div>
</body>

</html>