<h1>Campaign List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Vendedor</th>
      <th>Categoria</th>
      <th>Producto</th>
      <th>Specialty</th>
      <th>Cliente</th>
      <th>Orden</th>
      <th>Facturacion</th>
      <th>Fecha inicio</th>
      <th>Fecha cierre</th>
      <th>Activa</th>
      <th>Fecha ingreso</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($campaign_list as $campaign): ?>
    <tr>
      <td><a href="<?php echo url_for('campaign_show', $campaign) ?>"><?php echo $campaign->getid() ?></a></td>
      <td><?php echo $campaign->getnombre() ?></td>
      <td><?php echo $campaign->getvendedor_id() ?></td>
      <td><?php echo $campaign->getcategoria_id() ?></td>
      <td><?php echo $campaign->getproducto_id() ?></td>
      <td><?php echo $campaign->getspecialty_id() ?></td>
      <td><?php echo $campaign->getcliente() ?></td>
      <td><?php echo $campaign->getorden() ?></td>
      <td><?php echo $campaign->getfacturacion() ?></td>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
      <td><?php echo $campaign->getactiva() ?></td>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
      <td><?php echo $campaign->getfecha_actualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('campaign_new') ?>">New</a>
