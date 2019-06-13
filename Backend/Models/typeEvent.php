<?php 
    class typeEvent{

        private static $id;
        private static $type;

        public function save($value){
            
            $myPost = array_values($value);
            static::$type = $myPost[0];

            $sql = 'INSERT INTO event_types (type) VALUES (?)';
            $params = array(static::$type);
            return Database::executeRow($sql,$params);
        }

        public function getbyId($values){
            
            if(is_array($values)) {
                $myPost = array_values($values);
                static::$id = $myPost[0];

                $sql = 'SELECT type FROM event_types WHERE id=?';
                $params = array(static::$id);
                return Database::getRow($sql,$params);
            
            }else{
                $myPost = $values;
                static::$id = $myPost;
                
                $sql = 'SELECT type FROM event_types WHERE id=?';
                $params = array(static::$id);
                return Database::getRow($sql,$params);
            }
        }
        
        public function getAll($data){
            if($data==null){
                $sql = 'SELECT * FROM event_types';
                $params = array(null);
                return Database::getRows($sql,$params);
            }   
        }
    }
?>