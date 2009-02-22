<h1>Listado de campañas <?php echo $sf_user->getAttribute('campaign_activa', 1) == 1 ? 'activas' : 'inactivas' ;?></h1>

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
      <?php if ($sf_user->hasCredential(array('admin'))):?>
      <th scope="col">Facturacion</th>
      <?php endif; ?>
      <th scope="col">Duracion</th>
      <th scope="col">Fecha inicio</th>
      <th scope="col">Fecha cierre</th>
      <th scope="col">Activa</th>
      <th scope="col">Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($campaign_list as $campaign): ?>
    <tr>
      <td title="Nombre"><a href="<?php echo url_for('campaign_show', $campaign) ?>"><?php echo $campaign->getnombre() ?></a></td>
      <td title="Vendedor"><?php echo $campaign->getVendedor() ?></td>
      <td title="Categoría"><?php echo $campaign->getCategoria() ?></td>
      <td title="Producto"><?php echo $campaign->getProducto() ?></td>
      <td title="Specialty"><?php echo $campaign->getSpecialty() ?></td>
      <td title="Cliente"><?php echo $campaign->getCliente() ?></td>
      <td title="No. de orden"><?php echo $campaign->getOrden() ?></td>
      <?php if ($sf_user->hasCredential(array('admin'))):?>
      <td title="Facturación"><?php echo $campaign->getFacturacion() ?></td>
      <?php endif; ?>
      <td title="Duración"><?php echo round($campaign->getDuracion()/86400,1) ." d<br/>".round(($campaign->getDuracion()/86400)/7,1)." w"?></td>
      <td title="Inicio"><?php echo $campaign->getfecha_inicio() ?></td>
      <td title="Cierre"><?php echo $campaign->getfecha_cierre() ?></td>
      <td title="¿Es activa?"><?php echo $campaign->getactiva() ?></td>
      <td title="Fecha de ingreso"><?php echo $campaign->getfecha_ingreso() ?></td>
    </tr>
    <tr>
      <th>Responsable</th>
      <th>Cantidad</th>
      <th>Instalados</th>
      <th>Desmontados</th>
    </tr>
      <?php $total = 0;
            $total_instalados = 0;
            $total_desmontados = 0;
      if ($sf_user->hasCredential(array('admin','comercial'), false)){
        $rows = Doctrine::getTable('Campaign')->getItemResume($campaign->id);
      }
      else {
        $rows = Doctrine::getTable('Campaign')->getItemResume($campaign->id, $sf_user->getId());
      }
      foreach ($rows as $row): ?><?php /*Esta función yo la hice y está en l/m/d/CampaignTable.class.php*/
        $total += $row['Total'];
        $total_instalados += $row['Instalados'];
        $total_desmontados += $row['Desmontados'];
      ?>   
      <tr>
        <td><?php echo $row['Responsable']?></td>
        <td><?php echo $row['Total']?></td>
        <td><?php echo $row['Instalados']?></td>
        <td><?php echo $row['Desmontados']?></td>
      </tr>
      <?php endforeach; ?>
      <tr>
        <td><strong>Total</strong></td>
        <td><strong><?php echo $total?></strong></td>
        <td><strong><?php echo $total_instalados?></strong></td>
        <td><strong><?php echo $total_desmontados?></strong></td>
      </tr>
    <tr>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
      <th>&nbsp;</th>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
  <a href="<?php echo url_for('campaign_new') ?>">Agregar campaña</a>&nbsp;
  <a href="<?php echo url_for('/admin') ?>">Administrar sistema</a>&nbsp;
  <?php echo link_to('Activas', 'campaign', array('activa' => 1)); ?>&nbsp;
  <a href="<?php echo url_for('campaign', array('activa' => 0)) ?>">Inactivas</a> 
  
