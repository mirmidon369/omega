<html lang="en">
  <head>
    <meta http-equiv="Content-Type" "Content-type: image/jpeg" content="text/html; charset=utf-8"/>
        <title>REPORTE DE MEDICIONES</title>
    <!-- {!! Html::style('assets/css/pdf.css') !!} -->
  </head>
  <body>
    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>REPORTE</h1>
          <div class="date">Fecha de Reporte: {{ $date }}</div>
        </div>
      </div>
      @include('persona.LstDatosBasicos')
      <table border="1">
        <thead>
          <tr>
            <th >#</th>
            <th >GLASGOW</th>
            <th >FREC. CARDIACA</th>
            <th >FREC. RESPIRATORIA</th>
            <th >PRESION SISTOLICA </th>
            <th >FREC. CARDI </th>
            <th >FREC. RESPI</th>
            <th >TEMPERATURA</th>
            <th >SPO2 </th>
            <th >DOLOR</th>
            <th >NOTAS </th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $medicion)
                <tr>
                    <td>{{ $medicion->created_at->toDateTimeString() }}</td>
                    <td>{{ $medicion->peso}}</td>
                    <td>{{ $medicion->talla}}</td>
                    <td>{{ $medicion->presion_sistolica}}</td>
                    <td>{{ $medicion->presion_diastolica}}</td>
                    <td>{{ $medicion->frecuencia_cardiaca}}</td>
                    <td>{{ $medicion->frecuencia_respiratoria}}</td>
                    <td>{{ $medicion->temperatura}}</td>
                    <td>{{ $medicion->spo2}}</td>
                    <td>{{ $medicion->dolor}}</td>
                    <td>{{ $medicion->notas}}</td>
                </tr>
          @endforeach
 
        </tbody>
      </table>
  </body>
</html>