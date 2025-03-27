<?php
// Inicia a sessão e inclui o arquivo de configuração do banco de dados
session_start();
include_once('config.php');

// Verifica se o nome foi passado pela URL
if (isset($_GET['nome'])) {
    $nome = $_GET['nome'];

    // Cria a consulta SQL para excluir o agendamento com o nome fornecido
    $sql = "DELETE FROM agendamento WHERE nome = ?";

    // Prepara a consulta
    if ($stmt = $conexao->prepare($sql)) {
        // Liga o parâmetro do nome ao SQL
        $stmt->bind_param("s", $nome);  // "s" para string

        // Executa a consulta
        if ($stmt->execute()) {
            // Redireciona para a página de agendamentos após a exclusão
            header("Location: verAgendamentos.php");
            exit();
        } else {
            // Exibe um erro se a consulta falhar
            die("Erro ao excluir o agendamento: " . $stmt->error);
        }
    } else {
        // Exibe um erro se não for possível preparar a consulta
        die("Erro ao preparar a consulta SQL: " . $conexao->error);
    }
} else {
    // Se o nome não for fornecido, redireciona de volta à página de agendamentos
    header("Location: verAgendamentos.php");
    exit();
}
?>
