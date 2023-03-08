<?php

 $matricula = $_POST["matricula"];
 $tipo_usuario = $_POST["tipo_usuario"];
 $nome_livro = $_POST["nome_livro"];
 $dia_entrega = $_POST["dia_entrega"];
 $entrega = $_POST["entrega"];

 $data_entrega = new DateTime($dia_entrega);
 $data_atual = new DateTime($entrega);
 $dias_atraso = $data_entrega->diff($data_atual)->format("%r%a");

 echo "<center> <h2> Recibo de Empréstimo </h2> </center>";
 echo "<p> Matrícula: $matricula </p>";
 echo "<p> Tipo de Usuário: $tipo_usuario </p>";
 echo "<p> Nome do Livro: $nome_livro </p>";
 echo "<p> Data de entrega acordada: $dia_entrega </p>";
 echo "<p> Data que realmente entregou: $entrega </p>";
 echo "<p> Valor da Multa: R$$dias_atraso </p>";

?>