<?php use_helper('Object') ?>
<script type="text/javascript">
$(document).ready(function(){  
  var poner_extra = $('.item_row:last').clone(true);

  $('a.item_remove').click(function() { // Cuando haces click a un anchor con clase item remove, ejecuta:
    $(this).parents('tr').remove();     // y entonces, a este (this) anchor le hace el remove de sus parents que sean "tr".
    return false;                       //Regresa false para detener la accion del link, que seria ir a una página.
  });

  $('a.item_add').click(function() {
    if($('.item_row:last').length != 0){ 
      $('.item_row:last').after($('.item_row:last').clone(true)); // Primero, busco el último elemento .item_row, que agregué y desués le 
    }
    else{
      //$('tbody.table_body').after($(poner_extra));
      poner_extra.clone(true).appendTo($('tbody.table_body'));
    }
    return false;//agrego el clone de este mismo elemento, el true es para que también me clone (copie) todos sus events.
    });

});
</script>
<h2>Agregar items a campaña: <?php echo $campaign->nombre ?></h2>
<form action="<?php echo url_for('campaign_createItems', $campaign) ?>" method="post">
<a href="#" class="item_add">Agregar otro item</a>
<table>
  <thead>
    <tr>
      <th>Plaza</th>
      <th>No. de Items</th>
      <th>Categoría</th>
      <th>Tipo</th>
      <th>Responsable</th>
      <th></th>
    </tr>
  </thead>
  <tbody class="table_body">
    <tr class="item_row">
      <td><?php echo select_tag('items[plaza_id][]', objects_for_select(
                  Doctrine::getTable('Plaza')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><input type="text" name="items[no_items][]" size="10" /></td>
      <td><?php echo select_tag('items[categoria_id][]', objects_for_select(
                  Doctrine::getTable('CategoriaItem')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><?php echo select_tag('items[tipo_id][]', objects_for_select(
                  Doctrine::getTable('Tipo')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><?php echo select_tag('items[responsable_id][]', objects_for_select(
                  Doctrine::getTable('sfGuardUser')->findAll(),
                  'getId', '__toString', '')
                ) ?></td>
      <td><a href="#" class="item_remove">Quitar</a></td>
    </tr>
  </tbody>
</table>
<a href="#" class="item_add">Agregar otro item</a>
&nbsp;
<a href="<?php echo url_for('campaign_show', $campaign)?>">Cancelar</a>
<br />
<input type="submit" value="Guardar" name="submit"/>
</form>
