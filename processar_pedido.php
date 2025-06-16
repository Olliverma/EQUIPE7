<?php
require('conn.php');
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $pedido_id = intval($_POST['pedido_id']);
  $acao = $_POST['acao'];

  if ($acao === 'aceitar') {
    $sql = "UPDATE pedidos SET status='Aceito' WHERE id=$pedido_id";
    mysqli_query($conn, $sql);
  } elseif ($acao === 'recusar') {
    $sql = "UPDATE pedidos SET status='Recusado' WHERE id=$pedido_id";
    mysqli_query($conn, $sql);
  } elseif ($acao === 'apagar') {
    $sql = "DELETE FROM pedidos WHERE id=$pedido_id";
    mysqli_query($conn, $sql);
  }
}

header("Location: jardineiro.php");
exit();
?>
