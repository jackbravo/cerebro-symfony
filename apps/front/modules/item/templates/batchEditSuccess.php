<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>
<h1>Editar múltiples items de la campaña: <?php echo $items['0']->Campaign->nombre ?></h1>
<form action="<?php echo url_for('@item_batchUpdate')?>" method="post">
  Items: 
  <?php foreach ($items as $item): ?>
    <?php echo $item['id'] ?> - <?php echo $item['Plaza'] ?>, 
    <input type="hidden" name="ids[]" value="<?php echo $item->id ?>" />
  <?php endforeach; ?>
  <br />
  <br />
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('@campaign_show?id='.$items['0']['campaign_id']) ?>">Cancelar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'item_delete', $form->getObject(), array('method' => 'delete', 'confirm' => '¿Estás seguro que quieres borrar todos estos items?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <?php if (isset($form['plaza_id'])): ?>
        <tr>
          <th><?php echo $form['plaza_id']->renderLabel() ?></th>
          <td>
            <?php echo $form['plaza_id']->renderError() ?>
            <?php echo $form['plaza_id'] ?>
          </td>
        </tr>
      <?php endif; ?>
      <?php if (isset($form['categoria_id'])): ?>
        <tr>
          <th><?php echo $form['categoria_id']->renderLabel() ?></th>
          <td>
            <?php echo $form['categoria_id']->renderError() ?>
            <?php echo $form['categoria_id'] ?>
          </td>
        </tr>
      <?php endif; ?>
      <?php if (isset($form['tipo_id'])): ?>
        <tr>
          <th><?php echo $form['tipo_id']->renderLabel() ?></th>
          <td>
            <?php echo $form['tipo_id']->renderError() ?>
            <?php echo $form['tipo_id'] ?>
          </td>
        </tr>
      <?php endif; ?>
      <?php if (isset($form['responsable_id'])): ?>
        <tr>
          <th><?php echo $form['responsable_id']->renderLabel() ?></th>
          <td>
            <?php echo $form['responsable_id']->renderError() ?>
            <?php echo $form['responsable_id'] ?>
          </td>
        </tr>
      <?php endif; ?>
      <?php if (isset($form['prueba_color'])): ?>
      <tr>
        <th><?php echo $form['prueba_color']->renderLabel() ?></th>
        <td>
          <?php echo $form['prueba_color']->renderError() ?>
          <?php echo $form['prueba_color'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['impresor_id'])): ?>
      <tr>
        <th><?php echo $form['impresor_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['impresor_id']->renderError() ?>
          <?php echo $form['impresor_id'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['entrada_impresor'])): ?>
      <tr>
        <th><?php echo $form['entrada_impresor']->renderLabel() ?></th>
        <td>
          <?php echo $form['entrada_impresor']->renderError() ?>
          <?php echo $form['entrada_impresor'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['salida_impresor'])): ?>
      <tr>
        <th><?php echo $form['salida_impresor']->renderLabel() ?></th>
        <td>
          <?php echo $form['salida_impresor']->renderError() ?>
          <?php echo $form['salida_impresor'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['mensajeria_id'])): ?>
      <tr>
        <th><?php echo $form['mensajeria_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['mensajeria_id']->renderError() ?>
          <?php echo $form['mensajeria_id'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['guia'])): ?>
      <tr>
        <th><?php echo $form['guia']->renderLabel() ?></th>
        <td>
          <?php echo $form['guia']->renderError() ?>
          <?php echo $form['guia'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['fecha_envio'])): ?>
      <tr>
        <th><?php echo $form['fecha_envio']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_envio']->renderError() ?>
          <?php echo $form['fecha_envio'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['fecha_recepcion'])): ?>
      <tr>
        <th><?php echo $form['fecha_recepcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_recepcion']->renderError() ?>
          <?php echo $form['fecha_recepcion'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['permisionario'])): ?>
      <tr>
        <th><?php echo $form['permisionario']->renderLabel() ?></th>
        <td>
          <?php echo $form['permisionario']->renderError() ?>
          <?php echo $form['permisionario'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['carroceria'])): ?>
      <tr>
        <th><?php echo $form['carroceria']->renderLabel() ?></th>
        <td>
          <?php echo $form['carroceria']->renderError() ?>
          <?php echo $form['carroceria'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['compra_directa'])): ?>
      <tr>
        <th><?php echo $form['compra_directa']->renderLabel() ?></th>
        <td>
          <?php echo $form['compra_directa']->renderError() ?>
          <?php echo $form['compra_directa'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['ruta'])): ?>
      <tr>
        <th><?php echo $form['ruta']->renderLabel() ?></th>
        <td>
          <?php echo $form['ruta']->renderError() ?>
          <?php echo $form['ruta'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['placas'])): ?>
      <tr>
        <th><?php echo $form['placas']->renderLabel() ?></th>
        <td>
          <?php echo $form['placas']->renderError() ?>
          <?php echo $form['placas'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['economico'])): ?>
      <tr>
        <th><?php echo $form['economico']->renderLabel() ?></th>
        <td>
          <?php echo $form['economico']->renderError() ?>
          <?php echo $form['economico'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['instalacion'])): ?>
      <tr>
        <th><?php echo $form['instalacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['instalacion']->renderError() ?>
          <?php echo $form['instalacion'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['desmontaje'])): ?>
      <tr>
        <th><?php echo $form['desmontaje']->renderLabel() ?></th>
        <td>
          <?php echo $form['desmontaje']->renderError() ?>
          <?php echo $form['desmontaje'] ?>
        </td>
      </tr>
      <?php endif; ?>
      <?php if (isset($form['evidencia'])): ?>
      <tr>
        <th><?php echo $form['evidencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['evidencia']->renderError() ?>
          <?php echo $form['evidencia'] ?>
        </td>
      </tr>
      <?php endif; ?>
    </tbody>
  </table>
</form>
