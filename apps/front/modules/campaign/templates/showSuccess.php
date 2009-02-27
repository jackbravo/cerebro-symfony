
<script type="text/javascript">
function toggleBatchActions()
{
  if ( $('input:checked.batch').length > 0 ) {
    $('#batch-actions :input').attr('disabled', false);
  } else {
    $('#batch-actions :input').attr('disabled', true);
  }
}
function checkAll(checkbox)
{
  var parent = $(checkbox).parents('table').get(0);
  $('input:checkbox', parent).attr('checked', checkbox.checked);
  toggleBatchActions();
}

$(document).ready(function(){
  $('input:checkbox.batch').change(function(){
    toggleBatchActions();
  });
  toggleBatchActions();
});
</script>

<h1>Campaña: <?php echo $campaign->getnombre()?></h1>
</br>
<table class="campaign">
  <tbody>
    <tr>
      <th class="hideextra" style="width:150px">Fecha ingreso:</th>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
      <th class="hideextra" style="width:150px">Id:</th>
      <td><?php echo $campaign->getid() ?></td>
    </tr>
    <tr>
      <th class="hideextra" style="width:150px">Vendedor:</th>
      <td><?php echo $campaign->Vendedor ?></td>
      <th class="hideextra" style="width:150px">Categoria:</th>
      <td><?php echo $campaign->Categoria ?></td>
    </tr>
    <tr>
      <th class="hideextra" style="width:150px">Producto:</th>
      <td><?php echo $campaign->Producto ?></td>
      <th class="hideextra" style="width:150px">Specialty:</th>
      <td><?php echo $campaign->Specialty ?></td>
    </tr>
    <tr>
      <th class="hideextra" style="width:150px">Cliente:</th>
      <td><?php echo $campaign->getcliente() ?></td>
      <th class="hideextra" style="width:150px">Orden de compra:</th>
      <td><?php echo $campaign->getorden() ?></td>
    </tr>
    <tr>
      <th class="hideextra" style="width:150px">Duración:</th>
      <?php 
       $day = $campaign->getDuracion(); //esta función está en l/m/d/Campaign.class.php
       $day/=86400;
       $wk = round(($day/7),1);
      ?>
      <td><?php echo $day." días "."<br />".$wk." semanas" ?></td>
      <th class="hideextra" style="width:150px">Fecha inicio:</th>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
    </tr>
    <tr>
      <th class="hideextra" style="width:150px">Fecha de cierre:</th>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
      <th class="hideextra" style="width:150px">Estado:</th>
      <td><?php if ($campaign->getactiva()==1) echo 'Activa'; else echo 'Inactiva'?></td>
    </tr>
    <?php /*if ($sf_user->hasCredential(array('admin', 'comercial'), false)): */ //Esta notación es para cuando quieres revisar si tiene una u otra credencial?>
    <?php if ($sf_user->hasCredential(array('admin'))): ?>
    <tr>
      <th class="hideextra" style="width:150px">Facturación:</th>
      <td><?php echo $campaign->getfacturacion() ?></td>
      <th>&nbsp;</th>
      <td>&nbsp;</td>
    </tr>
    <?php endif; ?>
    <tr>
      <th class="hideextra" style="width:150px">Fecha actualizacion:</th>
      <td><?php echo $campaign->getfecha_actualizacion() ?></td>
      <th>&nbsp;</th>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
