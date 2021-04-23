<h3 style="margin: 0; margin-bottom: 20px">Заявка с сайта {{ env('APP_URL') }}</h3>
<table cellspacing="0" cellpadding="15" border="1" bordercolor="#D6D6D6" width="100%" style="border: 1px solid #D6D6D6; border-collapse: collapse;">
    <tr><td style="vertical-align:top; max-width:250px"><b>Имя:</b></td><td style="vertical-align:top; max-width:250px">{{ $username }}</td></tr>
    <tr><td style="vertical-align:top; max-width:250px"><b>Телефон:</b></td><td style="vertical-align:top; max-width:250px">{{ $phone }}</td></tr>
    <tr><td style="vertical-align:top; max-width:250px"><b>Сообщение:</b></td><td style="vertical-align:top; max-width:250px">{!! $mess !!}</td></tr>
</table>
<div>--</div>
<div>Это письмо отправлено с сайта {{ env('APP_URL') }}</div>
