<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cuentas Bancarias</title>
</head>
<body>
    <h1>Lista de Cuentas Bancarias</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>ID Persona</th>
            <th>Número de Cuenta</th>
            <th>Saldo</th>
            <th>Tipo de Cuenta</th>
            <th>Acción</th>
        </tr>
        <?php foreach ($cuentas as $cuenta): ?>
            <tr>
                <td><?= $cuenta['id_cuenta'] ?></td>
                <td><?= $cuenta['id_persona'] ?></td>
                <td><?= $cuenta['numero_cuenta'] ?></td>
                <td><?= $cuenta['saldo'] ?></td>
                <td><?= $cuenta['tipo_cuenta'] ?></td>
                <td><a href="<?= base_url('cuentas/eliminar/'.$cuenta['id_cuenta']) ?>">Eliminar</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
