<!DOCTYPE html>
<html>

<head>
    <title>Email Verification</title>
</head>

<body>
    <p>Hello {{ $data['email'] }},</p>
    <p>Thank you for registering. Please use the following verification code to complete your registration:</p>
    <h2>{{ $verificationCode }}</h2>
    <p>This code will expire at {{ $expiration }}.</p>
    <p>Best regards,</p>
    <p>Your Website</p>
</body>

</html>