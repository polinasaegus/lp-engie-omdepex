<?php require_once getcwd().'/config.php'; ?>
<?php require_once getcwd().'/config.php'; ?>
<!doctype html>
<html class="no-js" lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <title>ENGIE – Offres dépannages</title>
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="favicon.png" />
    <link rel="stylesheet" href="styles/main.css">
  </head>
  <body class="confirmation">
    <!--[if IE]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <div class="container engie-logo">
      <img src="images/engie-logo-blanc@2x.png" width="128" alt="">
    </div>
    
    <div class="container confirmation__message">
      <h2>Merci pour votre souscription !</h2>
      <p>Un conseiller vous contactera par téléphone dans les meilleurs délais pour traiter votre demande.</p>
      <!--<a class="engie-btn--primary" href="#" title="Profiter d’une autre offre">Profiter d’une autre offre</a>-->
    </div>

    <div class="footer">
      <div class="container">
        <p><img src="images/flux@2x.jpg" width="100%" alt="Flux"></p>
      <div class="container">
        <a class="btn-collapse" role="button" data-toggle="collapse" href="#mentions" aria-expanded="false" aria-controls="mentions">
          ▾ Mentions légales
        </a>
        <div class="collapse" id="mentions">
          <p>
              Conformément à la loi « Informatique et Libertés » n°78-17 du 6 janvier 1978 modifiée, 
              vous bénéficiez d’un droit d’accès, de rectification, d’opposition 
              et de suppression des données vous concernant. Vous pouvez exercez ce droit 
              par courrier en écrivant à Service Clients ENGIE- TSA 42108- 76934 ROUEN CEDEX 09.
          </p>
          <p>
            Nous vous informons que vous avez la possibilité de vous inscrire sur la liste B
            tel d’opposition au démarchage par téléphone.
          </p>
          <p>
            (1) Une offre de service d’AXA Assistance développée en partenariat avec ENGIE.
          </p>
          <p>
            La garantie Electroménager est un contrat individuel d’assistance n° 0803435 assuré par
            Inter Partner Assistance. Les garanties d’assistance sont : Gérées par AXA ASSISTANCE, dénomination 
            utilisée par INTER PARTNER ASSISTANCE, société anonyme de droit belge au capital de 31 702 613 euros, 
            entreprise d’assurance non-vie agrée par la Banque Nationale de Belgique (0487), immatriculée au Registre des Personnes Morales 
            de Bruxelles sous le numéro 415 591 055, dont le siège social 
            est situé 166 Avenue Louise – 1050 Ixelles – Bruxelles Capitale – Belgique, prise au travers de sa 
            succursale française immatriculée au Registre du Commerce et des Sociétés de Nanterre 
            sous le numéro 316 139 500 et située 6, rue André Gide 92320 Châtillon. 
            Le contrat est géré par ENGIE, S.A.. au capital de 2 435 285 011 euros - Siège Social 1, place Samuel de Champlain - 92400 Courbevoie, 
            RCS de Nanterre 542 107 651, enregistrée au registre des intermédiaires d’assurance (<a href="http://www.orias.fr" target="_blank">www.orias.fr</a>) 
            en qualité de Courtier sous le numéro (08038831) ET GRAS SAVOYE, société de courtage d’assurances et de réassurance. 
            Siège social : immeuble Quai 33, 33/34 quai de Dion–Bouton, 
            CS 70001, 92814 Puteaux Cedex. Tél : 0141435000. Télécopie : 0141435555. <a href="http://www.grassavoye.com" target="_blank">http://www.grassavoye.com</a>. Société par actions simplifiée au capital de 1 432 600€. 311 248 637 RCS Nanterre. N° FR 61 311 248 637. 
            Intermédiaire immatriculé à l’ORIAS sous le n° 07 001 707 (<a href="http://www.orias.fr" target="_blank">www.orias.fr</a>). Gras Savoye est soumis au contrôle de l’ACPR (Autorité de Contrôle Prudentiel et de Résolution). 61 rue Taitbout 75436 Paris Cedex 9.©ThinkstockPhotos Gras Savoye Willis Towers. Tous droits réservés.   
            Le contrat individuel d’assistance n° 0803435 assuré par Inter Partner Assistance 
            est distribué par ENGIE. ENGIE est soumise au contrôle 
            de l’Autorité de Contrôle Prudentiel - 61 rue Taitbout - 75436 Paris
          </p>
          <p>
            (2) Sous réserve de l’éligibilité des équipements à la 
            garantie – consulter les conditions en téléchargeant les conditions générales de l’offre accessibles (intégrer lien).
          </p>
          <p>
            (3) Hors exclusions – consulter les conditions générales de l’offre 
          </p>
        </div>
        <p>
          ENGIE, société anonyme au capital de 2 435 285 011 euros, immatriculée au Registre du Commerce et 
          des Sociétés de Nanterre, sous le numéro 542 107 651 dont le siège est 
          situé 1, place Samuel de Champlain 92400 Courbevoie- France
        </p>
        <hr class="line-separator--big">
      </div>
      <p class="text-center"><img src="images/signature@2x.png" width="300" alt="Engie signature"></p>
      </div>
      
    </div>

    <!--<script src="scripts/vendor/modernizr.js"></script>-->
    <script src="scripts/vendor.js"></script>
    <script src="scripts/plugins.js"></script>
    <script src="scripts/main.js"></script>
  </body>
  <?php if( TESTMODE===FALSE ): ?>
      <script type="text/javascript" >
          tc_vars = {
              env_language:'fr',
              env_country:'FR',
              env_client_id:'gdf',
              env_work: '<?php echo ENV_WORK ?>',
              site_version:'<?php echo SITE_VERSION ?>',
              page_name:'landing_page.om_depex.confirmation',
              page_name_apps_1:'',
              form_emdm:'<?php echo $_SESSION["emmenagement"] ?>',
              order_id:'om_depex_<?php echo $_SESSION["currentTimeStamp"] ?>'
              };
          //console.log(tc_vars);
      </script>
      <script type="text/javascript" src="<?php echo TAG_COMMANDER ?>"></script>
  <?php endif; ?>

</html>