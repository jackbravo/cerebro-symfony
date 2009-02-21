<table>
  <tbody>
    <tr>
      <th>Id:</th>
      <td><?php echo $item->getid() ?></td>
    </tr>
    <tr>
      <th>Campaign:</th>
      <td><?php echo $item->getcampaign_id() ?></td>
    </tr>
    <tr>
      <th>Plaza:</th>
      <td><?php echo $item->getplaza_id() ?></td>
    </tr>
    <tr>
      <th>Categoria:</th>
      <td><?php echo $item->getcategoria_id() ?></td>
    </tr>
    <tr>
      <th>Tipo:</th>
      <td><?php echo $item->gettipo_id() ?></td>
    </tr>
    <tr>
      <th>Responsable:</th>
      <td><?php echo $item->getresponsable_id() ?></td>
    </tr>
    <tr>
      <th>Prueba color:</th>
      <td><?php echo $item->getprueba_color() ?></td>
    </tr>
    <tr>
      <th>Impresor:</th>
      <td><?php echo $item->getimpresor_id() ?></td>
    </tr>
    <tr>
      <th>Entrada impresor:</th>
      <td><?php echo $item->getentrada_impresor() ?></td>
    </tr>
    <tr>
      <th>Salida impresor:</th>
      <td><?php echo $item->getsalida_impresor() ?></td>
    </tr>
    <tr>
      <th>Mensajeria:</th>
      <td><?php echo $item->getmensajeria_id() ?></td>
    </tr>
    <tr>
      <th>Guia:</th>
      <td><?php echo $item->getguia() ?></td>
    </tr>
    <tr>
      <th>Fecha envio:</th>
      <td><?php echo $item->getfecha_envio() ?></td>
    </tr>
    <tr>
      <th>Fecha recepcion:</th>
      <td><?php echo $item->getfecha_recepcion() ?></td>
    </tr>
    <tr>
      <th>Permisionario:</th>
      <td><?php echo $item->getpermisionario() ?></td>
    </tr>
    <tr>
      <th>Carroceria:</th>
      <td><?php echo $item->getcarroceria() ?></td>
    </tr>
    <tr>
      <th>Compra directa:</th>
      <td><?php echo $item->getcompra_directa() ?></td>
    </tr>
    <tr>
      <th>Ruta:</th>
      <td><?php echo $item->getruta() ?></td>
    </tr>
    <tr>
      <th>Placas:</th>
      <td><?php echo $item->getplacas() ?></td>
    </tr>
    <tr>
      <th>Economico:</th>
      <td><?php echo $item->geteconomico() ?></td>
    </tr>
    <tr>
      <th>Instalacion:</th>
      <td><?php echo $item->getinstalacion() ?></td>
    </tr>
    <tr>
      <th>Desmontaje:</th>
      <td><?php echo $item->getdesmontaje() ?></td>
    </tr>
    <tr>
      <th>Evidencia:</th>
      <td><?php echo $item->getevidencia() ?></td>
    </tr>
    <tr>
      <th>Fecha actualizacion:</th>
      <td><?php echo $item->getfecha_actualizacion() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('item_edit', $item) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('item') ?>">List</a>
