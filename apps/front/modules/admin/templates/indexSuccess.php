<h1>Administración del sistema</h1>

<table>
    <thead><tr><th scope="col"><a href="<?php echo url_for('plaza') ?>">Plazas</a></th></tr></thead>
    <tbody>
    <?php foreach($plaza_list as $plaza): ?>
    <tr><td><?php echo $plaza->getnombre()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>


<table>
    <thead><tr><th scope="col"><a href="<?php echo url_for('specialty') ?>">Specialties</a></th></tr></thead>
    <tbody>
    <?php foreach($specialty_list as $specialty): ?>
    <tr><td><?php echo $specialty->getnombre()?></td></tr>
    <?php endforeach; ?>
</tbody>
</table>

<table>
    <thead><tr><th scope="col"><a href="<?php echo url_for('impresor') ?>">Impresores</a></th></tr></thead>
    <tbody>
    <?php foreach($impresor_list as $impresor): ?>
    <tr><td><?php echo $impresor->getnombre()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>


<table>
    <thead><tr><th scope="col"><a href="<?php echo url_for('mensajeria') ?>">Mensajerias</a>
</th></tr></thead>
    <tbody>
    <?php foreach($mensajeria_list as $mensajeria): ?>
    <tr><td><?php echo $mensajeria->getnombre()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>

<table>
    <thead><tr><th scope="col"><a href="<?php echo url_for('producto') ?>">Productos</a>
</th></tr></thead>
    <tbody>
    <?php foreach($producto_list as $producto): ?>
    <tr><td><?php echo $producto->getnombre()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>

<table>
<thead><tr><th scope="col"><a href="<?php echo url_for('tipo') ?>">Tipos</a></th></tr></thead>
    <tbody>
    <?php foreach($tipo_list as $tipo): ?>
    <tr><td><?php echo $tipo->getnombre()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>
<table>
<thead><tr><th scope="col"><a href="<?php echo url_for('sf_guard_user') ?>">Usuarios</a></th></tr></thead>
    <tbody>
    <?php foreach($usr_list as $usr): ?>
    <tr><td><?php echo $usr->getUsername()?></td></tr>
    <?php endforeach; ?>
    </tbody>
</table>


