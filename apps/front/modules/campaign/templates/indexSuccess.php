<h1>Listado de campañas</h1>

<table id="box-table-a" summary="Listado de campañas">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Vendedor</th>
      <th scope="col">Categoria</th>
      <th scope="col">Producto</th>
      <th scope="col">Specialty</th>
      <th scope="col">Cliente</th>
      <th scope="col">Orden</th>
      <th scope="col">Facturacion</th>
      <th scope="col">Duracion</th>
      <th scope="col">Fecha inicio</th>
      <th scope="col">Fecha cierre</th>
      <th scope="">Activa</th>
      <th scope="col">Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($campaign_list as $campaign): ?>
    <tr>
      <td><a href="<?php echo url_for('campaign_show', $campaign) ?>"><?php echo $campaign->getnombre() ?></a></td>
      <td><?php echo $campaign->getvendedor_id() ?></td>
      <td><?php echo $campaign->getcategoria_id() ?></td>
      <td><?php echo $campaign->getproducto_id() ?></td>
      <td><?php echo $campaign->getspecialty_id() ?></td>
      <td><?php echo $campaign->getcliente() ?></td>
      <td><?php echo $campaign->getorden() ?></td>
      <td><?php echo $campaign->getfacturacion() ?></td>
      <td><?php echo "Duración" ?></td>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
      <td><?php echo $campaign->getactiva() ?></td>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<div class="menu">
  <a href="<?php echo url_for('campaign_new') ?>">Agregar campaña</a>
  <a href="<?php echo url_for('campaign') ?>">Administrar sistema</a>
</div>
