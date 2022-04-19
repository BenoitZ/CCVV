<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Benoit Zellal</title>

   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script type="text/javascript" src="script.js"></script> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>



    </head>

   
 <body>
   
    <header>
      <nav class = "max-width">
        <div class="container">
          <div class="row">
            <div class="col">
              <h1> Benoit Zellal <p>Aujourd'hui nous sommes le <?php echo date('d/m/Y h:i:s'); ?>.</p>
</h1>
            </div>
          </div>
          <div class="row text-center">
            <div class="col" >
              <button type="button" class="btn btn-primary">
                <a href="#profil" class="text-dark">Profil</a>
              </button>
              <button type="button" class="btn btn-success">
                <a href="#formation" class="text-dark">Formation-Expérience</a>
              </button>
              <button type="button" class="btn btn-info">
                <a href="#compétences" class="text-dark">Compétences</a>
              </button>
              <button type="button" class="btn btn-warning">
                <a href="#intéret" class="text-dark">Centres d'intéret</a>
              </button>
              <button type="button" class="btn btn-danger">
                <a href="#rencontre" class="text-dark">Rencontre</a>
              </button>
              <button type="button" class="btn btn-info">
                <a href="#contact" class="text-dark">Contact</a>
              </button>
            </div>
          </div>
        </div>
      </nav>
    </header> 


    <main>


    <!-----Profil----->
    <section class="bg-light ">
      <div class="container">
        <div class="row">
          <div  id="profil" class="col-6 text-center">
            <h4> <br>Désireux de développer constamment mes compétences afin d’assurer mon évolution professionnelle, 
                je suis confiant en ma capacité d’apprendre et avide de partage professionnel et créatif. </h4>
          </div>
          <div class="col-6">
            <img src="img/Unknown.jpeg" alt="Photo de profil" />
          </div>
        </div>
      </div>
    </section>


    <!-----Formation et éxpérience----->
    <section id="formation">
      <div class="container">
        <div class="row">
          <div class="col-6">
            <h2 id="formation">Formation-Expérience</h2>
                 <p> <strong> REMISE A NIVEAU <br> 
                 Comptable assistant / Developpeur web <br> </strong> 
                 Centre ESRP UGECAM 2022 </p>
                 <p> <strong> DIPLOME CAP Opérateur Projectionniste <br> </strong> 
                 CNED 2009 </p>
                 <p> <strong> DIPLOME BEP Comptabilité <br> </strong> 
                 Lycée Escoffier 2000-2002 </p>
                 <p> <strong> Formation musicale <br> </strong> 
                 Conservatoire à rayonnement régional de Nice 2002-2017 </p>    
          </div>
          <div class="col-6">
            <h3> Expérience professionnelle </h3>
              <h4> Opérateur Projectionniste </h4>
                 <p> Formation et mise en situation d'assistant de direction, gestion de site, gestion d'équipe, projections, gestion d'événements, accueil client, mise en place d'une semaine cinématographique sur toutes sortes de supports informatiques, entretien de matériel de projection argentique et numérique </p>
                 <p> Juin 2007 - Janvier 2022 <br><strong> Les Arcades - Olympia Cannes - 
                 Cinéma Roquefort Les Pins - Le Dahut Valberg </strong> </p>
                 <p> Mai 2012 - Mai 2021 <br> <strong> Cinéma Olympia Cannes </strong> 
                 Projections Festival de Cannes, gestion des clients </p>
                 <h4> Service Spectacle </h4>
                 <p> 2007 <strong> Mairie de Villeneuve-Loubet <br> </strong> 
                 Mise en place d'événements, saisonnier </p>
          </div>
        </div>
      </div>
    </section>


    <!-----Compétences----->
    <section>
      <div class="container">
        <div class="row">
            <h2 id="compétences">Compétences </h2>  <!-----(tout est bas mais j'aimerais justement apprendre avec vous !)----->
        </div>
        <div class="row">
          <div class="col">

                     <!-----graphique JAVASCRIPT---->
                     <div class="skillbar-wrapper">
                <div class="skillbar clearfix html5" data-percent="40%">
                    <h4 class="skillbar-title"><span>HTML5</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">40%</div>
                </div>

                <div class="skillbar clearfix css" data-percent="40%">
                    <h4 class="skillbar-title"><span>CSS3</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">40%</div>
                </div>

                <div class="skillbar clearfix javascript" data-percent="20%">
                    <h4 class="skillbar-title"><span>JavaScript</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">20%</div>
                </div>

                <div class="skillbar clearfix php" data-percent="30%">
                    <h4 class="skillbar-title"><span>PHP</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">30%</div>
                </div>

                <div class="skillbar clearfix indesign" data-percent="50%">
                    <h4 class="skillbar-title"><span>InDesign</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">50%</div>
                </div>

                <div class="skillbar clearfix bootstrap" data-percent="40%">
                    <h4 class="skillbar-title"><span>Bootstrap</span></h4>
                    <div class="skillbar-bar"></div>
                    <div class="skill-bar-percent">40%</div>
                </div>

          </div>
        </div>
      </div>
    </section>
         

    <!-----Barre séparatrice----->     
    <header class="p-2"></header>


    <!-----Centre d'intéréts----->
    <section class="bg-light">
      <div class="container">
        <div class="row text-center">
          <div class="col-12">
                <h2 id="intéret">Centres d'intéret <br>"mes projets"</h2> <br>
          </div>
        </div>
      </div>   

                    <!-----musique JAVASCRIPT----->
                    <div class="container mt-5">
                    <div class="row text-center"> <h5>- Musique - </h5> </div>
                      <div class="row mt-5">
                        <div class="col-md-4 mt-5">
                          <a href="https://www.youtube.com/watch?v=x2rmaJee7_k&t=1525s" target="_blank">
                            <div class="content-inner fl-wrap">
                            <div class="content-front">
                              <div class="cf-inner">
                                <div class="bg" style="background-image: url(img/a2578249490_16.jpg);"></div>
                                <div class="overlay"></div>
                                <div class="inner">
                                  <h2>Terrarium</h2>
                                  <ul>
                                    <li>Math rock</li>
                                    <li>Post rock</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="content-back">
                              <div class="cf-inner">
                                <div class="inner">
                                  <div class="dec-icon">
                                      <g>
                                        <g>
                                          <path d="M243.578,291.482c-13.117,0-23.788,10.67-23.788,23.786c0,13.117,10.671,23.788,23.788,23.788   c13.116,0,23.787-10.671,23.787-23.788C267.365,302.152,256.694,291.482,243.578,291.482z M243.578,330.556   c-8.43,0-15.288-6.858-15.288-15.288c0-8.429,6.858-15.286,15.288-15.286c8.43,0,15.287,6.857,15.287,15.286   C258.865,323.697,252.008,330.556,243.578,330.556z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                          <path d="M453.606,5.261H33.555C15.053,5.261,0,20.315,0,38.817v301.728c0,18.502,15.053,33.556,33.555,33.556h147.497   l-17.482,58.059h-1.958c-14.255,0-25.852,11.599-25.852,25.855v19.635c0,2.347,1.903,4.25,4.25,4.25h207.144   c2.348,0,4.25-1.903,4.25-4.25v-19.635c0-14.257-11.6-25.855-25.856-25.855h-1.957l-17.482-58.059h147.499   c18.502,0,33.555-15.053,33.555-33.556V38.817C487.16,20.315,472.107,5.261,453.606,5.261z M33.555,13.761h420.051   c13.815,0,25.055,11.24,25.055,25.057v1.169h-88.353c-2.348,0-4.25,1.903-4.25,4.25c0,2.347,1.902,4.25,4.25,4.25h88.353v222.043   H8.5v-27.803h170.318c2.347,0,4.25-1.903,4.25-4.25s-1.903-4.25-4.25-4.25H8.5V38.817C8.5,25.001,19.74,13.761,33.555,13.761z    M342.902,458.015v15.385H144.258v-15.385c0-9.57,7.784-17.355,17.352-17.355h163.936   C335.116,440.659,342.902,448.445,342.902,458.015z M314.712,432.159H172.446l17.482-58.059H297.23L314.712,432.159z    M453.606,365.601H33.555c-13.815,0-25.055-11.24-25.055-25.056v-30.429h75.037c2.347,0,4.25-1.903,4.25-4.25   c0-2.347-1.903-4.25-4.25-4.25H8.5v-22.587h470.16v61.516C478.66,354.361,467.421,365.601,453.606,365.601z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                          <path d="M351.617,154.194l-47.873,35.994c-5.254,3.95-6.315,11.438-2.365,16.691l5.866,7.803c2.236,2.973,5.804,4.749,9.544,4.749   c2.602,0,5.074-0.824,7.148-2.384l74.561-56.06c2.685-2.019,4.224-4.938,4.224-8.007c0-3.069-1.54-5.987-4.225-8.005l-74.56-56.059   c-2.074-1.56-4.547-2.384-7.148-2.384c-3.739,0-7.307,1.775-9.542,4.748l-5.868,7.803c-3.949,5.253-2.889,12.741,2.365,16.692   l47.873,35.994c0.529,0.398,0.833,0.84,0.833,1.212C352.45,153.354,352.147,153.796,351.617,154.194z M356.725,144.974   l-47.872-35.994c-1.508-1.134-1.813-3.283-0.68-4.79l5.868-7.804c0.647-0.862,1.65-1.356,2.748-1.356   c0.52,0,1.295,0.118,2.041,0.678l74.559,56.059c0.529,0.398,0.833,0.84,0.833,1.213c0,0.373-0.304,0.815-0.832,1.213l-74.56,56.059   c-0.746,0.561-1.521,0.678-2.041,0.678c-1.1,0-2.102-0.495-2.749-1.357l-5.866-7.803c-1.134-1.508-0.829-3.656,0.678-4.789   l47.874-35.995c2.685-2.02,4.225-4.938,4.225-8.008C360.949,149.911,359.409,146.993,356.725,144.974z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                          <path d="M88.664,160.988l74.559,56.059c2.075,1.56,4.546,2.384,7.148,2.384c3.74,0,7.307-1.775,9.542-4.749l5.867-7.803   c3.95-5.253,2.889-12.741-2.364-16.691l-47.872-35.994c-0.53-0.398-0.833-0.841-0.833-1.214c0-0.373,0.304-0.814,0.833-1.212   l47.873-35.995c5.253-3.951,6.313-11.438,2.363-16.691l-5.867-7.803c-2.236-2.974-5.803-4.748-9.543-4.748   c-2.602,0-5.074,0.824-7.149,2.384l-74.558,56.059c-2.685,2.019-4.225,4.937-4.225,8.005   C84.438,156.049,85.978,158.968,88.664,160.988z M93.772,151.768l74.558-56.06c0.746-0.561,1.521-0.678,2.04-0.678   c1.099,0,2.101,0.495,2.749,1.357l5.867,7.802c1.133,1.508,0.829,3.657-0.678,4.791l-47.873,35.994   c-2.685,2.019-4.224,4.937-4.225,8.005c0,3.07,1.54,5.988,4.225,8.008l47.873,35.995c1.507,1.133,1.812,3.281,0.678,4.789   l-5.867,7.803c-0.648,0.862-1.65,1.357-2.749,1.357c-0.52,0-1.295-0.118-2.041-0.678l-74.558-56.058   c-0.53-0.398-0.834-0.841-0.834-1.214C92.939,152.608,93.242,152.166,93.772,151.768z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                          <path d="M210.549,213.968l8.89,4.033c1.552,0.705,3.202,1.062,4.903,1.062c4.681,0,8.951-2.744,10.877-6.991l47.322-104.297   c2.716-5.985,0.056-13.064-5.93-15.78l-8.891-4.034c-1.552-0.705-3.201-1.062-4.902-1.062c-4.681,0-8.951,2.745-10.878,6.992   l-47.321,104.296c-1.312,2.892-1.417,6.129-0.295,9.115C205.446,210.288,207.657,212.656,210.549,213.968z M212.359,201.698   l47.321-104.296c0.553-1.217,1.784-2.004,3.138-2.004c0.481,0,0.949,0.102,1.391,0.302l8.891,4.034   c0.824,0.374,1.456,1.054,1.779,1.915c0.323,0.861,0.296,1.789-0.078,2.613L227.479,208.56c-0.552,1.217-1.783,2.003-3.136,2.003   c-0.481,0-0.95-0.102-1.392-0.302l-8.89-4.033c-0.824-0.374-1.456-1.054-1.779-1.915   C211.957,203.451,211.985,202.523,212.359,201.698z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                          <path d="M306.313,48.486h61.496c2.348,0,4.25-1.903,4.25-4.25c0-2.347-1.902-4.25-4.25-4.25h-61.496c-2.348,0-4.25,1.903-4.25,4.25   C302.063,46.584,303.965,48.486,306.313,48.486z" data-original="#000000" class="active-path" style="fill:#04BBD6" data-old_color="#000000"></path>
                                        </g>
                                      </g>
                                    </svg>
                                  </div>
                                  <p>Groupe de post rock, math rock, rock progressif constitué de Gaetan Chaulacel à la guitare, Victor Martin à la batterie et moi même à la basse.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          </a>
                        </div>
                        <div class="col-md-4 mt-5">
                           <!-----a href="https://youtu.be/GMJfB5aNXD0" target="_blank"---->
                          <div class="content-inner fl-wrap">
                            <div class="content-front">
                              <div class="cf-inner">
                                <div class="bg " style="background-image: url(img/henri-matisse-les-nus-bleus.jpg);"></div>
                                <div class="overlay"></div>
                                <div class="inner">
                                  <h2>Duo Brisset-Zellal</h2>
                                  <ul>
                                    <li>Noise</li>
                                    <li>Improvisation</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="content-back">
                              <div class="cf-inner">
                                <div class="inner">
                                  <div class="dec-icon">
                                      <g>
                                        <g>
                                          <path d="M472.227,17.875H16.25C7.29,17.875,0,25.166,0,34.125v383.982c0,8.96,7.29,16.25,16.25,16.25h177.048v28.725   c0,5.155,2.583,6.761,4.124,7.259c1.541,0.497,4.575,0.709,7.594-3.473l38.649-53.547c0.29-0.402,0.526-0.524,0.563-0.536   c0.059,0.012,0.295,0.134,0.585,0.536l38.65,53.548c2.158,2.987,4.323,3.732,5.945,3.732c0.647,0,1.208-0.119,1.648-0.261   c1.54-0.498,4.123-2.103,4.123-7.259v-28.725h177.048c8.96,0,16.25-7.29,16.25-16.25V34.125   C488.477,25.166,481.187,17.875,472.227,17.875z M207.78,354.371c-1.082,0-2.05-0.144-2.959-0.438   c-5.369-1.744-9.069-8.495-12.987-15.644c-3.437-6.271-6.991-12.755-12.289-16.61c-5.372-3.909-12.697-5.311-19.781-6.667   c-7.943-1.52-15.445-2.956-18.702-7.431c-3.2-4.398-2.266-11.925-1.277-19.893c0.893-7.201,1.817-14.646-0.26-21.045   c-1.985-6.115-6.995-11.43-11.839-16.569c-5.395-5.724-10.972-11.642-10.972-17.457c0-5.816,5.578-11.734,10.973-17.458   c4.844-5.14,9.853-10.454,11.838-16.568c2.077-6.398,1.153-13.844,0.26-21.045c-0.989-7.968-1.922-15.494,1.278-19.892   c3.256-4.475,10.758-5.911,18.701-7.432c7.084-1.356,14.409-2.758,19.782-6.668c5.296-3.855,8.85-10.339,12.287-16.609   c3.917-7.147,7.618-13.899,12.988-15.643c0.909-0.295,1.877-0.438,2.959-0.438c4.615,0,10.163,2.597,16.035,5.346   c6.657,3.116,13.541,6.338,20.422,6.338c6.881,0,13.765-3.222,20.422-6.338c5.874-2.749,11.421-5.346,16.036-5.346   c1.082,0,2.05,0.144,2.958,0.438c5.37,1.744,9.07,8.495,12.988,15.643c3.437,6.271,6.991,12.755,12.288,16.61   c5.372,3.909,12.698,5.312,19.782,6.668c7.942,1.52,15.444,2.956,18.701,7.432c3.2,4.397,2.267,11.924,1.278,19.892   c-0.893,7.2-1.817,14.646,0.26,21.044c1.985,6.114,6.995,11.429,11.839,16.568c5.395,5.724,10.973,11.643,10.973,17.458   c0,5.817-5.579,11.736-10.974,17.46c-4.843,5.139-9.852,10.453-11.838,16.566c-2.077,6.398-1.153,13.844-0.259,21.044   c0.989,7.969,1.923,15.496-1.278,19.894c-3.256,4.475-10.758,5.911-18.7,7.431c-7.085,1.356-14.411,2.759-19.783,6.668   c-5.297,3.855-8.851,10.339-12.288,16.609c-3.918,7.148-7.619,13.899-12.988,15.644c-0.909,0.295-1.877,0.438-2.959,0.438   c-4.615,0-10.162-2.597-16.035-5.346c-6.657-3.116-13.541-6.338-20.423-6.338c-6.881,0-13.764,3.222-20.421,6.338   C217.943,351.774,212.395,354.371,207.78,354.371z M295.179,356.022c3.526-3.832,6.252-8.783,8.918-13.648   c2.988-5.45,6.077-11.087,9.836-13.822c3.836-2.791,10.212-4.012,16.379-5.192c9.214-1.764,18.743-3.587,23.975-10.777   c5.176-7.113,3.989-16.686,2.84-25.942c-0.779-6.278-1.584-12.772-0.091-17.372c1.396-4.298,5.546-8.7,9.939-13.361   c6.533-6.931,13.288-14.098,13.288-23.29c0-9.189-6.755-16.356-13.287-23.288c-4.394-4.661-8.544-9.064-9.94-13.363   c-1.494-4.602-0.688-11.094,0.091-17.372c1.149-9.256,2.336-18.827-2.84-25.94c-5.233-7.191-14.762-9.015-23.976-10.778   c-6.167-1.181-12.543-2.401-16.378-5.192c-3.76-2.736-6.849-8.372-9.836-13.823c-4.542-8.286-9.239-16.855-17.817-19.641   c-1.745-0.567-3.623-0.854-5.583-0.854c-6.506,0-13.183,3.125-19.639,6.147c-5.816,2.722-11.829,5.536-16.819,5.536   s-11.003-2.814-16.818-5.536c-6.457-3.022-13.133-6.147-19.639-6.147c-1.96,0-3.839,0.287-5.584,0.854   c-8.578,2.784-13.274,11.354-17.817,19.642c-2.987,5.45-6.076,11.086-9.835,13.822c-3.835,2.791-10.212,4.011-16.378,5.191   c-9.215,1.764-18.743,3.588-23.976,10.778c-5.176,7.113-3.989,16.685-2.84,25.94c0.779,6.279,1.585,12.771,0.09,17.373   c-1.396,4.299-5.545,8.702-9.939,13.363c-6.532,6.931-13.287,14.098-13.287,23.288c0,9.19,6.754,16.356,13.286,23.287   c4.394,4.661,8.544,9.064,9.94,13.364c1.494,4.602,0.688,11.094-0.09,17.373c-1.148,9.256-2.336,18.827,2.839,25.94   c5.233,7.191,14.762,9.015,23.977,10.778c6.167,1.181,12.543,2.4,16.378,5.191c3.759,2.735,6.849,8.372,9.836,13.823   c2.666,4.864,5.392,9.816,8.917,13.648v37.161H8.5V131.696h82.343c2.347,0,4.25-1.902,4.25-4.25c0-2.348-1.903-4.25-4.25-4.25H8.5   V84.683h471.477v269.513h-98.134c-2.347,0-4.25,1.902-4.25,4.25c0,2.348,1.903,4.25,4.25,4.25h98.134v30.487H295.179V356.022z    M16.25,26.375h455.977c4.273,0,7.75,3.477,7.75,7.75v15.058H170.094c-2.347,0-4.25,1.902-4.25,4.25c0,2.348,1.903,4.25,4.25,4.25   h309.883v18.5H8.5V34.125C8.5,29.852,11.977,26.375,16.25,26.375z M16.25,425.857c-4.273,0-7.75-3.477-7.75-7.75v-16.424h184.798   v24.174H16.25z M251.704,408.346c-1.862-2.58-4.583-4.06-7.466-4.06c-2.882,0-5.604,1.48-7.466,4.06l-34.974,48.455v-94.936   c0.135,0.048,0.262,0.105,0.399,0.15c1.745,0.567,3.624,0.854,5.584,0.854c0.934,0,1.872-0.071,2.812-0.19v34.766   c0,2.348,1.903,4.25,4.25,4.25s4.25-1.902,4.25-4.25v-37.061c2.795-1.074,5.581-2.376,8.327-3.661   c5.815-2.722,11.828-5.536,16.818-5.536c4.991,0,11.004,2.815,16.819,5.536c6.457,3.022,13.133,6.147,19.639,6.147   c1.96,0,3.838-0.287,5.583-0.854c0.137-0.045,0.265-0.104,0.399-0.15v94.936L251.704,408.346z M472.227,425.857H295.179v-24.174   h184.798v16.424C479.977,422.38,476.5,425.857,472.227,425.857z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M38.094,66.683c8.409,0,15.25-6.841,15.25-15.25c0-8.409-6.841-15.25-15.25-15.25s-15.25,6.841-15.25,15.25   C22.844,59.842,29.685,66.683,38.094,66.683z M38.094,44.683c3.722,0,6.75,3.028,6.75,6.75c0,3.722-3.028,6.75-6.75,6.75   c-3.722,0-6.75-3.028-6.75-6.75C31.344,47.711,34.372,44.683,38.094,44.683z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M80.594,66.683c8.409,0,15.25-6.841,15.25-15.25c0-8.409-6.841-15.25-15.25-15.25s-15.25,6.841-15.25,15.25   C65.344,59.842,72.185,66.683,80.594,66.683z M80.594,44.683c3.722,0,6.75,3.028,6.75,6.75c0,3.722-3.028,6.75-6.75,6.75   c-3.722,0-6.75-3.028-6.75-6.75C73.844,47.711,76.872,44.683,80.594,44.683z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M123.094,66.683c8.409,0,15.25-6.841,15.25-15.25c0-8.409-6.841-15.25-15.25-15.25s-15.25,6.841-15.25,15.25   C107.844,59.842,114.685,66.683,123.094,66.683z M123.094,44.683c3.722,0,6.75,3.028,6.75,6.75c0,3.722-3.028,6.75-6.75,6.75   c-3.722,0-6.75-3.028-6.75-6.75C116.344,47.711,119.372,44.683,123.094,44.683z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M337.501,232.617c0-51.425-41.837-93.262-93.263-93.262s-93.263,41.837-93.263,93.262   c0,51.426,41.837,93.264,93.263,93.264S337.501,284.042,337.501,232.617z M159.476,232.617c0-46.737,38.024-84.762,84.763-84.762   s84.763,38.024,84.763,84.762c0,46.739-38.024,84.764-84.763,84.764S159.476,279.356,159.476,232.617z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M306.714,232.617c0-34.448-28.026-62.475-62.476-62.475s-62.476,28.026-62.476,62.475   c0,34.448,28.026,62.476,62.476,62.477C278.688,295.093,306.714,267.066,306.714,232.617z M200.149,263.696h33.693   c2.347,0,4.25-1.902,4.25-4.25c0-2.348-1.903-4.25-4.25-4.25h-38.612c-2.905-6.28-4.637-13.205-4.916-20.5h61.527   c2.347,0,4.25-1.902,4.25-4.25c0-2.348-1.903-4.25-4.25-4.25h-61.185c3.187-26.744,25.992-47.554,53.581-47.554   c16.215,0,30.772,7.197,40.675,18.554h-40.07c-2.347,0-4.25,1.902-4.25,4.25c0,2.348,1.903,4.25,4.25,4.25h46.148   c4.585,7.931,7.223,17.121,7.223,26.921c0,29.763-24.213,53.977-53.976,53.977C226.042,286.592,209.932,277.532,200.149,263.696z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                        </g>
                                      </g>
                                    </svg>
                                  </div>
                                  <p>Duo comprenant Nicolas Brisset à la batterie et moi même au saxophone. Improvisation libre et composition.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4 mt-5">
                          <!----a href="https://youtu.be/2SysUGJjhUw" target="_blank"---->
                          <div class="content-inner fl-wrap">
                            <div class="content-front">
                              <div class="cf-inner">
                                <div class="bg" style="background-image: url(img/78349.HR.jpg);"></div>
                                <div class="overlay"></div>
                                <div class="inner">
                                  <h2>Projet Férré</h2>
                                  <ul>
                                    <li>Poésie</li>
                                    <li>Réinterprétation</li>
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="content-back">
                              <div class="cf-inner">
                                <div class="inner">
                                  <div class="dec-icon">
                                      <g>
                                        <g>
                                          <path d="M240.934,291.482c-13.116,0-23.787,10.671-23.787,23.787c0,13.116,10.671,23.787,23.787,23.787   c13.116,0,23.787-10.671,23.787-23.787C264.721,302.152,254.05,291.482,240.934,291.482z M240.934,330.556   c-8.43,0-15.287-6.857-15.287-15.287c0-8.43,6.857-15.287,15.287-15.287c8.43,0,15.287,6.857,15.287,15.287   C256.221,323.698,249.363,330.556,240.934,330.556z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M453.605,5.261H33.555C15.053,5.261,0,20.315,0,38.817v301.727c0,18.503,15.053,33.556,33.555,33.556h147.497   l-17.482,58.059h-1.96c-14.255,0-25.853,11.599-25.853,25.855v19.635c0,2.348,1.902,4.25,4.25,4.25h207.145   c2.348,0,4.25-1.902,4.25-4.25v-19.635c0-14.257-11.6-25.855-25.857-25.855h-1.956l-17.483-58.059h147.498   c18.502,0,33.555-15.053,33.555-33.556V38.817C487.16,20.315,472.107,5.261,453.605,5.261z M33.555,13.761h420.051   c13.815,0,25.055,11.24,25.055,25.057v1.169h-90.997c-2.348,0-4.25,1.902-4.25,4.25c0,2.348,1.902,4.25,4.25,4.25h90.997v222.043   H8.5v-8.803h170.689c2.348,0,4.25-1.902,4.25-4.25c0-2.348-1.902-4.25-4.25-4.25H8.5V38.817   C8.5,25.001,19.739,13.761,33.555,13.761z M342.902,458.015v15.385H144.258v-15.385c0-9.569,7.784-17.355,17.353-17.355h163.936   C335.116,440.659,342.902,448.445,342.902,458.015z M314.713,432.159H172.447l17.481-58.059H297.23L314.713,432.159z    M453.605,365.601H33.555c-13.815,0-25.055-11.24-25.055-25.056v-29.929h77.893c2.348,0,4.25-1.902,4.25-4.25   c0-2.348-1.902-4.25-4.25-4.25H8.5v-23.087h470.16v61.516C478.66,354.36,467.421,365.601,453.605,365.601z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M303.668,48.486h61.496c2.348,0,4.25-1.902,4.25-4.25c0-2.348-1.902-4.25-4.25-4.25h-61.496c-2.348,0-4.25,1.902-4.25,4.25   C299.418,46.584,301.32,48.486,303.668,48.486z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M72.581,118.591c18.196,0,33-14.804,33-33c0-6.51-1.902-12.579-5.169-17.698c6.516-2.948,20.938-8.394,38.964-8.59   c0.35-0.004,0.695-0.006,1.043-0.006c31.787,0,59.356,15.937,81.994,47.374l-29.161-6.479c-2.286-0.51-4.561,0.936-5.07,3.227   c-0.51,2.291,0.936,4.562,3.227,5.07l40.5,9c0.306,0.068,0.614,0.102,0.922,0.102c1.006,0,1.991-0.357,2.77-1.026   c1.016-0.873,1.561-2.173,1.471-3.51l-3-44.5c-0.157-2.341-2.16-4.113-4.526-3.954c-2.342,0.158-4.112,2.185-3.954,4.526   l2.043,30.3c-30.207-40.482-64.504-48.841-88.349-48.622c-21.802,0.237-38.592,7.428-44.542,10.356   c-5.862-5.322-13.64-8.569-22.161-8.569c-18.196,0-33,14.804-33,33C39.581,103.787,54.385,118.591,72.581,118.591z M72.581,61.091   c13.51,0,24.5,10.99,24.5,24.5c0,13.51-10.99,24.5-24.5,24.5c-13.51,0-24.5-10.99-24.5-24.5   C48.081,72.081,59.071,61.091,72.581,61.091z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M210.061,173.031c-1.016,0.873-1.561,2.173-1.471,3.51l3,44.5c0.151,2.244,2.018,3.964,4.236,3.964   c0.096,0,0.192-0.003,0.29-0.01c2.342-0.158,4.112-2.185,3.954-4.526l-2.059-30.538c29.454,37.853,62.269,46.16,85.372,46.16   c0.155,0,0.313,0,0.467-0.001c21.825-0.105,38.556-7.275,44.333-10.115c4.508,12.863,16.764,22.115,31.147,22.115   c18.196,0,33-14.804,33-33s-14.804-33-33-33c-18.196,0-33,14.804-33,33c0,0.758,0.035,1.506,0.086,2.251   c-0.086,0.041-0.175,0.066-0.259,0.113c-0.179,0.102-18.208,10.117-42.717,10.137c-0.025,0-0.05,0-0.075,0   c-30.775,0-57.66-15.017-80-44.642l29.043,6.454c2.293,0.514,4.563-0.935,5.07-3.227c0.51-2.291-0.935-4.562-3.226-5.07l-40.5-9   C212.448,171.816,211.077,172.158,210.061,173.031z M379.33,190.59c13.51,0,24.5,10.99,24.5,24.5c0,13.51-10.99,24.5-24.5,24.5   s-24.5-10.99-24.5-24.5C354.83,201.58,365.82,190.59,379.33,190.59z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                          <path d="M313.571,146.77c0.757,0.553,1.635,0.819,2.505,0.819c1.31,0,2.603-0.604,3.435-1.741l14.491-19.819l19.819,14.491   c0.757,0.553,1.635,0.819,2.505,0.819c1.31,0,2.603-0.604,3.435-1.741c1.386-1.896,0.973-4.554-0.922-5.939l-19.819-14.491   l14.491-19.819c1.386-1.896,0.973-4.554-0.922-5.939c-1.897-1.386-4.555-0.972-5.939,0.922l-14.491,19.819l-19.819-14.491   c-1.897-1.386-4.556-0.972-5.939,0.922c-1.386,1.896-0.973,4.554,0.922,5.939l19.819,14.491l-14.491,19.819   C311.264,142.727,311.677,145.385,313.571,146.77z" data-original="#000000" class="active-path" data-old_color="#000000" style="fill:#05C2DE"></path>
                                        </g>
                                      </g>
                                    </svg>
                                  </div>
                                  <p>Projet visant la réinterprétation de morceaux composés par Léo Férré. Avec Alexandre Bourgoin aux textes et moi même à la composition instrumentalle.</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>





                    <!-----galerie photo JAVASCRIPT----->
                    <div class="row text-center p-5"> <h5>- Photographie - </h5> </div>
                    <div class="row p-3">
                      <div class="col-2 ">
                        <img src="img/DSCF0712.JPG" alt="Bleu" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF0976.JPG" alt="Nenuphar" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF1865.JPG" alt="Triangle" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF1945.JPG" alt="Ballons" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF6333.JPG" alt="Gallway" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF7145.JPG" alt="Temple" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                    </div>
                    <div class="row p-3">
                      <div class="col-2">
                        <img src="img/DSCF7281.JPG" alt="Angkor" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF7800.JPG" alt="Lumiéres" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF8374.JPG" alt="Construction" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF8375.JPG" alt="Brouillard" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF8965.JPG" alt="Marseille" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                      <div class="col-2">
                        <img src="img/DSCF9087.JPG" alt="Chateau" class="img-fluid" alt="Responsive image" onclick="myFunction(this);">
                      </div>
                    </div>
                    <div class="container">
                      <span onclick="this.parentElement.style.display='none'" class="closebtn">&times;</span>
                      <img id="expandedImg" style="width:100%">
                    </div>
                 </div>
              </div>
            </div>
         </div>
    </section>


    <!-----Rencontre----->
    <section id="formation">
      <div class="container">
        <div class="d-flex ">
            <div class="col-8 m-4">
                <form action="contact.php" method="POST">
                    <div class="form-group">
                        <div class="text-left">
                            <h1>Contactez-moi ! </h1>
                        </div>
                        <div class="d-flex">
                        <input type="text" name="surname" placeholder="Nom" autocomplete="off" class="form-control"/>
                        <input type="text" name="firstname" placeholder="Prénom" autocomplete="off" class="form-control"/>
                        </div>
                        <br/>
                        <input type="email" name="email" placeholder="Email" autocomplete="off" class="form-control"/>
                        <br/>
                        <textarea rows="10" name="message" placeholder="Votre musique me mets dans une certaine transe, j'ai besoin d'en savoir plus !" class="form-control"></textarea>
                        <br/>
                        <p>
       De quel sujet voulez vous discuter :<br />
       <input type="checkbox" name="musique" id="musique" /> <label for="musique">Musique</label><br />
       <input type="checkbox" name="cinéma" id="cinéma" /> <label for="cinéma">Cinéma</label><br />
       <input type="checkbox" name="photographie" id="photographie" /> <label for="photographie">Photographie</label><br />
       <input type="checkbox" name="saxophone" id="saxophone" /> <label for="saxophone">Saxophone</label>
   </p>
                        <button type="submit" class="btn btn-lg btn-primary">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </section>
    

</main>

    
    <!-----Contact----->
    <footer class=" bg-light">
      <div class="container">
        <h2 id="contact">Contact</h2>                  
           <ul>
             <ol> Téléphone : 06.65.74.78.30 </ol>
             <ol> Mail : zellal.benoit@yahoo.fr </ol>
             <ol> Adresse : 17 Rue Auguste Escoffier <br>06270 Villeneuve-Loubet </ol>
           </ul>
      </div>
    </footer>


 <script src=""></script>
    
</body>


</html>