<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
  </head>
  <body>
  <?php if($sf_user->isAuthenticated()):?>
    <div id="header">
      <h1>Good day <i><?php echo $sf_user->getGuardUser()->getUsername()?></i> - Cerebro Management System v0.1 - <a href="<?php echo url_for('@sf_guard_signout') ?>">Logout</a></h1>
      <p>          
        <?php if ($sf_user->hasCredential(array('admin'))): ?>
          <a href="<?php echo url_for('campaign_new') ?>">Agregar campaña</a>&nbsp;
          <a href="<?php echo url_for('admin/index') ?>">Administrar sistema</a>&nbsp;
        <?php endif; ?>
        <?php echo link_to('Activas', 'campaign', array('activa' => 1)); ?>&nbsp;
        <a href="<?php echo url_for('campaign', array('activa' => 0)) ?>">Inactivas</a>&nbsp;
        <?php if ($sf_user->hasCredential(array('admin'))): ?>
          <?php echo link_to('Campañas Vigentes', 'campaign/vigentes'); ?>
          <?php echo link_to('Campañas Finalizadas', 'campaign/finalizadas'); ?>
        <?php endif; ?>
      </p>
    </div>
    <?php endif;?>
    <?php echo $sf_content ?>
  <div id="footer-urban">
  </div>
  <div id="footer-urban-text">
    CEREBRO - Truckvision control&reg; v0.1 - 2009 - <a href="http://axai.com.mx">by axai</a>
  </div>
  <br />
  </body>
</html>
