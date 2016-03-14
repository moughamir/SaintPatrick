<?php
    // Page %%NOM DE LA PAGE%%
//unco    require_once(realpath('include/tools.php'));
$NomDeLaPage = "saint-patrick-2016";
$METHOD = affil-mini
$DRI = http://www.myastro.fr/dri-5
$SUPPORT = voyance
$AFFILIATION = affilbase
?>
<!DOCTYPE html>
<html ng-app="myAstro" prefix="og: http://ogp.me/ns#" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta name="MobileOptimized" content="320">
    <meta name="HandheldFriendly" content="True">
    <title>Saint Patrick &#x1F340;</title>
    <link rel="canonical" href="http://www.myastro.fr/saint-patrick-2016">
    <link rel="amphtml" href="ampver.html">
    <meta property="og:title" content="Saint Patrick 2016" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://www.myastro.fr/saint-patrick-2016" />
    <meta property="og:image" content="http://www.myastro.fr/saint-patrick-2016/images_landing/saint-patrick-2016/SaintPatrick.png" /> <!-- A remplacer -->
    <meta property="og:description" content="Amour, travail, argent : la chance sera-t-elle avec vous en 2016 ?" /> <!-- A remplacer -->
    <meta property="og:locale" content="fr" />
    <meta property="og:site_name" content="Saint Patrick" />
    <meta property="fb:app_id" content="1276526482364681" />
    <meta name="robots" content="noindex,nofollow" />
    <link rel="icon" type="image/png" href="logo_myastro_32x32.jpg" />
    <link href="css/saint-patrick-2016.css" rel="stylesheet" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>
    <body>
