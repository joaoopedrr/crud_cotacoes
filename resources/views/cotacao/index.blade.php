<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Itens</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    {{-- <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style> --}}
</head>
<body>

<h1>Lista de Itens</h1>

<button class="btn btn-primary align-middle justify-content-center" onclick="redirecionarAdicionar()">Adicionar Item</button>
<br/>

<table class="table table-bordered">
    <tr>
        <th class="p-2 mb-2 bg-success text-white" >ID</th>
        <th class="p-2 mb-2 bg-success text-white" >Nome</th>
        <th class="p-2 mb-2 bg-success text-white" >Descrição</th>
        <th class="p-2 mb-2 bg-success text-white" >Preço</th>
        <th class="p-2 mb-2 bg-success text-white" >Ações</th>
    </tr>
    @foreach($produtos as $produto)
    <tr>
        <td>{{ $produto -> id }}</td>
        <td>{{ $produto -> material }}</td>
        <td>{{ $produto -> precoDeposito }}</td>
        <td>R$ {{ $produto -> precoRetirar }}</td>
        <td>
            <button class="btn btn-primary align-middle justify-content-center" onclick="redirecionarEditar({{ $produto -> id }})">Editar</button>
            <button class="btn btn-primary align-middle justify-content-center" onclick="redirecionarRemover({{ $produto -> id }})">Remover</button>
        </td>
    </tr>
    @endforeach
</table>

<script>
    function redirecionarAdicionar() {
        window.location.href = '/cotacao/novo';
    }

    function redirecionarEditar(id) {
        window.location.href = '/cotacao/ver/' + id;
    }

    function redirecionarRemover(id) {
        if (confirm("Tem certeza que deseja remover este item?")) {
            window.location.href = '/cotacao/excluir/' + id;
        }
    }
</script>

</body>
</html>
