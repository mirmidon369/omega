<div class="table-responsive">
    <table class="table table-bordered table-condensed tabla_small table-fit">
        <thead>
            <th>Solicitado</th>
            <th>Orden</th>
            <th>Instrucciones</th> 
            <th>Fecha Prog.</th>
            <th>Urgente</th>                
        </thead>
        <tbody>
            @foreach($ordenes as $orden)
            <tr>
                <td>{{ $orden->tipo_gabinete }}</td>
                <td>{{ $orden->orden }}</td>
                <td>{{ $orden->complemento }}</td>
                <td>{{ $orden->fecha_hora->toDateString() }}</td>
                <td>{{ $orden->urgente }}</td>
                <!-- <td><a href="#" onclick="eliminarD('{ $diagnostico->id_diagnostico}}','diagnosticosH','ListaDiagnosticos')"> [Eliminar]</a></td> -->
                <td><a href="#" onclick="eliminarOG('{{ $orden->id_orden_gabinete}}')"> [Eliminar]</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>