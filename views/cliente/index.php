<h1>Listado Clientes</h1>

<table border="5">
    <tr>
        <th>nombre</th>
        <th>apellido</th>
        <th>email</th>
        <th>fecha_registro</th>
    </tr>
    <?php foreach ($clientes as $cliente): ?>
        <tr>
            <td><?= $cliente['nombre'] ?></td>
            <td><?= $cliente['apellido'] ?></td>
            <td><?= $cliente['email'] ?></td>
            <td><?= $cliente['fecha_registro'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>