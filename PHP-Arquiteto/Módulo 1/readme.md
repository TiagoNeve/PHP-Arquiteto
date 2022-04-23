# Módulo 1

## Princípio do SOLID em PHP
S -> Single Responsibility Principle ( Princípio da responsabilidade única ) - Diz que a classe só deve ter uma responabilidade
O
L
I
D

## S - Single Responsibility Principle
1. Tentar deixar a classe o mais coeso possível, em que tal classe deve ter apenas a responsabilidade equivalente ao objeto que ela representa
caso exista uma classe Pessoa que pode salvar algo no banco de dados, então essa classe não está coesa.
2. O objetivo de criar classes na programação é o ato de tornar o código o mais próximo da realidade, então não faz sentido você
adicionar funcionalidades que não seria possível realizar no mundo real, pois isso não está coeso
3. Just Because You Car, Doesn't Mean You Should
4. Uma classe só deveria ter um único motivo para mudar. - Robert (Uncle Bob) Martin - Para ser reescrito.
5. Procurar sempre se existe regras de negócio que podem ser mudadas e se tiver mais de duas em uma classe, é necessário refatorar
pois a classe só deve ter um motivo para mudar.

## Emcapsulamento:
1. Ato de disponibilizar funcionalidades que são conhecidas pelo cliente, sem que o mesmo saiba o que está acontecendo pode debaixo dos panos.
2. Criar uma classe onde você disponibiliza métodos úteis para que outras classes possam utilizar quando estiver interagindo com seu objeto, é útil para o 
encapsulamento.

## Acoplamento:
1. Quando o seu código está muito acoplado, qualquer alteração em uma classe é necessário realizar em outra. Uma das formas de fugir desse 
acoplamento é utilizar abstraçoes em vez de classes concretas.
2. Para analisar o encapsulamento, faz sentido entrar nas classes e ler elas e verificar as regras de negócio que ela implementa tem alguma
coisa a ver no contexto da classe onde ela está.

## O - Open Closed Principle
1. Open Chest Surgery Is Not Needed When Putting On A Coat
2. Entidades de software (casses, módulos, funções, etc) devem ser abertas para expansão, porém, fechadas para modificações - Bertrand Mayer
