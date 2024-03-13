<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="./css/style.css" rel="stylesheet">
</head>

<body class="bg-secondary">
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/images.jpg" width="45px;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container-fluid a">
        <div class="card bg-dark text-white">
            <div class="card text-bg-dark">
                <img src="./img/chevrolet-tracker-rs-2024.jpg" class="card-img" alt="...">
                <div class="card-img-overlay">
                    <h5 class="card-title">Nome</h5>
                    <p class="card-text">Descrição inspiradora</p>
                </div>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item text-center  bg-dark text-white">
                        <h1>Nome</h1>
                    </li>
                    <li class="list-group-item  bg-dark text-white">Descrição</li>
                    <li class="list-group-item  bg-dark text-white">Valor: R$1.000,00</li>
                    <select class="form-select  bg-dark text-white" aria-label="Default select example">
                        <option selected>Forma de pagamento</option>
                        <option value="1">Dinheiro</option>
                        <option value="2">Cartão</option>
                    </select>
                </ul>
                <br>
                <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                    <button class="btn btn-primary me-md-2" type="button">Cancelar</button>
                    <button class="btn btn btn-outline-success" type="button">Comprar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>