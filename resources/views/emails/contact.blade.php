<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Inquiry - ArtaOtto</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f5f7; font-family:'Segoe UI', Arial, sans-serif;">
    <table width="100%" cellpadding="0" cellspacing="0" style="background-color:#f4f5f7; padding:40px 0;">
        <tr>
            <td align="center">
                <table width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 2px 8px rgba(0,0,0,0.08);">

                    <tr>
                        <td style="background-color:#ea580c; padding:30px 40px; text-align:center;">
                            <h1 style="color:#ffffff; margin:0; font-size:22px; font-weight:700;">
                                ArtaOtto — New Inquiry Received
                            </h1>
                            <p style="color:#fed7aa; margin:6px 0 0 0; font-size:13px;">Submitted via contact form</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:36px 40px;">

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">Full Name</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $name }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">Email</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $email }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">WhatsApp Number</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $whatsapp }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">Clinic / Institution</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $clinic }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:16px;">
                                <tr>
                                    <td width="48%" style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">Profession / Role</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $profession }}</p>
                                    </td>
                                    <td width="4%"></td>
                                    <td width="48%" style="padding:14px 20px; background-color:#f9fafb; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 4px 0;">Inquiry Type</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0;">{{ $inquiryType }}</p>
                                    </td>
                                </tr>
                            </table>

                            <table width="100%" cellpadding="0" cellspacing="0" style="margin-bottom:24px;">
                                <tr>
                                    <td style="padding:14px 20px; background-color:#fff7ed; border-radius:8px; border-left:4px solid #ea580c;">
                                        <p style="color:#94a3b8; font-size:11px; font-weight:700; text-transform:uppercase; margin:0 0 8px 0;">Message</p>
                                        <p style="color:#1e293b; font-size:15px; margin:0; line-height:1.7; white-space:pre-wrap;">{{ $body }}</p>
                                    </td>
                                </tr>
                            </table>

                            <p style="color:#94a3b8; font-size:12px; margin:0; text-align:center;">
                                Balas email ini untuk merespons pesan dari <strong>{{ $name }}</strong>.
                            </p>

                        </td>
                    </tr>

                    <tr>
                        <td style="background-color:#1e293b; padding:20px 40px; text-align:center;">
                            <p style="color:#64748b; margin:0; font-size:12px;">&copy; {{ date('Y') }} ArtaOtto. All rights reserved.</p>
                            <p style="color:#475569; margin:4px 0 0 0; font-size:11px;">
                                Received on {{ now()->timezone('Asia/Jakarta')->format('d M Y \a\t H:i') }} WIB
                            </p>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
    </table>
</body>
</html>