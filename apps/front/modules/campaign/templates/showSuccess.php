<h1>Campaña: <?php echo $campaign->getnombre()?></h1>
</br>
<table>
  <tbody>
    <tr>
      <th>Fecha ingreso:</th>
      <td><?php echo $campaign->getfecha_ingreso() ?></td>
      <th>Id:</th>
      <td><?php echo $campaign->getid() ?></td>
    </tr>
    <tr>
      <th>Vendedor:</th>
      <td><?php echo $campaign->Vendedor ?></td>
      <th>Categoria:</th>
      <td><?php echo $campaign->Categoria ?></td>
    </tr>
    <tr>
      <th>Producto:</th>
      <td><?php echo $campaign->Producto ?></td>
      <th>Specialty:</th>
      <td><?php echo $campaign->Specialty ?></td>
    </tr>
    <tr>
      <th>Cliente:</th>
      <td><?php echo $campaign->getcliente() ?></td>
      <th>Orden de compra:</th>
      <td><?php echo $campaign->getorden() ?></td>
    </tr>
    <tr>
      <th>Duración:</th>
      <?php 
       $day = $campaign->getDuracion(); //esta función está en l/m/d/Campaign.class.php
       $day/=86400;
       $wk = round(($day/7),1);
      ?>
      <td><?php echo $day." días "."<br />".$wk." semanas" ?></td>
      <th>Fecha inicio:</th>
      <td><?php echo $campaign->getfecha_inicio() ?></td>
    </tr>
    <tr>
      <th>Fecha de cierre:</th>
      <td><?php echo $campaign->getfecha_cierre() ?></td>
      <th>Activa:</th>
      <td><?php echo $campaign->getactiva() ?></td>
    </tr>
    <tr>
      <th>Facturación:</th>
      <td><?php echo $campaign->getfacturacion() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $campaign->getfecha_actualizacion() ?></td>
    </tr>
  </tbody>
</table>
<h1>Items</h1>
  <table>
    <thead>
      <tr>
        <th>Id item</th>
        <th>Última actualización</th>
        <th>Plaza</th>
        <th>Categoria</th>
        <th>Tipo</th>
        <th>Responsable</th>
        <th>Pba. color</th>
        <th>Impresor</th>
        <th>Entrada imp.</th>
        <th>Salida imp.</th>
        <th>Mensajería</th>
        <th>No. guía</th>
        <th>Fecha envío</th>
        <th>Fecha recepción</th>
        <th>Permisionario</th>
        <th>Carrocería</th>
        <th>Compra directa</th>
        <th>Ruta</th>
        <th>Placas</th>
        <th>Económico</th>
        <th>Instalación</th>
        <th>Desmontaje</th>
        <th>Evidencia</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($campaign->getItems() as $item): ?> <?php //reemplazar esto por algo así como $campaign->getItems as $items o algo así...?>
      <tr>
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

<a href="<?php echo url_for('campaign_edit', $campaign) ?>">Editar datos de campaña</a>
&nbsp;
<a href="<?php echo url_for('campaign_addItems', $campaign) ?>">Agregar items</a>
&nbsp;
<a href="<?php echo url_for('campaign') ?>">Volver al listado de campañas</a>
