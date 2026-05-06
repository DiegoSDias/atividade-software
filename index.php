<?php

$usuario = "Diego";
$data_atual = date("d/m/Y");

echo "<h1>Atividade de Versionamento - Sistemas de Informação</h1>";
echo "<p>Olá, <strong>$usuario</strong>! Este código foi enviado via Git.</p>";
echo "<p>Data do acesso: $data_atual</p>";

$status_projeto = "Em desenvolvimento";
echo "<p>Status do Repositório: <span style='color: green;'>$status_projeto</span></p>";
?>