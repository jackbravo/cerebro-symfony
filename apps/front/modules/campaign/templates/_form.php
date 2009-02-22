<?php include_stylesheets_for_form($form) ?>
<?php include_javascripts_for_form($form) ?>

<?php echo form_tag_for($form, '@campaign') ?>
  <table>
    <tfoot>
      <tr>
        <td colspan="2">
          <?php echo $form->renderHiddenFields() ?>
          &nbsp;<a href="<?php echo url_for('campaign') ?>">Cancelar</a>
          <?php if (!$form->getObject()->isNew()): ?>
            &nbsp;<?php echo link_to('Borrar', 'campaign_delete', $form->getObject(), array('method' => 'delete', 'confirm' => '¿Estás seguro que quieres borrar?')) ?>
          <?php endif; ?>
          <input type="submit" value="Guardar" />
        </td>
      </tr>
    </tfoot>
    <tbody>
      <?php echo $form->renderGlobalErrors() ?>
      <tr>
        <th><?php echo $form['nombre']->renderLabel() ?></th>
        <td>
          <?php echo $form['nombre']->renderError() ?>
          <?php echo $form['nombre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['vendedor_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['vendedor_id']->renderError() ?>
          <?php echo $form['vendedor_id'] ?>
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
        <th><?php echo $form['producto_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['producto_id']->renderError() ?>
          <?php echo $form['producto_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['specialty_id']->renderLabel() ?></th>
        <td>
          <?php echo $form['specialty_id']->renderError() ?>
          <?php echo $form['specialty_id'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['cliente']->renderLabel() ?></th>
        <td>
          <?php echo $form['cliente']->renderError() ?>
          <?php echo $form['cliente'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['orden']->renderLabel() ?></th>
        <td>
          <?php echo $form['orden']->renderError() ?>
          <?php echo $form['orden'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['facturacion']->renderLabel() ?></th>
        <td>
          <?php echo $form['facturacion']->renderError() ?>
          $ <?php echo $form['facturacion'] ?> MXN
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_inicio']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_inicio']->renderError() ?>
          <?php echo $form['fecha_inicio'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['fecha_cierre']->renderLabel() ?></th>
        <td>
          <?php echo $form['fecha_cierre']->renderError() ?>
          <?php echo $form['fecha_cierre'] ?>
        </td>
      </tr>
      <tr>
        <th><?php echo $form['activa']->renderLabel() ?></th>
        <td>
          <?php echo $form['activa']->renderError() ?>
          <?php echo $form['activa'] ?>
        </td>
      </tr>
    </tbody>
  </table>
</form>
