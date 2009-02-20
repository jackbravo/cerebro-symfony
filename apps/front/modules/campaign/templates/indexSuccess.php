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
      <td><?php echo $campaign->getVendedor() ?></td>
      <td><?php echo $campaign->getCategoria() ?></td>
      <td><?php echo $campaign->getProducto() ?></td>
      <td><?php echo $campaign->getSpecialty() ?></td>
      <td><?php echo $campaign->getCliente() ?></td>
      <td><?php echo $campaign->getOrden() ?></td>
      <td><?php echo $campaign->getFacturacion() ?></td>
      <td><?php echo round($campaign->getDuracion()/86400,1) ." días"?></td>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
      <td><?php echo $campaign->getactiva() ?></td>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
    </tr>
    <tr>
      <th>Responsable</th>
      <th>Cantidad</th>
      <th>Instaladas</th>
      <th>Desmontadas</th>
    </tr>
      <?php foreach(Doctrine::getTable('Campaign')->getItemResume($campaign->id) as $row): ?><?php /*Esta función yo la hice y está en l/m/d/CampaignTable.class.php*/?>   
      <tr>
        <td><?php echo $row['Responsable']?></td>
        <td><?php echo $row['Total']?></td>
        <td><?php echo $row['Instalados']?></td>
        <td><?php echo $row['Desmontados']?></td>
      </tr>
      <?php endforeach; ?>
    <tr>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <a href="<?php echo url_for('campaign_new') ?>">Agregar campaña</a>
  <a href="<?php echo url_for('/admin') ?>">Administrar sistema</a> 
