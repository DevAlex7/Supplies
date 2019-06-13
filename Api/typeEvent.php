<?php 

    require_once('../Backend/Instance/instance.php');
    require_once('../App/Helpers/Validator.php');
    require_once('../Backend/Models/typeEvent.php');
    require_once('../Backend/Http/Http.php');

    if( isset($_GET['request']) && isset($_GET['action']) ){
        
        session_start();
        $result=array('status'=>0,'exception'=>'','role'=>0);
        $type = new typeEvent();
        
        switch($_GET['request']){
            
            case 'GET':
                switch($_GET['action']){
                    case 'getbyId':
                        if(Validate::Integer($_POST['id'])->Id()){
                            if($result['dataset'] = route::get('typeEvent', 'getbyId' , $_POST)){
                                $result['status']=1;
                            }
                            else{
                                $result['exception']='No hay tipo de evento de esa información';
                            }
                        }
                        else{
                            $result['exception']='No hay información';
                        }
                    break;
                    case 'getAll':
                        if($result['dataset'] = route::get('typeEvent', 'getAll' , null)){
                            $result['status']=1;
                        }
                        else{
                            $result['exception']='No hay tipos de eventos';
                        }
                    break;
                default:
                exit('Acción no disponible');
                }
            break;
            
            case 'POST':
                switch($_GET['action']){
                    case 'createType':
                       if(Validate::this($_POST['NameTypeEvent'],2,50)->Alphanumeric())
                       {
                            route::post('typeEvent','save', $_POST);
                            
                            $result['status']=1;
                       }
                       else{
                           $result['exception']='Nombre incorrecto';
                       }
                    break;
                default:
                exit('Acción no disponible');
                }
            break;
            
            case 'PUT':
                switch($_GET['action']){
                    
                default:
                exit('acción no definida');
                }
            break;

            case 'DELETE':
                switch($_GET['action']){
                        
                default:
                exit('acción no definida');
                }
            break;

            default:
            exit('Petición rechazada');
        }
        print( json_encode($result) );
    }
    else{
        exit('Petición de HTTP y acción no definidas');
    }
?>