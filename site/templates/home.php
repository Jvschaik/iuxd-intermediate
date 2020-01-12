<!doctype html>
<html lang="en">

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <?= css(['assets/css/style.css', '@auto']) ?>
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title><?= $page->title() ?></title>
  </head>

  <body>

    <div class="navigation">
      <input type="checkbox" class="navigation__checkbox" id="navi-toggle">
      <label for="navi-toggle" class="navigation__button">
        <span class="navigation__icon">&nbsp;</span>
      </label>
      <div class="navigation__background">&nbsp;</div>
      <nav class="navigation__nav">
        <ul class="navigation__list">
          <li class="navigation__item"><a href="introducionSection" id="introduction"
              class="navigation__link"><span>01</span>Introductie</a></li>
          <li class="navigation__item"><a href="rulesSection" id="rules"
              class="navigation__link"><span>02</span>Regels</a></li>
          <li class="navigation__item"><a href="toolsSection" id="tools"
              class="navigation__link"><span>03</span>Tools</a></li>
          <li class="navigation__item"><a href="coderenSection" id="coderen"
              class="navigation__link"><span>04</span>Coderen</a></li>
          <li class="navigation__item"><a href="conclusieSection" id="conclusie"
              class="navigation__link"><span>05</span>Conclusie</a></li>
        </ul>
      </nav>


      <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-light">
      <li class="nav-item">
        <a class="navbar-brand" id="home" href="#homeSection"></a>
      </li>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" id="introduction" href="#introductionSection">Introduction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="rules" href="#rulesSection">Rules</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="rules" href="#rulesSection">Tools</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="code" href="#codeSection">Coderen</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="conclusion" href="#conclusionSection">Conclusion</a>
          </li>
        </ul>
      </div>
    </nav> -->

      <div class="row" id="homeSection">
        <div class="col">
          <div class="header d-flex justify-content-center align-items-center">
          </div>
        </div>
      </div>


      <div class="container-fluid background" id="introductionSection">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Introductie</h1>
              <p>Micro Interacties is een deel van interaction design wat steeds belangrijker wordt in het ontwerpen van
                je digitale producten.
                Dit komt voornamelijk door de verbetering in technologie en natuurlijk ook de verbetering in de
                interaction design. </p>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid grey _b-img">
        <div class="container-fluid background">
          <div class="container d-flex h-100">
            <div class="row">
              <div class="col-md-6 image-1">
              </div>
              <div class="col-md-6">
                <h2>Wat zijn micro microinteractions?</h2>
                <p>
                  Micro interacties zijn zoals de naam al zegt, hele kleine interacties.
                  De micro interacties voeren 1 specifieke taak uit waarbij met gebruik van een animatie aan
                  de gebruiker doorgegeven wordt wat er precies gebeurt tijdens de uitgevoerde taak.
                  Het zijn kleine details in je digitale product die er voor zorgen dat de gebruiker een
                  betere ervaring ervaart tijdens het gebruik van je product.
                  Een voorbeeld van een micro interactie kan de airplane modus knop op je telefoon zijn.
                  Als je op deze knop klikt verschuift het schuifje op de knop naar de andere kant en kleurt
                  de achtergrond van de knop van grijs naar een andere kleur.
                  Er is dus 1 taak wat er uitgevoerd wordt tijdens deze interactie en middels een animatie van zowel het
                  schuifje als de kleur wordt aangeven wat er gebeurt tijdens de interactie.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid background">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>Waarom speelt dit onderwerp een rol in het ontwerpproces?</h2>
            </div>
          </div>
        </div>

        <div class="container-fluid background">
          <div class="container d-flex h-100">
            <div class="row">
              <div class="col-md-6 ">
                <p>
                  Maar waarom is het dan zo belangrijk om deze kleine interacties op je website te hebben?
                  Volgens Jeliazkov, D. (2018) kun je een hoop frictie in je website weghalen door deze micro
                  interacties te gebruiken.
                  Via deze micro interactions kun je directe feedback geven aan de gebruiker als hij of zij een actie
                  onderneemt waardoor de feedback duidelijker te begrijpen is.</p>
              </div>
              <div class="col-md-6 ">
                <p>
                  Het is dus slim om na te denken over micro interactions zodat je je ontwerp niet alleen speelser
                  kan maken, maar er ook voor kan zorgen dat je gebruiker meer aandacht heeft voor je product en
                  dat er minder fouten gemaakt worden.</p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid grey _b-img" id="rulesSection">
        <div class="container-fluid background">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>4 regels van Micro interactions</h2>
                <p>
                  Om te controleren of je een goede micro interactie hebt gemaakt moet je kijken
                  aar de 4 regels van Shaffer, D. (2013). Een product is goed uitgevoerd wanneer
                  het aan alle 4 de regels voldoet.
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="container-fluid _background">
          <div class="container d-flex h-100">
            <div class="row">
              <div class="col-md-3">
                <h2>Trigger</h2>
                <p>
                  Een trigger zet je micro interaction tot gaan. Een voorbeeld hiervan is een knop,
                  een toggle of simpelweg een swipe.
                </p>
              </div>
              <div class="col-md-3 ">
                <h2>Rule</h2>
                <p>
                  Stel op wat het doel is van je micro interactions. Je moet hierbij aangeven wat de
                  trigger is en wat de actie moet uitvoeren.
                </p>
              </div>
              <div class="col-md-3 ">
                <h2>Feedback</h2>
                <p>
                  Feedback - Feedback laat aan de gebruiker zien wat er gebeurt tijdens een micro
                  interactie. Een voorbeeld is een animatie van een button die groen kleurt.
                </p>
              </div>
              <div class="col-md-3 ">
                <h2>Loop/modes</h2>
                <p>
                  Loop/modes - Een loop geeft aan hoe lang duur van een micro transactie is.
                  Het geeft tevens ook aan of de interactie herhaalt of dat deze verandert na verloop
                  van tijd.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid background">
        <div class="container d-flex h-100">
          <div class="row">
            <div class="col-md-6 ">
              <p>
                Echter zijn er natuurlijk ook meer factoren waar je naar kan kijken.
                Volgens Willenskomer, I. (2016) moet je er voor zorgen dat je micro interactie past bij het
                design
                van
                je product. Zorg dat de micro interacties voorspelbaar zijn.
                Als je op een pijltje naar links drukt moet de interactie niet ineens naar rechts gaan.
                Een andere tip is om er voor te zorgen dat je alles vanuit 1 beweging kan maken.
                En als laatste, entertain the user. Micro interacties zijn hartstikke leuk om te gebruiken.
                Je kan veel dingen er mee doen en laat daarom ook je fantasie los.
                Als je een micro interactie kan bedenken waarbij je een saaie interactie van veranderen in een
                interessante en leuke interactie dan zorg je er voor dat de gebruiker meer aandacht heeft en
                tevens ook een betere ervaring heeft met je product.</p>
            </div>
            <div class="col-md-6 image-2">
            </div>
          </div>
        </div>
      </div>

     
      
      <div class="container-fluid grey b-img" id="coderenSection">
        <div class="container-fluid background">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2>Coderen</h2>
                <p>
                  Een nadeel van micro interacties is dat het je website langzamer kan maken.
                  Echter zijn er 3 tips om er voor te zorgen dat je website zo snel mogelijk blijft.
                </p>
              </div>
            </div>
          </div>
        </div>


        <div class="container-fluid _background">
          <div class="container d-flex h-100">
            <div class="row">
              <div class="col-md-4">
                <h2>Native Javascript</h2>
                <p>Maak gebruik van requestAnimationFrame() in plaats van setTimeOut() en setInterval()
                  te gebruiken, maak je gebruik van de native JavaScript-methode requestAnimationFrame()
                  om je animatie code op het beste moment voor de browser uit te voeren.
                </p>
              </div>
              <div class="col-md-4 ">
                <h2>Geen jQuery</h2>
                <p>Gebruik geen jQuery. Andere libraries zoals Velocity.js en WebGL werkt op dezelfde
                  manier maar een vele malen sneller, vooral voor mobiele gebruikers.
                </p>
              </div>
              <div class="col-md-4 ">
                <h2>Clean code</h2>
                <p>Zorg ervoor dat je code “clean” is. Dit zorgt ervoor dat je geen onnodige code hebt
                  wat voor de traagheid van je animatie zorgt.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container-fluid">
        <div class="___header-image"></div>
      </div>
      <div class="container-fluid background" id="conclusieSection">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>Conclusie</h1>
              <p>
                Micro interacties zijn hele leuke interacties om te ontwerpen.
                Je kan je fantasie los laten op deze animaties en daardoor kan je je gebruiker ook “betoveren”.
                Echter moet je wel oppassen dat je niet te ver gaat.
                De micro interacties moeten natuurlijk aanvoelen en niet in de weg van het doel van je gebruiker
                zitten.
                Als je een goed ontwerpen micro interactie hebt kun je er voor zorgen dat je gebruiker beter de
                website
                kan gebruiken, dat er meer mogelijkheden zijn tot interactie en dat je website ook veel speelser
                aan
                voelt.
              </p>
            </div>
          </div>
        </div>
      </div>

      <footer class="page-footer font-small">
        <div class="footer-copyright text-center py-3">© 2019 Copyright:
          <a href="#"> Dennis Smits & Jason van Schaik</a>
        </div>
      </footer>


      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->

      <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
      <?= js(['/assets/js/scroll.js', '@auto']) ?>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
      </script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>

  </body>

</html>