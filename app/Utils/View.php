<?php


namespace App\Utils;

class View{

/***
 * Metodo responsavel por retornar o conteudo de uma View
 * @param string $view
 * 
 * @return string
 */


    private static function getContentView($view){

        $file = __DIR__."/../../resources/view/".$view. ".html";


        return file_exists($file) ?file_get_contents($file) : '';

    }



/***
 * Metodo responsavel por retornar o conteudo renderizado de uma View
 * @param string $view
 * @param array Variaveis Strings numbers
 * @return string
 */

    public static function render($view, $vars = []){

        //conteudo da view

        $contentView = self::getContentView($view);

        //chaves dos arrays de variaveis

        $keys = array_keys($vars);
        $keys = array_map(function($item){
            return '{{'. $item .'}}';
        },$keys);

        // retorna o conteudo renderizado
        return str_replace($keys,array_values($vars),$contentView); // substitui o valor da key pelo valor de $vars

    }
}



