<h1>Listado Productos</h1>

<table border="5">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Proveedor</th>
            <th>Categoría</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($productos)): ?>
            <?php foreach ($productos as $producto): ?>
                <tr>
                    <td><?= $producto['nombre'] ?></td>
                    <td><?= $producto['precio'] ?></td>
                    <td><?= $producto['cantidad'] ?></td>
                    <td><?= $producto['proveedor'] ?></td>
                    <td><?= $producto['categoria'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
    </tbody>
</table>

<h2>Producto Consultado</h2>

<?php if (!empty($producto_consulta)): ?>
    <table border="5">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Cantidad</th>
                <th>Proveedor</th>
                <th>Categoría</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?= $producto_consulta['nombre'] ?></td>
                <td><?= $producto_consulta['precio'] ?></td>
                <td><?= $producto_consulta['cantidad'] ?></td>
                <td><?= $producto_consulta['proveedor'] ?></td>
                <td><?= $producto_consulta['categoria'] ?></td>
            </tr>
        </tbody>
    </table>
<?php else: ?>
    <p>No se ha consultado ningún producto en específico.</p>
<?php endif; ?>
