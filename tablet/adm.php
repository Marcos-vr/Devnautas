<?php
include_once 'config/constantes.php';
include_once 'config/conexao.php';
include_once 'func/funcoes.php';
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-secondary">
    <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="./img/images.jpg" width="45px;"></a>
            <a type="button" class="btn btn-outline-danger" href="pagina.php">Sair</a>
        </div>

    </nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3 bg-dark">
                <div class="d-flex flex-column align-items-center mt-2 p-2 min-vh-100">
                    <div class="text-white text-center" style="width: 300px;">
                        <h1>Menu</h1>
                        <hr>
                    </div>
                    <br>
                    <div class="text-center">
                        <button class="btn btn-secondary btn-lg text-white" style="width: 200px;" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                            Cadastros
                        </button>
                        <div>
                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                <div class="card drp text-center" style="width: 200px;">
                                    <div class="list-group">
                                        <button type="button" class="list-group-item list-group-item-action fw-bold" onclick="carregarConteudo('listaProduto')">Produto</button>
                                        <button type="button" class="list-group-item list-group-item-action fw-bold" onclick="carregarConteudo('listaProp')">Proprietário</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col md-9 espaco">
                <div id="controle">
                    <h1 class="po">Bem vindo(a)!</h1>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------Modais do produto------------------------------>

    <div class="modal fade" id="produtoAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" width="1000px">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar produto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmAddproduto" id="frmAddproduto" action="#" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">produto</label>
                            <input type="text" class="form-control form-control-sm" name="inproduto" id="idproduto" placeholder="Digite o nome do produto" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnAddproduto">Adicionar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="esconderprocessando()">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="produtoAltModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar produto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmAltproduto" id="frmAltproduto" action="#" method="post">
                        <div class="mb-3">
                            <label for="produtoEitd" class="form-label">produto</label>
                            <input type="text" class="form-control form-control-sm" name="produto" id="produtoEdit" placeholder="Digite o nome do produto" aria-label=".form-control-sm">
                            <br>
                            <input type="text" class="form-control form-control-sm" name="idproduto" id="idprodutoEdit" placeholder="Digite o id do produto" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnEdtproduto">Salvar alterações</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="esconderprocessando()">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------Modais do proprietario------------------------------>

    <div class="modal fade" id="proprietarioAddModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar proprietario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmAddproprietario" id="frmAddproprietario" action="#" method="post">
                        <div class="mb-3">
                            <label for="" class="form-label">proprietario</label>
                            <input type="text" class="form-control form-control-sm" name="inproprietario" id="idproprietario" placeholder="Digite o nome do proprietario" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnAddproprietario">Adicionar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="esconderprocessando()">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="proprietarioAltModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Alterar proprietario</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form name="frmEdtproprietario" id="frmEdtproprietario" action="#" method="post">
                        <div class="mb-3">
                            <label for="proprietarioEitd" class="form-label">proprietario</label>
                            <input type="text" class="form-control form-control-sm" name="proprietario" id="proprietarioEdit" placeholder="Digite o nome do proprietario" aria-label=".form-control-sm">
                            <br>
                            <input type="text" class="form-control form-control-sm" name="idproprietario" id="idproprietarioEdit" placeholder="Digite o id do proprietario" aria-label=".form-control-sm">
                        </div>
                        <button type="submit" class="btn btn-info" id="btnEdtproprietario">Salvar alterações</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="esconderprocessando()">Close</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="./js/func.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>