<h1>Listado Productos</h1>

<table border="1">
    <tr>
        <th>nombre</th>
        <th>precio</th>
        <th>cantidad</th>
    </tr>
    <?php foreach ($productos as $producto): ?>
        <tr>
            <td><?= $producto['nombre'] ?></td>
            <td><?= $producto['precio'] ?></td>
            <td><?= $producto['cantidad'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>