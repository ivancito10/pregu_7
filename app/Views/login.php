<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
</head>
<body>
    <h1>Iniciar sesión</h1>
    <!-- Formulario de inicio de sesión -->
    <form action="<?= base_url('login/Auth') ?>" method="post">
        <label for="username">Usuario:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="password">Contraseña:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Iniciar sesión</button>
    </form>
    <?php if (isset($error)) : ?>
        <!-- Mostrar mensaje de error si las credenciales son inválidas -->
        <p><?= $error ?></p>
    <?php endif; ?>
</body>
</html>
