<?php
    namespace PHP\Modelo\DAO;
    require_once("Conexao.php");
    use \PHP\Modelo\DAO\Conexao;

    class Inserir{
        function cadastrarAgendamento(Conexao $conexao, string $nome, string $servico, string $unidade, string $barbeiro, string $diaehora, string $pagamento){
            try{
                $conn = $conexao->conectar();//Abrir o banco
                $sql = "Insert into agendamento(nome, servico, unidade, barbeiro, diaehora, pagamento)
                values('$nome','$servico','$unidade','$barbeiro','$diaehora','$pagamento')";
                $result = mysqli_query($conn, $sql);
                mysqli_close($conn);
                //verificar o resultado
                if($result){
                    return "";
                }
                return "";
            }
            catch(Except $erro){
                return"<br><br>Algo deu errado!".$erro;
            }

        }//fim do método

    }//Fim da classe
                     

?>