<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Cadastro de Aluno</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
        <!-- <a class="navbar-brand" href="#">
            <img src="../img/logo.png" width="150" height="150" alt="">
        </a>-->
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Inscrições</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Sobre nós</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link " onClick="document.location.href='admin.php'">Página Administrativa</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Sair</button>
            </form>
        </div>
    </nav>
    <br>

    <?php
        include 'db_connection.php';
       

        $status = "";
        if(isset($_POST['new']) && $_POST['new']==1){
            $conn = OpenCon();
            $trn_date = date("Y-m-d");
            $nomeEvento = $_REQUEST['nomeEvento'];
            $descricao = $_REQUEST['descricao'];
            $imagem = $_REQUEST['imagem'];
        

            $ins_query="insert into evento
            (`nomeEvento`,`descricao`,`imagem`,) values
            ('$nomeEvento','$trn_date','$descricao','$imagem')";


            mysqli_query($conn,$ins_query)
            or die(mysql_error());
            CloseCon($conn);
            $status = "<p style='color: black;'>Novo Registro Adicionado com Sucesso. </p>
            <a href='ConsultaAluno.php'>Consultar Registro</a>";
        }
    ?>


    <div class="container">
        <div class="card h-100 ">
            <div class="card-header text-center">
                <h2>Página Administrativa - Cadastro de Eventos</h2>
            </div>
            <div class="card-body">
                <div style="background-color: red; text-align: center;">
                 <p style="color:#FF0000;"><?php echo $status; ?></p>
                </div> 
                <form action="" name="form" method="POST">
                <div class="form-group">
                        <label>Nome do Evento</label>
                        <input type="text" class="form-control" name="nome">
                    </div>
                    <div class="form-group">
                        <label >Descrição</label>
                        <textarea name="descricao" class="form-control" cols="30" rows="5"></textarea>
                        
                    </div>
                    <div class="form-group">
                        <label >Imagem</label>
                        <input type="text" class="form-control" name="descricao">
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <p><input name="submit" type="submit" value="Enviar" /></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer py-4 mt-auto bg-dark">
        <div class="container" >
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

</body>

</html>