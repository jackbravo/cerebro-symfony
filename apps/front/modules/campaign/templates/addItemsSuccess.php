<?php use_helper('Object') ?>
<?php echo $campaign->nombre ?>
<form action="<?php echo url_for('campaign_createItems', $campaign) ?>" method="post">
<table>
  <thead>
    <tr>
      <th>Plaza</th>
      <th>No. de Items</th>
      <th>Categoría</th>
      <th>Tipo</th>
      <th>Responsable</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>
</form>
