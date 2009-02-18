<h1><?php echo $campaign->getnombre()?> - detalles</h1>
</br>
<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $campaign->getid() ?></td>
    </tr>
    <tr>
      <th>Nombre:</th>
      <td><?php echo $campaign->getnombre() ?></td>
    </tr>
    <tr>
      <th>Vendedor:</th>
      <td><?php echo $campaign->Vendedor ?></td>
    </tr>
    <tr>
      <th>Categoria:</th>
      <td><?php echo $campaign->Categoria ?></td>
    </tr>
    <tr>
      <th>Producto:</th>
      <td><?php echo $campaign->Producto ?></td>
    </tr>
    <tr>
      <th>Specialty:</th>
      <td><?php echo $campaign->Specialty ?></td>
    </tr>
    <tr>
      <th>Cliente:</th>
      <td><?php echo $campaign->getcliente() ?></td>
    </tr>
    <tr>
      <th>Orden:</th>
      <td><?php echo $campaign->getorden() ?></td>
    </tr>
    <tr>
      <th>Facturacion:</th>
      <td><?php echo $campaign->getfacturacion() ?></td>
    </tr>
    <tr>
      <th>Fecha inicio:</th>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
    </tr>
    <tr>
      <th>Fecha cierre:</th>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
    </tr>
    <tr>
      <th>Activa:</th>
      <td><?php echo $campaign->getactiva() ?></td>
    </tr>
    <tr>
      <th>Fecha ingreso:</th>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
    </tr>
    <tr>
      <th>Duración:</th>
      <td><?php echo "Duración" ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $campaign->getfecha_actualizacion() ?></td>
    </tr>
  </tbody>
</table>

<?php foreach ($campaign->Items as $item): ?>

<?php endforeach; ?>

<a href="<?php echo url_for('campaign_edit', $campaign) ?>">Editar datos de campaña</a>
&nbsp;
<a href="<?php echo url_for('campaign_addItems', $campaign) ?>">Agregar items</a>
&nbsp;
<a href="<?php echo url_for('campaign') ?>">Volver al listado de campañas</a>
