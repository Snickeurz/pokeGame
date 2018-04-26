/**
 * Cette fonction s'execute lorsque la page est dans l'état ready().
 */
$(function() {

    /**
     * Pour bienvenido
     */
    var bienvenido = getUrlParameter('accueil');
    if(bienvenido="accueil"&&bienvenido!=null)
    {
        /**
         * On affiche bienvenido
         */
        $("#bienvenido").addClass("show");
    }
    else
    {
        /**
         * On cache bienvenido
         */
        $("#bienvenido").removeClass("show");
    }
});

/**
 * Cette fonction recupère un paramètre donné dans l'url
 * @param sParam le paramètre a chercher
 * @returns {boolean}
 */
var getUrlParameter = function getUrlParameter(sParam)
{
    var sPageURL = decodeURIComponent(window.location.search.substring(1)),
        sURLVariables = sPageURL.split('&'),
        sParameterName,
        i;

    for (i = 0; i < sURLVariables.length; i++)
    {
        sParameterName = sURLVariables[i].split('=');

        if (sParameterName[0] === sParam)
        {
            return sParameterName[1] === undefined ? true : sParameterName[1];
        }
    }
};


