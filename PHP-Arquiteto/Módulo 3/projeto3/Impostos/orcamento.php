<?php 

namespace DesignePattern;

use DesignePattern\EstadosOrcamento\EmAprovacao;
use DesignePattern\EstadosOrcamento\EstadoOrcamento;

class Orcamento
{
  public int $quantidadeItens;
  public float $valor;
  public EstadoOrcamento $estadoAtual;

  public function __construct()
  {
    $this->estadoAtual = new EmAprovacao();
  }

  public function aplicaDescontoExtra()
  {
    
  }
}