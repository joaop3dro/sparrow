<?php

require_once realpath(dirname(__FILE__,2).'/config/config.php');
    class EventoModel{
        public static function ListarTodosEventos(){
            $conexao =  Database:: getConection();

            $sql = "SELECT * FROM eventos "; // forma menos protegido
            $resultadoQuery = $conexao->query($sql) or die ("Erro ao listar todos os Eventos.").mysql_error();

                if ($resultadoQuery){
                    return $resultadoQuery;
                }else{
                    return false;
                }
            }
            
    public static function listarPorId(){
        $conexao = Database:: getConection();

        $sql = "SELECT * FROM eventos WHERE id_eventos ";
        $Listar = $conexao;
      
            $Listar = ['id'];
            var_dump($Listar);
    }
}

        if($_SERVER['REQUEST_METHOD'] == 'GET'){ // aqui é onde vai deccorer a chamada se houver um *request* POST
        $evento = new EventoModel;

        
        var_dump($_GET);
        $id = isset($_GET['id']);
     }   
?>