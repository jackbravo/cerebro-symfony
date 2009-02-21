<h1>Item List</h1>

<table>
  <thead>
    <tr>
      <th>Id</th>
      <th>Campaign</th>
      <th>Plaza</th>
      <th>Categoria</th>
      <th>Tipo</th>
      <th>Responsable</th>
      <th>Prueba color</th>
      <th>Impresor</th>
      <th>Entrada impresor</th>
      <th>Salida impresor</th>
      <th>Mensajeria</th>
      <th>Guia</th>
      <th>Fecha envio</th>
      <th>Fecha recepcion</th>
      <th>Permisionario</th>
      <th>Carroceria</th>
      <th>Compra directa</th>
      <th>Ruta</th>
      <th>Placas</th>
      <th>Economico</th>
      <th>Instalacion</th>
      <th>Desmontaje</th>
      <th>Evidencia</th>
      <th>Fecha actualizacion</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($item_list as $item): ?>
    <tr>
      <td><a href="<?php echo url_for('item_show', $item) ?>"><?php echo $item->getid() ?></a></td>
      <td><?php echo $item->getcampaign_id() ?></td>
      <td><?php echo $item->getplaza_id() ?></td>
      <td><?php echo $item->getcategoria_id() ?></td>
      <td><?php echo $item->gettipo_id() ?></td>
      <td><?php echo $item->getresponsable_id() ?></td>
      <td><?php echo $item->getprueba_color() ?></td>
      <td><?php echo $item->getimpresor_id() ?></td>
      <td><?php echo $item->getentrada_impresor() ?></td>
      <td><?php echo $item->getsalida_impresor() ?></td>
      <td><?php echo $item->getmensajeria_id() ?></td>
      <td><?php echo $item->getguia() ?></td>
      <td><?php echo $item->getfecha_envio() ?></td>
      <td><?php echo $item->getfecha_recepcion() ?></td>
      <td><?php echo $item->getpermisionario() ?></td>
      <td><?php echo $item->getcarroceria() ?></td>
      <td><?php echo $item->getcompra_directa() ?></td>
      <td><?php echo $item->getruta() ?></td>
      <td><?php echo $item->getplacas() ?></td>
      <td><?php echo $item->geteconomico() ?></td>
      <td><?php echo $item->getinstalacion() ?></td>
      <td><?php echo $item->getdesmontaje() ?></td>
      <td><?php echo $item->getevidencia() ?></td>
      <td><?php echo $item->getfecha_actualizacion() ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>

  <a href="<?php echo url_for('item_new') ?>">New</a>
