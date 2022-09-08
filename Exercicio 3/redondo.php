<?
class redondo{
    private $pontox;
    private $pontoy;
    private $circulo;

    public function __construct($circulo, $pontox = 0, $pontoy = 0){
        $this->Pontox = $pontox;
        $this->Pontoy = $pontoy;
    } 

    public function __get($valor){
        return->$this = $valor;
    }

    public function __set($atributos, $valor){
        $this->$atributos = $valor;
    }

    public function aumentar(){
        $this->Tamanho += $valor;
    }

    public function diminuir(){
         $this->Tamanho -= $valor;
    }

    public function acionar(){
        $this->Pontox = $trigger;
        $this->Pontoy = $trigger;
    }

    public function espaco(){
        return pi() * ($this->Tamanho * 2);
    }
}
?>