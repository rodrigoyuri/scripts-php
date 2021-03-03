# Scripts PHP

# Sobre o Projeto:

O projeto foi desenvolvido com intuito de fazer um teste de conhecimento, ele consisti em funções feitas em PHP e que devem ser executadas via terminal ou prompt de comando e ter seu resultados de forma correta.

# Tecnologias utilizadas:

## Back end

- PHP
- Docker

# Por onde começar:

## Back end

Bem antes de clonar o projeto em sua maquina local, você deve ter instalado:

- PHP 7+

OU

- Docker e Docker Compose

Esses são os requisitos minimos para você poder testar os scripts na sua maquina.

### Clone o projeto

Tendo os requisitos minimos exigidos, clone o projeto na sua maquina a onde for mais conviniente para você.

```bash
git clone https://github.com/rodrigoyuri/scripts-php.git
```

Após isso entre no diretório do projeto.

```bash
cd scripts-php
```

### Pra quem usa Docker

Pra quem usa Docker depois de entrar no diretório do projeto, você deve subir o container, então é só executar esse comando;

```bash
docker-compose up -d
```

Caso você esteja no Linux e o comando de cima não deu certo tente o mesmo comando adicionando o sudo na frente, assim:

```bash
sudo docker-compose up -d
```

Após isso execute o seguinte comando

```bash
docker exec -it php bash

# Caso esteja no linux e o comando acima não funcione
sudo docker exec -it php bash
```

Com isso você já pode testar os scripts.

## Testando

Para testar é bem fácil:

![Estrutura Geral](https://github.com/rodrigoyuri/assets-readme/blob/main/scripts-php/estrutura-geral.png)

A estrutura acima é do a projeto, para testar os scripts vamos entrar dentro da pasta scripts

![Estrutura Pasta Scripts](https://github.com/rodrigoyuri/assets-readme/blob/main/scripts-php/estrutura-scripts.png)

Acima temos a estrutura da pasta scripts, veja que temos uma pasta para cada script e dentro de cada uma das pastas, temos um arquivo index.php.

Sabendo disso para testar é simples:

```bash
# Acesse a pasta scripts
cd scripts

# Acesse um script que queira testar
cd calcula-area

# Execute o comando para testar o script
php index.php 3

# Resultado esperado 12
```

Pronto dessa forma o script foi executado.

É um projeto bem simples, mas como eu disse no começo foi para teste de conhecimento então não espere muito 😂.

Espero que goste e qualquer feedback que possa me ajudar a melhorar estou a todo ouvido.

Obrigado e até a proxima ✌️.

# Contato

**LinkedIn:** https://github.com/rodrigoyuri/

**E-mail:** rodrigo_yuri@hotmail.com