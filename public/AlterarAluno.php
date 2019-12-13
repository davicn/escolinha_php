<?php 
include 'db_connection.php';
$conn = OpenCon();
$id=$_REQUEST['id'];
$query = "SELECT * from aluno where idaluno='".$id."'"; 
$result = mysqli_query($conn, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <title>Página Administrativa :: Alteração de Cadastro de Aluno</title>
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

    <div class="container">
        <div class="card h-100 ">
            <div class="card-header text-center">
                <h2>Página Administrativa - Alteração de Cadastro de Aluno</h2>
            </div>
            <div class="card-body">
            <?php
                $status = "";
                if(isset($_POST['new']) && $_POST['new']==1){
                    $id=$_REQUEST['id'];
                    $nomeAluno = $_REQUEST['nomeAluno'];
                    $dataNascimento = $_REQUEST['dataNascimento'];
                    $nomeResponsavel = $_REQUEST['nomeResponsavel'];
                    $telefoneResponsavel = $_REQUEST['telefoneResponsavel'];
                    $endereco = $_REQUEST['endereco'];
                    $posicaoTime = $_REQUEST['posicaoTime'];
                    $turma = $_REQUEST['turma'];
                    $observacaoMedica = $_REQUEST['observacaoMedica'];
                    $autorizacaoMedica = $_REQUEST['autorizacaoMedica'];
                    $status = $_REQUEST['status'];

                    $update="update aluno set status='".$status."', nome='".$nomeAluno."', dataNasc='".$dataNascimento."', responsavel='".$nomeResponsavel."', telefone='".$telefoneResponsavel."', endereco='".$endereco."', poiscao='".$posicaoTime."', idturma='".$turma."', obsMedica='".$observacaoMedica."', autorizaMedica='". $autorizacaoMedica."' where idaluno='".$id."'";
                    mysqli_query($conn, $update) or die(mysqli_error());
                    $status = "<p style='color: black;'>Novo Registro Alterado com Sucesso. </p><a href='ConsultaAluno.php'>Consultar Registro</a>";
                    echo '<p style="background-color: red; text-align: center;">'.$status.'</p>';
                }else {
            ?>

                <form name="form" method="post" action="">
                    <input type="hidden" name="new" value="1" />
                    <input name="id" type="hidden" value="<?php echo $row['idaluno'];?>" />
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome completo</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nomeAluno"  value="<?php echo $row['nome'];?>"  required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Data de Nascimento</label>
                        <input class="form-control" type="date" id="exampleFormControlInput1" name="dataNascimento" required  value="<?php echo $row['dataNasc'];?>" >
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nome do Responsavel</label>
                        <input class="form-control" id="exampleFormControlInput1" name="nomeResponsavel" required value="<?php echo $row['responsavel'];?>">
                    </div>                    
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Telefone do Responsavel</label>
                        <input class="form-control" id="exampleFormControlInput1" name="telefoneResponsavel" required value="<?php echo $row['telefone'];?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Endereço</label>
                        <input class="form-control" id="exampleFormControlInput1" name="endereco" required value="<?php echo $row['endereco'];?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Posição</label>
                        <input class="form-control" id="exampleFormControlInput1" name="posicaoTime" required value="<?php echo $row['poiscao'];?>">
                    </div>


                     <div class="form-group">
                        <label for="exampleFormControlSelect1">Status do Aluno</label>
                        <select class="form-control" name="status"  value="<?php echo $row['status'];?>">
                            <option value="Ativo" <?=($row['status'] == 'Ativo')?'selected':''?>>Ativo</option>
                            <option value="Inativo" <?=($row['status'] == 'Inativo')?'selected':''?> >Inativo</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Turma por idade</label>
                        <select class="form-control" name="turma" value="<?php echo $row['idturma'];?>">
                            <option value="1"  <?=($row['idturma'] == '1')?'selected':''?>>Sub 6 (00-06)</option>
                            <option value="2"  <?=($row['idturma'] == '2')?'selected':''?>>Sub 17 (07-17)</option>
                        </select>
                    </div>

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Observação Médica</label>
                        <input class="form-control" id="exampleFormControlInput1" name="observacaoMedica" required value="<?php echo $row['obsMedica'];?>">
                    </div>
                    

                     <div class="form-group">
                        <label for="exampleFormControlInput1">Autorização Médica</label>
                        <input class="form-control" id="exampleFormControlInput1" name="autorizacaoMedica" required value="<?php echo $row['autorizaMedica'];?>">
                    </div>
                    
                    
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <p><input name="submit" type="submit" value="Alterar" /></p>
                        </div>
                    </div>
                </form>

            <?php } ?>    
            </div>
        </div>
    </div>
    <br>
    <br>
    <footer class="footer py-4 mt-auto bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

</body>

</html>