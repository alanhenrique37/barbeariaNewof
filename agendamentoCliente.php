<?php
namespace PHP\Modelo\Tela;
require_once('DAO\Conexao.php');
require_once('DAO\Inserir.php');
use PHP\Modelo\DAO\Conexao;
use PHP\Modelo\Dao\Inserir;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    
    <!-- Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <style>
        /* Definindo a imagem de fundo */
        body {
            background-image: url('images/fundoLogin.jpg'); /* Caminho para a imagem */
            background-size: cover; /* Faz a imagem cobrir toda a tela */
            background-position: center; /* Alinha a imagem ao centro */
            background-attachment: fixed; /* Faz com que a imagem não se mova quando o usuário rolar a página */
            color: white; /* Cor do texto */
        }

        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: rgba(0, 0, 0, 0.8); /* Fundo branco com opacidade */
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            text-align: center;
            margin-bottom: 30px;
            background-color:rgba(0, 0, 0, 0);
            text-transform:Uppercase;
            font-family:'Montserrat';
            font-weight:bold;
            color: white;
            padding: 15px;
            border-radius: 10px;
        }
        .form-group {
            text-align: left;
            margin-bottom: 25px;
        }
        .btn-primary, .btn-ver-precos {
            background-color:rgb(0, 0, 0);
            border-color:rgb(0, 0, 0);
            font-size: 18px;
            padding: 12px;
            font-weight: bold;
            transition: 0.3s;
        }
        .btn-primary:hover, .btn-ver-precos:hover {
            background-color: #C1002D;
            border-color: #C1002D;
        }
        .table th {
            background-color: #D50032;
            color: black;
        }
        .logo-container {
            text-align: center;
            margin-bottom: 20px;
        }
        .logo-container img {
            max-width: 150px;
        }
        .btn-ver-precos {
            background-color: #D50032;
            border-color: #D50032;
            font-size: 16px; /* Reduzindo o tamanho da fonte */
            padding: 8px 16px; /* Reduzindo o padding do botão */
            font-weight: bold;
            transition: 0.3s;
            color: white !important; /* Forçando a cor branca */
            text-decoration: none;
        }

        .btn-ver-precos i {
            color: white !important; /* Garantindo que o ícone permaneça branco */
        }

        .btn-ver-precos:hover {
            background-color: #C1002D;
            border-color: #C1002D;
            color: white !important; /* Mantendo o texto branco no hover */
        }
    </style>
