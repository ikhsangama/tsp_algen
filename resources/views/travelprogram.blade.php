<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Algoritma Evolusioner</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
      <h1>Lokasi Anda Saat Ini: Semarang</h1>
        <div>
          <table>
            <tr>
              <td><b>Distance(km)</b></td>
              <td><b>Semarang</b></td>
              <td><b>Bandung</b></td>
              <td><b>Jakarta</b></td>
              <td><b>Jogja</b></td>
              <td><b>Surabaya</b></td>
            </tr>
            <tr>
              <td><b>Semarang</b></td>
              <td>0</td>
              <td>449</td>
              <td>452</td>
              <td>122</td>
              <td>315</td>
            </tr>
            <tr>
              <td><b>Bandung</b></td>
              <td>449</td>
              <td>0</td>
              <td>151</td>
              <td>520</td>
              <td>762</td>
            </tr>
            <tr>
              <td><b>Jakarta</b></td>
              <td>452</td>
              <td>151</td>
              <td>0</td>
              <td>521</td>
              <td>763</td>
            </tr>
            <tr>
              <td><b>Jogja</b></td>
              <td>122</td>
              <td>520</td>
              <td>521</td>
              <td>0</td>
              <td>329</td>
            </tr>
            <tr>
              <td><b>Surabaya</b></td>
              <td>315</td>
              <td>762</td>
              <td>763</td>
              <td>329</td>
              <td>0</td>
            </tr>
          </table>
          <br>
          <a href="/travelprogram"><button type="button" name="next" >Travel Program</button></a>
        </div>
    </body>
</html>
