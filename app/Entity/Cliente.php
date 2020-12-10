<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Cliente{

    public $id;
    public $nomeCliente;
    public $cpf;
    public $idade;
    public $data;

    public function cadastrar(){
        $this->data = date('Y-m-d H:i:s');

        $obDatabase = new Database('cliente');
        $this->id = $obDatabase->insert([
                                    'nome' => $this->nomeCliente,
                                    'cpf' => $this->cpf,
                                    'idade' => $this->idade,
                                    'data_cadastro' => $this->data
                                ]);
        return true;
    }

    public function atualizar(){
        return (new Database('cliente'))->update('id= '.$this->id,[
                                                    'nome' => $this->nomeCliente,
                                                    'cpf' => $this->cpf,
                                                    'idade' => $this->idade
                                                ]);
    }

    public function excluir(){
        return (new Database('cliente'))->delete('id = ' . $this->id);
    }

    public static function getClientes($where = null, $order = null, $limit = null){
        return (new Database('cliente'))->select($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getCliente($id){
        return (new Database('cliente'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }
}