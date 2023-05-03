<?php

include_once 'C:\xampp\htdocs\Sistema-gestao-de-clinica\app\Model\Cliente.php';

class ClienteController
{

    private $dados;
    private $clienteRepository;

    public function __construct()
    { 
     
        $this->pegaDadosFormulario();
        $this->clienteRepository = new Cliente();
    }


    public function armazenar()
    {

        $this->clienteRepository->setNome($this->dados['nome']);
        $this->clienteRepository->setData_nascimento($this->dados['data_nascimento']);
        $this->clienteRepository->setTelefone($this->dados['telefone']);
        $this->clienteRepository->setQueixa_principal($this->dados['queixa_principal']);
        $this->clienteRepository->setRealizou_cirurgia($this->dados['realizou_cirurgia']);
        $this->clienteRepository->setToma_remedio($this->dados['toma_remedio']);
        $this->clienteRepository->setToma_anticoncepcional($this->dados['toma_anticoncepcional']);
        $this->clienteRepository->setTratamento_medico($this->dados['tratamento_medico']);
        $this->clienteRepository->setHipo_arterial($this->dados['hipo_arterial']);
        $this->clienteRepository->setCardiaco($this->dados['cardiaco']);
        $this->clienteRepository->setDisturbio_hormonal($this->dados['disturbio_hormonal']);
        $this->clienteRepository->setDisturbio_circulatorio($this->dados['disturbio_circulatorio']);
        $this->clienteRepository->setDoenca_pele($this->dados['doenca_pele']);
        $this->clienteRepository->setIngere_alcool($this->dados['ingere_alcool']);
        $this->clienteRepository->setDiabetes($this->dados['diabetes']);
        $this->clienteRepository->setQuadro_saude($this->dados['quadro_saude']);
        $this->clienteRepository->setGestante($this->dados['gestante']);
        $this->clienteRepository->setAtividade_fisica($this->dados['atividade_fisica']);
        $this->clienteRepository->setAlimentacao_balanceada($this->dados['alimentacao_balanceada']);
        $this->clienteRepository->setIngestao_agua($this->dados['ingestao_agua']);
        $this->clienteRepository->setFuncionamento_intestinal($this->dados['funcionamento_intestinal']);
        $this->clienteRepository->setCiclo_mestrual($this->dados['ciclo_mestrual']);
        $this->clienteRepository->setPossui_marcapasso($this->dados['possui_marcapasso']);
        $this->clienteRepository->setPossui_varizes($this->dados['possui_varizes']);
        $this->clienteRepository->setCosmetico_corporal($this->dados['cosmetico_corporal']);
        $this->clienteRepository->setEpilepsia($this->dados['epilepsia']);
        $this->clienteRepository->setCicatriz($this->dados['cicatriz']);
        $this->clienteRepository->setEngravidou($this->dados['engravidou']);
        $this->clienteRepository->setProtese_metalica($this->dados['protese_metalica']);
        $this->clienteRepository->setFumante($this->dados['fumante']);
        $this->clienteRepository->setCancer($this->dados['cancer']);
        $this->clienteRepository->setLente_contato($this->dados['lente_contato']);
        $this->clienteRepository->setExposicao_sol($this->dados['exposicao_sol']);
        $this->clienteRepository->setFiltro_solar($this->dados['filtro_solar']);
        $this->clienteRepository->setPeriodo_mestrual($this->dados['periodo_mestrual']);
        $this->clienteRepository->setSono($this->dados['sono']);
        $this->clienteRepository->setOleosidade($this->dados['oleosidade']);
        $this->clienteRepository->setEspessura_pele($this->dados['espessura_pele']);
        $this->clienteRepository->setGrau_acne($this->dados['grau_acne']);
        $this->clienteRepository->setHidratacao_pele($this->dados['hidratacao_pele']);
        $this->clienteRepository->setFototipo($this->dados['fototipo']);
        $this->clienteRepository->setManchas($this->dados['manchas']);
        $this->clienteRepository->setOrientacoes($this->dados['orientacoes']);
        $this->clienteRepository->setAnamnese($this->dados['anamnese']);
  
        $this->clienteRepository->cadastrarCliente();
        return true;

    }
    

    private function pegaDadosFormulario()
    {
        if (!empty($_POST)) {
            $this->dados = $_POST;
            return;
        }

        $this->dados = [];
    }


    public function listarClientes()
    {
        return $this->clienteRepository->listarClientes();

    }

    public function visualizarCliente($id)
    {
        return $this->clienteRepository->visualizarCliente($id);

    }
}
