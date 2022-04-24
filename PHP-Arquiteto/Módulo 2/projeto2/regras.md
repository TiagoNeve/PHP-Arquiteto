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
4. Envolva seus tipos primitivos (caso eles tenham comportamento)
> Sempre tente buscar entidades relacionado ao objeto que fazem sentido estar em uma classe separada, sempre que uma entidade começe a ganhar forma, tente criar uma classe para ela.
> Se o tipo tiver comportamento, faz sentido envolver.
5. Coleções de primeira classe 
6. Apenas 1 "ponto" por linha
> Apenas um operador de acesso por instrunção, significa que nos seus métodos ele só pode ter um operador de acesso para cada método
> Lei de demeter - Não se deve falar com estranhos, tem que conversar com o objeto da classe e pedir a informação que você precisa, não se deve pegar propriedades da classe e sim pegar
> métodos que retorna o que você espera que ele retorne.
> A única exceção seria na utilização do Fluent Interface, onde um método pode encadiar a chamada do mesmo método e assim sucessivamente.
