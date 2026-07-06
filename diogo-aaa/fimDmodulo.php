<?php
$prefeitura= ""; $numeroDanota= 0001; $data=""; $hora=""; $empresaPrestador=""; $cpfPrestado=""; $iePrestador=""; $imPrestador=""; $addressPrestador=""; $municipioPrestador=""; $emailPrestador=""; $empresaTomador=""; $cpfTomador=""; $ieTomador=""; $imTomador=""; $addressTomador=""; $municipioTomador="";  $emailTomador=""; $descricao=""; $aliquota=0; $baseDCalculo=0;$deducao=0; $valorliquido=0; $tipoDServico=""; $pis=0; $confins=0; $inss=0; $ir=0; $csll=0; $others=0;$totalNota=0; $basecalculo=0; $totaldeducoes=0; $iss=0; $iptu=0;
$infos=[];
$dataDPrestacao=[];
function painel() {
   $true=true;
   global $infos,$prefeitura, $numeroDanota, $data, $hora, $empresaPrestador, $cpfPrestador, $iePrestador, $imPrestador, $addressPrestador, $municipioPrestador, $emailPrestador, $empresaTomador, $cpfTomador, $ieTomador, $imTomador, $addressTomador, $municipioTomador, $emailTomador, $descricao, $aliquota, $baseDCalculo, $deducao, $valorliquido, $tipoDServico, $pis, $confins, $inss, $ir, $csll, $others, $totalNota, $basecalculo, $totaldeducoes, $iss, $iptu;
   while ($true) {
    echo "\t~ [1] INFORMAÇÕES NECESSÁRIAS PARA A EMISSÃO\n\t~ [2] INSERIR INFORMAÇÕES\n\t~ [3]CORRIGIR INFORMAÇÃO\n\t~ [4] CONFERIR NOTA\n\t~ [5] EMISSÃO\n";
    $opcao=readline("Digite a opção que deseja: ");
    switch ($opcao) {
     case 1:
        echo "As informações que deve aparecer na nota são:
            1. Nome da prefeitura
            2. Informações do Prestador de Serviço
              -Nome/Razão Social
              -CPF/CNPJ
              -IE (Inscrição Estadual)
              -IM (Inscrição Municipal)
              -Endereço
              -Município
              -Email
            3. Informações do Tomador de Serviço
              -Nome/Razão Social
              -CPF/CNPJ
              -IE (Inscrição Estadual)
              -IM (Inscrição Municipal)
              -Endereço
              -Município
              -Email
            4. Lista de Atividades
              -Descrição
              -Alíquota(R$)
              -Base de Cálculo(R$)
              -Dedução(R$)
            5. Discriminação dos Serviços
              -Líquido à Receber(R$)
              -Tipo de Serviço
              -Data da Prestação
              -PIS(R$)
              -CONFINS(R$)
              -INSS(R$)
              -IR(R$)
              -CSLL(R$)
              -OUTROS(R$)
              -Total da Nota(R$)
              -Base de Cálculo(R$)
              -Valor Total das deduções(R$)
              -Valor do ISS(R$)
              -Crédito p/ Abatimento IPTU(R$)\n";
              break;
     case 2:
            perguntas();
            break;
     case 3:
            if (count($infos)==33) {
            $correcao=readline("Digite a informação que deseja corrigir: ");
            $correcao=strtoupper($correcao);
            switch ($correcao) {
                case "NOME DA PREFEITURA":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[0]=$novoValor;
                    $prefeitura=$novoValor;
                    echo "Versão salva!";
                    break;
                case "NOME" || "RAZÃO SOCIAL":
                    $presOUtom=readline("O Nome/Razão Social se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[1]=$novoValor;
                    $empresaPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[8]=$novoValor;
                    $empresaTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "CPF" || "CNPJ":
                    $presOUtom=readline("O CPF/CNPJ se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[2]=$novoValor;
                    $cpfPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[9]=$novoValor;
                    $cpfTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                case "IE" || "INSCRIÇÃO ESTADUAL":
                    $presOUtom=readline("A IE/Inscrição Estadual se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[3]=$novoValor;
                    $iePrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[10]=$novoValor;
                    $ieTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "IM" || "INSCRIÇÃO MUNICIPAL":
                    $presOUtom=readline("A IM/Insrição Municipal se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[4]=$novoValor;
                    $imPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[11]=$novoValor;
                    $imTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "ENDEREÇO":
                    $presOUtom=readline("O Endereço se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[5]=$novoValor;
                    $addressPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[12]=$novoValor;
                    $addressTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "MUNICÍPIO":
                    $presOUtom=readline("O Município se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[6]=$novoValor;
                    $municipioPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[13]=$novoValor;
                    $municipioTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "EMAIL":
                    $presOUtom=readline("O Email se refere ao Prestador ou ao Tomador de Serviço? ");
                    $presOUtom=strtoupper($presOUtom);
                    if ($presOUtom=="PRESTADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[7]=$novoValor;
                    $emailPrestador=$novoValor;
                    echo "Versão salva!";
                    } else if ($presOUtom=="TOMADOR") {
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[14]=$novoValor;
                    $emailTomador=$novoValor;
                    echo "Versão salva!";
                    } else {
                        echo "Resposta inadequada, tente novamente!";
                    }
                    break;
                case "DESCRIÇÃO":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[15]=$novoValor;
                    $descricao=$novoValor;
                    echo "Versão salva!";
                    break;
                case "ALÍQUOTA":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[16]=$novoValor;
                    $aliquota=$novoValor;
                    echo "Versão salva!";
                    break;
                case "VALOR TOTAL DA NOTA":
                    $novoValor=readline("Digite a versão corrigida:");
                    $infos[17]=$novoValor;
                    $totalNota=$novoValor;
                    echo "Versão salva!";
                    break;
                case "DEDUÇÃO":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[18]=$novoValor;
                    $deducao=$novoValor;
                    echo "Versão salva!";
                    break;
                case "TIPO DE SERVIÇO":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[19]=$novoValor;
                    $tipoDServico=$novoValor;
                    echo "Versão salva!";
                    break;
                case "PIS":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[20]=$novoValor;
                    $pis=$novoValor;
                    echo "Versão salva!";
                    break;
                case "CONFINS":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[21]=$novoValor;
                    $confins=$novoValor;
                    echo "Versão salva!";
                    break;
                case "INSS":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[22]=$novoValor;
                    $inss=$novoValor;
                    echo "Versão salva!";
                    break;
                case "IR":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[23]=$novoValor;
                    $inss=$novoValor;
                    $ir=$novoValor;
                    echo "Versão salva!";
                    break;
                case "CSLL":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[24]=$novoValor;
                    $csll=$novoValor;
                    echo "Versão salva!";
                    break;
                case "ISS":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[25]=$novoValor;
                    $iss=$novoValor;
                    echo "Versão salva!";
                    break;
                case "OUTROS":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[26]=$novoValor;
                    $others=$novoValor;
                    echo "Versão salva!";
                    break;
                case "CREDITO P/ ABATIMENTO IPTU":
                    $novoValor=readline("Digite a versão corrigida: ");
                    $infos[27]=$novoValor;
                    $iptu=$novoValor;
                    echo "Versão salva!";
                    break;
                case "DATA DA PRESTAÇÃO":
                    $informacao=readline("Deseja mudar o dia, mês ou ano?");
                    $informacao=strtoupper($informacao);
                    if ($informacao=="DIA") {
                        $dataDPrestacao[0]=$informacao;
                        echo "Versão salva!";
                    } else if ($informacao=="MÊS") {
                        $dataDPrestacao[1]=$informacao;
                        echo "Versão salva!";
                    } else if ($informacao=="ANO") {
                        $dataDPrestacao[2]=$informacao;
                        echo "Versão salva!";
                    }
                    calculos();
                    break;
            }} else {
                echo "Faltam informações, tente novamente após inserir todos os dados!";
            }
            break;
     case 4:
            calculos();
            emitir();
            break;
    case 5:
            if (count($infos)==33) {
            echo "Nota Emitida, com sucesso";
            $opcao1=readline("Deseja Conferir a nota? ");
            $opcao1=strtoupper($opcao1);
            if ($opcao1=="SIM") {
                emitir();
                echo "\nEmissão concluida, agradecemos por utilizar nosso serviço ;)";
                $true=false;
            } else if ($opcao1=="NÃO") {
                echo "Emissão concluida, agradecemos por utilizar nosso serviço ;)";
                $true=false;
            } else {
                echo "Opção inválida, Tente novamente!";
            }
            } else {
                echo "Faltam informações, tente novamente após inserir todos os dados!";
            }
            break;
            }
    }
}

function perguntas() {
    global $infos, $prefeitura, $empresaPrestador, $cpfPrestador, $iePrestador, $imPrestador, $addressPrestador, $municipioPrestador, $emailPrestador, $empresaTomador, $cpfTomador, $ieTomador, $imTomador, $addressTomador, $municipioTomador, $emailTomador, $descricao, $aliquota, $deducao, $tipoDServico, $pis, $confins, $inss, $ir, $csll, $others, $totalNota, $iss, $iptu;

    $pergunta1=readline("Digite o nome da Prefeitura da sua cidade: ");
    $prefeitura=$pergunta1;
    $infos[]=$pergunta1;

    $pergunta2=readline("Digite o Nome/Razão Social do Prestador de Serviço: ");
    $empresaPrestador=$pergunta2;
    $infos[]=$pergunta2;

    $pergunta3=readline("Digite o CPF/CNPJ do Prestador de Serviço: ");
    $cpfPrestador=$pergunta3;
    $infos[]=$pergunta3;
    
    $pergunta4=readline("Digite o IE do Prestador de Serviço: ");
    $iePrestador=$pergunta4;
    $infos[]=$pergunta4;

    $pergunta5=readline("Digite o IM do Prestador de Serviço: ");
    $imPrestador=$pergunta5;
    $infos[]=$pergunta5;

    $pergunta6=readline("Digite o Endereço do Prestador de Serviço: ");
    $addressPrestador=$pergunta6;
    $infos[]=$pergunta6;

    $pergunta7=readline("Digite o Município do Prestador de Serviço: ");
    $municipioPrestador=$pergunta7;
    $infos[]=$pergunta7;

    $pergunta8=readline("Digite o Email do Prestador de Serviço: ");
    $emailPrestador=$pergunta8;
    $infos[]=$pergunta8;

    $pergunta9=readline("Digite o Nome/Razão Social do Tomador de Serviço: ");
    $empresaTomador=$pergunta9;
    $infos[]=$pergunta9;

    $pergunta10=readline("Digite o CPF/CNPJ do Tomador de Serviço: ");
    $cpfTomador=$pergunta10;
    $infos[]=$pergunta10;
    
    $pergunta11=readline("Digite o IE do Tomador de Serviço: ");
    $ieTomador=$pergunta11;
    $infos[]=$pergunta11;

    $pergunta12=readline("Digite o IM do Tomador de Serviço: ");
    $imTomador=$pergunta12;
    $infos[]=$pergunta12;

    $pergunta13=readline("Digite o Endereço do Tomador de Serviço: ");
    $addressTomador=$pergunta13;
    $infos[]=$pergunta13;

    $pergunta14=readline("Digite o Município do Tomador de Serviço: ");
    $municipioTomador=$pergunta14;
    $infos[]=$pergunta14;

    $pergunta15=readline("Digite o Email do Tomador de Serviço: ");
    $emailTomador=$pergunta15;
    $infos[]=$pergunta15;

    $pergunta16=readline("Digite a Descrição do Serviço: ");
    $descricao=$pergunta16;
    $infos[]=$pergunta16;

    $pergunta17=readline("Digite a Alíquota do Serviço: ");
    $aliquota=$pergunta17;
    $infos[]=$pergunta17;

    $pergunta18=readline("Digite o Valor Total da Nota: ");
    $totalNota=$pergunta18;
    $infos[]=$pergunta18;

    $pergunta19=readline("Digite as Deduções: ");
    $deducao=$pergunta19;
    $infos[]=$pergunta19;

    $pergunta20=readline("Digite o Tipo de Serviço: ");
    $tipoDServico=$pergunta20;
    $infos[]=$pergunta20;

    $pergunta21=readline("Digite o PIS: ");
    $pis=$pergunta21;
    $infos[]=$pergunta21;

    $pergunta22=readline("Digite o CONFINS: ");
    $confins=$pergunta22;
    $infos[]=$pergunta22;

    $pergunta23=readline("Digite o INSS: ");
    $inss=$pergunta23;
    $infos[]=$pergunta23;

    $pergunta24=readline("Digite o IR: ");
    $ir=$pergunta24;
    $infos[]=$pergunta24;

    $pergunta25=readline("Digite o CSLL: ");
    $csll=$pergunta25;
    $infos[]=$pergunta25;

    $pergunta26=readline("Digite o ISS: ");
    $iss=$pergunta26;
    $infos[]=$pergunta26;

    $pergunta27=readline("Digite o Total de Outros Impostos, caso haja: ");
    $others=$pergunta27;
    $infos[]=$pergunta27;

    $pergunta28=readline("Digite o Crédito para Abatimento IPTU, caso haja: ");
    $iptu=$pergunta28;
    $infos[]=$pergunta28;

    $pergunta29=readline("Digite o Dia da prestação: ");
    $dataDPrestacao[]=$pergunta29;

    $pergunta30=readline("Digite o Mês da prestação: ");
    $dataDPrestacao[]=$pergunta30;

    $pergunta31=readline("Digite o Ano da prestação: ");
    $dataDPrestacao[]=$pergunta31;
}

function emitir() {
 global $prefeitura, $numeroDanota, $data, $hora, $empresaPrestador, $cpfPrestador, $iePrestador, $imPrestador, $addressPrestador, $municipioPrestador, $emailPrestador, $empresaTomador, $cpfTomador, $ieTomador, $imTomador, $addressTomador, $municipioTomador, $emailTomador, $descricao, $aliquota, $baseDCalculo, $deducao, $valorliquido, $tipoDServico, $dataDPrestacao, $pis, $confins, $inss, $ir, $csll, $others, $totalNota, $basecalculo, $totaldeducoes, $iss, $iptu;
 echo 
 "          Nome da prefeitura:     |  Número da nota:
             $prefeitura            |   $numeroDanota 
        -------------------------------------------------                 
            Nota Físcal Eletronica  |  Data e Hora:
               de Serviços NF-E     |   $data $hora                  
        ------------------------------------------------- 
                    PRESTADOR DE SERVIÇO
        -------------------------------------------------
            Nome/Razão Social:
             $empresaPrestador
        -------------------------------------------------
            CPF/CNPJ:               |  IE:
             $cpfPrestador          |   $iePrestador
        -------------------------------------------------
            Inscrição Municipal:    
             $imPrestador
        -------------------------------------------------
            Endereço:
             $addressPrestador
        -------------------------------------------------
            Município:              |  Email:
             $municipioPrestador    |   $emailPrestador
        -------------------------------------------------
                    TOMADOR DE SERVIÇO
        -------------------------------------------------
            Nome/Razão Social:
             $empresaTomador
        -------------------------------------------------
            CPF/CNPJ:               |  IE:
             $cpfTomador            |   $ieTomador
        -------------------------------------------------
            Inscrição Municipal:    
             $imTomador
        -------------------------------------------------
            Endereço:
             $addressTomador
        -------------------------------------------------
            Município:              |  Email:
             $municipioTomador      |   $emailTomador
        ------------------------------------------------- 
                    LISTA DE ATIVIDADES
        -------------------------------------------------
            Descrição:              |  Alíquota(R$):
             $descricao             |   $aliquota
        -------------------------------------------------
            Base de Cálculo(R$):    |  Dedução(R$):
             $baseDCalculo          |   $deducao
        ------------------------------------------------- 
                    DISCRIMINAÇÃO DOS SERVIÇOS
        -------------------------------------------------
            Líquido a  receber:
             $valorliquido
        -------------------------------------------------
            Tipo de Serviço:        |  Data da Prestação:
             $tipoDServico          |   $dataDPrestacao[1]/$dataDPrestacao[2]/$dataDPrestacao[3]
        -------------------------------------------------
            PIS(R$):                |  CONFINS(R$):
             $pis                   |   $confins 
        -------------------------------------------------
            INSS(R$):               |  IR(R$):
             $inss                  |   $ir
        -------------------------------------------------
            CSLL(R$):               |  OUTROS(R$):
             $csll                  |   $others
        -------------------------------------------------
            Total da Nota(R$):
             $totalNota
        -------------------------------------------------
            Base de Calcúlo(R$):   
             $basecalculo
        -------------------------------------------------
            Valor Total das deduções(R$):
             $totaldeducoes
        -------------------------------------------------
            Valor do ISS(R$):
             $iss
        -------------------------------------------------
            Crédito p/ Abatimento IPTU(R$):
             $iptu
        \n" ;
}
function data() {
    global $data, $hora;
    date_default_timezone_set('America/Brasilia');
    $hora = date('H:i');
    $data = date('j'); 
}
function calculos() {
global $totalNota, $deducao, $baseDCalculo, $aliquota, $iss, $pis, $confins, $inss, $ir, $csll, $others, $totaldeducoes, $valorliquido;
$baseDCalculo=$totalNota-$deducao;
$iss=$baseDCalculo*($aliquota/100);
$totaldeducoes=$deducao;
$totalNota=$baseDCalculo+$deducao;
$valorliquido=$totalNota-($iss+$pis+$confins+$inss+$ir+$csll+$others);
}
painel();