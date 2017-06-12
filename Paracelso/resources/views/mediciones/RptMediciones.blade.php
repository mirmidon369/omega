<html lang="en">
  <head>
    <meta http-equiv="Content-Type" "Content-type: image/jpeg" content="text/html; charset=utf-8"/>
        <title>REPORTE DE MEDICIONES</title>
    <!-- {!! Html::style('assets/css/pdf.css') !!} -->
  </head>
  <body>
          <h1><center>REPORTE DE SIGNOS VITALES </center> </h1>
          <div class="date">Fecha de Reporte: {{ $date }}</div>
      @include('persona.LstDatosBasicos')
    
        <table class="table table-bordered table-condensed tabla_small table-fit">
            <thead>
                <th>Fecha</th>
                <th>Peso</th>
                <th>Talla</th>
                <th>P.Sist.</th>
                <th>P.Diast.</th>
                <th>F.Card.</th>
                <th>F.Resp.</th>
                <th>Temp.°C</th>
                <th>SPO2</th>
                <th>Dolor</th>
            </thead>
            <tbody>
                @foreach($mediciones as $medicion)
                <tr>
                    <td>1</td>
                    <td>{{ $medicion->peso}}</td>
                    <td>{{ $medicion->talla}}</td>
                    <td>{{ $medicion->presion_sistolica}}</td>
                    <td>{{ $medicion->presion_diastolica}}</td>
                    <td>{{ $medicion->frecuencia_cardiaca}}</td>
                    <td>{{ $medicion->frecuencia_respiratoria}}</td>
                    <td>{{ $medicion->temperatura}}</td>
                    <td>{{ $medicion->spo2}}</td>
                    <td>{{ $medicion->dolor}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </body>
</html>