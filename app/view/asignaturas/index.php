<h2>Listado de Estudiantes</h2>
<div class="container p-5">
    <div class="alert alert-primary">
        <a href="?modulo=estudiantes&accion=add" class="btn btn-primary">Ingresar</a>
    </div>    
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th>N</th>
                <th>Estudiantes</th>
                <th colspan="3">Notas</th>
                <th>Promedio</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php
                
               
                if(count($datos)>0){
                    $i=0;
                    foreach($datos as $registro){
                        $i++;
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $registro->nombre; ?></td>
                            <td><?php echo $registro->nombre; ?></td>
                            <td><?php echo $registro->nombre; ?></td>
                            <td><?php echo $registro->nombre; ?></td>
                            
                            <td class="<?php echo $clase; ?>">
                                <?php echo ''; ?>  
                            </td>
                            <td>
                                <a class="btn btn-warning" href="?modulo=estudiantes&accion=edit&id=<?php echo $registro->id; ?>">Editar</a>
                                <a class="btn btn-danger" href="?modulo=estudiantes&accion=delete&id=<?php echo $registro->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                        <?php
                    }
                }
                else{
                ?>
                <tr>
                    <td colspan="7">
                        <div class="alert alert-warning">
                            No se encontraron registros
                        </div>
                    </td>
                </tr>
                <?php
                }
            ?>            
        </tbody>    
    </table>    
</div>