<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
        Appointment Confirmation
    </title>
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white w-full max-w-md mx-auto rounded-lg shadow-lg overflow-hidden">
        <div class="bg-teal-500 p-4 flex justify-center items-center">
            <img alt="Logo of Blind Barber" class="h-12 w-12" height="50" src="https://storage.googleapis.com/a1aa/image/yPDMMo8JAR4QBNGw93jefFDzesciv1gHRfDsWkuaa5nyMdKQB.jpg" width="50" />
        </div>
        <div class="p-6">
            <h1 class="text-center text-2xl font-bold">
                Sunshine ToursTours
            </h1>
            <p class="text-center text-gray-600">
                144/16 Au Co, Ward 9, Tan Binh District
                <br />
                Ho Chi Minh City,IL 70000
                <br />
                +84 76 5622268
            </p>
            <div class="mt-6 text-center">
                <h2 class="text-xl text-green-600 font-bold">
                    Your Appointment has been Confirmed!
                </h2>
                <div class="flex justify-center items-center mt-4">
                    <span class="text-gray-400">
                        PENDING
                    </span>
                    <div class="mx-2 w-8 h-1 bg-gray-400">
                    </div>
                    <span class="text-green-600 font-bold">
                        CONFIRMED
                    </span>
                </div>
            </div>
            <div class="mt-6">
                <p>
                    Hi {{ $mailData['order']['fullname'] ?? 'Sir' }},
                </p>
                <p>
                    Appointment confirmed with {{ $mailData['order']['fullname'] ?? 'Sir' }} on {{ \Carbon\Carbon::parse($mailData['orderDentail']['date_booking'])->format('l, F d, Y \a\t ') }} {{ $mailData['order']['fullname'] ?? 'Sir' }} on {{ \Carbon\Carbon::parse($mailData['orderDentail']['time'])->format('h:iA ') }}. Please find the details below:
                </p>
                <div class="bg-teal-600 text-white p-4 mt-4 rounded">
                    <p class="text-center font-bold">
                        Confirmed Time:
                    </p>
                    <p class="text-center text-lg">
                        {{ \Carbon\Carbon::parse($mailData['order']['created_at'])->format('l, F d, Y \a\t h:iA') }}
                    </p>
                </div>
                <div class="mt-4 p-4 border rounded">
                    <p>
                        <strong>
                            Order Info
                        </strong>
                        <br>
                        Full Name : {{ $mailData['order']['fullname'] ?? 'Sir' }}
                        <br>
                        Email : {{ $mailData['order']['email'] ?? '' }}
                        
                        <br>
                        Phone Number : {{ $mailData['order']['phone_number'] ?? '' }}
                        <br>
                        Create at : {{ $mailData['order']['created_at'] ?? '' }}
                        <br>
                        Booking date : {{ $mailData['orderDentail']['date_booking'] ?? '' }}
                        <br>
                        Guest 0-8: {{ $mailData['orderDentail']['guest_08'] ?? '' }}
                        <br>
                        Guest 8-12: {{ $mailData['orderDentail']['guest_812'] ?? '' }}
                        <br>
                        Guest over 12: {{ $mailData['orderDentail']['guest_12'] ?? '' }}
                        <br>
                        Total amount: {{ $mailData['orderDentail']['total_money'] ?? '' }}
                        <br>
                        Down Payment: {{ $mailData['order']['down_payment'] ?? '' }}
                        <br>

                    </p>
                    
                </div>
            </div>
            <div class="mt-6">
                <p class="text-gray-600">
                    Need to make changes to this appointment?
                </p>
                <a class="text-teal-600 font-bold" href="https://www.instagram.com/sunshinetours.vn?utm_source=ig_web_button_share_sheet&amp;igsh=ZDNlZDc0MzIxNw==">
                    Contact me on instagram
                </a>
                <p class="mt-4 text-gray-600">
                    Appointment ID: SMLSDV{{ $mailData['order']['id'] ?? '0000' }}
                </p>
                <p class="mt-4">
                    Stay Handsome,
                    <br />
                    Sunshine Tour
                </p>
                <p class="mt-4 text-gray-600">
                    P.S. Want to add this appointment to your calendar? Just open the attached file and save it!
                </p>
            </div>
        </div>
    </div>
</body>

</html>