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
            $nomeAluno = $_REQUEST['nomeAluno'];
            $dataNascimento = $_REQUEST['dataNascimento'];
            $nomeResponsavel = $_REQUEST['nomeResponsavel'];
            $telefoneResponsavel = $_REQUEST['telefoneResponsavel'];
            $endereco = $_REQUEST['endereco'];
            $posicaoTime = $_REQUEST['posicaoTime'];
            $turma = $_REQUEST['turma'];
            $observacaoMedica = $_REQUEST['observacaoMedica'];
            $autorizacaoMedica = $_REQUEST['autorizacaoMedica'];

            $ins_query="insert into aluno
            (`autorizaMedica`,`dataInscricao`,`dataNasc`,`endereco`, `idturma` , `nome`,
            `obsMedica` , `poiscao` , `responsavel`, `status`, `telefone`) values
            ('$autorizacaoMedica','$trn_date','$dataNascimento','$endereco', '$turma', '$nomeAluno', ' $observacaoMedica', '$posicaoTime', '$nomeResponsavel', 'Ativo', '$telefoneResponsavel')";


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
                <h2>Página Administrativa - Cadastro de Aluno</h2>
            </div>
            <div class="card-body">
                <div style="background-color: red; text-align: center;">
                 <p style="color:#FF0000;"><?php echo $status; ?></p>
                </div> 
                <form action="" name="form" method="POST">
                    <input type="hidden" name="new" value="1" />
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome completo</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nomeAluno" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data de Nascimento</label>
                        <input class="form-control" type="date" id="exampleFormControlInput1" name="dataNascimento" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome do Responsavel</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nomeResponsavel" required>
                    </div>                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone do Responsavel</label>
                        <input class="form-control" id="exampleFormControlInput1" name="telefoneResponsavel" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Endereço</label>
                        <input class="form-control" id="exampleFormControlInput1" name="endereco" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Posição</label>
                        <input class="form-control" id="exampleFormControlInput1" name="posicaoTime" required>
                    </div>                   
                     <div class="form-group">
                        <label for="exampleFormControlInput1">Foto</label>
                        <input class="form-control" id="exampleFormControlInput1" name="foto" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Turma por idade</label>
                        <select class="form-control" name="turma" required>
                            <option value="1">Sub 6 (00-06)</option>
                            <option value="2">Sub 17 (07-17)</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Observação Médica</label>
                        <input class="form-control" id="exampleFormControlInput1" name="observacaoMedica" required>
                    </div>
                    

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Autorização Médica</label>
                        <input class="form-control" id="exampleFormControlInput1" name="autorizacaoMedica" required>
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