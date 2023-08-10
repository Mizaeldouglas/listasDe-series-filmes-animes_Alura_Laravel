<x-layout title="Criar Séries">
    <a href="/series" class="btn btn-dark mb-2 d-flex flex-column align-items-center justify-content-center">Voltar Início</a>

    <form action="{{route('series.post')}}" method="POST" class="d-flex flex-row align-items-center justify-content-center p-lg-5">
        @csrf


        <div class="w-100 me-5 mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>

        <button type="submit" class="btn btn-success">Adicionar</button>
    </form>


</x-layout>
