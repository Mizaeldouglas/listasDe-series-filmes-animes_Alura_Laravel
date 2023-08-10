<x-layout title="Séries" >
    <a href="{{ route('form_criar_serie') }}" class="btn btn-dark mb-2 d-flex flex-column align-items-center justify-content-center">Adicionar Série</a>
<div class="container">

    <div class="row">
        @foreach($series as $serie)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body ">
                        <h5 class="card-title">Nome da Série:</h5>
                        <li  style="margin-left: 30px; list-style: none;"> - {{ $serie->nome }}</li>
                        <form action="{{route('series.destroy',$serie->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger mt-2">Excluir</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>


