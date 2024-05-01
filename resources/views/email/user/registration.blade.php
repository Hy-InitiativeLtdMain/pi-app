<!DOCTYPE html
  PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <title>Registration Successful</title>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="x-apple-disable-message-reformatting" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href='https://css.gg/css' rel='stylesheet'>

  <style type="text/css">
    /* Google font import Inter */
    @import url('https://fonts.googleapis.com/css?family=Inter:400,500,600&display=swap');

    /* Outlook link fix */
    #outlook a {
      padding: 0;
    }

    /* Hotmail background & line height fixes */
    .ExternalClass {
      width: 100% !important;
    }

    .ExternalClass,
    .ExternalClass p,
    .ExternalClass span,
    .ExternalClass font,

    /* Image borders & formatting */
    img {
      outline: none;
      text-decoration: none;
      -ms-interpolation-mode: bicubic;
    }

    a img {
      border: none;
    }

    /* Re-style iPhone automatic links (eg. phone numbers) */
    .appleLinksGrey a {
      color: #919191 !important;
      text-decoration: none !important;
    }

    /* Hotmail symbol fix for mobile devices */
    .ExternalClass img[class^=Emoji] {
      width: 10px !important;
      height: 10px !important;
      display: inline !important;
    }

    /* Button hover colour change */
    .CTA:hover {
      background-color: #5FDBC4 !important;
    }


    @media screen and (max-width: 640px) {
      .mobilefullwidth {
        width: 100% !important;
        height: auto !important;
      }

      .logo {
        padding-left: 30px !important;
        padding-right: 30px !important;
      }

      .h1 {
        font-size: 36px !important;
        line-height: 48px !important;
        padding-right: 30px !important;
        padding-left: 30px !important;
        padding-top: 30px !important;
      }

      .h2 {
        font-size: 18px !important;
        line-height: 27px !important;
        padding-right: 30px !important;
        padding-left: 30px !important;
      }

      .p {
        font-size: 16px !important;
        line-height: 28px !important;
        padding-left: 30px !important;
        padding-right: 30px !important;
        padding-bottom: 30px !important;
      }

      .CTA_wrap {
        padding-left: 30px !important;
        padding-right: 30px !important;
        padding-bottom: 30px !important;
      }

      .footer {
        padding-left: 30px !important;
        padding-right: 30px !important;
      }

      .number_wrap {
        padding-left: 30px !important;
        padding-right: 30px !important;
      }

      .unsubscribe {
        padding-left: 30px !important;
        padding-right: 30px !important;
      }

    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>


<body
  style="padding:0; margin:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:100%; background-color:#e8e8e8; font-family: 'Inter', sans-serif; font-size:16px; line-height:24px; color:#919191">



  <!-- // FULL EMAIL -->
  <table width="100%" border="0" cellspacing="0" cellpadding="0">

    <tr>

      <!-- // LEFT SPACER CELL *** MUST HAVE A BACKGROUND COLOUR -->
      <td bgcolor="#EBEBEB" style="font-size:0px">&zwnj;</td>
      <!-- LEFT SPACER CELL // -->

      <!-- // MAIN CONTENT CELL -->
      <td align="center" width="600" bgcolor="#FFFFFF">

        <table style="padding: 0 15px" width="100%" border="0" cellspacing="0" cellpadding="0">

          <tbody style="position: relative">

            <!--						LOGO-->
            <tr>
              <td align="left" width="140" height="auto" style="padding: 30px 0 5px">
                <img src="https://res.cloudinary.com/omohemma/image/upload/v1641384595/logo_dznpfx.png"
                  alt="WESOnline Logo">
                <hr style="border-top: 5px solid #0056B0">
              </td>
            </tr>

            <tr>
              <td align="left" width="140" height="auto" style="padding-bottom: 30px">
                <img src="https://res.cloudinary.com/omohemma/image/upload/v1641385243/banner_image_xnrgf1.png"
                  alt="Banner Image" width="100%">
              </td>
            </tr>

            <tr>
              <td style="position: absolute; top: 230px; right: 0">
                <img src="https://res.cloudinary.com/omohemma/image/upload/v1641401571/idea_qhxema.png" alt="">
              </td>
            </tr>
            <tr>
              <td style="padding-bottom: 60px">
                <h3 style="margin-bottom: 0;color: #000000">Hello {{ $data['name'] }}</h3>
                <p style="line-height: 25px;color: #667585; font-weight: 500">
                  Thank you for creating a WESOnline account!<br>
                  We are happy you’re here. This is your token.
                </p>
              </td>

            </tr>

            <tr>
              <td align="center" style="color: #979797; font-size: 16px; line-height: 25px;">
                <p style="line-height: 25px;color: #667585; font-weight: 500">TOKEN :
                  {{ $user->verifications()->latest()->first()->token }}</p>
              </td>
            </tr>
            @isset($url[0])
              <tr>
                <td style="padding-bottom: 60px">
                  <h3 style="margin-bottom: 0;color: #000000">Hello {{ $data['name'] }}</h3>
                  <p style="line-height: 25px;color: #667585; font-weight: 500">
                    Your account was added by the patform! <br>
                    We are happy you’re here. This is your password.
                  </p>
                </td>

              </tr>

              <tr>
                <td align="center" style="color: #979797; font-size: 16px; line-height: 25px;">

                  <p style="line-height: 25px;color: #667585; font-weight: 500">Password : <b>{{ $url[0] }}</b>
                  </p>

                </td>
              </tr>
            @endisset
            <tr>
              <td style="position: static;  bottom:270px; left: -15px;z-index: 0">
                <img src="https://res.cloudinary.com/omohemma/image/upload/v1641401571/spiral_gyvynk.png"
                  alt="">
              </td>
            </tr>



          </tbody>
        </table>

      </td>
      <!-- // MAIN CONTENT CELL -->

      <!-- // RIGHT SPACER CELL *** MUST HAVE A BACKGROUND COLOUR -->
      <td bgcolor="#EBEBEB" style="font-size:0px">&zwnj;</td>
      <!-- RIGHT SPACER CELL // -->

    </tr>
  </table>
  <!-- FULL EMAIL // -->
</body>

</html>
