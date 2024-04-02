@extends('layouts.main')

@section('title', 'Dashboard')

@section('content')

<div class="col-md-10 offset-md-1 dashboard-title-container">
    <h1>Meus Eventos</h1>
</div>
<div class="col-md-10 offset-md-1 dashboard-events-container">
    @if(count($events) > 0)
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Participantes</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($events as $event)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td><a id="event-dipon" href="/events/{{ $event->id }}">{{ $event->title }}</a></td>
                    <td>0</td>
                    <td><a id="event-dipon" href=""><ion-icon id="pencil-edit" name="pencil"></ion-icon></a><a id="event-dipon" href=""><ion-icon id="trash-delete" name="trash"></ion-icon></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    

    @else
    <h2>Você não possui nenhum evento.</h2>
    @endif
</div>

@endsection
