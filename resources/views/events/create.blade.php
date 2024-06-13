@extends('layouts.main')

@section('title', 'Search Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3 " >
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Imagem do evento</label>
            <input type="file" class="form-control-file" id="image" name="image">
        </div>
        <div class="form-group">
            <label for="title">Evento</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Data</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="title">Cidade</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div>
        <div class="form-group">
            <label for="title">O evento será privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0">Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="title">Descrição</label>
            <textarea name="description" id="description" class="form-control" placeholder="Descreva sobre o evento"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Adicione items de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Cadeiras"> Cadeiras
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Mais de um Palco"> Mais de um Palco
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Bar"> Open Bar
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Wifi Grátis"> Wifi Grátis
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" value="Open Foods"> Open Foods
            </div>
                



            
        </div>

        <input type="submit" class="btn btn-primary" value="Criar Evento" id="btn-criar-evento">

    </form>
</div>


@endsection