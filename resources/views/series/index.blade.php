<x-layout title="Séries / Filmes / Animes" >
    <a href="{{ route('form_criar_serie') }}" class=" btn btn-dark mb-2 m-4">Adicionar Séries / Filmes / Animes</a>
<div class="container mt-5">

    <div class="row">
        @foreach($series as $serie)
            <div class="col-md-4 mb-4 ">
                <div class="card">
                    <div class="card-body ">
                        <img src="{{$serie->imagem}}" class="card-img-top" alt="...">
                        <h5 class="card-title">Nome
                            @if($serie->categoria_id === 'Série')
                                Da {{$serie->categoria_id}}
                            @else
                                Do {{$serie->categoria_id}}
                            @endif
                            :</h5>
                        <li  style="margin-left: 30px; list-style: none;"> - {{ $serie->nome }}</li>
                        <div class="d-flex justify-content-center align-items-center">
                            <form action="{{route('series.destroy',$serie->id)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger mt-2 me-sm-4">Excluir</button>
                            </form>
                                <a href="{{route('series.edit',['id' => $serie->id])}}" class="btn btn-dark mt-2">Editar</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</x-layout>


