<?php
$servicos = [
    [
        "nome" => "Material para sua fabrica",
        "imagem"=> "imagens/Im-01.jpg",
        "descricao" => "Onde você encontra tudo que precisa!"
    ],
    [
        "nome" => "Material Bruto",
        "imagem"=> "imagens/Im-02.jpg",
        "descricao" => "Mais variados materiais"   
    ],
    [
        "nome" => "Premium",
        "imagem"=> "imagens/Im-03.jpg",
        "descricao" => "Joias especiais"
    ],
    [
        "nome" => "Design de peças ",
        "imagem"=> "imagens/Im-04.jpg",
        "descricao" => "Desenvolvemos peças unicas para você!"
    ],
    [
        "nome" => "Leilão",
        "imagem"=> "imagens/Im-05.jpg",
        "descricao" => "Encontre as melhores joias"
    ],
    [
        "nome" => "joias raras",
        "imagem"=> "imagens/Im-01.jpg",
        "descricao" => "Toda a beleza em um lugar!"
    ],
];

function listarServicos(){
    

    global $servicos;
    foreach ($servicos as $index => $servico) {
       
        echo "<div class='col-md-4 mt-4'>
        <div class='card'>
            <img class='card-img-top p-4' src='$servico[imagem]' alt='Imagem de capa do card'>
            <div class='card-body'>
                <p class='card-text text-center'><a href='servico.php?id=$index.php'>$servico[nome]</a></p>
            </div>
        </div>
    </div>";
    }
}


function getNome($id){
    global $servicos;
    return $servicos[$id]["nome"];

}

