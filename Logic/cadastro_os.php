<?php 
        
$fetch['id'] = NULL;
$fetch['nome_cliente'] = NULL;

    
          
        if(isset($_POST['cadastrado'])){
            if (empty($_POST['carregador'])){
                echo "<script>alert('Opção de carregador não selecionada');</script>";
                die('<script>
                    window.history.back()
                </script>');
            }
            if (empty($_POST['cabo_forca'])){
                echo "<script>alert('Opção de Cabo de Força não selecionada');</script>";
                die('<script>
                   window.history.back()
                </script>');
            }
            if (empty($_POST['bateria'])){
                echo "<script>alert('Opção de Bateria não selecionada');</script>";
                die('<script>
                window.history.back()
                </script>');
            }

            if (!empty(($_POST['carregador']))) {
                if ($_POST['carregador'] != "Sim" && $_POST['carregador'] != "Não") {
                        echo "<script>alert('ERRO INTERNO.');</script>";
                        die("<SCRIPT LANGUAGE='JavaScript'>
                        window.location.href='cadastro_os.php';
                        </SCRIPT>");
                }
            }
                if(!empty(($_POST['cabo_forca']))){
                    if ($_POST['cabo_forca'] != "Sim" && $_POST['cabo_forca'] != "Não") {
                        echo "<script>alert('ERRO INTERNO.');</script>";
                        die("<SCRIPT LANGUAGE='JavaScript'>
                        window.location.href='cadastro_os.php';
                        </SCRIPT>");
                    }
                }
                if(!empty(($_POST['carregador']))){
                    if ($_POST['carregador'] != "Sim" && $_POST['carregador'] != "Não") {
                        echo "<script>alert('ERRO INTERNO.');</script>";
                        die("<SCRIPT LANGUAGE='JavaScript'>
                        window.location.href='cadastro_os.php';
                        </SCRIPT>");
                    }
            }

            
    
                    
        
    
        //Inserir dados no SQL

        $id_cliente = $_POST['id_cliente'];
        $nome_cliente = $_POST['nome_cliente'];
        $tipo_aparelho = $_POST['tipo_aparelho'];
        $estado_equipamento = $_POST['estado_equipamento'];
        $marca =  $_POST['marca'];
        $modelo = $_POST['modelo'];
        $serial = $_POST['serial'];
        $defeito = $_POST['defeito'];
        $carregador = $_POST['carregador'];
        $bateria = $_POST['bateria'];
        $cabo_forca = $_POST['cabo_forca'];
        $servico_os = $_POST['servico_os'];
        $pecas_os = $_POST['pecas_os'];
        $valor_os = $_POST['valor_os'];
        $status_os = $_POST['status_os'];

        $sql_input = "INSERT INTO ordem_de_servico 
        (id_cliente, nome_cliente, tipo_aparelho, estado, marca, modelo, serial_equipamento, defeito, carregador,           
        bateria, cabo_forca, servico, pecas, valor, status_os) VALUES ('$id_cliente','$nome_cliente',' $tipo_aparelho','$estado_equipamento', '$marca',
        '$modelo','$serial', '$defeito',' $carregador','$bateria', '$cabo_forca', '$servico_os', 
        '$pecas_os', '$valor_os', '$status_os')" ;

        $exec_query = $mysqli -> query($sql_input);
        
        if($exec_query){

            echo  "<script>alert('Ordem de serviço cadastrada com sucesso');</script>";
            unset($_POST);
            echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.location.href='  list_os.php';
            </SCRIPT>");
        }
        if(!$exec_query){

            echo  "<script>alert('Erro');</script>". $mysqli -> error;
            
            die();
        }         

         //Inserir dados no SQL
        }
        

        
        
        ?>