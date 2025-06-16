<?php
require ('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="teste.php" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-6 max-w-3xl mx-auto mb-16">
    <?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {


  
  


  if(isset($_POST['but'])){
    $nome = $_POST['nome'];
    $localidade = $_POST['localidade'];
    $tipo_servico = $_POST['tipo'];
    $detalhes = $_POST['localidade'];
    $sql = "INSERT INTO usuarios (email, senha, tipo, localidade) VALUES ('$nome', '$localidade', '$tipo_servico', '$detalhes')";
    $conn->query($sql); 
    header("Location: index.php");
  }

}
  ?>
      <input
        type="text"
        name="nome"
        placeholder="Seu nome"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500"
      />
      <input
        type="text"
        name="localidade"
        placeholder="Localidade"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400"
      />
      <select
        name="tipo_servico"
        required
        class="p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400"
      >
        <option value="" disabled selected>Tipo de Serviço</option>
        <option value="corte_grama">Corte de Grama</option>
        <option value="poda_arbustos">Poda de Arbustos</option>
        <option value="plantio">Plantio de Flores/Plantas</option>
        <option value="limpeza_area">Limpeza de Área</option>
        <option value="outros">Outros</option>
      </select>
    
      <textarea
        name="detalhes"
        rows="4"
        placeholder="Descreva o serviço desejado"
        required
        class="md:col-span-2 p-4 border border-gray-300 rounded-lg focus:outline-green-500 focus:ring-2 focus:ring-green-400 resize-none"
      ></textarea>
      <button
        name="but"
        type="submit"
        class="md:col-span-2 bg-green-600 hover:bg-green-700 text-white font-semibold py-4 rounded-lg transition duration-300"
      >
        Solicitar Serviço
      </button>
    </form>
</body>
</html>