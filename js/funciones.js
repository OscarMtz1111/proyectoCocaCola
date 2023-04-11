/*Con que elemento voy a trabajar(document representa toda nuestra web)*/
jQuery(document).ready(listo);
/*Cuando toda mi web este lista voy a llamar al elemnto listo*/ 

/*ready(): metodo para decir que ya se va empezar*/

/*funcion es un bloque de codigo que puede repetirse n cantidad de veces*/
function listo(){

    jQuery(".hamb").click(function(e){/*e : accion normal*/
        e.preventDefault(); /*deje de funcionar la accion por defecto*/
        jQuery("header .container nav").toggleClass("open");/*toggleClass():quita y agrega*/
        jQuery(".hamb i").toggleClass(" fa-regular fa-circle-xmark");
    });


    /*Una variable es un espacio de memoria donde puedo almacenar cualquier valor de cualquier tipo*/

    jQuery("header .container nav a").click(function(){

        /*var es una palabra reservada
        variables sin guiones y sin numeros al principio
        Variable dev
        this hace refencia a un elementoal que se le hace click
        attr() se obtiene el valor del atributo
        */
        jQuery("header .container nav").removeClass("open");
        jQuery(".hamb i").removeClass(" fa-regular fa-circle-xmark");
        var dev = jQuery(this).attr("href");
        /*alert(dev);*/
        jQuery("html,body").animate({
            "scrollTop": jQuery(dev).offset().top -76
        })


    });
    
    
    
}