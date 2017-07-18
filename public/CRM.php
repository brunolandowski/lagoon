<?php 

function CallAPI($method, $url, $data = false)
{
    $curl = curl_init();

    if ('POST' == $method) {
        curl_setopt($ch, CURLOPT_POST, TRUE);
    } else if ('PUT' == $method) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'PUT');
    } else if('GET' != $method) {
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $method);
    }


    // Optional Authentication:
    //curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    //curl_setopt($curl, CURLOPT_USERPWD, "username:password");

    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true );

    curl_setopt($curl, CURLOPT_HTTPHEADER, array( "x-auth-company: lagoon\r\nx-auth-token: "));

    $result = curl_exec($curl);

    curl_close($curl);

    return $result;
}
echo '///////////////<br>';
echo '///////////////<br>';
// OK // print_r( CallAPI( 'GET', 'http://ws-crm-recette.cata-lagoon.com/civilities/' ) );
// OK // print_r( CallAPI( 'GET', 'http://ws-crm-recette.cata-lagoon.com/modeles/' ) );
// OK // print_r( CallAPI( 'GET', 'http://ws-crm-recette.cata-lagoon.com/zonenav/' ) );
// OK // print_r( CallAPI( 'GET', 'http://ws-crm-recette.cata-lagoon.com/pays/' ) );
// XXX 404 XXX // print_r( CallAPI( 'GET', 'http://ws-crm-recette.cata-lagoon.com/etat/' ) );
// XXX 405 XXX // print_r( CallAPI( 'POST', 'http://ws-crm-recette.cata-lagoon.com/opportunite/' ) );
// XXX 404 XXX // print_r( CallAPI( 'POST', 'http://ws-crm-recette.cata-lagoon.com/contacts/' ) );
// XXX 405 XXX // print_r( CallAPI( 'POST', 'http://ws-crm-recette.cata-lagoon.com/auth/' ) );
// XXX 405 XXX // print_r( CallAPI( 'POST', 'http://ws-crm-recette.cata-lagoon.com/disconnect/' ) );
echo '<br>///////////////<br>';
echo '///////////////<br>';
/**/
/*

GET : getCivilitiesListAction ( $request ; $langue )   route : /civilities/ ou /civilities/<code_langue>            récupère la liste des civilités dans une langue donnée
GET : getModelesListAction ( $request )                route : /modeles/                                            récupère la liste des modèles de bateaux
GET : getZoneNavListAction ($request ; $langue )       route : /zonenav/ ou /zonenav/<code_langue>                  récupère la liste des zones de navigation dans une langue donnée
GET : getPaysListAction ( $request ; $langue )         route : /pays/ ou /pays/<code_langue>                        récupère la liste des pays dans une langue donnée
GET : getEtatsUSListAction ( $request ; $langue )      route : /etat/ ou /etat/<code_langue>                        récupère la liste des etats américains dans une langue donnée
POST : postOpportuniteAction ( $request )              route : /opportunite/                                        demande de création d’une opportunité
POST : postContactAction ( $request )                  route : /contacts/                                           demande de création d’une fiche personne
POST : getConnectAction ( $request )                   route : /auth/                                               récupère un token de connexion
POST : getDisconnectAction ( $request )                route : /disconnect/                                         déconnecte proprement un user
 
J’utilise Restlet pour faire mes tests, et voici mes paramètres :
HEADERS :
               x-auth-company = ${"dbname"}
               x-auth-token       = ${"token"}
 
Variables environnements :
               dbname = lagoon
               token = <le_token_de_getConnectAction>
 
Notes :
La liste des codes langues acceptée est : FR – EN – ES – DE – PT

*/