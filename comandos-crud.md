
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