</head>
<body>
<a href="indexCadastrado.php"><button type="button" class="btn btn-danger" style="margin-top:15px; margin-left:15px; text-transform:none ">Voltar</button></a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 form-container">
            <!-- Espaço para logo -->
            <div class="logo-container">
                <img src="images/logobranca.png" alt="Logo da Barbearia">
            </div>

            <h2>Agendamento</h2>
            <form method="POST">
                <!-- Nome do cliente -->
                <div class="form-group">
                    <label for="lNome">Nome Completo</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                        </div>
                        <input name="tNome" type="text" class="form-control" id="tNome" placeholder="Digite seu nome" required>
                    </div>
                </div>

                <!-- Escolha do serviço -->
                <div class="form-group">
                    <label><i class="fas fa-cut"></i> Escolha seu serviço</label>
                    <select name="tServico" class="form-control" id="servico" required>
                        <option value="" disabled selected>Selecione um serviço</option>
                        <option value="Corte">Corte - R$ 30,00 (30 min)</option>
                        <option value="Corte+Barba">Corte e Barba - R$ 60,00 (45 min)</option>
                        <option value="Limpeza+Pele">Limpeza de Pele - R$ 25,00 (30 min)</option>
                        <option value="Alisamento">Alisamento - R$ 45,00 (20 min)</option>
                        <option value="Platinado">Platinado/Névoa - R$ 85,00 (30 min)</option>
                        <option value="Penteado">Penteado - R$ 35,00 (25 min)</option>
                        <option value="Pezinho">Perfil/Pezinho - R$ 10,00 (10 min)</option>
                        <option value="Corte+Limpeza">Corte + Limpeza de Pele - R$ 55,00 (1h)</option>
                        <option value="Corte+Luzes">Corte + Luzes - R$ 100,00 (1h30)</option>
                        <option value="Corte+Penteado">Corte + Penteado - R$ 65,00 (55 min)</option>
                        <option value="Luzes">Luzes - R$ 70,00 (1h)</option>
                        <option value="Progressiva">Progressiva - Preço varia (1h30)</option>
                        <option value="Corte+Alisamento">Corte + Alisamento - R$ 75,00 (50 min)</option>
                        <option value="Corte+Platinado">Corte + Platinado - R$ 115,00 (1h)</option>
                        <option value="Corte+Progressiva">Corte + Progressiva - Preço varia (2h)</option>
                        <option value="Barba">Barba - R$ 30,00 (15 min)</option>
                        <option value="Corte+Barba">Corte + Barba - R$ 60,00 (45 min)</option>
                        <option value="Corte+Barba+Alisante">Corte + Barba + Alisante - R$ 105,00 (1h5min)</option>
                        <option value="Coloracao">Coloração de Cabelo - R$ 20,00 (30 min)</option>
                    </select>
                </div>

                <!-- Nova opção de escolha de unidade -->
                <div class="form-group">
                    <label for="tUnidade"><i class="fas fa-building"></i> Em qual unidade você deseja agendar?</label>
                    <select name="tUnidade" class="form-control" id="unidade" required>
                        <option value="" disabled selected>Escolha a unidade</option>
                        <option value="Feltrins">Unidade Feltrins</option>
                        <option value="Vetorazzo">Unidade Vetorazzo</option>
                    </select>
                </div>

                <!-- Preferência de Barbeiro -->
                <div class="form-group">
                    <label for="tBarbeiro"><i class="fas fa-user-tie"></i> Você tem preferência de barbeiro?</label>
                    <select name="tBarbeiro" class="form-control" id="barbeiro" required>
                        <option value="" disabled selected>Selecione um barbeiro</option>
                        <option value="Renato">Renato</option>
                        <option value="Bryan">Bryan</option>
                        <option value="Jp">João Pedro</option>
                    </select>
                </div>

                <!-- Data e hora -->
                <div class="form-group">
                    <label for="tDataHora"><i class="fas fa-calendar-alt"></i> Data e Hora</label>
                    <input name="tDataHora" type="datetime-local" class="form-control" id="data-hora" required>
                </div>

                <!-- Forma de pagamento -->
                <div class="form-group">
                    <label for="tPagamento"><i class="fas fa-credit-card"></i> Forma de Pagamento</label>
                    <select name="tPagamento" class="form-control" id="pagamento" required>
                        <option value="" disabled selected>Escolha a forma de pagamento</option>
                        <option value="Cartao-Credito">Cartão de Crédito</option>
                        <option value="Pix">Pix</option>
                        <option value="Dinheiro">Dinheiro</option>
                    </select>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Agendar</button>
                <?php
                    $conexao = new Conexao();

                    if (isset($_POST['tNome']) && $_POST['tNome'] != 0) {
                        $nome = $_POST['tNome'];
                        $servico = $_POST['tServico'];
                        $unidade = $_POST['tUnidade'];
                        $barbeiro = $_POST['tBarbeiro'];
                        $diaehora = $_POST['tDataHora'];
                        $pagamento = $_POST['tPagamento'];

                        $inserir = new Inserir();
                        $resultado = $inserir->cadastrarAgendamento($conexao, $nome, $servico, $unidade, $barbeiro, $diaehora, $pagamento);

                        // Adicionando uma variável para indicar sucesso no agendamento
                        if ($resultado) {
                            echo "<script type='text/javascript'>
                                    alert('Agendamento confirmado com sucesso!');
                                    window.location.href = 'indexCadastrado.php';
                                  </script>";
                        } else {
                            echo "<script type='text/javascript'>
                                    alert('Agendamento confirmado com sucesso!');
                                    window.location.href = 'indexCadastrado.php';
                                  </script>";
                        }
                    }
                ?>
            </form>
        </div>
    </div>
</div>

<!-- Scripts do Bootstrap -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Validação do Agendamento -->
<script>
    // Função para verificar a data e hora
    function validarAgendamento() {
        var dataHora = document.getElementById('data-hora').value;
        
        // Se o campo de data e hora estiver vazio, não faz validação
        if (!dataHora) {
            alert('Por favor, selecione uma data e hora.');
            window.location.href = 'agendamentoCliente.php'; // Redireciona para a página
            return false;
        }

        var data = new Date(dataHora);
        
        // Verificando se é segunda-feira ou domingo
        var diaSemana = data.getDay(); // 0 = Domingo, 1 = Segunda-feira
        if (diaSemana === 0 || diaSemana === 1) {
            alert('Não é permitido agendar para domingos ou segundas-feiras.');
            window.location.href = 'agendamentoCliente.php'; // Redireciona para a página
            return false;
        }

        // Verificando se é após as 18h
        var hora = data.getHours();
        if (hora >= 18) {
            alert('Não é permitido agendar após as 18h.');
            window.location.href = 'agendamentoCliente.php'; // Redireciona para a página
            return false;
        }

        // Se tudo estiver ok, retorna true para permitir o envio do formulário
        return true;
    }

    // Adicionando o evento de validação no envio do formulário
    document.querySelector('form').onsubmit = function() {
        return validarAgendamento();
    };
</script>

</body>
</html>
