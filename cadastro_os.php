<?php  require_once("Logic/cadastro_os.php");  ?>
      


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Ordem de Serviço</title>
    <style>
        .error{
            color: red;
        }

       .corgeral{
            color: #0e84b5;
        }
        input[name="tipo_aparelho"] {
        width: 30%;
        
        }
        input[name="nome_cliente"] {
        width: 50%;
        }

        input[name="marca"] {
        width: 50%;
        } 
        input[name="modelo"] {
        width: 50%;
        } 
        input[name="estado_equipamento"] {
        width: 50%;
        }   
        input[name="defeito"] {
        width: 30%;
        height: 100px;
                
        }   
        input[name="serial"] {
        width: 30%;
        }
        input[name="servico_os"] {
        width: 30%;
        height: 100px;
        }   
        input[name="pecas_os"] {
        width: 30%;
        
        }
        body {
            width: 95%;
            position: relative;
            background: -webkit-linear-gradient(#fff, #999);
  
} 

    </style>
    <div id="Menu">
    <?php  require_once("../menu.html");  ?> 

    </div>
</head>
<br><br><br><br><br><br>
<body>
    
<h1><i><u><span class="corgeral">Cadastro de Ordem de Serviço</span></h1><span class="corgeral"></span></body></u>
<i><u><span class="corgeral">Status Ordem de Serviço: </span></h1><span class="corgeral"></span></body></u>




<form method="POST" action="">
<select name="status_os">
    <option value="Aguardando Análise" > Aguardando Análise </option>
    <option value="Analisado" > Analisado </option>
    <option value="Aguardando Aprovação " > Aguardando Aprovação </option>
    <option value="Aprovado " > Aprovado </option>
    <option value="Em andamento " > Em Andamento </option>
    <option value="Pronto " > Pronto </option>
    <option value="Faturar " > Faturar </option>
    <option value="Finalizada " > Finalizada </option>
    
</select>


    

<p><u><i><b><span class="corgeral">Pesquise o cliente (Nome completo)</u></p>
        </span></b></i>
        <input type="text" name="busca_cliente" > 
        <button type="submit"> Verificar </button>

        <?php  require_once("Logic/busca_cliente_os.php");   ?>

        
     
    <input type="hidden" name="id_cliente" value="<?php echo $fetch['id'];  ?>" >
        
        

    <p><u><i><b><span class="corgeral">Nome Cliente</u></p>
        </span></b></i>
        <input type="text" name="nome_cliente" value="<?php echo $fetch['nome_cliente'];  ?>"> <br><br>
                     
        
    <u><i><b><span class="corgeral">Tipo do Aparelho</u></p>
        </span></b><span class="corgeral"></span></i>
        <p><input type="text" name="tipo_aparelho"></b> <br><br></p>

    <u><i><b><span class="corgeral">Estado Do Equipamento
        </span></b><br><br></i></u>
        <input  type="text" name="estado_equipamento"><br><br>
   
    <u><i><b><span class="corgeral">Marca</span></i></b><br>
    <input type="text" name="marca"></u> <br><br>


    <u><i><b><span class="corgeral">Modelo
        </span></b><span class="corgeral"></span></i><br>
        <input  type="text" name="modelo"></u></b><br><br>

    <u><i><b><span class="corgeral">Serial
        </span></b></i><br><br>
        <input type="text" name="serial"></u></b> <br><br>

        <u><i><b><span class="corgeral">Defeito
        </span></b></i><br><br>
        <textarea name="defeito" id="" cols="83" rows="3"></textarea></u></b><br><br>

    <u><i><b><span class="corgeral"> Acompanha carregador?
        </span></b><br><br></i></u>
        <input type="radio" name="carregador" value="Sim" > Sim
        <input type="radio" name="carregador"  value="Não"> Não <br><br>

        <u><i><b><span class="corgeral"> Acompanha cabo de força?
        </span></b><br><br></i></u>
        <input type="radio" name="cabo_forca" value="Sim" > Sim
        <input type="radio" name="cabo_forca"  value="Não"> Não<br><br>

        <u><i><b><span class="corgeral"> Acompanha bateria?
        </span></b><br><br></i></u>
        <input type="radio" name="bateria" value="Sim" > Sim
        <input type="radio" name="bateria"  value="Não"> Não<br><br>

        
       
       

    <u><i><b><span class="corgeral">Serviço a ser Realizado
        </span></b></i><br><br>
        <textarea name="servico_os" id="" cols="83" rows="3"></textarea></u></b><br><br>

    <u><i><b><span class="corgeral">Peças Usadas
        </span></b></i><br><br>
        <input type="text" name="pecas_os"></u></b><br><br>

        <u><i><b><span class="corgeral">Valor Total
        </span></b></i><br><br>
        <input type="text" name="valor_os" value="0,00"></u></b><br><br>

    


    <button name="cadastrado" type="submit"> Cadastrar </button>
     <a href="#">Retornar para clientes</a> 

    
</form>

</body>
</html>