# Regras

1. Não usar getter e setters
> Usar métodos de regras de negócio que fazem sentido serem usadas na classe e não expor as propriedades de sua classe. Caso você tenha uma propriedade privada que ela possue apenas métodos get e set, então não faz sentido ter esses métodos e deve deixar tal propriedade pública
* 1.1. Tell, Don't Ask
> Crie métodos que fazem sentido, que tenha significado, não saia disponibilizando get e sets a doidado.

pecl install dss
2. Ter apenas 1 nível de indentação por método
3. NUNCA use ELSE
> Desnecessária na orientação a objetos a gente não precisa dela. 
> Fail fast e.e - Caso você tenha um else que apenas estoura um erro, então você pode tirar o else e buscar primeiro o cenário onde estoura o erro
> e depois realizar a regra de negócio para quando não estourar o erro, isso evita a utilização do else.
> Conceito: Obsseção por tipos primitivos - Colocar como string algo que tem significado, como email. Então vale mais a pena criar uma classe de email do que colocar ele como string.