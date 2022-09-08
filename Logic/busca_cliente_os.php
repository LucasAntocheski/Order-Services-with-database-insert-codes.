
<?php
    if(!isset($_POST['busca_cliente'])){
        die();
    }
    if(isset($_POST['busca_cliente'])){
       

        $nome = $mysqli -> escape_string( $_POST['busca_cliente']);
        $code_sql = "SELECT nome_cliente, id FROM cliente WHERE nome_cliente LIKE '$nome'";
        $consultasituacao = "SELECT situacao FROM cliente WHERE nome_cliente LIKE '$nome';";
        $exec_code = $mysqli -> query($code_sql) or $mysqli -> error;
        $execconsulta = $mysqli -> query($consultasituacao) or $mysqli -> error;
       
       
       
        
 
   if($consulta = $execconsulta -> fetch_assoc()){
        
        if($consulta['situacao'] == "Inativo"){

        echo "Cliente cadastrado(✔), porem inativado (x) "  . $mysqli -> error. '<a href="/erp/ver_clientes/clientes.php">Ver Clientes</a>';
        die();
}
   }
   
    if(empty($nome)){
        echo "nome vazio";
        die();
    }
    if($fetch = $exec_code -> fetch_assoc ())
    {
        echo "Cliente cadastrado(✔) "  . $mysqli -> error ;
        
    }
    if($fetch == 0){
        
        echo "cliente não cadastrado no sistema (x) . cadastre aqui:". '<a href="../botao_float.php?#openModal">Cadastrar</a>';
        
        die();
    }

    
}

    ?>

    