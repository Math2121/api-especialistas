<!doctype html>
  <html lang="pt-BR">
    <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Mail</title>
    <link rel="stylesheet" href="css/mail/mail.css">

    </head>
    <body>
      <table class="body-wrap">
        <tr>
          <td></td>
          <td class="container" width="600">
            <div class="content">
              <table width="100%" cellpadding="0" cellspacing="0">
                <tr>
                  <td>
                    <table width="100%" cellpadding="0" cellspacing="0">
                      @yield('content')

                      <tr>
                        <td class="footer">
                          <img src="" alt="" />
                          <p class="mt-5 mb-5" style="font-size: 10px !important; font-weight: bold;">
                            Enviado em {{date('d/m/Y H:i:s')}}
                          </p>
                        </td>
                      </tr>
                    </table>
                  </td>
                </tr>
              </table>
            </div>
          </td>
          <td></td>
        </tr>
      </table>
    </body>
  </html>
