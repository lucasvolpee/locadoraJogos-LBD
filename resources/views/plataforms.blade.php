<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Locadora de jogos</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/games">Jogos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" href="/plataforms">Plataformas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card-body">
                <a href="/games/create">
                    <button type="button" class="btn btn-success">Cadastrar novos jogos</button>
                </a>
            </div>
            @if (empty($games))
                <h3>Não jogos cadastrados ainda</h3>
            @else
                @foreach ($games as $game)
                <div class="card mt-3">
                    <div class="card-body">
                        <h2> {{ $game->game_title }}</h2>
                        <p>Dsenvolvedora: {{$game->developer}}</p>
                        <p>Distribuidora: {{$game->distributor}}</p>
                        @if(!is_null($game->plataforms))
                            <h5>Disponivel nas seguintes plataformas:</h5>
                            <div class="col-4">
                                </ul class="col-3">
                                    @foreach ($game->plataforms as $plataform)
                                            <li class="list-group-item">{{ $plataform->plataform_name }}</li>
                                    @endforeach
                                <ul class="list-group list-group-flush">
                            </div>
                        @else
                            <h5>Não está disponível em nenhuma plataforma</h5>
                        @endif

                        <div class="row">
                            <div class="mt-3 col-2">
                                <a href="/games/update/{{ $game->game_id}}">
                                    <button type="submit" class="btn btn-warning">Editar jogo</button>
                                </a>
                            </div>
                            <div class="mt-3 col-2">
                                <form action="/games/delete/{{ $game->game_id}}" method="POST">
                                @csrf
                                    <input type="hidden" name="game_id" value="{{ $game->game_id}} ">
                                    <button type="submit" class="btn btn-danger">Deletar jogo</button>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
                @endforeach
            @endif

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
