<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <script type="text/javascript" src="../js/jquery-3.4.1.js"></script>

    <script type="text/javascript">
        //<![CDATA[
        $(document).ready(function() {
            $('.abre-fecha').hide();
            $('<div id="tela" ><img src="../img/imagem1.PNG" alt="Descrição da imagem" /></div>')
                .insertAfter('#galeria');
            $('.foto').click(function(event) {
                event.preventDefault();
                $('#tela img').remove();
                $('<img />')
                    .attr('src', $(this).attr('src'))
                    .css('opacity', '0.3')
                    .appendTo('#tela')
                    .animate({
                        opacity: 1
                    }, 2000);
            });
        });
        // ]]>
    </script>
    <title> Escolinha :: Galeria</title>
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
                <li class="nav-item">
                    <a class="nav-link" href="#">Inscrições</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Galeria</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Contatos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#">Sobre nós</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <br>

    <div class="container">
        <div class="card h-100 text-center">
            <div class="card-header">
                <h2>Nossa Galeria</h2>
            </div>
            <div class="card-body">
                <div id="tudo">
                    <div id="galeria">
                        <a href="../img/imagem1.PNG"><img src="../img/imagem1.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem2.PNG"><img src="../img/imagem2.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem3.PNG"><img src="../img/imagem3.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem4.PNG"><img src="../img/imagem4.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem5.PNG"><img src="../img/imagem5.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem6.PNG"><img src="../img/imagem6.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                        <a href="../img/imagem7.PNG"><img src="../img/imagem7.PNG" alt="Descrição da foto" width="125" height="80" class="foto" /></a>
                    </div>

                    <span class="abre-fecha">Clique para ampliar</span>
                </div>
            </div>
            <div class="card-footer text-muted">
                2 dias atrás
            </div>
        </div>
    </div>
    <br>
    <footer class="py-4 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2019</p>
        </div>
    </footer>

</body>

</html>