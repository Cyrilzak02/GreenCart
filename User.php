<?php
session_start();

if(isset($_SESSION['anuncio_criado']) && $_SESSION['anuncio_criado']){
    ?><script>
     alert ('Anuncio registrado com sucesso.');
     </script>
     <?php
     unset($_SESSION['anuncio_criado']);
}

if(isset($_SESSION['anuncio_criado']) && !$_SESSION['anuncio_criado']){
    ?><script>
     alert ('Anuncio nao registrado por causa de uma falha');
     </script>
     <?php
     unset($_SESSION['anuncio_criado']);
}


if(isset($_SESSION['update']) && $_SESSION['update']){
    ?><script>
     alert ('Infos updated successfully.');
     </script>
     <?php
     unset($_SESSION['update']);
}
if(isset($_SESSION['update']) && !$_SESSION['update']){
    ?><script>
     alert ('Infos could not be updated.');
     </script>
     <?php
     unset($_SESSION['update']);
}

if($_SESSION['is_produtor']){
$first_name_prod =  isset($_SESSION['infos_pessoa_prod']['nome_empresa']) ? $_SESSION['infos_pessoa_prod']['nome_empresa'] : "" ;
}
else{
$first_name =  isset($_SESSION['infos_pessoa']['first_name']) ? $_SESSION['infos_pessoa']['first_name'] : "" ;
$last_name =  isset($_SESSION['infos_pessoa']['last_name']) ? $_SESSION['infos_pessoa']['last_name'] : "" ;}
?>


<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>GreenCart -  Produtos orgânicos aqui e agora!</title>

            <!-- font awesome cdn link  -->
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

            <!-- custom css file link  -->
            <link rel="stylesheet" href="CSS/index.css">
            
           

        </head>
        <body>
            


            
        <!-- header section starts  -->

            <header>

                <input type="checkbox" name="" id="toggler">
                <label for="toggler" class="fas fa-bars"></label>

                <a href="index.php" class="logo">
                    <img src="images\greencart_carrinho-removebg-preview.png" width="300px;"></img>
                    </a>

                <nav class="navbar">
                    <a href="index.php">Home</a>
                    <a href="index.php">Sobre</a>
                    <a href="produtos.php">Produtos</a>
                    <a href="avaliacoes.php">Avaliações</a>
                    <a href="index.php">Contato</a>
                </nav>

                <div class="icons">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="carrinho.php" class="fas fa-shopping-cart"></a>
                    <a href="User.php" data-modal-target="#modal" class="fas fa-user"></a>
                    
                </div>
               

  </div>
  
            </header>
            <section class="home" id="home">


<div class="content">
<img src="img/images.jpg">
<h1 style="margin-top:20px;font-size:20px;"><?php if($_SESSION['is_produtor']){

    
    echo 'Bem Vindo Produtor:  '.$first_name_prod;}
    else{ 
        echo 'Bem Vindo Comprador:  '.$first_name.' '.$last_name;
    } ?></h1>
<div style="display:inline-block;margin-top:20px;">    
<button name="Edit Profile" style="width: 100px;height: 50px; border-radius: 20px;color: white;background-color:green;cursor:pointer;" onclick="toInfo()">Edit Profile</button>
<?php if($_SESSION['is_produtor']){?>
<button name="Registrar Produto" style="width: 200px;height: 50px; border-radius: 20px;color: white;background-color:green;cursor:pointer;" onclick="toAnuncio()">Registrar Anuncio</button>
<?php }?>
</div>
</div>


</section>
<script>
    function ret(){
        let c= confirm('Are you sure you want to log out ?');
        if(c){
            <?php unset($_SESSION['firstname']);
            unset($_SESSION['lastname1']);
            ?>
            window.location.href='Login_test.php';
        }
        
    }
    function toInfo(){
        window.location.href='Info_User.php';
    }
    function toAnuncio(){
        window.location.href='Registrar_anuncio.php'
    }
</script>
<div style="display: flex;justify-content:center;align-items:center;margin-top:20px;">
<button style="font-size:30px;background:green;border-radius:3px;color:aliceblue;cursor:pointer;" onclick="ret();" id='logout' >Logout</button>
</div>

        </body>
    </html>
            