<header class="site--header" role="banner">
        <div class="container">
            <img src="images_landing/saint-patrick-2016/My-ASTRO.svg" class="logo" alt="My Astro logo">
            <h1 class="site-name">Saint Patrick</h1>
        </div>
    </header>
    <main role="main">
        <section class="main-section">
            <article class="leJeu">
                <header class="article--header">
                    <h1 class="article--headline">Jour de chance, faites le jeu :</h1>
                    <h2 class="article--subtitle">Cliquez sur les cartes, et trouvez la paire...</h2>
                </header>
                <div class="cntr" ng-controller="JeuController">
                    <div class="timer" ng-class="{critical:isCritical}" ng-show="inGame == true">
                        {{timeLimit | date: 'm:ss'}}
                    </div>
                    <table class="table-top">
                        <tr ng-repeat="row in deck.rows">
                            <td ng-repeat="card in row.cards">
                                <div class="card_container {{!card.isFaceUp ? '' : 'flip'}}" ng-click="isGuarding || check(card)">
                                    <div class="card shadow">
                                        <div class="front face"></div>
                                        <div class="back face text-center pagination-center">
                                            <img class="face--image" ng-src="images_landing/saint-patrick-2016/card/{{card.item}}.svg" alt="{{card.item}}">
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <div class="startbtn" ng-show="inGame == false">
                        <button type="button" class="btn btn-default btn-lg" ng-disabled="inGame == true" ng-click="start()">Démarrer</button>
                    </div>
                </div>
            </article>
            <article>
                <header class="article--header">
                    <h1 class="article--headline small">Remplissez vite le formulaire pour<br/>recevoir votre étude personnalisée !</h1>
                </header>
                <form class="astro-form" accept-charset="utf-8" role="form">
                    <div class="container-90">
                        <header class="form--header">
                            <h1 class="form--title">vite !!! recevez<br>votre étude personnalisée</h1>
                            <hr>
                            <h2 class="form--subtitle">Allez-vous avoir de la chance en 2016 ?</h2>
                        </header>
                        <article class="form-content">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="saint-patrick-2016" />
                            <input type="hidden" name="method" value="affil-mini" />
                            <input type="hidden" name="dri" value="http://www.myastro.fr/dri-5" />
                            <input type="hidden" name="support" value="voyance" />
                            <input type="hidden" name="gclid" value="<?php echo $_GET['gclid']; ?>" />
                            <input type="hidden" name="affiliation" value="affilbase" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="cguv" value="1" />
                            <!-- ############################################### -->
                            <!-- Genre -->
                            <div class="Genre">
                            <label class="gender-l" for="gender-f">
                                <img src="images_landing/saint-patrick-2016/icons/female.svg" alt="♀"> <span>Femme</span>
                                <input type="radio" name="sexe" id="gender-f" value="F" required />
                            </label>
                            <label class="gender-l" for="gender-h">
                                <img src="images_landing/saint-patrick-2016/icons/male.svg" alt="♂"> <span>Homme</span>
                                <input type="radio" name="sexe" id="gender-h" value="M" />
                            </label>
                            </div>

                            <!-- Date de naissance -->
                            <div class="Date">
                            <label for="ddn">Née le</label>
                              <div class="ddn">
                                <select name="jour" id="jour">
                                    <option value="na" disabled selected>Jour</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                                <select name="mois" id="mois">
                                <option value="na" disabled selected>Mois</option>
                                <option value="01">Janvier</option>
                                <option value="02">Février</option>
                                <option value="03">Mars</option>
                                <option value="04">Avril</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juillet</option>
                                <option value="08">Août</option>
                                <option value="09">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                                <select name="annee" id="year">
                                <option value="na" disabled selected>Année</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                            </select>
                              </div>
                            </div>
                            <!-- Prénom -->
                            <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" required />
                            <!-- Signe Astrologique-->
                            <select name="mois">
                                <option value="na" disabled selected>Mon signe astrologique</option>
                                <option value="01">Bélier ♈</option>
                                <option value="02">Taureau ♉</option>
                                <option value="03">Gémeaux ♊</option>
                                <option value="04">Cancer ♋</option>
                                <option value="05">Lion ♌</option>
                                <option value="06">Vierge ♍</option>
                                <option value="07">Balance ♎</option>
                                <option value="08">Scorpion ♏</option>
                                <option value="09">Sagittaire ♐</option>
                                <option value="10">Capricorne ♑</option>
                                <option value="11">Verseau ♒</option>
                                <option value="12">Poissons ♓</option>
                            </select>
                            <!-- Email -->
                            <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" required />
                            <!-- Pays -->
                            <div class="pays">
                              <label for="pays">Votre pays</label>
                              <select name="pays" id="pays" required>
                                  <option value="BE">Belgique</option>
                                <option value="CA">Canada</option>
                                <option value="LU">Luxembourg</option>
                                <option value="CH">Suisse</option>
                                <option value="FR" selected>France Métropolitaine</option>
                                <optgroup label="DOM-TOM">
                                    <option value="MQ">Martinique</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GF">Guyane</option>
                                    <option value="RE">La Réunion</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="PM">St Pierre et Miquelon</option>
                                    <option value="BL">St Barthélémy</option>
                                    <option value="SM">St Martin</option>
                                    <option value="WF">Wallis et Futunua</option>
                                    <option value="PF">Polynésie Française</option>
                                    <option value="NC">Nouvelle Calédonie</option>
                                </optgroup>
                                <option value="ZZ">Autre</option>
                            </select>
                            </div>
                        </article>
                    </div>
                    <!-- ### BOUTON SUBMIT -->
                    <button class="form--btn" type="submit" id="submit-form" name="valider">Découvrir</button>
                </form>
            </article>
        </section>
        <section class="two">
        <article class="center-ner">
            <h3>en cadeau votre étude personnalisée</h3>
        </article>
        <article class="study">
            <h1 class="article--title">La chance of Lorem Ipsum Study.</h1>
            <p class="article--content">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
            </p>
        </article>
        </section>
    </main>
    <footer>
        <div class="reassure">
            <ul>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/star.svg" alt="star">
                        <p>Voyants sérieux reconnus
                            <br/>pour leur savoir-faire</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/luck.svg" alt="luck">
                        <p>Consultations 100%
                            <br/>discrètes &amp; anonymes</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/chat.svg" alt="chat">
                        <p>Interprétation
                            <br/>immédiate</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/trophy.svg" alt="leader">
                        <p>My Astro leader
                            <br/>depuis 2007</p>
                    </div>
                </li>
                <li>
                    <div class="elem">
                        <img class="elem-icon" src="images_landing/saint-patrick-2016/icons/secure.svg" alt="secure">
                        <p>Paiement
                            <br/>sécurisé par CB</p>
                    </div>
                </li>
            </ul>
        </div>
        <div class="container">
            <p class="attribute">Copyright &copy; 2016 | My Astro</p>
        </div>
    </footer>
    <div ng-controller="ModalController" class="container">
        <modal visible="showModal">
            <div class="row"><img class="modal-gif" src="images_landing/saint-patrick-2016/popup.gif" alt="modal gif"></div>
            <div class="row">
                <form class="astro-form" accept-charset="utf-8" role="form">
                    <div class="container-90">
                        <header class="form--header">
                            <h1 class="form--title">vite !!! recevez<br>votre étude personnalisée</h1>
                            <hr>
                            <h2 class="form--subtitle">Allez-vous avoir de la chance en 2016 ?</h2>
                        </header>
                        <article class="form-content">
                            <!-- ########## identification formulaire ########## -->
                            <input type="hidden" name="source" value="saint-patrick-2016" />
                            <input type="hidden" name="method" value="affil-mini" />
                            <input type="hidden" name="dri" value="http://www.myastro.fr/dri-5" />
                            <input type="hidden" name="support" value="voyance" />
                            <input type="hidden" name="gclid" value="<?php echo $_GET['gclid']; ?>" />
                            <input type="hidden" name="affiliation" value="affilbase" />
                            <!-- ########## autres champs pré-remplis ########## -->
                            <input type="hidden" name="cguv" value="1" />
                            <!-- ############################################### -->
                            <!-- Genre -->
                            <div class="Genre">
                            <label class="gender-l" for="gender-f">
                                <img src="images_landing/saint-patrick-2016/icons/female.svg" alt="♀"> <span>Femme</span>
                                <input type="radio" name="sexe" id="gender-f" value="F" required />
                            </label>
                            <label class="gender-l" for="gender-h">
                                <img src="images_landing/saint-patrick-2016/icons/male.svg" alt="♂"> <span>Homme</span>
                                <input type="radio" name="sexe" id="gender-h" value="M" />
                            </label>
                            </div>

                            <!-- Date de naissance -->
                            <div class="Date">
                            <label for="ddn">Née le</label>
                              <div class="ddn">
                                <select name="jour" id="jour">
                                    <option value="na" disabled selected>Jour</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                                <option value="16">16</option>
                                <option value="17">17</option>
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20">20</option>
                                <option value="21">21</option>
                                <option value="22">22</option>
                                <option value="23">23</option>
                                <option value="24">24</option>
                                <option value="25">25</option>
                                <option value="26">26</option>
                                <option value="27">27</option>
                                <option value="28">28</option>
                                <option value="29">29</option>
                                <option value="30">30</option>
                                <option value="31">31</option>
                            </select>
                                <select name="mois" id="mois">
                                <option value="na" disabled selected>Mois</option>
                                <option value="01">Janvier</option>
                                <option value="02">Février</option>
                                <option value="03">Mars</option>
                                <option value="04">Avril</option>
                                <option value="05">Mai</option>
                                <option value="06">Juin</option>
                                <option value="07">Juillet</option>
                                <option value="08">Août</option>
                                <option value="09">Septembre</option>
                                <option value="10">Octobre</option>
                                <option value="11">Novembre</option>
                                <option value="12">Décembre</option>
                            </select>
                                <select name="annee" id="year">
                                <option value="na" disabled selected>Année</option>
                                <option value="1944">1944</option>
                                <option value="1945">1945</option>
                                <option value="1946">1946</option>
                                <option value="1947">1947</option>
                                <option value="1948">1948</option>
                                <option value="1949">1949</option>
                                <option value="1950">1950</option>
                                <option value="1951">1951</option>
                                <option value="1952">1952</option>
                                <option value="1953">1953</option>
                                <option value="1954">1954</option>
                                <option value="1955">1955</option>
                                <option value="1956">1956</option>
                                <option value="1957">1957</option>
                                <option value="1958">1958</option>
                                <option value="1959">1959</option>
                                <option value="1960">1960</option>
                                <option value="1961">1961</option>
                                <option value="1962">1962</option>
                                <option value="1963">1963</option>
                                <option value="1964">1964</option>
                                <option value="1965">1965</option>
                                <option value="1966">1966</option>
                                <option value="1967">1967</option>
                                <option value="1968">1968</option>
                                <option value="1969">1969</option>
                                <option value="1970">1970</option>
                                <option value="1971">1971</option>
                                <option value="1972">1972</option>
                                <option value="1973">1973</option>
                                <option value="1974">1974</option>
                                <option value="1975">1975</option>
                                <option value="1976">1976</option>
                                <option value="1977">1977</option>
                                <option value="1978">1978</option>
                                <option value="1979">1979</option>
                                <option value="1980">1980</option>
                                <option value="1981">1981</option>
                                <option value="1982">1982</option>
                                <option value="1983">1983</option>
                                <option value="1984">1984</option>
                                <option value="1985">1985</option>
                                <option value="1986">1986</option>
                                <option value="1987">1987</option>
                                <option value="1988">1988</option>
                                <option value="1989">1989</option>
                                <option value="1990">1990</option>
                                <option value="1991">1991</option>
                                <option value="1992">1992</option>
                                <option value="1993">1993</option>
                                <option value="1994">1994</option>
                                <option value="1995">1995</option>
                                <option value="1996">1996</option>
                                <option value="1997">1997</option>
                                <option value="1998">1998</option>
                            </select>
                              </div>
                            </div>
                            <!-- Prénom -->
                            <input name="prenom" id="prenom" type="text" class="" placeholder="Mon prénom" required />
                            <!-- Signe Astrologique-->
                            <select name="mois">
                                <option value="na" disabled selected>Mon signe astrologique</option>
                                <option value="01">Bélier ♈</option>
                                <option value="02">Taureau ♉</option>
                                <option value="03">Gémeaux ♊</option>
                                <option value="04">Cancer ♋</option>
                                <option value="05">Lion ♌</option>
                                <option value="06">Vierge ♍</option>
                                <option value="07">Balance ♎</option>
                                <option value="08">Scorpion ♏</option>
                                <option value="09">Sagittaire ♐</option>
                                <option value="10">Capricorne ♑</option>
                                <option value="11">Verseau ♒</option>
                                <option value="12">Poissons ♓</option>
                            </select>
                            <!-- Email -->
                            <input name="email" id="email" type="email" class="" placeholder="Mon adresse email" required />
                            <!-- Pays -->
                            <div class="pays">
                              <label for="pays">Votre pays</label>
                              <select name="pays" id="pays" required>
                                  <option value="BE">Belgique</option>
                                <option value="CA">Canada</option>
                                <option value="LU">Luxembourg</option>
                                <option value="CH">Suisse</option>
                                <option value="FR" selected>France Métropolitaine</option>
                                <optgroup label="DOM-TOM">
                                    <option value="MQ">Martinique</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GF">Guyane</option>
                                    <option value="RE">La Réunion</option>
                                    <option value="YT">Mayotte</option>
                                    <option value="PM">St Pierre et Miquelon</option>
                                    <option value="BL">St Barthélémy</option>
                                    <option value="SM">St Martin</option>
                                    <option value="WF">Wallis et Futunua</option>
                                    <option value="PF">Polynésie Française</option>
                                    <option value="NC">Nouvelle Calédonie</option>
                                </optgroup>
                                <option value="ZZ">Autre</option>
                            </select>
                            </div>
                        </article>
                    </div>
                    <!-- ### BOUTON SUBMIT -->
                    <button class="form--btn" type="submit" id="submit-form" name="valider">Découvrir</button>
                </form>
            </div>
        </modal>
    </div>

    <script type="text/javascript" src="js/jquery-1.12.1.min.js"></script>
    <script type="text/javascript" src="js/saint-patrick-2016.js"></script>
    <script type="text/javascript" charset="utf-8" src="js/formValidator.js"></script>

        <!-- #### TRACKINGS #### -->
        <?php include('include/remarketing/adwords.php');
              include('include/remarketing/analytics.php');
              include('include/remarketing/facebook.php'); ?>
	</body>
</html>