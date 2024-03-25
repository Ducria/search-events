@extends ('layouts.main')

@section('title', 'Search Events')

@section('content')

<link rel='stylesheet' href='//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css' type='text/css'>

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
        <form action="">
            <input type="text" name="search" id="search" class="form-control" placeholder="Procurar">
            <div id="lupa"></div>
            
        </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p class="subtitle">Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($events as $event)
        <div class="card col-md-3">
            <img src="img/event_placeholder.jpg" alt="{{$event->title}}" title="{{$event->title}}">
            <div class="card-body">
                <p class="card-date">15/04/2004</p>
                <h5 class="card-title">{{$event->title}}</h5>
                <p class="card-participants">X participantes</p>
                <a href="" class="btn btn-primary pink">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>

</div>

<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

@endsection

