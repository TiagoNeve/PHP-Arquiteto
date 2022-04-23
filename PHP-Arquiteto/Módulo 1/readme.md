# Módulo 1

## Princípio do SOLID em PHP
S -> Single Responsibility Principle ( Princípio da responsabilidade única ) - Diz que a classe só deve ter uma responabilidade
O
L
I
D

## S - 
1. Tentar deixar a classe o mais coeso possível, em que tal classe deve ter apenas a responsabilidade equivalente ao objeto que ela representa
caso exista uma classe Pessoa que pode salvar algo no banco de dados, então essa classe não está coesa.
2. O objetivo de criar classes na programação é o ato de tornar o código o mais próximo da realidade, então não faz sentido você
adicionar funcionalidades que não seria possível realizar no mundo real, pois isso não está coeso

## Emcapsulamento:
1. Ato de disponibilizar funcionalidades que são conhecidas pelo cliente, sem que o mesmo saiba o que está acontecendo pode debaixo dos panos.
2. Criar uma classe onde você disponibiliza métodos úteis para que outras classes possam utilizar quando estiver interagindo com seu objeto, é útil para o 
encapsulamento.

## Acoplamento:
1. Quando o seu código está muito acoplado, qualquer alteração em uma classe é necessário realizar em outra. Uma das formas de fugir desse 
acoplamento é utilizar abstraçoes em vez de classes concretas.
2. Para analisar o encapsulamento, faz sentido entrar nas classes e ler elas e verificar as regras de negócio que ela implementa tem alguma
coisa a ver no contexto da classe onde ela está.
