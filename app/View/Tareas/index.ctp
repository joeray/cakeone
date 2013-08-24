<h2>Tareas</h2>
<?php if(empty($tareas)):?>
No hay tareas en esta lista
<?php else: ?>
<table>
<tr>
<th>Titulo</th>
<th>Estatus</th>
<th>Creado</th>
<th>Modificado</th>
<th>Acciones</th>
</tr>
<?php foreach ($tareas as $tarea): ?>
<tr>
<td>
<?php
if ($tarea ['Tarea']['hecha']) echo 'Hecha';
else echo 'Pendiente';
?>
</td>
<td>
<?php echo $tarea ['Tarea']['creado'] ?>
</td>
<td>
<?php echo $tarea ['Tarea']['modificado'] ?>
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>
<?php echo $this->html->link('Anadir Tarea', array('action'=>'add')); ?>