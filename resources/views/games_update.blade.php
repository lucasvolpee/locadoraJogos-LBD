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
                    <a class="navbar-brand" href="#">Navbar</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="/games">Home</a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="/plataforms">Plataformas</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card">
                <div class="card-body">
                    <form action="/games/update" method="post">
                    @csrf
                        <input type="hidden" name="game_id" value="{{ $game->game_id }}">
                        <div class="mb-3">
                            <label for="gameTitle" class="form-label">Titulo do jogo</label>
                            <input type="text" class="form-control" value="{{ $game->game_title }}" id="gameTitle" placeholder="Nome do jogo" name="game_title">
                        </div>
                        <div class="mb-3">
                            <label for="developer" class="form-label">Desenvolvedora do jogo</label>
                            <input type="text" class="form-control" value="{{ $game->developer }}" id="developer" placeholder="Desenvolvedora do jogo" name="developer">
                        </div>
                        <div class="mb-3">
                            <label for="distributor" class="form-label">Distribuidora</label>
                            <input type="text" class="form-control" value="{{ $game->distributor }}" id="distributor" placeholder="Distribuidora do jogo" name="distributor">
                        </div>
                        @if(!empty($plataforms))
                            @foreach ($plataforms as $plataform)
                                <input id="{{ $plataform->plataform_name }}" type="checkbox" name="plataform[]" value="{{ $plataform->plataform_id }}" {{ in_array($plataform->plataform_id, $gamePlataforms) ? 'checked' : '' }} >
                                <label for="{{ $plataform->plataform_name }}"  class="form-label">{{ $plataform->plataform_name }}</label>
                                <br>
                            @endforeach
                        @endif
                        <div class="mb-3">
                            <label for="gameReleaseDate" class="form-label">Data de lançamento</label>
                            <input type="date" value="{{ $game->game_release_date }}" class="form-control" id="gameReleaseDate" name="game_release_date">
                        </div>
                        <button type="submit" class="btn btn-success">Atualizar jogo</button>
                    </form>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
