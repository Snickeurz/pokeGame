/**
 * Cette fonction s'execute lorsque la page est dans l'état ready().
 */
$(function() {

    /**
     * Pour bienvenido
     */
    var bienvenido = getQueryParam("uc");
    if(bienvenido==="accueil")
    {
        /**
         * On affiche bienvenido
         */
        $("#bienvenido").show();
    }
    else
    {
        /**
         * On cache bienvenido
         */
        $("#bienvenido").hide();
    }
});

/**
 * Cette fonction recupère un paramètre donné dans l'url
 * @param sParam le paramètre a chercher
 * @returns {boolean}
 */function getQueryParam(param) {
    location.search.substr(1)
        .split("&")
        .some(function(item) { // returns first occurence and stops
            return item.split("=")[0] == param && (param = item.split("=")[1])
        })
    return param
}

