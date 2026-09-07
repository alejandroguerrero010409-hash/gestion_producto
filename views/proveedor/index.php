<h1>Listado Proveedores</h1>

<table border="5">
    <tr>
        <th>nombre</th>
        <th>ciudad</th>
        <th>direccion</th>
        
    </tr>
    <?php foreach ($proveedores as $proveedor): ?>
        <tr>
            <td><?= $proveedor['nombre'] ?></td>
            <td><?= $proveedor['ciudad'] ?></td>
            <td><?= $proveedor['direccion'] ?></td>
            
        </tr>
    <?php endforeach; ?>
</table>