<title><?= $titulo ?></title>
<br>
<div class="container-fluid">

    <div class="">
        <div class="">
            <h3 class=""><?= $titulo ?> <a href="<?= site_url('AlumnosController/form') ?>"><button title="Nuevo" class="btn btn-primary"><i class="fa  fa-plus-square-o"><ion-icon name="person-add-outline"></ion-icon></i> Nuevo</button></a> </h3>
        <style>

        </style>
        
        </div>
        <!-- /.box-header -->
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <style>
                        th
                        {
                            text-align: center;
                        }
                      
                    </style>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Fecha Creación</th>
                    <th>Usuario</th>
                    <th>Estado</th>
                    
                   
                    
     
                
            </thead>
            <tbody>
            <?php foreach ($res as $row): ?>
					<tr>
						<td><?= $row->alumno; ?>	</td>
						<td><?= $row->nombre.' '.$row->apellido; ?></td>
						<td><?= $row->direccion; ?>	</td>
						<td><?= $row->movil; ?></td>
						<td><?= $row->email;?></td>
						<td><?= $row->fecha_creacion; ?></td>
						<td><?= $row->user; ?></td> 
						<td><?php if($row->inactivo == 0){ echo "Activo"; }else{ echo "Inactivo"; } ?></td>		
                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/eliminar/').$row->alumno; ?>"class="btn btn-danger"><ion-icon name="trash"></ion-icon></a></td>
                        <td style="text-align: center;"> <a href="<?php echo base_url('index.php/alumnosController/formActualiza/').$id=$row->alumno;?>"class="btn btn-warning"><ion-icon name="refresh"></ion-icon></a></td>
                        
				<?php endforeach ?>
            </tbody>
        
        </table>
    </div>

</div>
<!-- /.box -->