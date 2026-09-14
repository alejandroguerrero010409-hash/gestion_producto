<h1>Listado Categorías</h1>

<table border="5">
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>descripcion</th>
    
    </tr>
    <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?= $categoria['id'] ?></td>
            <td><?= $categoria['nombre'] ?></td>
            <td><?= $categoria['descripcion'] ?></td>
        </tr>
    <?php endforeach; ?>
</table>