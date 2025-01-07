<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>Appointment Confirmation</title>
    <style>
        /* Tailwind CSS */
        .bg-gray-100 {
            background-color: #f7fafc;
        }

        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }

        .min-h-screen {
            min-height: 100vh;
        }

        .bg-white {
            background-color: #ffffff;
        }

        .w-full {
            width: 100%;
        }

        .max-w-md {
            max-width: 28rem;
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto;
        }

        .rounded-lg {
            border-radius: 0.5rem;
        }

        .shadow-lg {
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        }

        .overflow-hidden {
            overflow: hidden;
        }

        .bg-teal-500 {
            background-color: #38b2ac;
        }

        .p-4 {
            padding: 1rem;
        }

        .h-12 {
            height: 3rem;
        }

        .w-12 {
            width: 3rem;
        }

        .p-6 {
            padding: 1.5rem;
        }

        .text-center {
            text-align: center;
        }

        .text-2xl {
            font-size: 1.5rem;
        }

        .font-bold {
            font-weight: 700;
        }

        .text-gray-600 {
            color: #718096;
        }

        .mt-6 {
            margin-top: 1.5rem;
        }

        .text-xl {
            font-size: 1.25rem;
        }

        .text-green-600 {
            color: #38a169;
        }

        .flex {
            display: flex;
        }

        .justify-center {
            justify-content: center;
        }

        .items-center {
            align-items: center;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .text-gray-400 {
            color: #cbd5e0;
        }

        .mx-2 {
            margin-left: 0.5rem;
            margin-right: 0.5rem;
        }

        .w-8 {
            width: 2rem;
        }

        .h-1 {
            height: 0.25rem;
        }

        .bg-gray-400 {
            background-color: #cbd5e0;
        }

        .bg-teal-600 {
            background-color: #319795;
        }

        .text-white {
            color: #ffffff;
        }

        .rounded {
            border-radius: 0.25rem;
        }

        .text-lg {
            font-size: 1.125rem;
        }

        .p-4 {
            padding: 1rem;
        }

        .border {
            border-width: 1px;
        }

        .text-teal-600 {
            color: #319795;
        }

        .mt-4 {
            margin-top: 1rem;
        }

        .center_display {
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
</head>

<body class="bg-gray-100 flex justify-center items-center min-h-screen">
    <div class="bg-white w-full max-w-md mx-auto rounded-lg shadow-lg overflow-hidden">
        <div class="bg-teal-500 p-4 flex justify-center items-center center_display" style="display: flex; justify-content: center; align-items: center;">
            <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="center">
                        <img alt="Logo of Sunshine Tours" class="h-12 w-12" height="50" src="{{asset('frontend/img/logo/logo04.png')}}" width="50" />

                    </td>
                </tr>
            </table>
        </div>
        <div class="p-6">
            <h1 class="text-center text-2xl font-bold">Sunshine Tours</h1>
            <p class="text-center text-gray-600">
                144/16 Au Co, Ward 9, Tan Binh District
                <br />
                Ho Chi Minh City, IL 70000
                <br />
                +84 76 5622268
            </p>
            <div class="mt-6 text-center">
                <h2 class="text-xl text-green-600 font-bold">Your Appointment has been Confirmed!</h2>
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0">
                    <tr>
                        <td align="center">
                            <div class="flex justify-center items-center mt-4  center_display" style="display: flex; justify-content: center; align-items: center;">
                                <span class="text-gray-400">PENDING</span>
                                <div class="mx-2 w-8 h-1 bg-gray-400"></div>
                                <span class="text-green-600 font-bold">CONFIRMED</span>
                            </div>
                        </td>
                    </tr>
                </table>

            </div>
            <div class="mt-6">
                <p>Hi {{ $mailData['order']['fullname'] ?? 'Sir' }},,</p>
                <p>Appointment confirmed with {{ $mailData['order']['fullname'] ?? 'Sir' }}, on {{ \Carbon\Carbon::parse($mailData['orderDentail']['date_booking'])->format('l, F d, Y \a\t ') }} {{ $mailData['order']['fullname'] ?? 'Sir' }} on {{ \Carbon\Carbon::parse($mailData['orderDentail']['time'])->format('h:iA ') }}. Please find the details below:</p>
                <div class="bg-teal-600 text-white p-4 mt-4 rounded">
                    <p class="text-center font-bold">Confirmed Time:</p>
                    <p class="text-center text-lg">{{ \Carbon\Carbon::parse($mailData['order']['created_at'])->format('l, F d, Y \a\t h:iA') }}</p>
                </div>
                <div class="mt-4 p-4 border rounded">
                    <p>
                        <strong>Order Info</strong>
                        <br>
                        Full Name : {{ $mailData['order']['fullname'] ?? 'Sir' }}
                        <br>
                        Email : {{ $mailData['order']['email'] ?? '' }}
                        <br>
                        Phone Number : {{ $mailData['order']['phone_number'] ?? '' }}
                        <br>
                        Create at : {{ \Carbon\Carbon::parse($mailData['order']['created_at'])->format('l, F d, Y \a\t h:iA') ?? '' }}
                        <br>
                        Booking date : {{ \Carbon\Carbon::parse($mailData['orderDentail']['date_booking'])->format('l, F d, Y') ?? '' }}
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
                <p class="text-gray-600">Need to make changes to this appointment?</p>
                <a class="text-teal-600 font-bold" href="https://www.instagram.com/sunshinetours.vn?utm_source=ig_web_button_share_sheet&amp;igsh=ZDNlZDc0MzIxNw==">Contact me on Instagram</a>
                <p class="mt-4 text-gray-600">Appointment ID: SMLSDV{{ $mailData['order']['id'] ?? '0000' }}</p>
                <p class="mt-4">Stay Handsome,<br />Sunshine Tour</p>
                <p class="mt-4 text-gray-600">P.S. Want to add this appointment to your calendar? Just open the attached file and save it!</p>
            </div>
        </div>
    </div>
</body>

</html>