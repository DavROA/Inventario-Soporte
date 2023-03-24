<?php

include("../Controlador/Conexion.php");
    
function obtener_todos_registros(){
    include('../Controlador/Conexion.php');
    $stmt = $conexion->prepare("SELECT *FROM articulos"); 
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    return $stmt->rowCount();
}
    
    $query = '';
    $salida = array();   
    $query = "SELECT * from articulos";
    $columns = array('folio_art','nombre_art','modelo_art','marca_art','descripcion_art','numPoliza_art','categoria','estado');
 
    if(isset($_POST["search"]["value"])){
        $query .= 'where folio_art LIKE "%' . $_POST["search"]["value"] .'%" ';
        $query .= 'OR nombre_art LIKE "%' . $_POST["search"]["value"] .'%" ';
        $query .= 'OR modelo_art LIKE "%' . $_POST["search"]["value"] .'%" ';
        $query .= 'OR marca_art LIKE "%' . $_POST["search"]["value"] .'%" ';
        $query .= 'OR numPoliza_art LIKE "%' . $_POST["search"]["value"] .'%" ';
        $query .= 'OR categoria LIKE "%' . $_POST["search"]["value"] .'%" ';
        
    }  

    if(isset($_POST["order"])) {
        $query .= 'ORDER BY '.$columns[$_POST['order']['0']['column']] .' '.$_POST['order']['0']['dir'] .' ';
    }else{
        $query .= 'ORDER BY id DESC ';
    }
    
    if($_POST["length"] != -1){
        $query .= 'LIMIT ' .$_POST["start"]. ', ' .$_POST["length"];

    }

    $stmt = $conexion->prepare($query);
    $stmt->execute();
    $resultado = $stmt->fetchAll();
    $datos = array();
    $filtered_rows = $stmt->rowCount();
    foreach($resultado as $fila){
        
        $sub_array = array();
        $sub_array[] = $fila["folio"];
        $sub_array[] = $fila["nombre_art"];
        $sub_array[] = $fila["modelo_art"];
        $sub_array[] = $fila["marca_art"];
        $sub_array[] = $fila["descripcion_art"];
        $sub_array[] = $fila["numPoliza_art"];
        $sub_array[] = $fila["categoria"];
        $sub_array[] = '<div class="container px-4 text-center">
                            <div class="row g-2">
                                <div class="col-4">
                                    <form action="../pdfcta2.php" method="POST">
                                        <input type="hidden" name="id_inscrito" value="'.$fila["id"].'">
                                        <input type="hidden" value="generarPdf" name="valor">
                                        <button type="submit" class="btn btn-primary"><i class="bi bi-filetype-pdf"></i></button>
                                    </form>
                                </div>
                                <div class="col-4">
                                    <form action="../Vistas/cuentas.php" method="POST">
                                        <input type="hidden" name="id_inscrito" value="'.$fila["id"].'">
                                        <input type="hidden" value="editarinscrito" name="valor">
                                        <button type="submit"  class="btn btn-warning" ><i class="bi bi-pencil-square"></i></button>
                                    </form>
                                </div>
                                <div class="col-4">
                                    <button type="button" name="borrar" id="'.$fila["id"].'" class="btn btn-danger borrar"><i class="bi bi-trash"></i></button>
                                </div>
                            </div>
                        </div>';     

        $datos [] = $sub_array;
    }

    $salida = array(
        "draw"          => intval($_POST["draw"]),
        "recordsTotal"  => $filtered_rows,
        "recordsFiltered"   => obtener_todos_registros(),
        "data"              => $datos

    );

    echo json_encode($salida);
?>