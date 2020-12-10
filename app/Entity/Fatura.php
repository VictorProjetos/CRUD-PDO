<?php

namespace App\Entity;

use App\Db\Database;
use \PDO;

class Fatura{

    public $id;
    public $descricao_fatura;
    public $valor_fatura;
    public $vencimento;
    public $cliente_id;

    public function cadastrarFatura(){

        $obDatabase = new Database('faturas');
        $this->id = $obDatabase->insert([
                                    'descricao_fatura' => $this->descricao_fatura,
                                    'valor_fatura' => $this->valor_fatura,
                                    'vencimento' => $this->vencimento,
                                    'cliente_id' => $this->cliente_id
                                ]);
        return true;
    }

    public function atualizarFatura(){
        return (new Database('faturas'))->update('id= '.$this->id,[
                                                    'descricao_fatura' => $this->descricao_fatura,
                                                    'valor_fatura' => $this->valor_fatura,
                                                    'vencimento' => $this->vencimento,
                                                    'cliente_id' => $this->cliente_id
                                                ]);
    }

    public function excluirFatura(){
        return (new Database('faturas'))->delete('id = ' . $this->id);
    }

    public static function getFaturas($where = null, $order = null, $limit = null){
        return (new Database('faturas'))->selectFaturasComCliente($where,$order,$limit)
                                        ->fetchAll(PDO::FETCH_CLASS,self::class);
    }

    public static function getFatura($id){
        return (new Database('faturas'))->select('id = '.$id)
                                        ->fetchObject(self::class);
    }

}