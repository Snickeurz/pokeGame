
<body>

<!-- titre login.html-->=
    <div class="text-center titre_login">
        <h2>POKEGAME - V 1.0</h2>
    </div>

<!-- si lutilisateur vient de se créer un compte & que c'est réussis, afficher ce qui suit : -->

    <div class="container hide" id="succes_creation_compte">

        <div class="alert alert-info">
            <strong>Votre compte a été crée avec succès :</strong> Vous pouvez dès à présent vous connecter.
            <button type="button pull-right" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>

<!-- start aa sec -->
<div class="aa_sec">
    <!--start aa txt -->
    <div class="aa_txt">

            <!-- affichage login -->
                    <!-- start container -->
            <div class="containerLogin">
                <!-- start card container -->
                <div class="card card-container">
                    <!-- appel avatar login -->
                    <img id="profile-img" class="profile-img-card" src="ressources/images/login.jpg" />
                    <!-- fin avatar-->

                    <!-- form connexion -->
                    <form class="form-signin"  name="form" id="form" method="POST" action="controller/controllerConnex.php?action=connexion">
                        <span id="reauth-email" class="reauth-email"></span>
                        <!-- email group -->
                        <input type="email" id="email" name="email" class="form-control" placeholder="Adresse e-mail.." required autofocus>
                        <!-- end email group -->
                        <!-- pass group -->
                        <input type="password" id="password" name="password" class="form-control" placeholder="Password.." required>
                        <!-- end pass group -->
                        <!-- go -->
                        <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Connexion</button>
                    </form>
                    <!-- /form -->
                    <button class="btn btn-lg btn-info btn-block  btn-signin" data-toggle="modal" data-target=".bs-example-modal-lg"><span class="glyphicon glyphicon-edit"></span> Inscription</button>
                    <br>
                    <a href="#"data-target=".bs-example-modal-md" data-toggle="modal">Pourquoi s'inscrire ?</a>

                </div><!-- /card-container -->
            </div><!-- /container -->

        </span>
    </div>
    <!-- end aa txt -->
</div>
<!-- end aa sec -->

