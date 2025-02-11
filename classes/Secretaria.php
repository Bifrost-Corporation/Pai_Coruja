<?php

    include_once("Conexao.php");

    class Secretaria{

        private $idSecretaria;
        private $nomeSecretaria;
        private $emailSecretaria;
        private $senhaSecretaria;
        private $primeiroAcessoSecretaria;
        private $idEscola;
        private $idAdministrador;
        private $codNovaSenha;

        public function getIdSecretaria(){
            return $this->idSecretaria;
        }

        public function setIdSecretaria($idSecretaria){
            $this->idSecretaria = $idSecretaria;
        }

        public function getNomeSecretaria(){
            return $this->nomeSecretaria;
        }

        public function setNomeSecretaria($nomeSecretaria){
            $this->nomeSecretaria = $nomeSecretaria;
        }

        public function getEmailSecretaria(){
            return $this->emailSecretaria;
        }

        public function setEmailSecretaria($emailSecretaria){
            $this->emailSecretaria = $emailSecretaria;
        }

        public function getSenhaSecretaria(){
            return $this->senhaSecretaria;
        }

        public function setSenhaSecretaria($senhaSecretaria){
            $this->senhaSecretaria = $senhaSecretaria;
        }

        public function getPrimeiroAcessoSecretaria(){
            return $this->primeiroAcessoSecretaria;
        }

        public function setPrimeiroAcessoSecretaria($primeiroAcessoSecretaria){
            $this->primeiroAcessoSecretaria = $primeiroAcessoSecretaria;
        }

        public function getIdEscola(){
            return $this->idEscola;
        }

        public function setIdEscola($idEscola){
            $this->idEscola = $idEscola;
        }

        public function getIdAdministrador(){
            return $this->idAdministrador;
        }

        public function setIdAdministrador($idAdministrador){
            $this->idAdministrador = $idAdministrador;
        }

        public function getCodNovaSenha(){
            return $this->codNovaSenha;
        }

        public function setCodNovaSenha($codNovaSenha){
            $this->codNovaSenha = $codNovaSenha;
        }

        public function cadastrar($secretaria){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("INSERT INTO tbsecretaria (nomeSecretaria, emailSecretaria, senhaSecretaria, primeiroAcessoSecretaria, idEscola, idAdministrador)
                                            VALUES (?,?,?,?,?,?)");
            $stmt->bindParam(1, $secretaria->getNomeSecretaria());
            $stmt->bindParam(2, $secretaria->getEmailSecretaria());
            $stmt->bindParam(3, $secretaria->getSenhaSecretaria());
            $stmt->bindParam(4, $secretaria->getPrimeiroAcessoSecretaria());
            $stmt->bindParam(5, $secretaria->getIdEscola());
            $stmt->bindParam(6, $secretaria->getIdAdministrador());
            $stmt->execute();
            return 'Cadastro da secretária realizado com sucesso!';
        }

        public function listar(){
            $conexao = Conexao::conectar();
            $querySecretaria = 'SELECT idSecretaria, nomeSecretaria, emailSecretaria, senhaSecretaria, primeiroAcessoSecretaria, tbsecretaria.idEscola, tbsecretaria.idAdministrador, codNovaSenha, nomeEscola FROM tbsecretaria INNER JOIN tbescola ON tbsecretaria.idEscola = tbescola.idEscola';
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function atualizar($secretaria){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare('UPDATE tbsecretaria SET nomeSecretaria = ?, emailSecretaria = ?, senhaSecretaria = ?, idEscola = ?, idAdministrador = ? WHERE idSecretaria = ?');
            $stmt->bindParam(1, $secretaria->getNomeSecretaria());
            $stmt->bindParam(2, $secretaria->getEmailSecretaria());
            $stmt->bindParam(3, $secretaria->getSenhaSecretaria());
            $stmt->bindParam(4, $secretaria->getIdEscola());
            $stmt->bindParam(5, $secretaria->getIdAdministrador());
            $stmt->bindParam(6, $secretaria->getIdSecretaria());
            $stmt->execute();
            return 'Dados da secretaria atualizados com sucesso!';
        }

        public function excluir($secretaria){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare('DELETE FROM tbsecretaria WHERE idSecretaria = ?');
            $stmt->bindParam(1, $secretaria->getIdSecretaria());
            $stmt->execute();
            return 'Secretaria excluida com sucesso!';
        }

        public function selecionarUltimoSecretaria(){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT idSecretaria FROM tbsecretaria WHERE idSecretaria = (SELECT MAX(idSecretaria) FROM tbsecretaria)";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function updateCodSenha($secretaria){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbsecretaria SET codNovaSenha = ? WHERE idSecretaria = ?");
            $stmt->bindParam(1, $secretaria->getCodNovaSenha());
            $stmt->bindParam(2, $secretaria->getIdSecretaria());
            $stmt->execute();
            return 'Update realizado com sucesso!';
        }

        public function updateSenha($secretaria){
            $conexao = Conexao::conectar();
            $stmt = $conexao->prepare("UPDATE tbsecretaria SET senhaSecretaria = ?, codNovaSenha = '', primeiroAcessoSecretaria = 'F' WHERE idSecretaria = ?");
            $stmt->bindParam(1, $secretaria->getSenhaSecretaria());
            $stmt->bindParam(2, $secretaria->getIdSecretaria());
            $stmt->execute();
            return 'Update da senha realizado com sucesso!';
        }

        public function contar(){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT COUNT(idSecretaria) AS 'qtdeSecretaria' FROM tbsecretaria";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function contarAlunos($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT COUNT(idAluno) AS 'qtdeAlunos' FROM tbaluno WHERE '$idEscola' = idEscola";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function contarProfessores($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT COUNT(idProfessor) AS 'qtdeProfessores' FROM tbprofessor WHERE '$idEscola' = idEscola";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function contarTurmas($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT idTurma, nomeTurma, COUNT(idTurma) AS 'qtdeTurmas' FROM tbturma WHERE '$idEscola' = idEscola";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function contarResponsaveis($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT COUNT(idResponsavel) AS 'qtdeResponsaveis' FROM tbresponsavel INNER JOIN tbaluno ON tbaluno.idAluno = tbresponsavel.idAluno WHERE tbaluno.idEscola = '$idEscola'";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function mediaObservacoes($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT AVG(qtdePontosObservacao) AS 'mediaObservacoes' FROM tbobservacao INNER JOIN tbaluno ON tbaluno.idAluno = tbobservacao.idAluno WHERE tbaluno.idEscola = '$idEscola'";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function mediaAlunosTurma($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT AVG((SELECT COUNT(tbaluno.idAluno) FROM tbaluno WHERE tbaluno.idEscola = '$idEscola') / (SELECT COUNT(tbturma.idTurma) FROM tbturma WHERE tbturma.idEscola = '$idEscola')) AS 'mediaTurma' FROM tbturma INNER JOIN tbaluno ON tbaluno.idTurma = tbturma.idTurma WHERE tbturma.idTurma = tbaluno.idTurma";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }
        
        public function listarResponsaveis($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT tbresponsavel.idResponsavel, tbresponsavel.nomeResponsavel FROM tbresponsavel INNER JOIN tbaluno ON tbresponsavel.idAluno = tbaluno.idAluno INNER JOIN tbsecretaria ON tbaluno.idEscola = tbsecretaria.idSecretaria WHERE tbaluno.idEscola = '$idEscola'";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

        public function selecionarSecretaria($idEscola){
            $conexao = Conexao::conectar();
            $querySecretaria = "SELECT tbsecretaria.idSecretaria, tbusuario.idUsuario, nomeSecretaria, emailSecretaria, idEscola, idAdministrador FROM tbsecretaria INNER JOIN tbusuario ON tbusuario.idSecretaria = tbsecretaria.idSecretaria WHERE idEscola = '$idEscola'";
            $resultadoSecretaria = $conexao->query($querySecretaria);
            $listaSecretaria = $resultadoSecretaria->fetchAll(PDO::FETCH_ASSOC);
            return $listaSecretaria;
        }

    }

?>