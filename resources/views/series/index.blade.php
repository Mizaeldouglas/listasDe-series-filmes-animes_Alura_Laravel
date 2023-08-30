<x-layout>
    <x-slot name="title">Cine<span class="text-bg-danger fw-bold p-1 rounded">Flix</span></x-slot>
    <a href="{{ route('series.create') }}" class=" btn btn-dark mb-2 m-4">Adicionar <span class="text-bg-danger fw-bold p-1 rounded">favoritos</span></a>
    <div class="container mt-5">

        @isset($mensagem)
            <div class="alert alert-success">
                {{$mensagem}}
            </div>
        @endisset
        @isset($mensagemDelete)
            <div class="alert alert-danger">
                {{$mensagemDelete}}
            </div>
        @endisset

            @isset($mensagemUpdate)
                <div class="alert alert-warning">
                    {{$mensagemUpdate}}
                </div>
            @endisset



        <div class="row">
            @foreach($series as $serie)
                <div class="col-md-4 mb-4 ">
                    <div class="card h-100" style="max-width: 100%; height: auto;">
                        <div class="card-body ">
                            <img src="{{$serie->imagem}}" class="card-img-top h-50"  >
                            <h5 class="card-title">Nome
                                @if($serie->categoria_id === 'Série')
                                    Da {{$serie->categoria_id}}
                                @else
                                    Do {{$serie->categoria_id}}
                                @endif
                                :</h5>
                            <li style="margin-left: 30px; list-style: none;"> - {{ $serie->nome }}</li>
                            <div class="d-flex justify-content-center align-items-center ">
                                <form action="{{route('series.destroy',$serie->id)}}" name="id" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger mt-2 me-sm-4">Excluir</button>
                                </form>
                                <a href="{{route('series.edit',['id' => $serie->id])}}"
                                   class="btn btn-dark mt-2">Editar</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
    </div>
</div>
</x-layout>


