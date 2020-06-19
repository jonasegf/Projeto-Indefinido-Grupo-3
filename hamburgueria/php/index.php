
<?php
require_once 'banco.php';
require_once 'header.php';
$sql = "SELECT * FROM produtos";
$resultado = mysqli_query($database,$sql);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<style>
    .contente{
        height: 100%;
        width: 65.5%;
        display: flex;
        justify-content: center;
        flex-direction: row;
        background-color: transparent;
    }
    .amendoim{
        align-items: center;
        display: flex;
        justify-content: center;
        background-image: url("https://ctl.s6img.com/society6/img/f9SdQ5IGJf7zHnaTyE_YG9ELB9k/w_1500/coffee-mugs/swatch/~artwork,fw_4600,fh_2000,iw_4600,ih_2000/s6-0076/a/30487614_11407769/~~/graphic-seamless-pattern-bright-tasty-burgers-on-a-dark-background-mugs.jpg");
    }
</style>
<body >
    <div class="amendoim">
    <div class="contente" >
    <div class="row">
        <?php
            while($produtos = mysqli_fetch_assoc($resultado)):
        ?>
        <div>
        <div class="col-sm-6" >
            <div class="card" style="width: 18rem;">

            <img class="w-100 p-3" src="<?php echo $produtos['produto_imagem']?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $produtos['produto_nome'] ?></h5>
            <p class="card-text"><?= $produtos['produto_descricao'] ?></p>
            <h2 class="card-title"><?= $produtos['produto_preco'] ?></h2>
            <?php echo '<a href="carrinho.php?add=carrinho&id='.$produtos['produto_codigo'].'" class="btn btn-success">Adicionar</a>'?>
            </div>
            </div>
            <br>
        </div>
    </div>
    <?php endwhile; ?>
    </div>     
    </div>


</body>
    
