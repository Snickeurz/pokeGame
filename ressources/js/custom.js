/**
 * Cette fonction s'execute lorsque la page est dans l'état ready().
 */
$(function() {
    /**
     *
     * Cacher le slider principal sauf pour certaines pages
     */
    var inscription = getUrlParameter('compte');
    if(inscription="created"&&inscription!=null)
    {
        $("#succes_creation_compte").removeClass("hide");
        $("#succes_creation_compte").addClass("show");
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


