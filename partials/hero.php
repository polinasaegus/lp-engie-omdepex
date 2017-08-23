<div class="hero">
   <div class="container engie-logo">
      <img src="images/engie-logo-blanc@2x.png" width="180" alt="">
   </div>
   <div class="hero__container container" id="hero">
      <div class="row no-gutters">
         <div class="col-md-6 col-xs-12 col-sm-12">
            <h2 class="hero__head no-gutters row">
               <div class="hero__first-title">Avec le Pack Tranquillité,</div>
               <div class="hero__second-title">ne vous laissez plus déborder !</div>
            </h2>
            <div class="flex-reverse">
               <div class="hero__body no-gutters row">
                  <p>Souscrivez au Pack Tranquillité qui associe votre contrat d’électricité verte<sup>(1)</sup> à un service de dépannage eau et électricité express<sup>(2)</sup>.
                  </p>
               </div>
            </div>
         </div>
         <div class="col-md-4 col-xs-12 col-md-offset-1 col-sm-12" style="position:relative">
            <form class="form" id="engieForm" method="post" action="mail.php">
              <div class="form__bg"></div>
               <div class="form__macaron">
                  <h3 class="macaron__title">6 mois</h3>
                  <p class="macaron__info">d'abonnement offerts<sup>(3)</sup></p>
               </div>
               <div class="form__head__container"><h2 class="form__head">Profiter maintenant</h2></div>
               <div class="form__container">
                  <div class="form-group ">
                     <p><label>	J’emménage<sup>*</sup></label></p>
                     <div class="radiobutton">
                        <input type="radio" name="emmenagement" value="Yes" id="radio_10" checked="checked">
                        <label for="radio_10">Oui</label>
                     </div>
                     <div class="radiobutton">
                        <input type="radio" name="emmenagement" value="No" id="radio_20">
                        <label for="radio_20">Non</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <p><label>Civilité<sup>*</sup></label></p>
                     <div class="radiobutton radiobutton__ie">
                        <input type="radio" name="gender" value="madame" id="radio_1" checked="checked">
                        <label for="radio_1">Madame</label>
                     </div>
                     <div class="radiobutton radiobutton__ie">
                        <input type="radio" name="gender" value="monsieur" id="radio_2">
                        <label for="radio_2">Monsieur</label>
                     </div>
                  </div>
                  <div class="form-group">
                     <label for="lastName">Nom<sup>*</sup></label>  
                     <p><input type="text" id="lastName" name="lastName" minlength="3" required></p>
                  </div>
                  <div class="form-group">
                     <label for="firstName">Prénom<sup>*</sup></label>  
                     <p><input type="text" id="firstName" name="firstName" minlength="3" required></p>
                  </div>
                  <div class="form-group">
                     <label for="email">Email<sup>*</sup></label>  
                     <p><input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required></p>
                  </div>
                  <div class="form-group">
                     <label for="phoneNumber">Téléphone<sup>*</sup></label>  
                     <p><input type="tel"  title="Veuillez respectez le format requis" onkeypress='validate(event)' id="tel" name="phoneNumber" onkeypress='validate(event)' maxlength="10" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required></p>
                  </div>
                  <div class="form-group">
                     <label for="city">Ville<sup>*</sup></label>  
                     <p><input type="text" id="city" name="city" required></p>
                  </div>
                   <div class="form-group">
                     <label for="codepromo">Code Promo</label>  
                     <p><input type="text" id="codepromo" name="codepromo"></p>
                  </div>
                  <em>
                  (*) Tous les champs sont obligatoires
                  </em>
               </div>
               <button type="submit" class="button button--form" onClick=""> 
               Je souhaite être recontacté
               </button>
            </form>
         </div>
      </div>
   </div>
</div>
