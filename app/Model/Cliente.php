<?php

include_once 'C:\xampp\htdocs\Sistema-gestao-de-clinica\app\Model\Conection.php';

class Cliente
{
    private $db;
    private $nome;
    private $data_nascimento;
    private $telefone;
    private $queixa_principal;
    private $realizou_cirurgia;
    private $toma_remedio;
    private $toma_anticoncepcional;
    private $tratamento_medico;
    private $hipo_arterial;
    private $cardiaco;
    private $disturbio_hormonal;
    private $disturbio_circulatorio;
    private $doenca_pele;
    private $ingere_alcool;
    private $diabetes;
    private $quadro_saude;
    private $gestante;
    private $atividade_fisica;
    private $alimentacao_balanceada;
    private $ingestao_agua;
    private $funcionamento_intestinal;
    private $ciclo_mestrual;
    private $possui_marcapasso;
    private $possui_varizes;
    private $cosmetico_corporal;
    private $epilepsia;
    private $cicatriz;
    private $engravidou;
    private $protese_metalica;
    private $fumante;
    private $cancer;
    private $lente_contato;
    private $exposicao_sol;
    private $filtro_solar;
    private $periodo_mestrual;
    private $sono;
    private $oleosidade;
    private $espessura_pele;
    private $grau_acne;
    private $hidratacao_pele;
    private $fototipo;
    private $manchas;
    private $orientacoes;
    private $anamnese;

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @return mixed
     */
    public function getData_nascimento()
    {
        return $this->data_nascimento;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @return mixed
     */
    public function getQueixa_principal()
    {
        return $this->queixa_principal;
    }

    /**
     * @return mixed
     */
    public function getRealizou_cirurgia()
    {
        return $this->realizou_cirurgia;
    }

    /**
     * @return mixed
     */
    public function getToma_remedio()
    {
        return $this->toma_remedio;
    }

    /**
     * @return mixed
     */
    public function getToma_anticoncepcional()
    {
        return $this->toma_anticoncepcional;
    }

    /**
     * @return mixed
     */
    public function getTratamento_medico()
    {
        return $this->tratamento_medico;
    }

    /**
     * @return mixed
     */
    public function getHipo_arterial()
    {
        return $this->hipo_arterial;
    }

    /**
     * @return mixed
     */
    public function getCardiaco()
    {
        return $this->cardiaco;
    }

    /**
     * @return mixed
     */
    public function getDisturbio_hormonal()
    {
        return $this->disturbio_hormonal;
    }

    /**
     * @return mixed
     */
    public function getDisturbio_circulatorio()
    {
        return $this->disturbio_circulatorio;
    }

    /**
     * @return mixed
     */
    public function getDoenca_pele()
    {
        return $this->doenca_pele;
    }

    /**
     * @return mixed
     */
    public function getIngere_alcool()
    {
        return $this->ingere_alcool;
    }

    /**
     * @return mixed
     */
    public function getDiabetes()
    {
        return $this->diabetes;
    }

    /**
     * @return mixed
     */
    public function getQuadro_saude()
    {
        return $this->quadro_saude;
    }

    /**
     * @return mixed
     */
    public function getGestante()
    {
        return $this->gestante;
    }

    /**
     * @return mixed
     */
    public function getAtividade_fisica()
    {
        return $this->atividade_fisica;
    }

    /**
     * @return mixed
     */
    public function getAlimentacao_balanceada()
    {
        return $this->alimentacao_balanceada;
    }

    /**
     * @return mixed
     */
    public function getIngestao_agua()
    {
        return $this->ingestao_agua;
    }

    /**
     * @return mixed
     */
    public function getFuncionamento_intestinal()
    {
        return $this->funcionamento_intestinal;
    }

    /**
     * @return mixed
     */
    public function getCiclo_mestrual()
    {
        return $this->ciclo_mestrual;
    }

    /**
     * @return mixed
     */
    public function getPossui_marcapasso()
    {
        return $this->possui_marcapasso;
    }

    /**
     * @return mixed
     */
    public function getPossui_varizes()
    {
        return $this->possui_varizes;
    }

    /**
     * @return mixed
     */
    public function getCosmetico_corporal()
    {
        return $this->cosmetico_corporal;
    }

    /**
     * @return mixed
     */
    public function getEpilepsia()
    {
        return $this->epilepsia;
    }

    /**
     * @return mixed
     */
    public function getCicatriz()
    {
        return $this->cicatriz;
    }

    /**
     * @return mixed
     */
    public function getEngravidou()
    {
        return $this->engravidou;
    }

    /**
     * @return mixed
     */
    public function getProtese_metalica()
    {
        return $this->protese_metalica;
    }

    /**
     * @return mixed
     */
    public function getFumante()
    {
        return $this->fumante;
    }

    /**
     * @return mixed
     */
    public function getCancer()
    {
        return $this->cancer;
    }

    /**
     * @return mixed
     */
    public function getLente_contato()
    {
        return $this->lente_contato;
    }

    /**
     * @return mixed
     */
    public function getExposicao_sol()
    {
        return $this->exposicao_sol;
    }

    /**
     * @return mixed
     */
    public function getFiltro_solar()
    {
        return $this->filtro_solar;
    }

    /**
     * @return mixed
     */
    public function getPeriodo_mestrual()
    {
        return $this->periodo_mestrual;
    }

    /**
     * @return mixed
     */
    public function getSono()
    {
        return $this->sono;
    }

    /**
     * @return mixed
     */
    public function getOleosidade()
    {
        return $this->oleosidade;
    }

    /**
     * @return mixed
     */
    public function getEspessura_pele()
    {
        return $this->espessura_pele;
    }

    /**
     * @return mixed
     */
    public function getGrau_acne()
    {
        return $this->grau_acne;
    }

    /**
     * @return mixed
     */
    public function getHidratacao_pele()
    {
        return $this->hidratacao_pele;
    }

    /**
     * @return mixed
     */
    public function getFototipo()
    {
        return $this->fototipo;
    }

    /**
     * @return mixed
     */
    public function getManchas()
    {
        return $this->manchas;
    }

    /**
     * @return mixed
     */
    public function getOrientacoes()
    {
        return $this->orientacoes;
    }

    /**
     * @return mixed
     */
    public function getAnamnese()
    {
        return $this->anamnese;
    }


    /**
     * @param mixed $nome
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @param mixed $data_nascimento
     * @return self
     */
    public function setData_nascimento($data_nascimento)
    {
        $this->data_nascimento = $data_nascimento;
        return $this;
    }

    /**
     * @param mixed $telefone
     * @return self
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
        return $this;
    }

    /**
     * @param mixed $queixa_principal
     * @return self
     */
    public function setQueixa_principal($queixa_principal)
    {
        $this->queixa_principal = $queixa_principal;
        return $this;
    }

    /**
     * @param mixed $realizou_cirurgia
     * @return self
     */
    public function setRealizou_cirurgia($realizou_cirurgia)
    {
        $this->realizou_cirurgia = $realizou_cirurgia;
        return $this;
    }

    /**
     * @param mixed $toma_remedio
     * @return self
     */
    public function setToma_remedio($toma_remedio)
    {
        $this->toma_remedio = $toma_remedio;
        return $this;
    }

    /**
     * @param mixed $toma_anticoncepcional
     * @return self
     */
    public function setToma_anticoncepcional($toma_anticoncepcional)
    {
        $this->toma_anticoncepcional = $toma_anticoncepcional;
        return $this;
    }

    /**
     * @param mixed $tratamento_medico
     * @return self
     */
    public function setTratamento_medico($tratamento_medico)
    {
        $this->tratamento_medico = $tratamento_medico;
        return $this;
    }

    /**
     * @param mixed $hipo_arterial
     * @return self
     */
    public function setHipo_arterial($hipo_arterial)
    {
        $this->hipo_arterial = $hipo_arterial;
        return $this;
    }

    /**
     * @param mixed $cardiaco
     * @return self
     */
    public function setCardiaco($cardiaco)
    {
        $this->cardiaco = $cardiaco;
        return $this;
    }

    /**
     * @param mixed $disturbio_hormonal
     * @return self
     */
    public function setDisturbio_hormonal($disturbio_hormonal)
    {
        $this->disturbio_hormonal = $disturbio_hormonal;
        return $this;
    }

    /**
     * @param mixed $disturbio_circulatorio
     * @return self
     */
    public function setDisturbio_circulatorio($disturbio_circulatorio)
    {
        $this->disturbio_circulatorio = $disturbio_circulatorio;
        return $this;
    }

    /**
     * @param mixed $doenca_pele
     * @return self
     */
    public function setDoenca_pele($doenca_pele)
    {
        $this->doenca_pele = $doenca_pele;
        return $this;
    }

    /**
     * @param mixed $ingere_alcool
     * @return self
     */
    public function setIngere_alcool($ingere_alcool)
    {
        $this->ingere_alcool = $ingere_alcool;
        return $this;
    }

    /**
     * @param mixed $diabetes
     * @return self
     */
    public function setDiabetes($diabetes)
    {
        $this->diabetes = $diabetes;
        return $this;
    }

    /**
     * @param mixed $quadro_saude
     * @return self
     */
    public function setQuadro_saude($quadro_saude)
    {
        $this->quadro_saude = $quadro_saude;
        return $this;
    }

    /**
     * @param mixed $gestante
     * @return self
     */
    public function setGestante($gestante)
    {
        $this->gestante = $gestante;
        return $this;
    }

    /**
     * @param mixed $atividade_fisica
     * @return self
     */
    public function setAtividade_fisica($atividade_fisica)
    {
        $this->atividade_fisica = $atividade_fisica;
        return $this;
    }

    /**
     * @param mixed $alimentacao_balanceada
     * @return self
     */
    public function setAlimentacao_balanceada($alimentacao_balanceada)
    {
        $this->alimentacao_balanceada = $alimentacao_balanceada;
        return $this;
    }

    /**
     * @param mixed $ingestao_agua
     * @return self
     */
    public function setIngestao_agua($ingestao_agua)
    {
        $this->ingestao_agua = $ingestao_agua;
        return $this;
    }

    /**
     * @param mixed $funcionamento_intestinal
     * @return self
     */
    public function setFuncionamento_intestinal($funcionamento_intestinal)
    {
        $this->funcionamento_intestinal = $funcionamento_intestinal;
        return $this;
    }

    /**
     * @param mixed $ciclo_mestrual
     * @return self
     */
    public function setCiclo_mestrual($ciclo_mestrual)
    {
        $this->ciclo_mestrual = $ciclo_mestrual;
        return $this;
    }

    /**
     * @param mixed $possui_marcapasso
     * @return self
     */
    public function setPossui_marcapasso($possui_marcapasso)
    {
        $this->possui_marcapasso = $possui_marcapasso;
        return $this;
    }

    /**
     * @param mixed $possui_varizes
     * @return self
     */
    public function setPossui_varizes($possui_varizes)
    {
        $this->possui_varizes = $possui_varizes;
        return $this;
    }

    /**
     * @param mixed $cosmetico_corporal
     * @return self
     */
    public function setCosmetico_corporal($cosmetico_corporal)
    {
        $this->cosmetico_corporal = $cosmetico_corporal;
        return $this;
    }

    /**
     * @param mixed $epilepsia
     * @return self
     */
    public function setEpilepsia($epilepsia)
    {
        $this->epilepsia = $epilepsia;
        return $this;
    }

    /**
     * @param mixed $cicatriz
     * @return self
     */
    public function setCicatriz($cicatriz)
    {
        $this->cicatriz = $cicatriz;
        return $this;
    }

    /**
     * @param mixed $engravidou
     * @return self
     */
    public function setEngravidou($engravidou)
    {
        $this->engravidou = $engravidou;
        return $this;
    }

    /**
     * @param mixed $protese_metalica
     * @return self
     */
    public function setProtese_metalica($protese_metalica)
    {
        $this->protese_metalica = $protese_metalica;
        return $this;
    }

    /**
     * @param mixed $fumante
     * @return self
     */
    public function setFumante($fumante)
    {
        $this->fumante = $fumante;
        return $this;
    }

    /**
     * @param mixed $cancer
     * @return self
     */
    public function setCancer($cancer)
    {
        $this->cancer = $cancer;
        return $this;
    }

    /**
     * @param mixed $lente_contato
     * @return self
     */
    public function setLente_contato($lente_contato)
    {
        $this->lente_contato = $lente_contato;
        return $this;
    }

    /**
     * @param mixed $exposicao_sol
     * @return self
     */
    public function setExposicao_sol($exposicao_sol)
    {
        $this->exposicao_sol = $exposicao_sol;
        return $this;
    }

    /**
     * @param mixed $filtro_solar
     * @return self
     */
    public function setFiltro_solar($filtro_solar)
    {
        $this->filtro_solar = $filtro_solar;
        return $this;
    }

    /**
     * @param mixed $periodo_mestrual
     * @return self
     */
    public function setPeriodo_mestrual($periodo_mestrual)
    {
        $this->periodo_mestrual = $periodo_mestrual;
        return $this;
    }

    /**
     * @param mixed $sono
     * @return self
     */
    public function setSono($sono)
    {
        $this->sono = $sono;
        return $this;
    }

    /**
     * @param mixed $oleosidade
     * @return self
     */
    public function setOleosidade($oleosidade)
    {
        $this->oleosidade = $oleosidade;
        return $this;
    }

    /**
     * @param mixed $espessura_pele
     * @return self
     */
    public function setEspessura_pele($espessura_pele)
    {
        $this->espessura_pele = $espessura_pele;
        return $this;
    }

    /**
     * @param mixed $grau_acne
     * @return self
     */
    public function setGrau_acne($grau_acne)
    {
        $this->grau_acne = $grau_acne;
        return $this;
    }

    /**
     * @param mixed $hidratacao_pele
     * @return self
     */
    public function setHidratacao_pele($hidratacao_pele)
    {
        $this->hidratacao_pele = $hidratacao_pele;
        return $this;
    }

    /**
     * @param mixed $fototipo
     * @return self
     */
    public function setFototipo($fototipo)
    {
        $this->fototipo = $fototipo;
        return $this;
    }

    /**
     * @param mixed $manchas
     * @return self
     */
    public function setManchas($manchas)
    {
        $this->manchas = $manchas;
        return $this;
    }

    /**
     * @param mixed $orientacoes
     * @return self
     */
    public function setOrientacoes($orientacoes)
    {
        $this->orientacoes = $orientacoes;
        return $this;
    }

    /**
     * @param mixed $anamnese
     * @return self
     */
    public function setAnamnese($anamnese)
    {
        $this->anamnese = $anamnese;
        return $this;
    }

    public function __construct()
    {
        $this->db = Conection::getDb();
    }

    public function cadastrarCliente()
    {
        $sql = "INSERT INTO clientes(
            nome,
            data_nascimento,
            telefone,
            queixa_principal,
            realizou_cirurgia,
            toma_remedio,
            toma_anticoncepcional,
            tratamento_medico,
            hipo_arterial,
            cardiaco,
            disturbio_hormonal,
            disturbio_circulatorio,
            doenca_pele,
            ingere_alcool,
            diabetes,
            quadro_saude,
            gestante,
            atividade_fisica,
            alimentacao_balanceada,
            ingestao_agua,
            funcionamento_intestinal,
            ciclo_mestrual,
            possui_marcapasso,
            possui_varizes,
            cosmetico_corporal,
            epilepsia,
            cicatriz,
            engravidou,
            protese_metalica,
            fumante,
            cancer,
            lente_contato,
            exposicao_sol,
            filtro_solar,
            periodo_mestrual,
            sono,
            oleosidade,
            espessura_pele,
            grau_acne,
            hidratacao_pele,
            fototipo,
            manchas,
            orientacoes,
            anamnese
        ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $this->getNome());
        $stmt->bindValue(2, $this->getData_nascimento());
        $stmt->bindValue(3, $this->getTelefone());
        $stmt->bindValue(4, $this->getQueixa_principal());
        $stmt->bindValue(5, $this->getRealizou_cirurgia());
        $stmt->bindValue(6, $this->getToma_remedio());
        $stmt->bindValue(7, $this->getToma_anticoncepcional());
        $stmt->bindValue(8, $this->getTratamento_medico());
        $stmt->bindValue(9, $this->getHipo_arterial());
        $stmt->bindValue(10, $this->getCardiaco());
        $stmt->bindValue(11, $this->getDisturbio_hormonal());
        $stmt->bindValue(12, $this->getDisturbio_circulatorio());
        $stmt->bindValue(13, $this->getDoenca_pele());
        $stmt->bindValue(14, $this->getIngere_alcool());
        $stmt->bindValue(15, $this->getDiabetes());
        $stmt->bindValue(16, $this->getQuadro_saude());
        $stmt->bindValue(17, $this->getGestante());
        $stmt->bindValue(18, $this->getAtividade_fisica());
        $stmt->bindValue(19, $this->getAlimentacao_balanceada());
        $stmt->bindValue(20, $this->getIngestao_agua());
        $stmt->bindValue(21, $this->getFuncionamento_intestinal());
        $stmt->bindValue(22, $this->getCiclo_mestrual());
        $stmt->bindValue(23, $this->getPossui_marcapasso());
        $stmt->bindValue(24, $this->getPossui_varizes());
        $stmt->bindValue(25, $this->getCosmetico_corporal());
        $stmt->bindValue(26, $this->getEpilepsia());
        $stmt->bindValue(27, $this->getCicatriz());
        $stmt->bindValue(28, $this->getEngravidou());
        $stmt->bindValue(29, $this->getProtese_metalica());
        $stmt->bindValue(30, $this->getFumante());
        $stmt->bindValue(31, $this->getCancer());
        $stmt->bindValue(32, $this->getLente_contato());
        $stmt->bindValue(33, $this->getExposicao_sol());
        $stmt->bindValue(34, $this->getFiltro_solar());
        $stmt->bindValue(35, $this->getPeriodo_mestrual());
        $stmt->bindValue(36, $this->getSono());
        $stmt->bindValue(37, $this->getOleosidade());
        $stmt->bindValue(38, $this->getEspessura_pele());
        $stmt->bindValue(39, $this->getGrau_acne());
        $stmt->bindValue(40, $this->getHidratacao_pele());
        $stmt->bindValue(41, $this->getFototipo());
        $stmt->bindValue(42, $this->getManchas());
        $stmt->bindValue(43, $this->getOrientacoes());
        $stmt->bindValue(44, $this->getAnamnese());

        $stmt->execute();
    }


    public function listarClientes()
    {
        $sql = 'select * from clientes';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }

    public function visualizarCliente($id)
    {
        $sql = 'select * from clientes where id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        return $result;

    }
}
