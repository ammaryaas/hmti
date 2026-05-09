<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Akun Dashboard HMTI</title>
</head>
<body style="margin:0; padding:0; background-color:#f4f4f5; font-family:Arial, Helvetica, sans-serif;">

    <table width="100%" cellpadding="0" cellspacing="0" style="padding:40px 0;">
        <tr>
            <td align="center">

                <table width="600" cellpadding="0" cellspacing="0"
                    style="background:#ffffff; border-radius:16px; overflow:hidden; box-shadow:0 4px 12px rgba(0,0,0,0.08);">

                    <!-- Header -->
                    <tr>
                        <td align="center"
                            style="background:#B53737; padding:32px 24px; color:white;">
                            
                            <h1 style="margin:0; font-size:28px;">
                                Dashboard HMTI
                            </h1>

                            <p style="margin-top:10px; font-size:15px; opacity:0.9;">
                                Informasi Akun Pengguna
                            </p>
                        </td>
                    </tr>

                    <!-- Content -->
                    <tr>
                        <td style="padding:40px 32px; color:#334155;">

                            <h2 style="margin-top:0; font-size:24px;">
                                Halo, {{ $user->name }} 👋
                            </h2>

                            <p style="line-height:1.7; font-size:15px;">
                                Akun dashboard Anda telah berhasil dibuat oleh administrator.
                                Berikut informasi login sementara yang dapat digunakan untuk masuk ke sistem.
                            </p>

                            <!-- Credential Box -->
                            <table width="100%" cellpadding="0" cellspacing="0"
                                style="margin:28px 0; background:#f8fafc; border:1px solid #e2e8f0; border-radius:12px;">

                                <tr>
                                    <td style="padding:20px;">

                                        <p style="margin:0 0 12px 0;">
                                            <strong>Email</strong>
                                        </p>

                                        <p style="margin:0; color:#0f172a;">
                                            {{ $user->email }}
                                        </p>

                                        <hr style="margin:20px 0; border:none; border-top:1px solid #e2e8f0;">

                                        <p style="margin:0 0 12px 0;">
                                            <strong>Password Sementara</strong>
                                        </p>

                                        <p style="
                                            margin:0;
                                            font-size:18px;
                                            font-weight:bold;
                                            letter-spacing:1px;
                                            color:#B53737;
                                        ">
                                            {{ $password }}
                                        </p>

                                    </td>
                                </tr>
                            </table>

                            <p style="line-height:1.7; font-size:15px;">
                                Demi keamanan akun, silakan segera mengganti password setelah berhasil login.
                            </p>

                            <!-- Button -->
                            <table cellpadding="0" cellspacing="0" style="margin-top:32px;">
                                <tr>
                                    <td align="center"
                                        style="background:#B53737; border-radius:10px;">

                                        <a href="{{ url('/admin/login') }}"
                                            style="
                                                display:inline-block;
                                                padding:14px 28px;
                                                color:white;
                                                text-decoration:none;
                                                font-weight:bold;
                                                font-size:15px;
                                            ">
                                            Login ke Dashboard
                                        </a>

                                    </td>
                                </tr>
                            </table>

                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td align="center"
                            style="padding:24px; background:#f8fafc; color:#64748b; font-size:13px;">

                            <p style="margin:0;">
                                © {{ date('Y') }} HMTI — Sistem Informasi Organisasi
                            </p>

                        </td>
                    </tr>

                </table>

            </td>
        </tr>
    </table>

</body>
</html>