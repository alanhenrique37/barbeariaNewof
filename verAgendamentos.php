<?php
    session_start();
    include_once('config.php');
  
    if(!empty($_GET['search'])) {
        $data = $_GET['search'];
        $sql = "SELECT * FROM agendamento WHERE nome LIKE '%$data%' OR servico LIKE '%$data%' ORDER BY diaehora DESC"; // Ordenar por data e hora
    } else {
        $sql = "SELECT * FROM agendamento ORDER BY diaehora DESC"; // Ordena por data e hora
    }

    // Verifique se a consulta foi bem-sucedida
    $result = $conexao->query($sql);

    if (!$result) {
        // Exibe um erro detalhado caso a consulta falhe
        die("Erro na consulta SQL: " . $conexao->error);
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamentos</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }
        th {
            background-color: #ff0000;
            color: white;
            font-size: 18px;
        }
        tr:hover {
            background-color: #f1f1f1;
        }
        .btn {
            padding: 10px 15px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }
        .btn-edit {
            background-color: #ffa500;
            color: white;
        }
        .btn-delete {
            background-color: #f44336;
            color: white;
        }
        .btn-add {
            background-color: #ff0000;
            color: white;
            margin-bottom: 20px;
        }

        .action-buttons {
            text-align: right;
        }

        /* Modal de confirmação */
        .modal {
            display: none; 
            position: fixed; 
            z-index: 1; 
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4); 
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
        }

        .modal-header {
            font-size: 20px;
        }

        .modal-footer {
            display: flex;
            justify-content: space-between;
        }

        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<nav>
    <input type="checkbox" id="check">
    <label for="check" class="checkbtn">
        <i class="fas fa-bars"></i>
    </label>
    <label class="logo"><a href="index.php" class="aLogo">Neguinho Corts</a></label>
    <ul>
        <li><a href="indexFuncionario.php">Página Principal</a></li>
        <li><a href="cadastrofuncionario.php">Cadastrar Funcionários</a></li>
        <li><a class="active" href="verAgendamentos.php">Ver Agendamentos</a></li>
        <li><a href="sair.php">Sair</a></li>
    </ul>
</nav>

<div class="container">
    <h2 class="titulo" style="margin-top:80px">AGENDAMENTOS</h2>

    <table id="myTable">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Serviço</th>
                <th>Barbeiro</th>
                <th>Data e Hora</th>
                <th>Forma de Pagamento</th>
                <th>Unidade</th>
                <th>Status de Pagamento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php
            // Preencher as linhas da tabela com os dados do banco
            while($row = $result->fetch_assoc()) {
                $nome = $row['nome'];
                $servico = $row['servico'];
                $barbeiro = $row['barbeiro'];
                $dataehora = date('d/m/Y H:i', strtotime($row['diaehora'])); // Formatando a data e hora
                $pagamento = $row['pagamento'];
                $unidade = $row['unidade'];
            ?>
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $servico; ?></td>
                <td><?php echo $barbeiro; ?></td>
                <td><?php echo $dataehora; ?></td>
                <td><?php echo $pagamento; ?></td>
                <td><?php echo $unidade; ?></td>
                <td>
                    <i class="fas fa-times status-icon" onclick="togglePaymentStatus(this)" style="color: red;"></i>
                </td>
                <td class="action-buttons">
                    <!-- Alterando para passar 'nome' como parâmetro -->
                    <button class="btn btn-sm btn-delete" onclick="openModal('<?php echo $row['nome']; ?>')">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</div>

<!-- Modal de confirmação -->
<div id="confirmDeleteModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <span class="close" onclick="closeModal()">&times;</span>
            <h2>Confirmação</h2>
        </div>
        <div class="modal-body">
            <p>Tem certeza de que deseja excluir este agendamento?</p>
        </div>
        <div class="modal-footer">
            <button class="btn btn-sm btn-delete" id="confirmDeleteBtn">Sim, excluir</button>
            <button class="btn btn-sm" onclick="closeModal()">Cancelar</button>
        </div>
    </div>
</div>

<script>
    let nomeToDelete = null; // Variável para armazenar o nome do agendamento a ser deletado

    // Função para abrir o modal
    function openModal(nome) {
        nomeToDelete = nome;
        document.getElementById('confirmDeleteModal').style.display = "block";
    }

    // Função para fechar o modal
    function closeModal() {
        document.getElementById('confirmDeleteModal').style.display = "none";
    }

    // Função para confirmar a exclusão
    document.getElementById('confirmDeleteBtn').addEventListener('click', function() {
        if (nomeToDelete) {
            window.location.href = "delete.php?nome=" + nomeToDelete;
        }
    });

    // Fechar o modal se o usuário clicar fora dele
    window.onclick = function(event) {
        if (event.target == document.getElementById('confirmDeleteModal')) {
            closeModal();
        }
    }

   
    function togglePaymentStatus(icon) {
        if (icon.classList.contains("fa-times")) {
            icon.classList.remove("fa-times");
            icon.classList.add("fa-check");
            icon.style.color = "green";
        } else {
            icon.classList.remove("fa-check");
            icon.classList.add("fa-times");
            icon.style.color = "red";
        }
    }
</script>
</body>
</html>
