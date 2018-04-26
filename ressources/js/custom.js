/**
 * Cette fonction s'execute lorsque la page est dans l'état ready().
 */
$(function() {
    /**
     * Pour loginInterface.html
     */
    var inscription = getUrlParameter('compte');
    if(inscription="created"&&inscription!=null)
    {
        /**
         * Enlèvement de la classe hide à la div succes_creation_compte.
         */
        $("#succes_creation_compte").removeClass("hide");
        /**
         * On ajoute la classe show à la div succes_creation_compte.
         */
        $("#succes_creation_compte").addClass("show");
    }
    /**
     * Pour loginInterface.html
     */
    var failed = getUrlParameter('session');
    if(failed="failed"&&failed!=null)
    {
        /**
         * Enlèvement de la classe hide à la div fail_creation_compte.
         */
        $("#fail_creation_compte").removeClass("hide");
        /**
         * On ajoute la classe show à la div fail_creation_compte.
         */
        $("#fail_creation_compte").addClass("show");
    }
    /**
     * Pour loginInterface.html
     */
    var login = getUrlParameter('login');
    if(login="fail"&&login!=null)
    {
        /**
         * Enlèvement de la classe hide à la div fail_login
         */
        $("#fail_login").removeClass("hide");
        /**
         * On ajoute la classe show à la div fail_login.
         */
        $("#fail_login").addClass("show");
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


