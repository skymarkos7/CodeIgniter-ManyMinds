


<?php 
 $result = $this->PedidosModel->list_pedidos();
 $json = json_encode($result);
 echo($json);
?>


