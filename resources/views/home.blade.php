@extends('layouts/main-layout')

@section('content')
    <div class="container">
        @foreach ($trains as $item)
        <div class="card" style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">{{$item->azienda}}</h5>
              <span class="card-text">stazione di partenza: {{$item->stazione_di_partenza}}</span>
              <br>
              <span  class="card-link">stazione di arrivo: {{$item->stazione_di_arrivo}}</span>
              <br>
              <span  class="card-link">orario di partenza: {{$item->orario_di_partenza}}</span>
              <br>
              <span  class="card-link">orario di arrivo: {{$item->orario_di_arrivo}}</span>
              <br>
              <span  class="card-link">codice treno: {{$item->codice_treno}}</span>
                <br>
              <span  class="card-link">numero carrozze: {{$item->numero_carrozze}}</span>
            </div>
          </div>   
    @endforeach
    </div>
@endsection