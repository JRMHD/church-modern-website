<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Prayer Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .container {
            background-color: #ffffff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #2c3e50;
            border-bottom: 2px solid #3498db;
            padding-bottom: 10px;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .message {
            background-color: #f9f9f9;
            border-left: 4px solid #3498db;
            padding: 15px;
            margin-top: 20px;
        }

        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 0.8em;
            color: #7f8c8d;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>New Prayer Request</h1>
        <p>You have received a new prayer request from {{ $prayerRequest->fullname }}.</p>
        <ul>
            <li><strong>Name:</strong> {{ $prayerRequest->fullname }}</li>
            <li><strong>Email:</strong> {{ $prayerRequest->email }}</li>
            <li><strong>Mobile:</strong> {{ $prayerRequest->mobile }}</li>
            <li><strong>Address:</strong> {{ $prayerRequest->address }}</li>
            <li><strong>Subject:</strong> {{ $prayerRequest->subject }}</li>
        </ul>
        <div class="message">
            <h2>Prayer Request:</h2>
            <p>{{ $prayerRequest->message }}</p>
        </div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Heaven Vision Church International. All rights reserved.
    </div>
</body>

</html>
