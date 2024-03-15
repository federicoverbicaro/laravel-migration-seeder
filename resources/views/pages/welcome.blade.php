{{-- prima pagina di atterraggio del utente con estenzione del pirmo layouts --}}

@extends('layouts.LayoutBase')


@section('main')

<div>

@foreach ($trains as $element )
<div class="card">

    <div class="card-body">
       <p>Stazione di partenza: {{$element->Stazione_di_partenza}}</p>
       <p>Stazione di Arrivo: {{$element->Stazione_di_arrivo}}</p>
       <p>Orario di Partenza: {{$element->Orario_di_partenza}}</p>
       <p>Orario di arrivo:{{$element->Orario_di_arrvio}}</p>
       <p>Codice Treno: {{$element->Codice_treno}}</p>
       <p>Numero Carozza: {{$element->Numero_Carrozze}}</p>
       <p>In Orario: {{$element->In_orario}}</p>
       <p>Treno Cancellato: {{$element->Cancellato}}</p>
    </div>
</div>

@endforeach








</div>

@endsection
