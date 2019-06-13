<?php 
    class route{

        private static $modelName;
        private static $methodName;
        private static $result;
        
        public static function post($model, $method, $request){

            //Define the values
            static::$modelName = $model;
            static::$methodName = $method;

            //Define the method
            $method = static::$methodName;
            
            //Define the instance from the model
            $instance = new static::$modelName;

            //Model with function and parameters
            $instance->$method($request);
            
        }
        public static function get($model, $method, $request){

            //Define the values
            static::$modelName = $model;
            static::$methodName = $method;

            //Define the method
            $functionMethod = static::$methodName;
            
            //Define the instance from the model
            $instance = new static::$modelName;

            //Model with function and parameters
            static::$result = $instance->$functionMethod($request);    

            return (static::$result);

        }   
        public static function put($apiData){

        }
        public static function delete($apiData){

        }   
    }
?>