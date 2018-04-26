<?php
/**
 * Created by IntelliJ IDEA.
 * User: Nicol
 * Date: 25/04/2018
 * Time: 22:22
 */

if(CompteManager::isNewUser($_SESSION["id"]))
{
    ?>
    <script>
        $(document).ready(function(){
            $("#starterModal").modal('show');
        });
        function setStarter(starter) {
            idStarter=$("#idStarter").val();

            $.ajax({ url: 'setStarter.php',
                data: {
                    pokemon: starter,
                    id : idStarter
                },
                type: 'post',
                success: function() {
                    $("#starterModal").modal('hide');
                }
            });
        }
    </script>
<?php
}

?>
<form>
    <?php echo "<input id='idStarter' type='hidden' value=".$_SESSION['id']."/>";?>
</form>

<div class="modal fade bd-starter-modal-lg" id="starterModal" tabindex="-1" role="dialog" aria-labelledby="LargerStarterLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-center" id="starterTitle">STARTER PACK - CHOIX DU POKEMON</h5>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col starterSize">
                        <img src="ressources/images/starter/bulbizar.jpg" onclick="setStarter('bulbizare')">
                    </div>
                    <div class="col starterSize">
                        <img src="ressources/images/starter/pikachu.png" onclick="setStarter('pikachu')">
                    </div>
                    <div class="col starterSize">
                        <img src="ressources/images/starter/salameche.png" onclick="setStarter('salameche')">
                    </div>
                    <p class="font-weight-bold sizeSoldeAnnonce">
                        Cliquer sur un pokémon pour le choisir en starter
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
