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
7. NUNCA abrevie.
> Nunca abrevie as palavras - Se você repete em muitos lugares e se tem um nome muito grande, verificar se o método está fazendo mais de uma coisa.
> Nomenclatura, será que faz sentido ficar colocando get e set nos métodos? Dá para entender que getEmail ta pegando o email e getFullName tá trazendo o fullName.
8. Matenha suas classes e pacotes pequenos
> Classes 100 linhas e pacotes 12 arquivos. ou 50 linhas e 10 classes
> Tentar olhar o tamanho da classe e dos métodos que ela compõe, evitar ter métodos muito grandes que ocupe muito espaço, caso existe, seria recomendável refatorar tal método
> com os padrões de refatoração.
> Assim fica mais fácil de se manter, pois é mais fácil alterar uma classe que está pequena do que uma enorme.
9. Tenha no máximo 2 propriedades por classe.
> Separar suas classes em 2 tipos uma para gerenciar o estado de uma única propriedade ou coleção e outra que gerencia no máximo 2 propriedades.
> Tentar chegar mais perto disso, 5 propriedades pode fazer mais sentido

Object Calisthenics are programming exercises, formalized as a set of 9 rules invented by Jeff Bay in his book The ThoughtWorks Anthology.
> Usado para exercitar alguns princípios de Orientação a Objetos.