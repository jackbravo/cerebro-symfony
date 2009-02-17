<?php use_helper('Object') ?>
<h2>Agregar items a: <?php echo $campaign->nombre ?></h2>
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
      <td><?php echo select_tag('plaza_id[]', objects_for_select(
                  Doctrine::getTable('Plaza')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><input type="text" name="no_items[]" size="10" /></td>
      <td><?php echo select_tag('categoria_id[]', objects_for_select(
                  Doctrine::getTable('CategoriaItem')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><?php echo select_tag('tipo_id[]', objects_for_select(
                  Doctrine::getTable('Tipo')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><?php echo select_tag('responsable_id[]', objects_for_select(
                  Doctrine::getTable('sfGuardUser')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
    </tr>
  </tbody>
</table>
</form>
