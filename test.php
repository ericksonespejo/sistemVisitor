<?php while($row =mysqli_fetch_assoc($respuesta)){ ?> 
                        <tr>
                            <td><?php echo $row['fecha'] ?></td>
                            <td><?php echo $row['hora_ingreso'] ?></td>
                            <td><?php echo $row['nombre_apellido'] ?></td>
                            <td><?php echo $row['documento'] ?></td>
                            <td><?php echo $row['motivo_visita'] ?></td>
                            <td><?php echo $row['empleado_publico'] ?></td>
                            <td><?php echo $row['cargo'] ?></td>
                            <td><?php echo $row['oficina'] ?></td>
                            <td><?php echo $row['hora_salida'] ?></td>
                        </tr>
                        <?php } mysqli_free_result($resultadop);?>