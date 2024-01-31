<?php
  session_start();

  // se não existir uma sessão na variavel true // isso impede que o usuario acesse paginas sem estar logado
  if((!isset($_SESSION['email']) == true) and (!isset ($_SESSION['senha']) == true)){
     
      unset($_SESSION['email']);
      unset($_SESSION['senha']);

      // forçando ele a logar
      header('Location: login.php');

  }
  $logado = $_SESSION['email'];
//Se eu clicar no botão vai existir uma variavel SUBMIT, ele salva no banco de dado.
    if(isset($_POST['submit1'])){
        
        $personagem = $_POST['nomePersonagem'];
        $idade = $_POST['idadePersonagem'];
        $altura = $_POST['alturaPersonagem'];
        $origem = $_POST['origemPersonagem']; 
        
        $for = $_POST['for'];
        $int = $_POST['int'];
        $pre = $_POST['pre'];
        $agi = $_POST['agi'];
        $vig = $_POST['vig']; 

        $acrobacia = $_POST['acrobacia'];
        $adestramento = $_POST['adestramento'];
        $artes = $_POST['artes'];
        $atletismo = $_POST['atletismo'];
        $atualidades = $_POST['atualidades'];
        $ciencias = $_POST['ciencias'];
        $crime = $_POST['crime'];
        $diplomacia = $_POST['diplomacia'];
        $enganacao = $_POST['enganacao'];
        $fortitude = $_POST['fortitude'];
        $furtividade = $_POST['furtividade'];
        $iniciativa = $_POST['iniciativa'];
        $intimidacao = $_POST['intimidacao'];
        $intuicao = $_POST['intuicao'];
        $investigacao = $_POST['investigacao'];
        $luta = $_POST['luta'];
        $medicina = $_POST['medicina'];
        $ocultismo = $_POST['ocultismo'];
        $percepcao = $_POST['percepcao'];
        $pilotagem = $_POST['pilotagem'];
        $pontaria = $_POST['pontaria'];
        $qualProfissao = $_POST['qualProfissao'];
        $profissao = $_POST['profissao'];
        $reflexos = $_POST['reflexos'];
        $religiao = $_POST['religiao'];
        $sobrevivencia = $_POST['sobrevivencia'];
        $tatica = $_POST['tatica'];
        $tecnologia = $_POST['tecnologia'];
        $vontade = $_POST['vontade'];
        
        $vidaMax = $_POST['vidaMax'];
        $vidaMin = $_POST['vidaMin'];
        $saniMax = $_POST['saniMax'];
        $saniMin = $_POST['saniMin'];
        $esforMax = $_POST['esforMax'];
        $esforMin = $_POST['esforMin']; 

        $resFisica = $_POST['resFisica'];
        $resBalistica = $_POST['resBalistica'];
        $resSanidade = $_POST['resSanidade'];

        $passiva = $_POST['passiva'];
        $esquiva = $_POST['esquiva']; 

        $arma1 = $_POST['arma1'];
        $arma2 = $_POST['arma2'];
        $arma3 = $_POST['arma3'];
        $arma4 = $_POST['arma4'];
        $arma5 = $_POST['arma5']; 

        $item1 = $_POST['item1']; 
        $item2 = $_POST['item2']; 
        $item3 = $_POST['item3']; 
        $item4 = $_POST['item4']; 
        $item5 = $_POST['item5']; 
        $item6 = $_POST['item6']; 
        $item7 = $_POST['item7']; 
        $item8 = $_POST['item8']; 
        
        $info1 = $_POST['info1']; 
        $info2 = $_POST['info2']; 
        $info3 = $_POST['info3']; 
        $info4 = $_POST['info4']; 
        $info5 = $_POST['info5']; 
        $info6 = $_POST['info6']; 
        $info7 = $_POST['info7']; 
        $info8 = $_POST['info8']; 

        $espaco1 = $_POST['espaco1']; 
        $espaco2 = $_POST['espaco2']; 
        $espaco3 = $_POST['espaco3']; 
        $espaco4 = $_POST['espaco4']; 
        $espaco5 = $_POST['espaco5']; 
        $espaco6 = $_POST['espaco6']; 
        $espaco7 = $_POST['espaco7']; 
        $espaco8 = $_POST['espaco8']; 

         
        $peso1 = $_POST['peso1']; 
        $peso2 = $_POST['peso2']; 
        $peso3 = $_POST['peso3']; 
        $peso4 = $_POST['peso4']; 
        $peso5 = $_POST['peso5']; 
        $peso6 = $_POST['peso6']; 
        $peso7 = $_POST['peso7']; 
        $peso8 = $_POST['peso8']; 

        $textoCaract = $_POST['textoCaract']; 
        $textohabi = $_POST['textohabi']; 


        
            // eu verifico se o site esta conectado ao banco
            include_once('config.php');


            $dbEmail = '';
            $dbId = '';

            $result_usuario = "SELECT id, email FROM tbl_jogador";
            $resultado_usuario = mysqli_query($conexao, $result_usuario);

            if (($resultado_usuario) AND ($resultado_usuario->num_rows != 0 )){
                while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
                    //echo $row_usuario ['usuario'] . "<br>";
                    //echo $row_usuario ['email'] . "<br>";
                    //echo $logado . "<br>";
                     if ($logado == $row_usuario ['email']){
                        //echo "Sim quem está logado: " , $logado , " é igual à quem está no banco de dados: " , $row_usuario ['email'] . "<br>"; 
        
                        // armazenando na variavel global
                        $dbId = $row_usuario ['id'];
                        $dbEmail = $row_usuario ['email'];
                        //echo($dbId . $dbEmail);

                            $sql = "UPDATE `mydb`.`tbl_jogador` 
                            SET `jogador` = '$personagem', `idade` = '$idade', `altura` = '$altura', `origem` = '$origem',  
                                `for` = '$for', `int` = '$int', `pre` = '$pre', `agi` = '$agi', `vig` = '$vig', `acrobacia` = '$acrobacia', 
                                `adestramento` = '$adestramento', `artes` = '$artes', `atletismo` = '$atletismo', `artes` = '$artes', 
                                `atletismo` = '$atletismo', `atualidades` = '$atualidades', `ciencias` = '$ciencias', `crime` = '$crime', 
                                `diplomacia` = '$diplomacia', `enganacao` = '$enganacao', `fortitude` = '$fortitude', `furtividade` = '$furtividade', 
                                `iniciativa` = '$iniciativa', `intimidacao` = '$intimidacao', `intuicao` = '$intuicao', `investigacao` = '$investigacao', 
                                `luta` = '$luta', `medicina` = '$medicina', `ocultismo` = '$ocultismo', `percepcao` = '$percepcao', `pilotagem` = '$pilotagem', 
                                `pontaria` = '$pontaria',  `qualProfissao` = '$qualProfissao',  `profissao` = '$profissao',  `reflexos` = '$reflexos',
                                `religiao` = '$religiao', `sobrevivencia` = '$sobrevivencia', `tatica` = '$tatica', `tecnologia` = '$tecnologia', `vontade` = '$vontade',
                                `vidaMax` = '$vidaMax', `vidaMin` = '$vidaMin', `saniMax` = '$saniMax', `saniMin` = '$saniMin', `esforMax` = '$esforMax', 
                                `esforMin` = '$esforMin', `resFisica` = '$resFisica', `resBalistica` = '$resBalistica', `resSanidade` = '$resSanidade',
                                `passiva` = '$passiva', `esquiva` = '$esquiva', 
                                `arma1` = '$arma1', `arma2` = '$arma2', `arma3` = '$arma3', `arma4` = '$arma4', `arma5` = '$arma5', 
                                `item1` = '$item1', `item2` = '$item2', `item3` = '$item3', `item4` = '$item4', `item5` = '$item5', `item6` = '$item6', `item7` = '$item7',`item8` = '$item8', 
                                `info1` = '$info1', `info2` = '$info2', `info3` = '$info3', `info4` = '$info4', `info5` = '$info5', `info6` = '$info6', `info7` = '$info7',`info8` = '$info8', 
                                `espaco1` = '$espaco1', `espaco2` = '$espaco2', `espaco3` = '$espaco3', `espaco4` = '$espaco4', `espaco5` = '$espaco5', `espaco6` = '$espaco6', `espaco7` = '$espaco7',`espaco8` = '$espaco8', 
                                `peso1` = '$peso1', `peso2` = '$peso2', `peso3` = '$peso3', `peso4` = '$peso4', `peso5` = '$peso5', `peso6` = '$peso6', `peso7` = '$peso7', `peso8` = '$peso8', 
                                `textoCaract` = '$textoCaract', `textohabi` = '$textohabi'
                                WHERE (`id` = '$dbId')";
                                
                            $retorno = $conexao->query($sql);
                     
                     }else{
        
                     }
                    
                }   
        
            }else{
                echo "nenhum valor encontrado";
            }
  
    }
    
    $dbEmail = '';
    $dbId = '';
    $jogador = '';
    
    $idade = '';
    $altura = '';
    $origem = ''; 

    $for = '';
    $int = '';
    $pre = '';
    $agi = '';
    $vig = ''; 

    $acrobacia = '';
    $adestramento = '';
    $artes = '';
    $atletismo = '';
    $atualidades = '';
    $ciencias = '';
    $crime = '';
    $diplomacia = '';
    $enganacao = '';
    $fortitude = '';
    $furtividade  = '';
    $iniciativa = '';
    $intimidacao = '';
    $intuicao = '';
    $investigacao = '';
    $luta = '';
    $medicina = '';
    $ocultismo = '';
    $percepcao = '';
    $pilotagem = '';
    $pontaria = '';
    $profissao = '';
    $qualProfissao = '';
    $reflexos = '';
    $religiao = '';
    $sobrevivencia = '';
    $tatica = '';
    $tecnologia = '';
    $vontade = '';

   
    $vidaMax = '';
    $vidaMin = '';
    $saniMax = '';
    $saniMin = '';
    $esforMax = '';
    $esforMin = '';
    $esforcoPre = '';

    $resFisica = '';
    $resBalistica = '';
    $resSanidade = '';

    $passiva = '';
    $passivaAgi = '';
    $esquiva = '';
    $esquivaReflexo = '';

    $arma1 = '';
    $arma2 = '';
    $arma3 = '';
    $arma4 = '';
    $arma5 = '';

    $item1 = '';
    $item2 = '';
    $item3 = '';
    $item4 = '';
    $item5 = '';
    $item6 = '';
    $item7 = '';
    $item8 = '';
    
    $info1 = ''; 
    $info2 = '';
    $info3 = '';
    $info4 = '';
    $info5 = '';
    $info6 = '';
    $info7 = ''; 
    $info8 = '';

    $espaco1 = '0';
    $espaco2 = '0';
    $espaco3 = '0';
    $espaco4 = '0';
    $espaco5 = '0'; 
    $espaco6 = '0';
    $espaco7 = '0';
    $espaco8 = '0';
    $somaEspaco ='';
    $somaEspaco2 ='';

    $resut_soma2 = '';

    $peso1 = '0';
    $peso2 = '0';
    $peso3 = '0';
    $peso4 = '0';
    $peso5 = '0';
    $peso6 = '0';
    $peso7 = '0';
    $peso8 = '0';
    $somaPeso = '';
    $somaPeso2 = '';
    $resut_soma = '';

    $numero = '';

    $textoCaract = '';
    $textohabi = '';

    if(isset($_POST['submit2'])){
                include_once('config.php');

                    $result_usuario = "SELECT * FROM tbl_jogador";
                    $resultado_usuario = mysqli_query($conexao, $result_usuario);
        
                    if (($resultado_usuario) AND ($resultado_usuario->num_rows != 0 )){
                        while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){

                              /*echo $row_usuario ['id'] . "<br>";
                                echo $row_usuario ['email'] . "<br>";
                                echo $logado . "<br>";*/
                            if ($logado == $row_usuario ['email']){

                                $dbEmail = $row_usuario ['email'];
                                $dbId = $row_usuario ['id'];

                                $jogador = $row_usuario ['jogador'];
                                $idade = $row_usuario ['idade'];
                                $altura = $row_usuario ['altura'];
                                $origem = $row_usuario ['origem'];

                                $for = $row_usuario ['for'];
                                $int = $row_usuario ['int'];
                                $pre = $row_usuario ['pre'];
                                $agi = $row_usuario ['agi'];
                                $vig = $row_usuario ['vig'];

                                $acrobacia = $row_usuario ['acrobacia'];
                                $adestramento = $row_usuario ['adestramento'];
                                $artes = $row_usuario ['artes'];
                                $atletismo = $row_usuario ['atletismo'];
                                $atualidades = $row_usuario ['atualidades'];
                                $ciencias = $row_usuario ['ciencias'];
                                $crime = $row_usuario ['crime'];
                                $diplomacia = $row_usuario ['diplomacia'];
                                $enganacao = $row_usuario ['enganacao'];
                                $fortitude = $row_usuario ['fortitude'];
                                $furtividade  = $row_usuario ['furtividade'];
                                $iniciativa = $row_usuario ['iniciativa'];
                                $intimidacao = $row_usuario ['intimidacao'];
                                $intuicao =  $row_usuario ['intuicao'];
                                $investigacao =  $row_usuario ['investigacao'];
                                $luta =  $row_usuario ['luta'];
                                $medicina =  $row_usuario ['medicina'];
                                $ocultismo = $row_usuario ['ocultismo'];
                                $percepcao =  $row_usuario ['percepcao'];
                                $pilotagem = $row_usuario ['pilotagem'];
                                $pontaria = $row_usuario ['pontaria'];
                                $profissao = $row_usuario ['profissao'];
                                $qualProfissao = $row_usuario ['qualProfissao'];
                                $reflexos = $row_usuario ['reflexos'];
                                $religiao = $row_usuario ['religiao'];
                                $sobrevivencia = $row_usuario ['sobrevivencia'];
                                $tatica = $row_usuario ['tatica'];
                                $tecnologia = $row_usuario ['tecnologia'];
                                $vontade = $row_usuario ['vontade'];

                                $vidaMax = $row_usuario['vidaMax'];
                                $vidaMin = $row_usuario['vidaMin'];
                                $saniMax = $row_usuario['saniMax'];
                                $saniMin = $row_usuario['saniMin'];
                                $esforMax = $row_usuario['esforMax'];
                                $esforMin = $row_usuario['esforMin']; 
                        
                                $resFisica = $row_usuario['resFisica'];
                                $resBalistica = $row_usuario['resBalistica'];
                                $resSanidade = $row_usuario['resSanidade'];
                        
                                $passiva = $row_usuario['passiva'];
                                $esquiva = $row_usuario['esquiva'];
                                
                                $arma1 = $row_usuario['arma1'];
                                $arma2 = $row_usuario['arma2'];
                                $arma3 = $row_usuario['arma3'];
                                $arma4 = $row_usuario['arma4'];
                                $arma5 = $row_usuario['arma5']; 
                                
                                $item1 = $row_usuario['item1']; 
                                $item2 = $row_usuario['item2']; 
                                $item3 = $row_usuario['item3']; 
                                $item4 = $row_usuario['item4']; 
                                $item5 = $row_usuario['item5']; 
                                $item6 = $row_usuario['item6']; 
                                $item7 = $row_usuario['item7']; 
                                $item8 = $row_usuario['item8']; 
                                
                                $info1 = $row_usuario['info1']; 
                                $info2 = $row_usuario['info2']; 
                                $info3 = $row_usuario['info3']; 
                                $info4 = $row_usuario['info4']; 
                                $info5 = $row_usuario['info5']; 
                                $info6 = $row_usuario['info6']; 
                                $info7 = $row_usuario['info7']; 
                                $info8 = $row_usuario['info8']; 

                                $espaco1 = $row_usuario['espaco1']; 
                                $espaco2 = $row_usuario['espaco2']; 
                                $espaco3 = $row_usuario['espaco3']; 
                                $espaco4 = $row_usuario['espaco4']; 
                                $espaco5 = $row_usuario['espaco5']; 
                                $espaco6 = $row_usuario['espaco6']; 
                                $espaco7 = $row_usuario['espaco7']; 
                                $espaco8 = $row_usuario['espaco8']; 
                                $somaEspaco = $espaco1 + $espaco2 +  $espaco3 + $espaco4 +  $espaco5 + $espaco6 +  $espaco7 + $espaco8;
                                $somaEspaco2 = ($for * 5) +10;

                                $resut_soma2 =   $somaEspaco2 - $somaEspaco;

                                $peso1 = $row_usuario['peso1']; 
                                $peso2 = $row_usuario['peso2']; 
                                $peso3 = $row_usuario['peso3']; 
                                $peso4 = $row_usuario['peso4']; 
                                $peso5 = $row_usuario['peso5']; 
                                $peso6 = $row_usuario['peso6']; 
                                $peso7 = $row_usuario['peso7']; 
                                $peso8 = $row_usuario['peso8']; 
                                $somaPeso = $peso1 + $peso2 +  $peso3 + $peso4 +  $peso5 + $peso6 +  $peso7 + $peso8;
                                $somaPeso2 = ($for * 5)+10;

                                $resut_soma =  $somaPeso2 - $somaPeso ;

                                $textoCaract = $row_usuario['textoCaract']; 
                                $textohabi = $row_usuario['textohabi']; 
                               
                            }else{
                
                            }
                        }
            }else{
                        echo "nenhum valor encontrado";
            }
    }

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" sizes="16x16"  href="Imagem/iconDice.png">
    
    <link rel="stylesheet" href="Css/StyleFicha.css">
    <script defer src="Js/Script.js"></script>


    <title>Ficha RPG</title>

    <img src="Imagem/OrdoRealitas.png" class="logo">

    <form action="index.php" method="POST">

        <div class="nomeJogador">
            <p class="txtNome"> Nome do personagem</p>
            <input type="text" id="nomePersonagem" class="boxNome" value="<?php echo ($jogador) ?>" name="nomePersonagem"/>
        </div>
        
        <div class="idadeJogador">
            <p class="txtIdade"> Idade</p>
            <input type="text" id="idadePersonagem" class="boxIdade" value="<?php echo $idade ?>" name="idadePersonagem">
        </div>   

        <div class="alturaJogador">
            <p class="txtAltura"> Altura</p>
            <input type="text" id="alturaPersonagem" class="boxAltura" value="<?php echo $altura ?>" name="alturaPersonagem">
        </div>

        <div class="origemJogador">
            <p class="txtOrigem"> Origem</p>
            <input type="text" id="origemPersonagem"class="boxOrigem" value="<?php echo $origem ?>" name="origemPersonagem">
        </div>


    </head>
