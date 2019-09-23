<?php 

//namespace POO;
//use Exception;

class Pessoa
{
    
    private $nome; //Atributo
    private $sobrenome;
    private $cpf;
    private $endereco;
    private $cep;
    private $cidade;
    
    
    public function __construct($nome, $sobrenome, $cpf, $endereco,
        $cep, $cidade) {
            $this->setNome($nome);
            $this->setSobrenome($sobrenome);
            $this->setCpf($cpf);
            $this->setEndereco($endereco);
            $this->setCep($cep);
            $this->setCidade($cidade);
    }
    
    function __destruct()
    {}
    
    public function __toString(){
        return
        " Nome: " . $this->getNome() . "<br>" .
        " Sobrenome: " . $this->getSobrenome() . "<br>" .
        " Cpf: " . $this->getCpf() . "<br>" .
        " Endereço: " . $this->getEndereco() . "<br>" .
        " Cep: " . $this->getCep() . "<br>" .
        " Cidade: " . $this->getCidade();
    }
    
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
    public function getSobrenome()
    {
        return $this->sobrenome;
    }
    
    /**
     * @return mixed
     */
    public function getCpf()
    {
        return $this->cpf;
    }
    
    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }
    
    /**
     * @return mixed
     */
    public function getCep()
    {
        return $this->cep;
    }
    
    /**
     * @return mixed
     */
    public function getCidade()
    {
        return $this->cidade;
    }
    
    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    /**
     * @param mixed $sobrenome
     */
    public function setSobrenome($sobrenome)
    {
        $this->sobrenome = $sobrenome;
    }
    
    /**
     * @param mixed $cpf
     */
    public function setCpf($cpf)
    {
        
        $cpfvalido = Pessoa::validaCPF($cpf); //Método estatico
        
        if ($cpfvalido === false) {
            
            throw new Exception("Cpf inválido",1);
        }
        
        $this->cpf = $cpf;
    }
    
    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }
    
    /**
     * @param mixed $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }
    
    /**
     * @param mixed $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }
    
    public function falar() {//M�todo
        
        return "Meu nome é " . $this->nome;
        
    }
    
    public function exibir(){
        return array(
            "nome"=>$this->getNome(),
            "sobrenome"=>$this->getSobrenome(),
            "cpf"=>$this->getCpf(),
            "endereco"=>$this->getEndereco(),
            "cep"=>$this->getCep(),
            "cidade"=>$this->getCidade()
        );
    }
    
    public static function validaCPF($cpf):bool
    {
        
        if(empty($cpf)) {
            return false;
        }
        
        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;
        
        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
        
        
        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        }
        
        else if ($cpf == '00000000000' ||
            $cpf == '11111111111' ||
            $cpf == '22222222222' ||
            $cpf == '33333333333' ||
            $cpf == '44444444444' ||
            $cpf == '55555555555' ||
            $cpf == '66666666666' ||
            $cpf == '77777777777' ||
            $cpf == '88888888888' ||
            $cpf == '99999999999') {
                return false;
                
            } else {
                
                for ($t = 9; $t < 11; $t++) {
                    
                    for ($d = 0, $c = 0; $c < $t; $c++) {
                        $d += $cpf{$c} * (($t + 1) - $c);
                    }
                    $d = ((10 * $d) % 11) % 10;
                    if ($cpf{$c} != $d) {
                        return false;
                    }
                }
                
                return true;
            }
    }
    
}

?>


