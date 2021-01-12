<!DOCTYPE html>
<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>CodePen - A Pen by olciandro</title>
        <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'><link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="dist/style.css" />
    </head>
    <body>
        <!-- partial:index.partial.html -->
        <title> Portifolio </title>
        <nav class="navbar navbar-dark bg-primary">
            <a class="navbar-brand" href="#">Olciandro Matos</a>
            <div>
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#sobre">Sobre<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portifolio">Portifólio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contatos" >Contatos</a>
                    </li>
                </ul> 
            </div>
        </nav>

        <div class="container navbar navbar-light">
            <section id="sobre" class="scroll">
                <center><h3 id="h"><strong>Sobre mim</strong></h3></center>
                <center> <hr class="hr" /> </center>
                <center> <img id="perfil" src="https://media.licdn.com/mpr/mpr/shrinknp_400_400/AAEAAQAAAAAAAAMyAAAAJGYwNzkyNWZhLTZkZDYtNDFiZi1iNDZhLWQyNTI3ZTgxNzg5Zg.jpg">
                    <p class="col-xs-12"><h4 id="h4">Meu nome é Olciandro Matos Magalhães,<br> estou cursando 6o (sexto semestre) de Sistema de Informação no Centro Universitario UDF em Brasília.<br> Sou desenvolvedor Java Web e estou sempre buscando novas possibilidades de expandir meus conhecimentos.</h4></p></center>
            </section>
            <section id="portifolio" class="scroll">
                <center>
                    <h3 id="h">
                        <strong>Portifolio</strong>
                    </h3>
                </center>
                <hr class="hr2">
                <center> 
                    <div class="row" id="boxBody"> 
                        <div class="mix krakens col-sm-4">
                            <img class="img-responsive" src="http://placehold.it/300x200" alt="...">
                            <p>Projeto 1 <br><a href="#">link</a></p>
                        </div>
                        <div class="mix dogs cats col-sm-4">
                            <img class="img-responsive" src="http://placehold.it/300x200" alt="...">
                            <p>Projeto 2 <br><a href="#">link</a></p>
                        </div>
                        <div class="mix dogs cats col-sm-4">
                            <img class="img-responsive" src="http://placehold.it/300x200" alt="...">
                            <p>Projeto 3 <br><a href="#">link</a></p>
                        </div>
                    </div>
                </center>
            </section>
        </div>

        <div class="jumbotron">

            <section id="contatos" class="scroll">
                <center>
                    <h3 id="h">
                        <strong>Contatos</strong>
                    </h3>
                </center>

                <hr class="hr3">
                <center>
                    <div>
                        <ul class="" id="menuContatos">
                            <li>
                                <a href="https://www.freecodecamp.com/olciandromatos">
                                    <img src="https://pbs.twimg.com/profile_images/692531829287567360/ytP7U362_normal.png"><br>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/zao.magalhaes.9">
                                    <img class="" src="http://www.marketing4newmedia.com/wp-content/uploads/2012/02/Facebook-Logo-50X50.png"><br>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/in/olciandro-matos-a259b1ba?trk=nav_responsive_tab_profile">
                                    <img src="http://www.kerrydean.com/pictures/icons-social/linkedin-50x50.png"> <br>
                                </a>
                            </li>
                        </ul>  
                    </div>
                </center>
            </section>
        </div>
        <!-- partial -->

    </body>
</html>