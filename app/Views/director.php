<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Montos y Saldos por Departamento</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Montos y Saldos por Departamento</h2>
    <table>
    <tr>
        <th>Departamento</th>
        <th>Saldo Total</th>
    </tr>
    <?php foreach ($resultados as $fila): ?>
        <tr>
            <td><?= $fila->departamento ?></td>
            <td><?= $fila->saldo_total ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
