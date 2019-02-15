<p>Hello there,<br>the following GDPR request was received:</p>

<table>
    <tr>
        <td>Name:</td>
        <td>{{$name}}</td>
    </tr>
    <tr>
        <td>E-Mail:</td>
        <td>{{$email}}</td>
    </tr>
    <tr>
        <td>Phone:</td>
        <td>{{$phone}}</td>
    </tr>
    <tr>
        <td>Website:</td>
        <td>{{$website}}</td>
    </tr>
    <tr>
        <td>Message:</td>
        <td>{{$body}}</td>
    </tr>
    <tr>
        <td>Date:</td>
        <td>{{date('d.m.Y H:i:s')}}</td>
    </tr>
    <tr>
        <td>IP:</td>
        <td>{{$_SERVER['REMOTE_ADDR'] }}</td>
    </tr>
</table>

<p>Kind regards,<br>Agimo</p>
