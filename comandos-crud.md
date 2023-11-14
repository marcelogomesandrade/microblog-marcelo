
# Comandos SQL para operação de dados (CRUD)

## resumo 

- C: CREATE (INSERT) -> usado para inserir dados 
- R: READ (SELECT) -> usado para ler/consultar dados 
- U: UPDATE (UPDATE) -> usado para atualizar dados 
- D: DELETE (DELETE)-> usado para excluir dados 

### Exemplos 

#### INSERT na tabela de usuários

INSERT INTO usuarios (nome,email,senha,tipo)
VALUES(
    'Marcelo G. Andrade',
    'gomesgomes123321@gmail.com',
    '445654',
    'admin'
    );



INSERT INTO usuarios (nome,email,senha,tipo)
VALUES ( 'Fulano da Silva', 'fulano@gmail.com','456','editor'

),( 'Beltrano Soares','beltrano00@gmail.com','000penha','admin'


),( 'Chapolin Colorado', 'chapolin@vingadores.com.br', 'marreta', 'editor'

);

#### SELECT na tabela de usuários

SELECT * FROM usuarios;
SELECT nome, email FROM usuarios;
SELECT nome, email FROM usuarios WHERE tipo = 'admin';

#### UPDATE na tabela de usuários

UPDATE usuarios SET tipo = 'admin' WHERE id = 4;

-- Obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O UPDATE!


#### DELETE na tabela de usuários

DELETE FROM usuarios WHERE id = 2;


-- Obs: NUNCA ESQUEÇA DE PASSAR UMA CONDIÇÃO PARA O DELETE!

#### INSERT na tabela de noticias

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (

    'Descoberto oxigênio em Vênus',
    'Nesta manhã, em um belo dia para a astronomia, foi feita uma descoberta incrível e muito bacana demais da conta que legal...',
    'Recentemente a sonda XVZ encontrou traços de oxigênio no planeta',
    'venus,jpg', 
1

);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (

    'Nova versão do VSCode',
    'Mais que um programa, é essencial em ter novos experimentos, a Microsolf lançou a nova versão do VSCode nos países da Europa ',
    'Inglaterra será o primeiro a ter a nova versão',
    'vscode,jpg', 
4

);

INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES (

    'Onda de calor no Brasil',
    'Ninguém aguenta mais uma semana de intensa temperatura, afinal, nada melhor que nos tempos onde as chuvas eram frequentes. Situação está caótica ',
    'Região sudeste está com aumento de 30% em relação no ano passado',
    'sol.svg', 
1

);


#### Consulta que mostre a data e o título da notícia e o nome do autor desta notícia 

##### SELECT COM JOIN (CONSULTA COM JUNÇÃO DE TABELAS)

-- Especificamos o nome da coluna junto com o nome da tabela 

SELECT 
noticias.data,
noticias.titulo,
usuarios.nome

-- Especificamos quais tabelas serão "juntadas/combinadas" 

FROM noticias JOIN usuarios

-- Fazendo uma comparação entre a chave estrangeira (FK)com a chave primária (PK)


ON noticias.usuario_id = usuarios.id
ORDER BY data DESC; 

-- opcional (ordenação/classificação pela data )
-- DESC indica ordem descrescentre (mais recente vem primeiro)




