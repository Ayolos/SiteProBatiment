<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>
<body>
<p><strong>De:</strong> {{ $formData['email'] }}</p>
<p><strong>Sujet:</strong> {{ $formData['subject'] }}</p>
<p><strong>Message:</strong></p>
<p>{{ $formData['message'] }}</p>
</body>
</html>
