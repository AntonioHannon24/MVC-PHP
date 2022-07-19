<?php


namespace App\Controller\Pages;

use \App\Utils\View;



class Page{

    /***
     * Metodo responsavel por renderizar a parte do topo da pag
     * 
     * @return string
     */


    private static function getHeader(){
        return View::render('pages/header');
    }


    /***
     * Metodo responsavel por renderizar a parte rodape da pag
     * 
     * @return string
     */


    private static function getFooter(){
        return View::render('pages/footer');
    }




    /***
     * Metodo responsavel por retornar o conteudo View da nossa pagina Generica
     */
    public static function getPage($title,$content){

        return View::render('pages/page',[
            'title'=>$title,
            'header'=>self::getHeader(),
            'footer'=>self::getFooter(),
            'content' => $content,
            
        ]);
        
    }

}