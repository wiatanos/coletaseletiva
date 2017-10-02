<!doctype html>
<html lang="pt-br" class="no-js">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-dialog.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="row" base>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get form-grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">COLETA SELETIVA</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li><a href="#section1">MAPA DA COLETA<span class="sr-only">(current)</span></a></li>
            <li><a href="#section2">COMO FUNCIONA</a></li>
            <li><a href="#section3">COMO RECICLAR</a></li>
            <li><a href="#section4">MATERIAL DE DIVULGAÇÃO</a></li>
            <li><a href="#section5">FALE CONOSCO</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <nav id="nav_dot">
                <ul>
                    <li><a href="#section1" class="dot"></a></li>
                    <li><a href="#section2" class="dot"></a></li>
                    <li><a href="#section3" class="dot"></a></li>
                    <li><a href="#section4" class="dot"></a></li>
                    <li><a href="#section5" class="dot"></a></li>
                </ul>
            </nav>

          <div class="col-xs-12" id="main">
            <img src="css/img/main.jpg">
            <div id="arrow_down" class="text-center">
              <a href="#section1"><i class="arrow down"></i></a>
            </div>
          </div>

          <div class="area col-xs-12" id="section1">
            <div id="map_container" class="col-xs-12">
              <div id="map"></div>
              <div id="over_map">
                <span class="text-center" style="text-shadow: 0px 0px 5px black;"><h4>Coleta Seletiva Itinerarios</h4></span>

                  <div class="dropdown">
                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown">Segunda<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="background-color: #398439;">
                      <li style="background-color: #398439;">Jardim Capriconrio</li>
                      <li style="background-color: #398439;">Porto Novo</li>
                      <li style="background-color: #398439;">Pirassunga/CDP</li>
                      <li style="background-color: #398439;">Massaguaçu/Getuba</li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" id="terca_btn" type="button" data-toggle="dropdown" style="background-color: #f1c40f;">Terça<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="background-color: #f1c40f;">
                      <li style="background-color: #f1c40f;">Praia das Palmeiras</li>
                      <li style="background-color: #f1c40f;">Jardim Britânia</li>
                      <li style="background-color: #f1c40f;">Praia da Moccoca</li>
                      <li style="background-color: #f1c40f;">Tabatinga</li>
                      <li style="background-color: #f1c40f;">Verde Mar</li>
                      <li style="background-color: #f1c40f;">Jardim Olaria</li>
                      <li style="background-color: #f1c40f;">Casa Branca</li>
                      <li style="background-color: #f1c40f;">Pontal Santa Marina</li>
                      <li style="background-color: #f1c40f;">Golfinho</li>
                      <li style="background-color: #f1c40f;">Morro do Algodão</li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" id="terca_btn" type="button" data-toggle="dropdown" style="background-color: #e67e22;">Quarta<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="background-color: #e67e22;">
                      <li style="background-color: #e67e22;">Morro do Algodão</li>
                      <li style="background-color: #e67e22;">Barranco Alto</li>
                      <li style="background-color: #e67e22;">Travessão</li>
                      <li style="background-color: #e67e22;">Pegorelli</li>
                      <li style="background-color: #e67e22;">Jardim Aruan</li>
                      <li style="background-color: #e67e22;">Indaia</li>
                      <li style="background-color: #e67e22;">Poiares</li>
                      <li style="background-color: #e67e22;">Jardim Gaivota</li>
                      <li style="background-color: #e67e22;">Tinga</li>
                      <li style="background-color: #e67e22;">Jaqueira</li>
                      <li style="background-color: #e67e22;">Maristela</li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-info dropdown-toggle" id="terca_btn" type="button" data-toggle="dropdown" >Quinta<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="background-color: #5bc0de;">
                      <li style="background-color: #5bc0de;">Vapapesca</li>
                      <li style="background-color: #5bc0de;">Perequê Mirim</li>
                      <li style="background-color: #5bc0de;">Ipiranga</li>
                      <li style="background-color: #5bc0de;">Prainha</li>
                      <li style="background-color: #5bc0de;">Martim de Sa</li>
                      <li style="background-color: #5bc0de;">Canta Galo</li>
                      <li style="background-color: #5bc0de;">Cidade Jardim</li>
                    </ul>
                  </div>

                  <div class="dropdown">
                    <button class="btn btn-warning dropdown-toggle" id="terca_btn" type="button" data-toggle="dropdown" style="background-color: #d35400;">Sexta<span class="caret"></span></button>
                    <ul class="dropdown-menu" style="background-color: #d35400;">
                      <li style="background-color: #d35400;">Rio do Ouro</li>
                      <li style="background-color: #d35400;">Jaraguazinho</li>
                      <li style="background-color: #d35400;">Ponte Seca</li>
                      <li style="background-color: #d35400;">Estrela Dalva</li>
                      <li style="background-color: #d35400;">Jardim Primavera</li>
                      <li style="background-color: #d35400;">Benfica</li>
                      <li style="background-color: #d35400;">California</li>
                    </ul>
                  </div>


                  <a href="#section5"><input type="button" class="form-control btn btn-primary" style="margin-top: 20px;" value="Agendar Coleta"></a>
              </div>
            </div>
            <input id="pac-input" class="controls" type="text" placeholder="Busque seu endereço">
          </div>

          <div class="area2 col-xs-12" id="section2">
            <h2>Como Funciona</h2>
            <article>
                <p>
                  O caminhão da coleta seletiva passará na porta da sua casa de acordo com a programação do seu bairro no período determinado, recolhendo o material reciclável separado.<br>
                  Dicas importantes:<br>
                  <ul>
                    <li>Evite deixar a coleta seletiva em sacos iguais aos da coleta municipal. Dê preferência para caixas de papelão.</li>
                    <li>Disponibilize os recicláveis em horário próximo ao período da coleta, evite deixar um dia antes</li>
                    <li>Lave bem e seque os recicláveis antes de disponibilizar, evitando atração de vetores (moscas, abelhas, etc)</li>
                  </ul>
              </p>
            </article>
          </div>

          <div class="area col-xs-12" id="section3">
            <h2>Como Reciclar</h2>
            <article>
                <p>
                  <b>Como separar o lixo doméstico?</b>
                  <ul>
                    <li>
                      Não misture recicláveis com orgânicos - sobras de alimentos, cascas de frutas e legumes. Coloque plásticos, vidros, metais e papéis em sacos separados
                    </li>
                    <li>
                      Lave as embalagens do tipo longa vida, latas, garrafas e frascos de vidro e plástico. Seque-os antes de depositar nos coletores
                    </li>
                    <li>
                      Papéis devem estar secos. Podem ser dobrados, mas não amassados
                    </li>
                    <li>
                      Embrulhe vidros quebrados e outros materiais cortantes em papel grosso (do tipo jornal) ou colocados em uma caixa para evitar acidentes. Garrafas e frascos não devem ser misturados com os vidros planos
                    </li>
                  </ul>
                  <b>O que não vai para o lixo reciclável?</b></br>
                  Papel-carbono, etiqueta adesiva, fita crepe, guardanapos, fotografias, filtro de cigarros, papéis sujos, papéis sanitários, copos de papel. Cabos de panela e tomadas. Clipes, grampos, esponjas de aço, canos. Espelhos, cristais, cerâmicas, porcelana. Pilhas e baterias de celular devem ser devolvidas aos fabricantes ou depositadas em coletores específicos.
                  <b>E as embalagens mistas: feitas de plástico e metal, metal e vidro e papel e metal?</b></br>
                  Nas compras, prefira embalagens mais simples. Mas, se não tiver opção, desmonte-a separando as partes de metal, plástico e vidro e deposite-as nos coletores apropriados. No caso de cartelas de comprimidos, é difícil desgrudar o plástico do papel metalizado, então descarte-as junto com os plásticos. Faça o mesmo com bandejas de isopor, que viram matéria-prima para blocos da construção civil.
                  <b>Outras dicas</b></br>
                  <b>Papéis:</b> todos os tipos são recicláveis, inclusive caixas do tipo longa-vida e de papelão. Não recicle papel com material orgânico, como caixas de pizza cheias de gordura, pontas de cigarro, fitas adesivas, fotografias, papéis sanitários e papel-carbono.<br>
                  <b>Plásticos:</b> 90% do lixo produzido no mundo são à base de plástico. Por isso, esse material merece uma atenção especial. Recicle sacos de supermercados, garrafas de refrigerante (pet), tampinhas e até brinquedos quebrados
                  <b>Vidros:</b> quando limpos e secos, todos são recicláveis, exceto lâmpadas, cristais, espelhos, vidros de automóveis ou temperados, cerâmica e porcelana.<br>
                  <b>Metais:</b> além de todos os tipos de latas de alumínio, é possível reciclar tampinhas, pregos e parafusos. Atenção: clipes, grampos, canos e esponjas de aço devem ficar de fora.<br>
                  <b>Isopor:</b> Ao contrário do que muita gente pensa, o isopor é reciclável. No entanto, esse processo não é economicamente viável. Por isso, é importante usar o isopor de diversas formas e evitar ao máximo o seu desperdício. Quando tiver que jogar fora, coloque na lata de plásticos. Algumas empresas transformam em matéria-prima para blocos de construção civil.<br>
                </p>
              </article>
            </div>

            <div class="area2 col-xs-12" id="section4">

              <h2 class="text-center">Material de Divulgação</h2>
              <article class="text-center">
                  <object id="pdf" data="docs/material_divulgacao.pdf" type="application/pdf" width="50%" height="500px" internalinstanceid="6" title="">
                    alt : <a href="docs/material_divulgacao.pdf">material_de_divulgacao.pdf</a>
                  </object><br>
                  <a href="docs/material_divulgacao.pdf" download>
                    <button class="btn btn-default">
                    <span  class="glyphicon glyphicon-download-alt"><br>BAIXAR</span>
                  </button>
                  </a>
                </article>

              </div>

              <div class="area col-xs-12" id="section5">

                <article class="col-xs-12 col-md-5 col-xs-offset-0 col-md-offset-2">
                  <h2>Mais informações</h2>
                  <h4>
                    Entrar em contato com a SMAAP – Secretaria de Meio Ambiente, Agricultura e Pesca através do telefone <br><span class="glyphicon glyphicon-earphone"></span>(12)3897-2530</br>
                    <span class="glyphicon glyphicon-envelope"></span>
                    Email 
                    <a href="mailto:meioambiente@caraguatatuba.sp.gov.br">meioambiente@caraguatatuba.sp.gov.br</a>
                  </h4>
                </article>
                <h2 class="col-xs-12 col-md-5">Fale Conosco</h2>
                <div class="input-group">
                  <select class="form-control" id="select_contato">
                    <option value="1">Agendamento</option>
                    <option value="2">Contato</option>
                  </select>
                </div>

                <form method="post" action="db/mail.php" id="form_contato" class="col-xs-offset-0 col-md-offset-7" hidden>
                  <div class="form-group">
                    <label>Nome</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="nome" class="form-control">
                    </div>
                    
                    <div class="form-group ">
                    <label>Endereço</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="endereco" id="endereco" class="form-control">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label>Bairro / CEP</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="bairro" id="bairro" class="form-control">
                      <input type="text" name="lat" id="lat" value="" hidden>
                      <input type="text" name="lng" id="lng" value="" hidden>
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="cep" id="cep" class="form-control">
                    </div>
                  </div>

                    <label>E-Mail</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="email" class="form-control">
                    </div>

                    <label>Assunto</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="assunto" class="form-control">
                    </div>

                    <label>Mensagem</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <textarea name="mensagem" class="form-control"></textarea> 
                    </div>
                  </div>

                  <button type="submit" class="button buttonBlue" id="btn_contato">Enviar
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </form>

                <form method="post" action="db/form-data.php" id="form_agenda" class="col-xs-offset-0 col-md-offset-7">
                  <div class="form-group ">
                    <label>Nome/ Empresa</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="nome" class="form-control">
                    </div>
                  </div>

                  <div class="form-group" method="post" action="post.php">
                    <label>E-mail</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1">@</span>
                      <input type="text" name="email" class="form-control">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label>Telefone</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-earphone"></span></span>
                      <input type="text" name="telefone" id="telefone" class="form-control">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label>Endereço</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="endereco" id="endereco" class="form-control">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label>Bairro / CEP</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="bairro" id="bairro" class="form-control">
                      <input type="text" name="lat" id="lat" value="" hidden>
                      <input type="text" name="lng" id="lng" value="" hidden>
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-globe"></span></span>
                      <input type="text" name="cep" id="cep" class="form-control">
                    </div>
                  </div>

                  <div class="form-group ">
                    <label>Tipo Material / Peso Estimado</label>
                    <div class="input-group">
                      <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-trash"></span></span>
                      <select class="form-control" name="material" >
                        <option value="Plástico">Plástico</option>
                        <option value="Metal">Metal</option>
                        <option value="Papel">Papel</option>
                        <option value="Vidro">Vidro</option>
                      </select>
                      <span class="input-group-addon" id="basic-addon1">KG</span>
                      <input type="text" name="peso" id="peso" class="form-control">
                    </div>
                  </div>

                  <button type="submit" class="button buttonBlue" id="btn_agenda">Agendar
                    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
                  </button>
                </form>
              </div>

              <div class="area2 col-xs-12 text-center" style="background-color: #34495e; padding: 5px;" id="section6">
                <small style="color:white;">Desenvolvido pela Secretaria de TI de Caraguatatuba</small>
              </div>

            </div>
          </div>
        </div>

      </div>
    </body>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/geoxml3.js"></script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDNYcra7RZ5stWmAcdNk_MB6d3u15bzTlI&libraries=places"></script>
    <script type="text/javascript" src="js/area-kml.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dialog.min.js"></script>
    <script type="text/javascript" src="js/jquery.mask.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/validate-tel-cel.js"></script>
    <script type="text/javascript" src="js/validaDataBR.js"></script>
    </html>
