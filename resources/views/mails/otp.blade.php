<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to StayHolic</title>
</head>
<div style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div
        style="max-width: 600px; margin: 0 auto; background-color: #ffffff; padding: 20px; border: 1px solid #dddddd; border-radius: 5px;">
        <div
            style="background-color: #007bff; color: #ffffff; padding: 10px 0; text-align: center; border-radius: 5px 5px 0 0;">
            <h1 style="margin: 0;">Welcome to StayHolic</h1>
            <h2>2FA code</h2>
        </div>
        <div style="padding: 20px;">
            <p style="line-height: 1.6; color: #555555;">
                Here is your login verification code:
            </p>
            <h2 style="color: #333333;">{{ $otp }}</h2>
            <p style="line-height: 1.6; color: #555555;">
                Please make sure you never share this code with anyone.
            </p>
            <p style="line-height: 1.6; color: #555555;">
                <b>Note:</b> The code will expire in 15 minutes.
            </p>

        </div>

    </div>
</div>

</html>