<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Project Inquiry</title>
</head>
<body style="margin: 0; padding: 0; background-color: #f8fafc; font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <table border="0" cellpadding="0" cellspacing="0" width="100%" style="background-color: #f8fafc; padding: 40px 10px;">
        <tr>
            <td align="center">
                <!-- Main Container -->
                <table border="0" cellpadding="0" cellspacing="0" width="600" style="background-color: #ffffff; border-radius: 16px; overflow: hidden; box-shadow: 0 4px 12px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
                    <!-- Header Gradient Strip -->
                    <tr>
                        <td height="6" style="background: linear-gradient(to right, #6366f1, #a855f7);"></td>
                    </tr>
                    
                    <!-- Content -->
                    <tr>
                        <td style="padding: 40px;">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td style="padding-bottom: 30px;">
                                        <h1 style="margin: 0; color: #1e293b; font-size: 24px; font-weight: 800; letter-spacing: -0.5px;">New Project Inquiry</h1>
                                        <p style="margin: 5px 0 0 0; color: #64748b; font-size: 14px;">You have a new lead from your portfolio website.</p>
                                    </td>
                                </tr>
                                
                                <!-- Inquiry Details Card -->
                                <tr>
                                    <td style="background-color: #f1f5f9; border-radius: 12px; padding: 24px;">
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                            <tr>
                                                <td style="padding-bottom: 15px; border-bottom: 1px solid #e2e8f0;">
                                                    <p style="margin: 0; font-size: 12px; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;">From</p>
                                                    <p style="margin: 5px 0 0 0; font-size: 16px; color: #1e293b; font-weight: 600;">{{ $data['name'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding: 15px 0; border-bottom: 1px solid #e2e8f0;">
                                                    <p style="margin: 0; font-size: 12px; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;">Email Address</p>
                                                    <p style="margin: 5px 0 0 0; font-size: 16px; color: #1e293b;">{{ $data['email'] }}</p>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="padding-top: 15px;">
                                                    <p style="margin: 0; font-size: 12px; font-weight: 700; color: #6366f1; text-transform: uppercase; letter-spacing: 1px;">Message / Requirement</p>
                                                    <p style="margin: 8px 0 0 0; font-size: 15px; color: #334155; line-height: 1.6;">{{ $data['message'] }}</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    
                    <!-- Footer -->
                    <tr>
                        <td style="padding: 0 40px 40px 40px; text-align: center;">
                            <p style="margin: 0; font-size: 13px; color: #94a3b8;">Sent via Contact Form on <strong>DevLabs Portfolio</strong></p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>