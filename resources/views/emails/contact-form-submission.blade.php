<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
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
        <h1>New Contact Form Submission</h1>
        <p>You have received a new message from {{ $submission->name }} via the website contact form.</p>
        <ul>
            <li><strong>Name:</strong> {{ $submission->name }}</li>
            <li><strong>Mobile:</strong> {{ $submission->mobile }}</li>
            <li><strong>Email:</strong> {{ $submission->email }}</li>
        </ul>
        <div class="message">
            <h2>Message:</h2>
            <p>{{ $submission->message }}</p>
        </div>
    </div>
    <div class="footer">
        &copy; {{ date('Y') }} Heaven Vision Church International. All rights reserved.
    </div>
</body>

</html>
