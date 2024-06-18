<?php
    class Cadastro{
        private $nome;
        private $cpf;
        private $data_nascimento;
        private $email;
        private $celular;
        private $cep;
        private $rua;
        private $bairro;
        private $cidade;
        private $estado;
        private $numero;
        private $complemento;
        private $login;
        private $senha;
        private $conf_senha;

        public function setCadstro($nome, $cpf, $data_nascimento, $email, $celular, $cep, $rua, $bairro, $cidade, $estado, $numero, $complemento, $login, $senha, $conf_senha){
            $this-> nome = $nome;
            $this-> cpf = $cpf;
            $this-> data = $data_nascimento;
            $this-> email = $email;
            $this-> celular = $celular;
            $this-> cep = $cep;
            $this-> rua = $rua;
            $this-> bairro = $bairro;
            $this-> cidade = $cidade;
            $this-> estado = $estado;
            $this-> numero = $numero;
            $this-> complemento = $complemento;
            $this-> login = $login;
            $this-> senha = $senha;
            $this-> confirmar = $conf_senha;
        }

        public function getPCadstro(){
            return $this-> nome;
            return $this-> cpf;
            return $this-> data;
            return $this-> email;
            return $this-> celular;
            return $this-> cep;
            return $this-> rua;
            return $this-> bairro;
            return $this-> cidade;
            return $this-> estado;
            return $this-> numero;
            return $this-> complemento;
            return $this-> login;
            return $this-> senha;
            return $this-> confirmar;
        }
    }
?>