<?php


Class ConnectQueryEnunciado{

    //Select do enunciado

    private $result;
    private $sql;
    private $con;
    private $rand;
        public function __construct()
        {
            
            $this->con = mysqli_connect("localhost", "root","","quiz");
            $this->rand = rand(1,363);
            $this->sql = "SELECT * FROM perg WHERE idPerg LIKE '".$this->rand."'";
        }//            


        public function getQuery(){
             
            return $this->result = mysqli_query($this->con, $this->sql);
            
        }

        
        

}







Class ConnectQueryAlternativas{

    //select de alternativas

    private $result;
    private $sql;
    private $con;
    private $idPerg;

        public function __construct()
        {
            $this->con = mysqli_connect("localhost", "root","","quiz");
        }

        public function getQuery(){
            $this->sql = "SELECT * FROM resp WHERE IdPerg like '".$this->idPerg."'";
            $this->result = mysqli_query($this->con, $this->sql);
            return $this->result;
            
        }

        public function setIdAlt($_idPerg){
            $this->idPerg = $_idPerg;

        }
        

}






Class ConnectQuery{

    //modelo de mysqli_query padrão para qualquer tipo de query

    private $result;
    private $sql;
    private $con;
    private $rand;
        public function __construct()
        {
            $this->con = mysqli_connect("localhost", "root","","quiz");
        }//            


        public function getQuery(){
             
            return $this->result = mysqli_query($this->con, $this->sql);
            
        }
        public function setQuery($_sql){
            $this->sql = $_sql;


        }

        

}




?>