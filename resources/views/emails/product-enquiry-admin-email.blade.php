```html
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>New Product Enquiry Received</title>
</head>
<body style="margin:0;padding:0;background-color:#f5f5f5;font-family:Arial,Helvetica,sans-serif;color:#333333;">

    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f5f5f5;padding:40px 15px;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0" style="background:#ffffff;border:1px solid #e5e5e5;border-radius:8px;overflow:hidden;">

                    <!-- Header -->
                    <tr>
                        <td align="center" style="padding:30px 20px;border-bottom:1px solid #eeeeee;">
                            <img src="https://indomefurnitures.com/web/images/logo.png"
                                 alt="Company Logo"
                                 style="height:60px;display:block;">
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:40px 35px;line-height:1.8;font-size:15px;">

                            <h2 style="margin:0 0 25px;color:#222222;font-size:26px;font-weight:600;">
                                New Product Enquiry Received
                            </h2>

                            <p style="margin:0 0 20px;">
                                Hello Admin,
                            </p>

                            <p style="margin:0 0 20px;">
                                A new product enquiry has been submitted through the website.
                                Please find the enquiry details below.
                            </p>

                            <table width="100%" cellpadding="8" cellspacing="0" style="border:1px solid #e5e5e5;border-collapse:collapse;margin:25px 0;">
                                <tr style="background:#f8f8f8;">
                                    <td width="35%" style="border:1px solid #e5e5e5;"><strong>Customer Name</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $contact->name }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e5e5;"><strong>Email</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $contact->email_id }}</td>
                                </tr>
                                <tr style="background:#f8f8f8;">
                                    <td style="border:1px solid #e5e5e5;"><strong>Phone</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $contact->phone }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e5e5;"><strong>Product</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $product->name }}</td>
                                </tr>
                                <tr style="background:#f8f8f8;">
                                    <td style="border:1px solid #e5e5e5;"><strong>Message</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $contact->message }}</td>
                                </tr>
                                <tr>
                                    <td style="border:1px solid #e5e5e5;"><strong>Submitted On</strong></td>
                                    <td style="border:1px solid #e5e5e5;">{{ $contact->created_at }}</td>
                                </tr>
                            </table>

                            <p style="margin:0 0 35px;">
                                Please review the enquiry and contact the customer at your earliest convenience.
                            </p>

                            <table cellpadding="0" cellspacing="0" style="margin-bottom:35px;">
                                <tr>
                                    <td align="center" bgcolor="#007bff" style="border-radius:4px;">
                                        <a href="https://indomefurnitures.com/login"
                                           style="display:inline-block;padding:12px 28px;color:#ffffff;text-decoration:none;font-size:15px;font-weight:bold;">
                                            Login to Admin Panel
                                        </a>
                                    </td>
                                </tr>
                            </table>

                            <p style="margin:0;">
                                Regards,
                            </p>

                            <p style="margin:8px 0 0;font-weight:bold;color:#222222;">
                                Website Notification System
                            </p>

                            <p style="margin:5px 0 0;">
                                Indomefurnitures
                            </p>

                            <p style="margin:5px 0 0;">
                                Dubai, UAE
                            </p>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center" style="padding:18px;font-size:12px;color:#888888;border-top:1px solid #eeeeee;background:#fafafa;">
                            © {{ date('Y') }} Indomefurnitures. All Rights Reserved.
                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>
```
