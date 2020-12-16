
<!DOCTYPE html>
<html>
<head>
    <title>Restful Countries Access Token</title>
</head>

<body style="background-color:#f8f8fa;" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table border="0" width="100%" cellpadding="0" cellspacing="0">

    <tr><td height="50" class="body-head"></td></tr>

    <tr>
        <td width="100%" align="center" valign="top">
            <!-- main content -->
            <table width="800" border="0" cellpadding="0" cellspacing="0" align="center" class="container top-header-left">

                <!-- Email-body -->

                <tr bgcolor="#fff">
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">

                            <tr>
                                <td>
                                    <table class="container-middle" width="580" border="0" cellpadding="0" cellspacing="0" align="center">

                                        <tr class="menu">
                                            <td align="left" class="greetings">Hello,</td>
                                        </tr>


                                        <tr><td height="50"></td></tr>

                                        <tr>
                                            <td align="left" class="menu">
                                                {!! $mail_message !!}.
                                            </td>

                                        </tr>
                                        <tr><td height="50"></td></tr>
                                        <tr>
                                            <td align="left" class="menu">
                                                Access Token : {!! $access_token !!}
                                            </td>
                                        </tr>
                                        <tr><td height="20"></td></tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>
                <tr><td height="20"></td></tr>

                <!--email-body -->

                <!-- footer -->
                <tr>
                    <td>
                        <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center" style="text-align: center;">

                            <tr>
                                <td>
                                    <table class="container-middle" width="100%" border="0" align="center" cellpadding="0" cellspacing="0">

                                        <tr>
                                            <td>
                                                <table width="100%" border="0" cellpadding="0" cellspacing="0" align="center">

                                                    <tr>
                                                        <td>
                                                            <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                                                                <tr>
                                                                    <td>

                                                                        <table align="center" border="0" cellpadding="0" cellspacing="0">

                                                                            <tr><td height="10"></td></tr>

                                                                            <tr class="footer">
                                                                                <td style="font-family:Arial,serif">
                                                                                    <div style="padding-bottom: 6px;">
																					<span>This email was sent to
																						<a class="emailto" href="mailto: {!! $email !!}" target="_blank">{!! $email !!}</a>
																					</span>
                                                                                    </div>
                                                                                    <div style="padding-bottom: 6px;">
                                                                                        <span>Copyright © 2020 restfulcountries.com</span>
                                                                                    </div>

                                                                            </tr>

                                                                            <tr><td height="30"></td></tr>

                                                                        </table>

                                                                    </td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>

                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>

</table>

</body>
</html>
