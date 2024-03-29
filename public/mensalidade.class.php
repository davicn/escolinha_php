<?php 

    class Mensalidade{

        private $_idAluno;
        private $_nomeAluno;
        private $_valor;
        private $_mes;
        private $_pago;

        function __construct($idAluno, $nomeAluno, $valor, $mes, $pago) {
            $this->_idAluno = $idAluno;
            $this->_nomeAluno = $nomeAluno;
            $this->_valor = $valor;
            $this->_mes = $mes;
            $this->_pago = $pago;
        }

        public function getIdAluno() {
            return $this->_idAluno;
        }

        public function getAluno() {
            return $this->_nomeAluno;
        }

        public function getValor() {
            return $this->_valor;
        }

        public function getMes() {
            return $this->_mes;
        }

        public function getPago() {
            if ($this->_pago == 0) {
                return 'Não';
            }

            return 'Sim';
        }

    }

?>