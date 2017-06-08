<html lang="en">
  <head>
    <meta http-equiv="Content-Type" Content-type: "image/jpeg" content="text/html; charset=utf-8"/>
        <title>REPORTE DE MEDICIONES</title>
    <!-- {!! Html::style('assets/css/pdf.css') !!} -->
  </head>
  <body>
    <main>
      <div id="details" class="clearfix">
        <div id="invoice">
          <h1>REPORTE</h1>
          <div class="date">Date of Invoice: {{ $date }}</div>
        </div>
      </div>
       @include('persona.LstDatosBasicos')
      <table border="0" cellspacing="0" cellpadding="0">
        <thead>
          <tr>
            <th >#</th>
            <th >GLASGOW</th>
            <th >FRECUENCIA CARDIACA</th>
            <th >FRECUENCIA RESPIRATORIA</th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
            <th >PRESION SISTOLICA </th>
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
        <tfoot>
          <tr>
            <td colspan="2"></td>
            <td >TOTAL</td>
            <td>$6,500.00</td>
          </tr>
        </tfoot>
      </table>
  </body>
</html>