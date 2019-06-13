<?php 

class ImportGlobal{

    //To import the Global Materialize Library
    public static function ImportMaterializeCss(){
        print 
        '<link rel="stylesheet" href="Imports/resources/css/global/materialize.min.css">';
    }
    //To import the file to put style page
    public static function ImportFileCss($fileCss){
        print
        '<link rel="stylesheet" href="Imports/resources/css/utilities/'. $fileCss .'.css">';
    }
    public static function ImportSidenavCss($sidenavCss){
        print 
        '<link rel="stylesheet" href="Imports/resources/css/Global/'. $sidenavCss. '.css">';
    }
    public static function ImportMaterialIcons(){
        print 
        '<link rel="stylesheet" href="Imports/resources/css/Global/material-icons.css">';
    }
    public static function ImportIco(){
        print ('
            <link rel="shortcut icon" type="image/x-icon" href="Imports/resources/pics/utilities/ico.png"></link>
        ');
    }
    //To import the Global Jquery 
    public static function ImportJQuery(){
        print 
        '<script src="Imports/resources/js/global/jquery-3.2.1.min.js"></script>';
    }
    //To import the Global Materialize Js
    public static function ImportMaterializeJS(){
        print 
        '<script src="Imports/resources/js/global/materialize.min.js"></script>';
    }
    //To import the global JS functions
    public static function ImportJSFunctions(){
        print 
        '<script src="App/Helpers/functions.js"></script>';
    }
    //To import the Controller that you will use :)
    public static function ImportControllerJs($Controller){
        print 
        '<script src="App/Controllers/'.$Controller.'.js"></script>';
    }
    public static function ImportMomentJS(){
        print 
        '<script src="Imports/resources/js/global/moment.min.js"></script>';
    }
    
    public static function ImportFooter(){
        print 
        '  
        <div class="container red">
            <div class="row">
                <div class="col l6 s12">
                <h5 class="white-text">Distribuira Illusion</h5>
                <p class="grey-text text-lighten-4">Tu organizador de eventos, más especializado</p>
                </div>
                <div class="col l4 offset-l2 s12">
                <h6 class="white-text">¡Puedes encontrarnos en donde sea!</h6>
                <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Facebook</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                </ul>
                </div>
            </div>
        </div>
        ';
    }
}
?>