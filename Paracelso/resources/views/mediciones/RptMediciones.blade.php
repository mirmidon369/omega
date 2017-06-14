<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<!--<img src="snake.jpg">-->
@include('persona.LstDatosBasicos')
<table>
            <thead>
                <tr>
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
                </tr>
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