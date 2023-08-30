<x-layout>
    <x-slot name="title">Cine<span class="text-bg-danger fw-bold p-1 rounded">Flix</span></x-slot>
    <a href="/series" class="btn btn-dark mb-2 m-4">Voltar <span class="text-bg-danger fw-bold p-1 rounded">Inicio</span></a>

    <form action="{{route('series.post')}}" method="POST" class="">
        @csrf


        <div class="justify-content-center p-lg-5">
            <select name="categoria_id" class="form-select" aria-label="Default select example">
                <option selected>Qual é a Categoria</option>
                <option value="Série">Série</option>
                <option value="Filme">Filme</option>
                <option value="Anime">Anime</option>
            </select>
            <div class="d-flex flex-row align-items-center ">
                <div class="w-100 me-5 mb-3 mt-4">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
                <div class="w-100 me-5 mb-3 mt-4">
                    <label for="imagem" class="form-label">Imagem(URL)</label>
                    <input type="url" class="form-control" id="imagem" name="imagem" required>
                </div>
                <button type="submit" class="btn btn-success mt-lg-5">Adicionar</button>
            </div>

        </div>

    </form>


</x-layout>
