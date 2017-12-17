<?php
//增 删 改 查
class db{
    public $host='127.0.0.1';
    public $user='root'; 
    public $pwd='root';
    public $database='shop';
    public $link='';
    public $table = '';
    public function __construct($table){
        $this->link = mysqli_connect($this->host,$this->user,$this->pwd,$this->database);
        mysqli_set_charset($this->link,"utf8");
        $this->table = $table;
    }
    public function __destruct(){
    
    }
    public function query($sql){
        $result = mysqli_query($this->link,$sql);
        return $result;
    }
    //查
    public function find($field = '*',$where='',$order='',$limit=''){
        $sql = "select $field from ".$this->table;
        $sql .= !empty($where) ? ' where ' .$where :'';  
        $sql .= !empty($order) ? ' order by ' .$order :'';  
        $sql .= !empty($limit) ? ' limit ' .$limit :'';  
        $result = $this->query($sql);
        $list = mysqli_fetch_assoc($result);
        return $list;
    }
    public function select($field = '*',$where='',$order='',$limit=''){
        $sql = "select $field from ".$this->table;
        $sql .= !empty($where) ? ' where ' .$where :'';  
        $sql .= !empty($order) ? ' order by ' .$order :'';  
        $sql .= !empty($limit) ? ' limit ' .$limit :'';  
        $result = $this->query($sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $list[]=$row;
        }
        return $list;
    }
    // 增
    public function add($arr){
        $sql = "insert into " .$this->table. " set " ;
        foreach ($arr as $k => $v) {
            $sql .= "$k = '$v',"; 
        }
        $sql = substr($sql,0,strlen($sql)-1);
        $result = $this -> query($sql);
         if($result){
             return $sql;
         }
    }
    //改
    public function update($field,$where){
        $sql = "update " .$this->table. " set " .$field. " where " .$where; 
        $result = $this -> query($sql);
        return $sql;
    }


    public function save($arr,$where){
       $sql = "update " .$this->table. " set ";
        foreach ($arr as $k => $v) {
            $sql .= "$k = '$v',"; 
        }
        $sql = substr($sql,0,strlen($sql)-1);
        $sql .=" where $where";
        $result = $this -> query($sql);
     if($result){
         return $sql;
     }
    }
    //删
    public function delect($where){
        $sql = "delete from " .$this->table. ' where '.$where;
        $result = $this -> query($sql);
        return $sql;
    }
    
}
?>