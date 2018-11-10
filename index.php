<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PlayingBar</title>
    <link rel="stylesheet" href="Css/style.css">
  </head>
  <body>
    <div class="container">

      <div id="corps">

                <div id="section_gauche">
                  <div class="contenue">
                    <span class="album">
                      <img src="" alt="poster_album">
                    </span>
                  </div>
                </div>

                
                <div id="section_center">
                  <div class="contenue controleurs">
                    <div class="boutons">
                      
                      <button class="boutonscontroleurs aleatoire" title="Aleatoire">
                        <img src="Images/Controleurs/aleatoire.png" alt="aleatoire">
                      </button>

                      <button class="boutonscontroleurs precedent" title="precedent">
                        <img src="Images/Controleurs/precedent.png" alt="precedent">
                      </button>

                      <button class="boutonscontroleurs lecture" title="lecture">
                        <img src="Images/Controleurs/play.png" alt="lecture">
                      </button>

                      <button class="boutonscontroleurs pause" title="pause" style="display:none;">
                        <img src="Images/Controleurs/pause.png" alt="pause">
                      </button>

                      <button class="boutonscontroleurs suivant" title="suivant">
                        <img src="Images/Controleurs/suivant.png" alt="suivant">
                      </button>

                      <button class="boutonscontroleurs repeter" title="repeter">
                        <img src="Images/Controleurs/repeter.png" alt="repeter">
                      </button>

                    </div>

                    <div class="progressbar">

                      <span class="progressTime debut"> 0.00</span>
                      <div class="progressbarre">
                        <div class="progressbarrebg">
                          <div class="progress"></div>
                        </div>
                      </div>
                      <span class="progressTime ecoule">0.00</span>

                    </div>
                  </div>
                </div>
                
                <div id="section_droite"></div>

      </div>

    </div>
  </body>
</html>
