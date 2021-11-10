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
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Pricing</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link disabled">Disabled</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="card">
                <div class="card-body">
                    <form action="/games/create" method="post">
                    @csrf
                        <div class="mb-3">
                            <label for="gameTitle" class="form-label">Titulo do jogo</label>
                            <input type="text" class="form-control" id="gameTitle" placeholder="Nome do jogo" name="game_title">
                        </div>
                        <div class="mb-3">
                            <label for="developer" class="form-label">Desenvolvedora do jogo</label>
                            <input type="text" class="form-control" id="developer" placeholder="Desenvolvedora do jogo" name="developer">
                        </div>
                        <div class="mb-3">
                            <label for="distributor" class="form-label">Distribuidora textarea</label>
                            <input type="text" class="form-control" id="distributor" placeholder="Distribuidora do jogo" name="distributor">
                        </div>
                        @if(!empty($plataforms))
                            @foreach ($plataforms as $plataform)
                                <input id="plataform" type="checkbox" name="plataform[]" value="{{ $plataform->plataform_id }}" >
                                <label for="plataform" class="form-label">{{ $plataform->plataform_name }}</label>
                                <br>
                            @endforeach
                        @endif
                        <div class="mb-3">
                            <label for="gameReleaseDate" class="form-label">Data de lançamento</label>
                            <input type="date" class="form-control" id="gameReleaseDate" name="game_release_date">
                        </div>
                        <button type="submit" class="btn btn-success">Cadastrar jogo</button>
                    </form>
                </div>
            </div>


        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
