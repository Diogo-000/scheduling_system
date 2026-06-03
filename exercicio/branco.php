<?php
/*Forma arcaica
$nfts_de_gato=array("miau", "meaw", "miaw");
echo $nfts_de_gato[1];
Forma humana:
$nfts_de_gato1=["miau", "meaw", "miaw"];
foreach ($nfts_de_gato1 as $nft) {
    echo $nft . "\n";
}
Forma diferente
nft[0]="miau";
nft[1]="meaw";
nft[2]="miaw";

Função count:
echo count($nft_de_gato);

Atribuição
$pessoas=[
 "102"=>"Thiago"
 "289"=>"Marcos"
 "389"=>"Diogo"
 "024"=>"André"
]
 echo $pessoas["024"]
*/
$listagenerica=["tiago","thiago1","thiago2","thiago3","thiago4","thiago5"];
$variavel=count($listagenerica)-1;
$listagenerica[$variavel]="Teagar";
foreach ($listagenerica as $nomeprofessor) {
    echo $nomeprofessor. "\n";
}

