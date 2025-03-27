<?php
    namespace PHP\Modelo\Dao;
    require_once('Conexao.php');
    use PHP\Modelo\DAO\Conexao;
    class Consultar{
        function consultarAgendamentoNome(Conexao $conexao){
            try{
                $conn = $conexao->conectar();
                $sql = "select nome from agendamento";
                $result = mysqli_query($conn,$sql);
                $msg = "";
                while($dados = mysqli_fetch_Array($result)){
                    if($dados['nome'] == $nome){
                        $msg .= "<br>".$dados['nome'];  
                    }
                    return $msg;
                }//fim do while
 
            }catch(Except $erro){
                echo $erro;
            }
        }//fim do consultarAgendamento


    }
 
?>