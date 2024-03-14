<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proprietário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="d-flex flex-row-reverse">
        <button type="button" class="btn btn-primary p-2 cads mt-2" data-bs-toggle="modal" data-bs-target="#proprietarioAddModal">
            Cadastrar
        </button>
    </div>

    <table class="table table-bordered border-black border-0 text-center caption-top mt-2">
        <thead>
            <caption class="text-center bg-info border border-black border-4">
                <h2>Proprietário</h2>
            </caption>
            <tr>
                <th scope="col">
                    <h5>Código</h5>
                </th>
                <th scope="col">
                    <h5>Nome</h5>
                </th>
                <th scope="col">
                    <h5>Foto</h5>
                </th>
                <th scope="col">
                    <h5>Ação</h5>
                </th>
            </tr>
        </thead>
        <tbody>
                    <tr>
                        <th scope="row">Id</th>
                        <td>Nome</td>
                        <td><img src="./img/images.jpg" width="100px"></td>
                        <td>
                            <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#proprietarioAltModal">Alterar</button>
                            <button type="button" class="btn btn-success">Ver mais</button>
                            <button type="button" class="btn btn-danger">Excluir</button>
                        </td>
                    </tr>
        </tbody>
    </table>

</body>

</html>