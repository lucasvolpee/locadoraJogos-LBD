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
                <a href="/plataform/create">
                    <button type="button" class="btn btn-success">Cadastrar novas plataformas</button>
                </a>
            </div>
            @if (empty($plataforms))
                <h3>Não existe plataformas</h3>
            @else
                @foreach ($plataforms as $plataform)
                <div class="card mt-3">
                    <div class="card-body">
                        <h2> {{ $plataform->plataform_name }}</h2>
                        <div class="row">
                            <div class="mt-3 col-2">
                                <a href="/plataform/update/{{ $plataform->plataform_id}}">
                                    <button type="submit" class="btn btn-warning">Editar plataforma</button>
                                </a>
                            </div>
                            <div class="mt-3 col-2">
                                <form action="/plataform/delete" method="POST">
                                @csrf
                                    <input type="hidden" name="plataform_id" value="{{ $plataform->plataform_id}} ">
                                    <button type="submit" class="btn btn-danger">Deletar plataforma</button>
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
