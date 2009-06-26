<h1>Campañas Finalizadas</h1>

<?php if (sizeof($finished)>0){?>
<?php foreach ($finished as $campaign) { ?>
<table id="box-table-a" summary="Detalles de campaña - <?php echo $campaign->getnombre()?>">
  <tbody>
    <tr>
      <td colspan="0">
        <?php echo link_to($campaign['nombre'], 'campaign_show', $campaign) ?>
        para <?php echo $campaign['cliente'] ?>
        (<?php echo $campaign->getFacturacion() ?> MXN)
        <small><?php echo $campaign->getfecha_inicio() ?> - <?php echo $campaign->getfecha_cierre() ?></small>
      </td>
    </tr>
    <tr>
      <th>Plaza</th>
      <th>Por Desinstalar</th>
      <th>Desinstalados</th>
      <th>Total</th>
    </tr>
      <?php
        $total = 0;
        $total_desinstalados = 0;
        $rows = Doctrine::getTable('Campaign')->getFinishedItemResume($campaign->id);
        foreach ($rows as $row) { /*Esta función yo la hice y está en l/m/d/CampaignTable.class.php*/
          $total += $row['Total'];
          $total_desinstalados += $row['Desinstalados'];
      ?>   
      <tr>
        <td><?php echo $row['Plaza']?></td>
        <td><?php echo $row['Total'] - $row['Desinstalados']?></td>
        <td><?php echo $row['Desinstalados']?></td>
        <td><?php echo $row['Total']?></td>
      </tr>
      <?php } ?>
      <tr>
        <td><strong>Total</strong></td>
        <td><strong><?php echo $total - $total_desinstalados?></strong></td>
        <td><strong><?php echo $total_desinstalados?></strong></td>
        <td><strong><?php echo $total?></strong></td>
      </tr>
  </tbody>
</table>
<?php }
}
else {
  echo "<p>No existen campañas ";
  echo $sf_user->getAttribute('campaign_activa', 1) == 1 ? 'activas' : 'inactivas' ;
  echo " en este momento</p>";
}
