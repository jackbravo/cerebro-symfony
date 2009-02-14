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
      <td><?php echo $campaign->getvendedor_id() ?></td>
    </tr>
    <tr>
      <th>Categoria:</th>
      <td><?php echo $campaign->getcategoria_id() ?></td>
    </tr>
    <tr>
      <th>Producto:</th>
      <td><?php echo $campaign->getproducto_id() ?></td>
    </tr>
    <tr>
      <th>Specialty:</th>
      <td><?php echo $campaign->getspecialty_id() ?></td>
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

<hr />

<a href="<?php echo url_for('campaign_edit', $campaign) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('campaign') ?>">List</a>
