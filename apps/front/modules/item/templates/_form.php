<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@item') ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('campaign_show',array('id' => $form->getObject()->campaign_id)) ?>">Cancelar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'item_delete', $form->getObject(), array('method' => 'delete', 'confirm' => '¿Estás seguro que quieres borrar?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['campaign_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['campaign_id']->renderError() ?>
          <?php echo $form['campaign_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['plaza_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['plaza_id']->renderError() ?>
          <?php echo $form['plaza_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['categoria_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['categoria_id']->renderError() ?>
          <?php echo $form['categoria_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['tipo_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['tipo_id']->renderError() ?>
          <?php echo $form['tipo_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['responsable_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['responsable_id']->renderError() ?>
          <?php echo $form['responsable_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['prueba_color']->renderLabel() ?></th>
        <td>
          <?php echo $form['prueba_color']->renderError() ?>
          <?php echo $form['prueba_color'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['impresor_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['impresor_id']->renderError() ?>
          <?php echo $form['impresor_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['entrada_impresor']->renderLabel() ?></th>
        <td>
          <?php echo $form['entrada_impresor']->renderError() ?>
          <?php echo $form['entrada_impresor'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['salida_impresor']->renderLabel() ?></th>
        <td>
          <?php echo $form['salida_impresor']->renderError() ?>
          <?php echo $form['salida_impresor'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['mensajeria_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['mensajeria_id']->renderError() ?>
          <?php echo $form['mensajeria_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['guia']->renderLabel() ?></th>
        <td>
          <?php echo $form['guia']->renderError() ?>
          <?php echo $form['guia'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_envio']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_envio']->renderError() ?>
          <?php echo $form['fecha_envio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_recepcion']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_recepcion']->renderError() ?>
          <?php echo $form['fecha_recepcion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['permisionario']->renderLabel() ?></th>
        <td>
          <?php echo $form['permisionario']->renderError() ?>
          <?php echo $form['permisionario'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['carroceria']->renderLabel() ?></th>
        <td>
          <?php echo $form['carroceria']->renderError() ?>
          <?php echo $form['carroceria'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['compra_directa']->renderLabel() ?></th>
        <td>
          <?php echo $form['compra_directa']->renderError() ?>
          <?php echo $form['compra_directa'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['ruta']->renderLabel() ?></th>
        <td>
          <?php echo $form['ruta']->renderError() ?>
          <?php echo $form['ruta'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['placas']->renderLabel() ?></th>
        <td>
          <?php echo $form['placas']->renderError() ?>
          <?php echo $form['placas'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['economico']->renderLabel() ?></th>
        <td>
          <?php echo $form['economico']->renderError() ?>
          <?php echo $form['economico'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['instalacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['instalacion']->renderError() ?>
          <?php echo $form['instalacion'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['desmontaje']->renderLabel() ?></th>
        <td>
          <?php echo $form['desmontaje']->renderError() ?>
          <?php echo $form['desmontaje'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['evidencia']->renderLabel() ?></th>
        <td>
          <?php echo $form['evidencia']->renderError() ?>
          <?php echo $form['evidencia'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