<?php if ($sf_user->hasCredential(array('admin'))): ?>
<a href="<?php echo url_for('campaign_edit', $campaign) ?>">Editar datos de campaña</a>&nbsp;
<a href="<?php echo url_for('campaign_addItems', $campaign) ?>">Agregar items</a>&nbsp;
<?php endif; ?>
<h1>Items</h1>
  <form action="<?php echo url_for('item_batch')?>" method="post">
  <table>
    <thead>
      <tr>
        <th><input type="checkbox" onclick="checkAll(this);"/></th>
        <th class="hideextra" style="width:300px">Id item</th>
        <th class="hideextra" style="width:300px">Última actualización</th>
        <th class="hideextra" style="width:300px">Plaza</th>
        <th class="hideextra" style="width:300px">Categoria</th>
        <th class="hideextra" style="width:300px">Tipo</th>
        <th class="hideextra" style="width:300px">Responsable</th>
        <th class="hideextra" style="width:300px">Pba. color</th>
        <th class="hideextra" style="width:300px">Impresor</th>
        <th class="hideextra" style="width:300px">Entrada imp.</th>
        <th class="hideextra" style="width:300px">Salida imp.</th>
        <th class="hideextra" style="width:300px">Mensajería</th>
        <th class="hideextra" style="width:300px">No. guía</th>
        <th class="hideextra" style="width:300px">Fecha envío</th>
        <th class="hideextra" style="width:300px">Fecha recepción</th>
        <th class="hideextra" style="width:300px">Permisionario</th>
        <th class="hideextra" style="width:300px">Carrocería</th>
        <th class="hideextra" style="width:300px">Compra directa</th>
        <th class="hideextra" style="width:300px">Ruta</th>
        <th class="hideextra" style="width:300px">Placas</th>
        <th class="hideextra" style="width:300px">Económico</th>
        <th class="hideextra" style="width:300px">Instalación</th>
        <th class="hideextra" style="width:300px">Desmontaje</th>
        <th class="hideextra" style="width:300px">Evidencia</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      if ($sf_user->hasCredential(array('admin', 'comercial'), false)) {
        $items = $campaign->getItems();
      }
      else {
        $items = $campaign->getItems($sf_user->getId());
      }
      foreach ($items as $i => $item): ?> 
      <tr class="<?php echo fmod($i,2) == 0 ? 'even' : 'odd' ?>">
        <td><div style="width:20px;"><input class="batch" type="checkbox" name="ids[]" value="<?php echo $item['id'] ?>" /></div></td>
        <td title="Id del ítem"><a href="<?php echo url_for('item_edit', $item) ?>"><?php echo $item->id ?></a></td>
        <td title="Última actualización"><a href="<?php echo url_for('item_edit', $item) ?>"><?php echo $item->fecha_actualizacion ?></a></td>
        <td title="Plaza"><a href="<?php echo url_for('item_edit', $item) ?>"><?php echo $item->Plaza ?></a></td>
        <td title="Categoría"><?php echo $item->Categoria ?></td>
        <td title="Tipo"><?php echo $item->Tipo ?></td>
        <td title="Responsable"><?php echo $item->Responsable ?></td>
        <td title="¿Existe prueba de color?"><?php echo $item->prueba_color ?></td>
        <td title="Impresor"><?php echo $item->Impresor ?></td>
        <td title="Entrada a impresión"><?php echo $item->entrada_impresor ?></td>
        <td title="Salida de impresión"><?php echo $item->salida_impresor ?></td>
        <td title="Mensajeria"><?php echo $item->Mensajeria ?></td>
        <td title="Número de guía"><?php echo $item->guia ?></td>
        <td title="Fecha de envío"><?php echo $item->fecha_envio ?></td>
        <td title="Fecha de recepción"><?php echo $item->fecha_recepcion ?></td>
        <td title="Permisionario"><?php echo $item->permisionario ?></td>
        <td title="Carrocería"><?php echo $item->carroceria ?></td>
        <td title="Compra directa"><?php echo $item->compra_directa ?></td>
        <td title="Ruta"><?php echo $item->ruta ?></td>
        <td title="Placas"><?php echo $item->placas ?></td>
        <td title="Número económico"><?php echo $item->economico ?></td>
        <td title="Fecha de instalación"><?php echo $item->instalacion ?></td>
        <td title="Fecha de desmontaje"><?php echo $item->desmontaje ?></td>
        <td title="¿Existe evidencia de la instalación?"><?php echo ($item->evidencia ? 'Sí' : 'No') ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>   
  </table>
    <div id="batch-actions">
      <input type="submit" value="Editar" name='_edit' />
    </div>
  </form>

<a href="<?php echo url_for('campaign') ?>">Volver al listado de campañas</a>
<br />
<br />
<br />