<body>
        <div class="boxSair">
            <a href="sair.php" class="textSair"> Sair </a> 

        </div>

        <!--------- ATRIBUTOS --------->
        <div class="boxAtributos">
            
            <div class="FOR">
                <p class="txtAtributo"> FOR </p>
                <input type="text" id="for" class="atributoFor" value="<?php echo ($for) ?>" name="for">
            </div>

            <div class="INT">
                <p class="txtAtributo atributComI">  INT </p>
                <input type="text" id="int" class="atributoInt" value="<?php echo ($int) ?>" name="int">
            </div>

            <div class="blackAtributo">
                <p class="txtBlackAtributo"> ATRIBUTOS </p>
            </div>
            
            <div class="PRE">
                <p class="txtAtributo"> PRE </p>
                <input type="text" id="pre" class="atributoPre" value="<?php echo ($pre) ?>" name="pre">
            </div>

            <div class="AGI">
                <p class="txtAtributo atributComI"> AGI </p>
                <input type="text" id="agi" class="atributoAgi" value="<?php echo ($agi) ?>" name="agi">
            </div>

            <div class="VIG">
                <p class="txtAtributo atributComI"> VIG </p>
                <input type="text" id="vig" class="atributoVig" value="<?php echo ($vig) ?>" name="vig">
            </div>
        </div>

    <!--------- PERÍCIAS --------->  
        <div class="boxTodasPericias">
            <div class="blackPericia">
                <p class="txtBlackPericia" > PERÍCIAS </p>
            </div>

            <div class="pericia">
                <p class="nomePericia">Acrobacia: <a class="nomeDado"> [ AGI ]...............................</a></p>
                <input type="text" id="acrobacia" class="teste perAcro" value="<?php echo $acrobacia ?>" name="acrobacia"><br>

                <p class="nomePericia">Adestramento: <a class="nomeDado"> [ PRE ]......................</a></p>
                <input type="text" id="adestramento" class="teste perAdes" value="<?php echo $adestramento ?>" name="adestramento"><br>

                <p class="nomePericia">Artes: <a class="nomeDado"> [ PRE ]......................................</a></p>
                <input type="text" id="artes" class="teste perArte" value="<?php echo $artes ?>" name="artes"><br>

                <p class="nomePericia">Atletismo: <a class="nomeDado"> [ FOR ]..............................</a></p>
                <input type="text" id="atletismo" class="teste perAtle" value="<?php echo $atletismo ?>" name="atletismo"><br>

                <p class="nomePericia">Atualidades: <a class="nomeDado"> [ INT ]............................</a></p>
                <input type="text" id="atualidades" class="teste perAtua" value="<?php echo $atualidades ?>" name="atualidades"><br>

                <p class="nomePericia">Ciências: <a class="nomeDado"> [ INT ]..................................</a></p>
                <input type="text" id="ciencias" class="teste perCien" value="<?php echo $ciencias ?>" name="ciencias"><br>

                <p class="nomePericia">Crime: <a class="nomeDado"> [ AGI ]......................................</a></p>
                <input type="text" id="crime" class="teste perCrim"value="<?php echo $crime ?>" name="crime"><br>

                <p class="nomePericia">Diplomacia: <a class="nomeDado"> [ PRE ]............................</a></p>
                <input type="text" id="diplomacia" class="teste perDipl"value="<?php echo $diplomacia ?>" name="diplomacia"><br>

                <p class="nomePericia">Enganação: <a class="nomeDado"> [ PRE ]............................</a></p>
                <input type="text" id="enganacao" class="teste perEnga"value="<?php echo $enganacao ?>" name="enganacao"><br>

                <p class="nomePericia">Fortitude: <a class="nomeDado"> [ VIG ]................................</a></p>
                <input type="text" id="fortitude" class="teste perFort"value="<?php echo $fortitude ?>" name="fortitude"><br>

                <p class="nomePericia">Furtividade: <a class="nomeDado"> [ AGI ]............................</a></p>
                <input type="text" id="furtividade" class="teste perFurt"value="<?php echo $furtividade ?>" name="furtividade"><br>

                <p class="nomePericia">Iniciativa: <a class="nomeDado"> [ AGI ].................................</a></p>
                <input type="text" id="iniciativa" class="teste perInic" value="<?php echo $iniciativa ?>" name="iniciativa"><br>

                <p class="nomePericia">Intimidação: <a class="nomeDado"> [ PRE ]...........................</a></p>
                <input type="text" id="intimidacao" class="teste perInti" value="<?php echo $intimidacao ?>" name="intimidacao"><br>

                <p class="nomePericia">Intuição: <a class="nomeDado"> [ PRE ].................................</a></p>
                <input type="text" id="intuicao" class="teste perIntui" value="<?php echo $intuicao ?>" name="intuicao"><br>

                <p class="nomePericia">Investigação: <a class="nomeDado"> [ INT ]..........................</a></p>
                <input type="text" id="investigacao" class="teste perInve" value="<?php echo $investigacao ?>" name="investigacao"><br>

                <p class="nomePericia">Luta: <a class="nomeDado"> [ FOR ].......................................</a></p>
                <input type="text" id="luta" class="teste perLuta" value="<?php echo $luta ?>" name="luta"><br>

                <p class="nomePericia">Medicina: <a class="nomeDado"> [ INT ].................................</a></p>
                <input type="text" id="medicina" class="teste perMedi" value="<?php echo $medicina ?>" name="medicina"><br>

                <p class="nomePericia">Ocultismo <a class="nomeDado"> [ INT ]...............................</a></p>
                <input type="text" id="ocultismo" class="teste perOcul" value="<?php echo $ocultismo ?>" name="ocultismo"><br>

                <p class="nomePericia">Percepção: <a class="nomeDado"> [ PRE ]............................</a></p>
                <input type="text" id="percepcao" class="teste perPerc" value="<?php echo $percepcao ?>" name="percepcao"><br>

                <p class="nomePericia">Pilotagem: <a class="nomeDado"> [ AGI ]..............................</a></p>
                <input type="text" id="pilotagem" class="teste perPilo" value="<?php echo $pilotagem ?>" name="pilotagem"><br>

                <p class="nomePericia">Pontaria: <a class="nomeDado"> [ AGI ].................................</a></p>
                <input type="text" id="pontaria" class="teste perPont" value="<?php echo $pontaria ?>" name="pontaria"><br>

                <p class="nomePericia">Profissão: <input type="text" id="qualProfissao" class="profissao" value="<?php echo $qualProfissao ?>" name="qualProfissao"><a class="nomeDado">[ INT ] ...</a></p>
                <input type="text" id="profissao" class="teste perProf" value="<?php echo $profissao ?>" name="profissao"><br>
                
                <p class="nomePericia">Reflexos: <a class="nomeDado"> [ AGI ].................................</a></p>
                <input type="text" id="reflexos" class="teste perRefl" value="<?php echo $reflexos ?>" name="reflexos"><br>

                <p class="nomePericia">Religião: <a class="nomeDado"> [ PRE ].................................</a></p>
                <input type="text" id="religiao" class="teste perReli" value="<?php echo $religiao ?>" name="religiao"><br>

                <p class="nomePericia">Sobrevivência: <a class="nomeDado"> [ INT ]........................</a></p>
                <input type="text" id="sobrevivencia" class="teste perSobr" value="<?php echo $sobrevivencia ?>" name="sobrevivencia"><br>

                <p class="nomePericia">Tática: <a class="nomeDado"> [ INT ]......................................</a></p>
                <input type="text" id="tatica" class="teste perTati" value="<?php echo $tatica ?>" name="tatica"><br>

                <p class="nomePericia">Tecnologia: <a class="nomeDado"> [ INT ].............................</a></p>
                <input type="text" id="tecnologia" class="teste perTecn" value="<?php echo $tecnologia ?>" name="tecnologia"><br>

                <p class="nomePericia">Vontade: <a class="nomeDado"> [ PRE ]................................</a></p>
                <input type="text" id="vontade" class="teste perVont" value="<?php echo $vontade ?>" name="vontade"><br>
            </div>
        </div>
        <!------------ SAÚDE ------------>  
        <div class="blackSaude">
            <p class="txtBlackSaude" > SAÚDE </p>
        </div>

            <!-- VIDA --> 
            <div class="posicaoSaude">
                <P class="txtSaude"> PV <a class="descricao"> (Pontos de Vida + Vig)</a></P><br>
            </div>
                <input type="text" id="vidaMax" value="<?php echo $vidaMax; ?>" class="pontosVidaMax" placeholder="Valor MAX" name="vidaMax">
                <input type="text" id="vidaMin" value="<?php echo $vidaMin; ?>" class="pontosVidaMin" placeholder="Valor MIN" name="vidaMin">
           
            
                <!-- SANIDADE -->
            <div class="posicaoSanidade">
                <P class="txtSanidade"> SAN <a class="descricao"> (Pontos de Sanidade)</a></P><br>
            </div>
                <input type="text" id="saniMax" value="<?php echo $saniMax ?>" class="pontosSanidadeMax" placeholder="Valor MAX" name="saniMax">
                <input type="text" id="saniMin" value="<?php echo $saniMin ?>" class="pontosSanidadeMin" placeholder="Valor MIN" name="saniMin" >

            <!-- ESFORÇO -->
            <div class="posicaoEsforco">
                <P class="txtEsforco"> PE <a class="descricao"> (Pontos de Esforço + Pre)</a></P><br>
            </div>
                <input type="text" id="esforMax" value="<?php echo $esforMax ?>" class="pontosEsforcoMax" placeholder="Valor MAX" name="esforMax">
                <input type="text" id="esforMin" value="<?php echo $esforMin ?>" class="pontosEsforcoMin" placeholder="Valor MIN" name="esforMin">


        <!------------ RESISTÊNCIAS ------------>  
        <div class="blackResistencia">
            <p class="txtBlackResistencia" > RESISTÊNCIAS </p>
        </div>

            <!-- FÍSICA -->  
            <div class="posicaoFisica">
                <p class="txtFisica"> Física </p> <br>
                <input type="text" id="resFisica" class="pontosFis" value="<?php echo $resFisica ?>" name="resFisica">
            </div>
             
            <!-- BALÍSTICA -->  
            <div class="posicaoBalistica">
                <p class="txtBalistica"> Balística </p> <br>
                <input type="text" id="resBalistica" class="pontosBalis" value="<?php echo $resBalistica ?>" name="resBalistica">
            </div>
            
            <!-- SANIDADE -->  
            <div class="posicaoSani">
                <p class="txtSani"> Sanidade </p> <br>
                <input type="text" id="resSanidade" class="pontosSani" value="<?php echo $resSanidade ?>" name="resSanidade">
            </div>

        <!------------ DEFESAS ------------>  
        <div class="blackDefesa">
            <p class="txtDefesa"> Defesas </p>
        </div>

            <!-- PASSIVA --> 
            <div class="posicaoDef">
                <P class="txtDef"> PASSIVA</P><br>
            </div>
                <input type="text" id="passiva" class="pontosDEF" value="<?php echo $passiva ?>" name="passiva">

            <!-- ESQUIVA --> 
            <div class="posicaoEsq">
                <P class="txtEsq"> ESQUIVA </P><br>
            </div>
                <input type="text" id="esquiva" class="pontosEsq" value="<?php echo $esquiva ?>" name="esquiva">

             <!------------ ARMAS ------------> 
             <div class="titleArmas">
                <p class="txtArmas"> Armas </p>
             </div>

             <div class="boxArmas">
                    <input type="text" value="<?php echo $arma1 ?>" id="arma1" class="bxL linha1" name="arma1" placeholder="------ Arma ------ Tipo ------ Ataque ------ Alcance ------ Dano ------ Critico ------ Recarga ------ Especial ------"><br>
                    <input type="text" value="<?php echo $arma2 ?>" id="arma2" class="bxL linha2" name="arma2" placeholder="------ Arma ------ Tipo ------ Ataque ------ Alcance ------ Dano ------ Critico ------ Recarga ------ Especial ------"><br>
                    <input type="text" value="<?php echo $arma3 ?>" id="arma3" class="bxL linha3" name="arma3" placeholder="------ Arma ------ Tipo ------ Ataque ------ Alcance ------ Dano ------ Critico ------ Recarga ------ Especial ------"><br>
                    <input type="text" value="<?php echo $arma4 ?>" id="arma4" class="bxL linha4" name="arma4" placeholder="------ Arma ------ Tipo ------ Ataque ------ Alcance ------ Dano ------ Critico ------ Recarga ------ Especial ------"><br>
                    <input type="text" value="<?php echo $arma5 ?>" id="arma5" class="bxL linha5" name="arma5" placeholder="------ Arma ------ Tipo ------ Ataque ------ Alcance ------ Dano ------ Critico ------ Recarga ------ Especial ------"><br>
            </div>

            <div class="titleInventario">
                <img src="Imagem/bag.png" class="bag"><p class="txtInventario"> Inventario </p>
            </div>

            <div class="titleDetalhe">
                <p class="txtItem">Item</p><br>
                <input type="text" value="<?php echo $item1 ?>" id="item1" class="bxI boxItem1" name="item1"><br>
                <input type="text" value="<?php echo $item2 ?>" id="item2" class="bxI boxItem2" name="item2"><br>
                <input type="text" value="<?php echo $item3 ?>" id="item3" class="bxI boxItem3" name="item3"><br>
                <input type="text" value="<?php echo $item4 ?>" id="item4" class="bxI boxItem4" name="item4"><br>
                <input type="text" value="<?php echo $item5 ?>" id="item5" class="bxI boxItem5" name="item5"><br> 
                <input type="text" value="<?php echo $item6 ?>" id="item6" class="bxI boxItem6" name="item6"><br>   
                <input type="text" value="<?php echo $item7 ?>" id="item7" class="bxI boxItem7" name="item7"><br> 
                <input type="text" value="<?php echo $item8 ?>" id="item8" class="bxI boxItem8" name="item8"><br>
            </div>

            <div class="titleDeta">
                <p class="txtDeta">Detalhes</p><br>
                <input type="text" value="<?php echo $info1 ?>" id="info1" class="bxD boxDeta1" name="info1"><br>
                <input type="text" value="<?php echo $info2 ?>" id="info2" class="bxD boxDeta2" name="info2"><br>
                <input type="text" value="<?php echo $info3 ?>" id="info3" class="bxD boxDeta3" name="info3"><br>
                <input type="text" value="<?php echo $info4 ?>" id="info4" class="bxD boxDeta4" name="info4"><br>
                <input type="text" value="<?php echo $info5 ?>" id="info5" class="bxD boxDeta5" name="info5"><br>
                <input type="text" value="<?php echo $info6 ?>" id="info6" class="bxD boxDeta6" name="info6"><br> 
                <input type="text" value="<?php echo $info7 ?>" id="info7" class="bxD boxDeta7" name="info7"><br>
                <input type="text" value="<?php echo $info8 ?>" id="info8" class="bxD boxDeta8" name="info8"><br>
            </div>

            <div class="titleEspaco">
                <p class="txtEspa">Espaço</p><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco1 ?>" id="espaco1" class="bxE boxEspa1" name="espaco1"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco2 ?>" id="espaco2" class="bxE boxEspa2" name="espaco2"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco3 ?>" id="espaco3" class="bxE boxEspa3" name="espaco3"><br> 
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco4 ?>" id="espaco4" class="bxE boxEspa4" name="espaco4"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco5 ?>" id="espaco5" class="bxE boxEspa5" name="espaco5"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco6 ?>" id="espaco6" class="bxE boxEspa6" name="espaco6"><br> 
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco7 ?>" id="espaco7" class="bxE boxEspa7" name="espaco7"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $espaco8 ?>" id="espaco8" class="bxE boxEspa8" name="espaco8"><br>
            </div>
            
            <div class="titlePeso">
                <p class="txtPeso">Peso</p><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso1 ?>" id="peso1" class="bxP boxPeso1" name="peso1"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso2 ?>" id="peso2" class="bxP boxPeso2" name="peso2"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso3 ?>" id="peso3" class="bxP boxPeso3" name="peso3"><br> 
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso4 ?>" id="peso4" class="bxP boxPeso4" name="peso4"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso5 ?>" id="peso5" class="bxP boxPeso5" name="peso5"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso6 ?>" id="peso6" class="bxP boxPeso6" name="peso6"><br> 
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso7 ?>" id="peso7" class="bxP boxPeso7" name="peso7"><br>
                <input onchange="this.value = this.value.replace(/,/g, '.')" type="text" value="<?php echo $peso8 ?>" id="peso8" class="bxP boxPeso8" name="peso8" ><br>
            </div>

            <div class="somaPesoEspaco">
                <p class="txtMensagem">Espaços vazios são: 
                <input type="" value="<?php echo $resut_soma2 ?>" id="somaEspaco"class="boxSomaEspa" placeholder=" Disp." readonly name="somaEspaco">
                <input type="" value="<?php echo $resut_soma ?>" id="somaPeso" class="boxSomaPeso" placeholder=" Disp." readonly name="somaPeso">
                
            </div>

            <!------------ CARACTERISTICAS ------------> 
            <div class="titleCarac">
                <p class="txtCarac"> Características </p>
            </div>

            <div class="boxCarac">

                <textarea name="textoCaract"  id="textoCaract" class="blocoCarac"
                          placeholder="Descreva suas características, habilidas, manias, hobbies, sua motivação e afins: "><?php echo trim($textoCaract)?></textarea>
                </div>

            <!------------ HABILIDADES ------------> 
            <div class="titleHab">
                <p class="txtHab"> Habilidades </p>
            </div>

            <div class="boxHab">
                <textarea name="textohabi"  id="textohabi" class="blocoHab" 
                          placeholder="Digite a habilidade da ORIGEM escolhida e as adquiridas: "><?php echo trim($textohabi) ?></textarea>
            
            </div>

            <!-- Botões -->   

            <div class="boxBtn">

                <button onclick="enviar()" type="submit" name="submit1" class="btn salvar" > Salvar </button>
                <button onclick="mostrar()" type="submit" name="submit2" class="btn atualizar"> Mostrar </button>
                <button onclick="apagar()" type="submit" name="submit3"class="btn apagar"> Limpar </button>
            </div>
            <br>
            <br>
</body>
</form>
</html>
<!-- https://pluma.serveo.net/6%C2%BA%20Projeto/login.php -->