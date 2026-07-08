<?php
$prefeitura= ""; $numeroDanota= 0001; $data=""; $hora=""; $empresaPrestador=""; $cpfPrestado=""; $iePrestador=""; $imPrestador=""; $addressPrestador=""; $municipioPrestador=""; $emailPrestador=""; $empresaTomador=""; $cpfTomador=""; $ieTomador=""; $imTomador=""; $addressTomador=""; $municipioTomador="";  $emailTomador=""; $descricao=""; $aliquota=0; $baseDCalculo=0;$deducao=0; $valorliquido=0; $tipoDServico=""; $pis=0; $confins=0; $inss=0; $ir=0; $csll=0; $others=0;$totalNota=0; $basecalculo=0; $totaldeducoes=0; $iss=0; $iptu=0;
$infos=[];
$dataDPrestacao=[];
function painel() {
   $true=true;
   global $infos,$prefeitura, $numeroDanota, $data, $hora, $empresaPrestador, $cpfPrestador, $iePrestador, $imPrestador, $addressPrestador, $municipioPrestador, $emailPrestador, $empresaTomador, $cpfTomador, $ieTomador, $imTomador, $addressTomador, $municipioTomador, $emailTomador, $descricao, $aliquota, $baseDCalculo, $deducao, $valorliquido, $tipoDServico, $pis, $confins, $inss, $ir, $csll, $others, $totalNota, $basecalculo, $totaldeducoes, $iss, $iptu, $dataDPrestacao;
   while ($true) {
    echo "\t~ [1] INFORMAÇÕES NECESSÁRIAS PARA A EMISSÃO\n\t~ [2] INSERIR INFORMAÇÕES\n\t~ [3] CORRIGIR INFORMAÇÃO\n\t~ [4] CONFERIR NOTA\n\t~ [5] EMISSÃO\n";
    $opcao=readline("Digite a opção que deseja: ");
    switch ($opcao) {
     case 1:
        limpar();
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
            limpar();
            perguntas();
            data();
            break;
     case 3:
            limpar();
            if (count($infos)>0) {
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
                    break;
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
            limpar();
            calculos();
            emitir();
            break;
    case 5:
            if (count($infos)>0) {
            calculos();
            echo "Nota Emitida, com sucesso\n";
            $opcao1=readline("Deseja Conferir a nota? ");
            $opcao1=strtoupper($opcao1);
            if ($opcao1=="SIM") {
                emitir();
                echo "\nEmissão concluida, agradecemos por utilizar nosso serviço ";
                $true=false;
            } else if ($opcao1=="NÃO") {
                echo "Emissão concluida, agradecemos por utilizar nosso serviço ";
                $true=false;
            } else {
                echo "Opção inválida, Tente novamente!\n";
            }
            } else {
                echo "Faltam informações, tente novamente após inserir todos os dados!\n";
            }
            break;
            }
    }
}

function perguntas() {
    global $infos, $prefeitura, $empresaPrestador, $cpfPrestador, $iePrestador, $imPrestador, $addressPrestador, $municipioPrestador, $emailPrestador, $empresaTomador, $cpfTomador, $ieTomador, $imTomador, $addressTomador, $municipioTomador, $emailTomador, $descricao, $aliquota, $deducao, $tipoDServico, $pis, $confins, $inss, $ir, $csll, $others, $totalNota, $iss, $iptu, $dataDPrestacao;
    $true0=true; $true1=true; $true2=true; $true3=true; $true4=true; $true5=true; $true6=true; $true7=true; $true8=true; $true9=true; $true10=true; $true11=true; $true12=true; $true13=true; $true14=true; $true15=true; $true16=true; $true17=true;

    $pergunta1=readline("Digite o nome da Prefeitura da sua cidade: ");
    echo"\n";
    $prefeitura=$pergunta1;
    $infos[]=$pergunta1;

    $pergunta2=readline("Digite o Nome/Razão Social do Prestador de Serviço: ");
    echo"\n";
    $empresaPrestador=$pergunta2;
    $infos[]=$pergunta2;
    while ($true0){
    $pergunta3=readline("Digite o CPF/CNPJ do Prestador de Serviço: ");
    echo"\n";
    if (is_numeric($pergunta3)){ 
    $cpfPrestador=$pergunta3;
    $infos[]=$pergunta3;
    $true0=false;
    } else {
        echo "Valór inadequado, tente novamente, o CPF/CNPJ deve conter apenas números!\n";
    }
    }
    $pergunta4=readline("Digite o IE do Prestador de Serviço: ");
    echo"\n";
    $iePrestador=$pergunta4;
    $infos[]=$pergunta4;

    $pergunta5=readline("Digite o IM do Prestador de Serviço: ");
    echo"\n";
    $imPrestador=$pergunta5;
    $infos[]=$pergunta5;

    $pergunta6=readline("Digite o Endereço do Prestador de Serviço: ");
    echo"\n";
    $addressPrestador=$pergunta6;
    $infos[]=$pergunta6;

    $pergunta7=readline("Digite o Município do Prestador de Serviço: ");
    echo"\n";
    $municipioPrestador=$pergunta7;
    $infos[]=$pergunta7;

    $pergunta8=readline("Digite o Email do Prestador de Serviço: ");
    echo"\n";
    $emailPrestador=$pergunta8;
    $infos[]=$pergunta8;

    $pergunta9=readline("Digite o Nome/Razão Social do Tomador de Serviço: ");
    echo"\n";
    $empresaTomador=$pergunta9;
    $infos[]=$pergunta9;

    while ($true1) {
    $pergunta10=readline("Digite o CPF/CNPJ do Tomador de Serviço: ");
    echo"\n";
    if (is_numeric($pergunta10)&& $pergunta10!="a") {
    $cpfTomador=$pergunta10;
    $infos[]=$pergunta10;
    $true1=false;
    } else {
        echo "Valór inadequado, tente novamente, o CPF/CNPJ deve conter apenas números!\n";
    }
    }
    while($true2){
    $pergunta11=readline("Digite o IE do Tomador de Serviço: ");
    echo"\n";
    if (is_numeric($pergunta11)&& $pergunta11!="a"){
    $ieTomador=$pergunta11;
    $infos[]=$pergunta11;
    $true2=false;
    } else {
        echo "Valór inadequado, tente novamente, o IE deve conter apenas números!\n";
    }
    }
    while($true3){
    $pergunta12=readline("Digite o IM do Tomador de Serviço: ");
    echo"\n";
    if (is_numeric($pergunta12)&& $pergunta12!="a"){
    $imTomador=$pergunta12;
    $infos[]=$pergunta12;
    $true3=false;
    } else {
        echo "Valór inadequado, tente novamente, o IM deve conter apenas números!\n";
    }
    }

    $pergunta13=readline("Digite o Endereço do Tomador de Serviço: ");
    echo"\n";
    $addressTomador=$pergunta13;
    $infos[]=$pergunta13;

    $pergunta14=readline("Digite o Município do Tomador de Serviço: ");
    echo"\n";
    $municipioTomador=$pergunta14;
    $infos[]=$pergunta14;

    $pergunta15=readline("Digite o Email do Tomador de Serviço: ");
    echo"\n";
    $emailTomador=$pergunta15;
    $infos[]=$pergunta15;

    $pergunta16=readline("Digite a Descrição do Serviço: ");
    echo"\n";
    $descricao=$pergunta16;
    $infos[]=$pergunta16;

    while($true4) {
    $pergunta17=readline("Digite a Alíquota do Serviço: ");
    echo"\n";
    if (is_numeric($pergunta17) && $pergunta17<26.5 && $pergunta17!="a"){
    $aliquota=$pergunta17;
    $infos[]=$pergunta17;
    $true4=false;
    } else {
        echo  "Valór inadequádo, tente novamente, a Alíquota deve conter a porcentagem(máx: 26,5!\n";
    }
    }
    while ($true5) { 
    $pergunta18=readline("Digite o Valor Total da Nota: ");
    echo"\n";
    if (is_numeric($pergunta18)&& $pergunta18!="a") {
    $totalNota=$pergunta18;
    $infos[]=$pergunta18;
    $true5=false;
    } else {
        echo "Valór inadequádo, tente novamente, o Valor da Nota deve conter apenas números!\n";
    }
    }
    while ($true6) { 
    $pergunta19=readline("Digite as Deduções: ");
    echo"\n";
    if (is_numeric($pergunta19)&& $pergunta19!="a"){
    $deducao=$pergunta19;
    $infos[]=$pergunta19;
    $true6=false;
    } else {
        echo "Valór inadequádo, tente novamente, as Deduções devem conter apenas números!\n";
    }
}
    $pergunta20=readline("Digite o Tipo de Serviço: ");
    echo"\n";
    $tipoDServico=$pergunta20;
    $infos[]=$pergunta20;

    while ($true7) {
    $pergunta21=readline("Digite o PIS: ");
    echo"\n";
    if (is_numeric($pergunta21)&& $pergunta21!="a") {
    $pis=$pergunta21;
    $infos[]=$pergunta21;
    $true7=false;
    } else {
        echo "Valór inadequádo, tente novamente, o PIS deve conter apenas números!\n";
    }
}   
    while ($true8){
    $pergunta22=readline("Digite o CONFINS: ");
    echo"\n";
    if (is_numeric($pergunta22)&& $pergunta22!="a"){
    $confins=$pergunta22;
    $infos[]=$pergunta22;
    $true8=false;
    } else {
        echo "Valór inadequádo, tente novamente, o CONFINS deve conter apenas números!\n";
    }
}
    while ($true9) {
    $pergunta23=readline("Digite o INSS: ");
    echo"\n";
    if (is_numeric($pergunta23) && $pergunta23!="a"){
    $inss=$pergunta23;
    $infos[]=$pergunta23;
    $true9=false;
    } else {
        echo "Valór inadequádo, tente novamente, o INSS deve conter apenas números!\n";
    }
}
    while($true10) { 
    $pergunta24=readline("Digite o IR: ");
    echo"\n";
    if (is_numeric($pergunta24)&& $pergunta24!="a"){
    $ir=$pergunta24;
    $infos[]=$pergunta24;
    $true10=false;
    } else {
        echo "Valór inadequádo, tente novamente, o IR deve conter apenas números!\n";
    }
}
    while ($true11) {
    $pergunta25=readline("Digite o CSLL: ");
    echo"\n";
    if (is_numeric($pergunta25)&& $pergunta25!="a"){
    $csll=$pergunta25;
    $infos[]=$pergunta25;
    $true11=false;
    } else {
        echo "Valór inadequádo, tente novamente, o CSLL deve conter apenas números!\n";
    }
}
    while ($true12) {
    $pergunta26=readline("Digite o ISS: ");
    echo"\n";
    if (is_numeric($pergunta26)&& $pergunta26!="a") {
    $iss=$pergunta26;
    $infos[]=$pergunta26;
    $true12=false;
    } else {
        echo "Valór inadequádo, tente novamente, o ISS deve conter apenas números!\n";
    }
}
    while ($true13){
    $pergunta27=readline("Digite o Total de Outros Impostos, caso haja: ");
    echo"\n";
    if (is_numeric($pergunta27)&& $pergunta27!="a"){
    $others=$pergunta27;
    $infos[]=$pergunta27;
    $true13=false;
    } else {
        echo "Valór inadequádo, tente novamente, os Outros impostos devem conter apenas números!\n";
    }
}
    while ($true14){
    $pergunta28=readline("Digite o Crédito para Abatimento IPTU, caso haja: ");
    echo"\n";
    if (is_numeric($pergunta28)&& $pergunta28!="a"){
    $iptu=$pergunta28;
    $infos[]=$pergunta28;
    $true14=false;
    } else {
        echo "Valór inadequádo, tente novamente, o Crédito deve conter apenas números!\n";
    }
}
    while ($true15){
    $pergunta29=readline("Digite o Dia da prestação: ");
    echo"\n";
    if (is_numeric($pergunta29)&& $pergunta29!="a" && $pergunta29>0 && $pergunta29<32){
    $dataDPrestacao[0]=$pergunta29;
    $true15=false;
    } else {
        echo "Valór inadequádo, tente novamente, o Dia da Prestação deve ser um número interio!\n";
    }
}
    while ($true16) {
    $pergunta30=readline("Digite o Mês da prestação: ");
    echo"\n";
    if (is_numeric($pergunta30)&& $pergunta30!="a" && $pergunta30>0 && $pergunta30<13){
    $dataDPrestacao[1]=$pergunta30;
    $true16=false;
    } else {
        echo "Valór inadequádo, tente novamente, o Mês da Prestação deve ser um número inteiro!\n";
    }
}
    while ($true17) {
    $pergunta31=readline("Digite o Ano da prestação: ");
    echo"\n";
    if (is_numeric($pergunta31)&& $pergunta31!="a" && $pergunta31>0){
    $dataDPrestacao[2]=$pergunta31;
    $true17=false;
    } else {
        echo "Valór inadequádo, tente novamente, o Ano da Prestação deve ser um número inteiro!\n";
    }
}
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
             $tipoDServico          |   $dataDPrestacao[0]/$dataDPrestacao[1]/$dataDPrestacao[2]
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
    date_default_timezone_set('America/Sao_Paulo');
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
function limpar () {
    system("powershell -Command Clear-Host");
}
limpar();
painel();