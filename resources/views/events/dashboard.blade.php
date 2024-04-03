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
                    <td><a class="btn btn-warning edit-btn" href="/events/edit/{{ $event->id }}"><ion-icon id="color-edit-icon"name="create-outline"></ion-icon></a>
                    <form action="/events/{{ $event->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger delete-btn"><ion-icon  name="trash-outline"></ion-icon></button>
                    </form>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
    

    @else
    <h2>Você não possui nenhum evento.</h2>
    @endif
</div>

@endsection
