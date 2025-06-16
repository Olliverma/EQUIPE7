<?php
require('conn.php');
session_start();

// Bloquear acesso se não for jardineiro
if (!isset($_SESSION['usuario_email']) || $_SESSION['usuario_tipo'] !== 'jardineiro') {
  exit('Acesso negado');
}

$sql = "SELECT * FROM pedidos";
$result = mysqli_query($conn, $sql);

$html = '';

while ($pedido = mysqli_fetch_assoc($result)) {
  $html .= '<tr>';
  $html .= '<td>' . htmlspecialchars($pedido['nome']) . '</td>';
  $html .= '<td>' . htmlspecialchars($pedido['localidade']) . '</td>';
  $html .= '<td>' . htmlspecialchars($pedido['tipo_servico']) . '</td>';
  $html .= '<td>' . htmlspecialchars($pedido['detalhes']) . '</td>';
  $html .= '<td>';

  if ($pedido['status'] === 'Aceito') {
    $html .= '<span class="badge-status badge-aceito me-2">Aceito</span>';
    $html .= '<form method="POST" action="processar_pedido.php" class="d-inline">
                <input type="hidden" name="pedido_id" value="' . $pedido['id'] . '">
                <input type="hidden" name="acao" value="apagar">
                <button type="submit" class="btn btn-secondary btn-sm">Apagar</button>
              </form>';
  } elseif ($pedido['status'] === 'Recusado') {
    $html .= '<span class="badge-status badge-recusado me-2">Recusado</span>';
    $html .= '<form method="POST" action="processar_pedido.php" class="d-inline">
                <input type="hidden" name="pedido_id" value="' . $pedido['id'] . '">
                <input type="hidden" name="acao" value="apagar">
                <button type="submit" class="btn btn-secondary btn-sm">Apagar</button>
              </form>';
  } else {
    // Se ainda não foi aceito ou recusado, mostrar os botões de ação
    $html .= '<form method="POST" action="processar_pedido.php" class="d-inline me-2">
                <input type="hidden" name="pedido_id" value="' . $pedido['id'] . '">
                <input type="hidden" name="acao" value="aceitar">
                <button type="submit" class="btn btn-success btn-sm">Aceitar</button>
              </form>';

    $html .= '<form method="POST" action="processar_pedido.php" class="d-inline">
                <input type="hidden" name="pedido_id" value="' . $pedido['id'] . '">
                <input type="hidden" name="acao" value="recusar">
                <button type="submit" class="btn btn-danger btn-sm">Recusar</button>
              </form>';
  }

  $html .= '</td></tr>';
}

echo $html;
?>
