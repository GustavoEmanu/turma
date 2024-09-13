<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            text-align: center;
        }
        nav ul li {
            display: inline;
            margin-right: 10px;
        }
        nav ul li:last-child {
            margin-right: 0;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 14px;
            color: #fff;
            background-color: #007BFF;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        h1 {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div>
        <nav>
            <ul>
                <li><a href="{{ url('home') }}" class="button">Home</a></li>
                <li><a href="{{ url('disciplinas') }}" class="button">Lista de Disciplinas</a></li>
            </ul>
        </nav>

        <div>
            <h1>Lista de Alunos</h1>
            <hr>
            <table>
                <thead>
                    <tr>
                        <th>id</th>
                        <th>nome</th>
                        <th>idade</th>
                        <th>sexo</th>
                        <th>cpf</th>
                        <th>rg</th>
                        <th>email</th>
                        <th>senha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($alunos as $aluno)
                        <tr>
                            <td>{{ $aluno['id'] }}</td>
                            <td>{{ $aluno['nome'] }}</td>
                            <td>{{ $aluno['idade'] }}</td>
                            <td>{{ $aluno['sexo'] }}</td>
                            <td>{{ $aluno['cpf'] }}</td>
                            <td>{{ $aluno['rg'] }}</td>
                            <td>{{ $aluno['email'] }}</td>
                            <td>{{ $aluno['senha'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>