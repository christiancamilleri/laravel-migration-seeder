@extends('layouts/main-layout')

@section('content')
    <div class="container card-container">
        @foreach ($trains as $item)
        <div class="card my-card">
            <div class="card-body">
              <h5 class="card-title">{{$item->azienda}}</h5>
              <span class="card-text">Treno: <strong>{{$item->tipo_di_treno}}</strong></span>
              <br>
              <span class="card-text">stazione di partenza: <strong>{{$item->stazione_di_partenza}}</strong> </span>
              <br>
              <span  class="card-link">stazione di arrivo: <strong>{{$item->stazione_di_arrivo}}</strong></span>             
              <br>
              <span  class="card-link">orario di partenza: <strong>{{$item->orario_di_partenza}}</strong></span>
              <br>
              <span  class="card-link">orario di arrivo: <strong>{{$item->orario_di_arrivo}}</strong></span>
              <br>
              <span  class="card-link">codice treno: <strong>{{$item->codice_treno}}</strong></span>                
               <br>
              <span  class="card-link">numero carrozze: <strong>{{$item->numero_carrozze}}</strong></span> 
            </div>
          </div>   
    @endforeach
    </div>
@endsection