<?php


namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Entity\Organization;



class Home extends Page{


    /***
     * Metodo responsavel por retornar o conteudo View da nossa home
     */
    public static function getHome(){

        //organization
        $obOrganization = new Organization;
        


        //view da home

        $content =  View::render('pages/home',[
            'name'=>$obOrganization->name,
            'description' => $obOrganization->description,
            'site'=> $obOrganization->site
        ]);

        //returna a View da pagina
        
        return parent::getPage('Wdev - Canal - Home',$content);
    }

}

/*
echo "<pre>";
        print_r($obOrganization);
        echo "<pre>";
        exit();

*/