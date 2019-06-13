<?php 
    require_once('Imports/Global/Global.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard | Tipos de eventos</title>
</head>
<body>
<?php 
    ImportGlobal::ImportMaterializeCss();
    ImportGlobal::ImportMaterialIcons();
    ImportGlobal::ImportFileCss('index');
?>
        <div class="row">
            <div class="col s12 m6 offset-m3">
                <div class="card z-depth-5" id="NameTypeEventCard">
                    <div class="card-content">
                        <form method="POST" id="FormAddType">
                            <div class="row">
                                <div class="col s12 m9">
                                    <label for="NameTypeEvent">Tipo de evento</label>    
                                    <input name="NameTypeEvent" id="NameTypeEvent" type="text">
                                </div>
                                <div class="col s12 m1" id="BtnAddType">
                                    <button type="submit" class="btn" id="btnAdd">Listar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12">
                <div class="card">
                    <nav class="white grey-text">
                        <div class="nav-wrapper">
                            <form method="POST" id="FormSearch">
                                <div class="input-field">
                                    <input id="searchType" name="searchType" type="search" placeholder="Busca algo...">
                                    <label class="label-icon" for="search"><i class="material-icons black-text">search</i></label>
                                    <i onclick="clearSearch()" class="material-icons">close</i>
                                </div>
                            </form>
                        </div>
                    </nav>
                    <div class="card-content">
                        <div id="ContentTypes">
                            <span class="card-title">Tipos de evento</span>
                            <div class="row" id="TypesRead">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php 
    ImportGlobal::ImportJQuery();
    ImportGlobal::ImportMaterializeJS();
    ImportGlobal::ImportJSFunctions();
    ImportGlobal::ImportControllerJs('TypeEvents');
?>
</body>
</html>