<div id="aa_particles"></div>
<script src="ressources/js/particle.js"></script>
<script type="text/javascript">
    particlesJS("aa_particles", {"particles":{"number":{"value":60,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.25,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.3,"width":1},"move":{"enable":true,"speed":3,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});var count_particles, stats, update; stats = new Stats; stats.setMode(0); stats.domElement.style.position = 'absolute'; stats.domElement.style.left = '0px'; stats.domElement.style.top = '0px'; document.body.appendChild(stats.domElement); count_particles = document.querySelector('.js-count-particles'); update = function() { stats.begin(); stats.end(); if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) { count_particles.innerText = window.pJSDom[0].pJS.particles.array.length; } requestAnimationFrame(update); }; requestAnimationFrame(update);;
</script>
<!-- end style particle -->

<!-- start modal why? -->
<div id="why" class="modal fade bs-example-modal-md" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="container-fluid">
                <section class="container-fluid">
                    <div class="modal-header">
                       <h3><span class="glyphicon glyphicon-question-sign"></span> Pourquoi s'inscrire ? </h3>

                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>

                    </div>
                    <div class="modal-body">
                        Afin de gérer au mieux le transfert d'information nous vous invitons à vous créer un compte. <br><br>
                        Cela permet également de rendre nos transaction plus simple ainsi que nos démarche informative et de SAV
                        <br>
                        <br>
                        <br>
                            Dans un soucis de qualité de service, nous vous prions de bien vouloir renseigner vos informations personnelles.
                        <br>
                            Nous certifions sur l'honneur de ne pas divulguer et/ou vendre vos informations personnel à un tierce
                    </div>
                    <div></div>
                </section>
            </div>

        </div>
    </div>
</div>
<!-- end modal why? -->

<!--modal form-->
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- start -->
            <div class="container-fluid">
                <section class="container">
                    <div class="container-page">
                        <!-- left -->
                        <form action="controller/controllerConnex.php?action=register_account" method="post" name="registerForm" id="registerForm">
                            <div class="col-md-6">
                                <!-- tittle modal -->
                                <h3 class="dark-grey">Inscription</h3>
                                <!-- input nom -->
                                <div class="form-group col-lg-6">
                                    <label><span class="glyphicon glyphicon-user"></span> Nom : </label>
                                    <input type="text" name="nom" class="form-control" id="nom" placeholder="Votre nom.." maxlength="15" required>
                                </div>
                                <!-- end nom
                                <!-- input prenom -->
                                <div class="form-group col-lg-6">
                                    <label><span class="glyphicon glyphicon-user"></span> Prenom : </label>
                                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Votre prénom.." maxlength="15" required>
                                </div>
                                <!-- end prenom -->
                                <!-- input username -->
                                <div class="form-group col-lg-12">
                                    <label><span class="glyphicon glyphicon-user"></span> Pseudo :</label>
                                    <input type="text" name="pseudo" class="form-control" id="pseudo" placeholder="Un pseudo.." maxlength="20" required>
                                </div>
                                <!-- end username -->
                                <!-- input password -->
                                <div class="form-group col-lg-6">
                                    <label><span class="glyphicon glyphicon-lock"></span> Mot de passe :</label>
                                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Mot de passe.." maxlength="30" required>
                                </div>
                                <!-- end password -->
                                <!-- input confirm pass -->
                                <div class="form-group col-lg-6">
                                    <label><span class="glyphicon glyphicon-lock"></span> Confirmation :</label>
                                    <input type="password" name="confirmPass" class="form-control" id="confirmPass" placeholder="Confirmation mdp.." maxlength="30" required>
                                </div>
                                <!-- end confirm pass -->
                                <!-- input mail -->
                                <div class="form-group col-lg-12">
                                    <label><span class="glyphicon glyphicon-envelope"></span> E-mail : </label>
                                    <input type="email" name="mail" class="form-control" id="mail" placeholder="Exemple@free.fr" maxlength="35" required>
                                </div>
                                <!-- end mail -->
                                <!-- input tel -->
                                <div class="form-group col-lg-12">
                                    <label><span class="glyphicon glyphicon-phone"></span> N° telephone : </label>
                                    <input type="text" name="tel" class="form-control" id="tel" placeholder="06xxxxxxxx" maxlength="10" required>
                                </div>
                                <!-- end tel -->
                            </div>
                            <!-- end left -->
                            <!-- Conditions + register -->
                            <div class="col-md-6">
                                <center>
                                    <h3 class="dark-grey"><font color="red"><span class="glyphicon glyphicon-warning-sign"></span></font> Termes & Conditions </h3>
                                </center>
                                <br>
                                <br>
                                En cliquant sur "Enregistrer" vous acceptez nos termes et conditions d'utilisation
                                <br>
                                <br>
                                Les produits ainsi que leurs prix sont sujet à être changé selon la fluctuation que ceux-ci engendre.
                                <br>
                                <br>
                                Si une erreur à lieu lors de la transaction, ou de la délivrance du produit, nous procéderons à un remboursement total.
                                <br>
                                <br>
                                Nos livraisons dépendent de nos fournisseurs et de leurs abilitées à nous fournir les produits.
                                <br>
                                <br>
                                <!--Checkbox confirm cgu -->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="checkConfirm">Lu & approuvé </label>
                                    <div class="col-lg-4">
                                        <input type="checkbox" name="checkConfirm" id="checkConfirm" value="1" required>
                                    </div>
                                </div>
                                <!-- end checkbox -->
                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary">Enregistrer</button><br><br>
                                </div>
                                <!-- END Conditions + register -->
                            </div>
                        </form>
                    </div>
                </section>
            </div>
            <!-- end -->
        </div>
    </div>
</div>
<!-- end modal form-->
</body>
</html>