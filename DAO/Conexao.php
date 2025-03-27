<?php
namespace PHP\Modelo\Dao;
 
class Conexao{
    function conectar(){
        try{
        $conn = mysqli_connect('localhost', 'root', '','formulario-gustavo');
        if($conn){
            echo "";
            return $conn;
        }
        echo "<br> Algo deu errado!";
    }catch(Excepet $erro){
        return "Algo deu errado!<br><br>".$erro;
    }
}
}//fim da class
 
?>