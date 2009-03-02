<h1>Listado de campañas <?php echo $sf_user->getAttribute('campaign_activa', 1) == 1 ? 'activas' : 'inactivas' ;?></h1>
<?php if (sizeof($campaign_list)>0){?>
<?php foreach ($campaign_list as $campaign): ?>
<table id="box-table-a" summary="Detalles de campaña - <?php echo $campaign->getnombre()?>">
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
      <th scope="col">Fecha ingreso</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td title="Nombre" class="hideextra" style="width:300px"><a href="<?php echo url_for('campaign_show', $campaign) ?>"><?php echo $campaign->getnombre() ?></a></td>
      <td title="Vendedor" class="hideextra" style="width:400px"><?php echo $campaign->getVendedor() ?></td>
      <td title="Categoría" class="hideextra" style="width:400px"><?php echo $campaign->getCategoria() ?></td>
      <td title="Producto" class="hideextra" style="width:400px"><?php echo $campaign->getProducto() ?></td>
      <td title="Specialty" class="hideextra" style="width:400px"><?php echo $campaign->getSpecialty() ?></td>
      <td title="Cliente" class="hideextra" style="width:400px"><?php echo $campaign->getCliente() ?></td>
      <td title="No. de orden" class="hideextra" style="width:400px"><?php echo $campaign->getOrden() ?></td>
      <?php if ($sf_user->hasCredential(array('admin'))):?>
      <td title="Facturación" class="hideextra" style="width:400px">$<?php echo $campaign->getFacturacion() ?> MXN</td>
      <?php endif; ?>
      <td title="Duración" class="hideextra" style="width:400px"><?php echo round($campaign->getDuracion()/86400,1) ." d<br/>".round(($campaign->getDuracion()/86400)/7,1)." w"?></td>
      <td title="Inicio" class="hideextra" style="width:400px"><?php echo $campaign->getfecha_inicio() ?></td>
      <td title="Cierre" class="hideextra" style="width:400px"><?php echo $campaign->getfecha_cierre() ?></td>
      <td title="Fecha de ingreso" class="hideextra" style="width:800px"><?php echo $campaign->getfecha_ingreso() ?></td>
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
  </tbody>
</table>
<?php endforeach; 
}
else{
  echo "<h4>No existen campañas ";
  echo $sf_user->getAttribute('campaign_activa', 1) == 1 ? 'activas' : 'inactivas' ;
  echo " en este momento</h4>";
}?>
  
