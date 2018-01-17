Deploy Infraestrutura para Ambientes PHP 5.6
=================

## Ambiente de Desenvolvimento

- Prometheus
- Graylog
- PHP5.6 + Apache2.4
- Mysql Server 5.5
- Comandos npm, gulp, composer
- Phpmyadmin

Padronização da estrutura para facilitar o uso.


| Pasta | Descrição |
| ------ | ------ |
| dev | Pasta com os arquivos de desenvolvimento local dos arquivos clone do Git |
| infra | Itens de configuração do servidor web, como PHP.INI, VHOSTS e LOGS, DATABASES|
| DockerFile | Arquivos de configuração do Docker |
| useful | Arquivos de Test e outros ajuda a mater a organização |


## Pacotes Instalados no Windows #####
 ---------------------------------
#### 1 - Git SCM for Windows
###### Pode ser baixado no link abaixo:
https://git-scm.com/download/win
### 2 - VirtualBox
###### Pode ser baixado no link abaixo:
https://www.virtualbox.org/wiki/Downloads
### 3 - Docker ToolBox 
###### Pode ser baixado no link abaixo:
https://www.docker.com/products/docker-toolbox
### 4 - IDE's e Editores para Desenvolvimento 
###### Abaixo colocamos uma lista com algumas IDE's mas cada desenvolvedor por usar uma de sua preferência.
- PHP STORM - https://www.jetbrains.com/phpstorm/
- NETBEANS - https://netbeans.org/downloads/
- ATOM - https://atom.io/
- SUBLIME - https://www.sublimetext.com/

> Todos os pacotes devem ser da versão mais atualizada.
>Os aplicativos devem ser instalados na ordem conforme apresentação acima (1,2,3), isso ajuda na associação automatica das ferramentas durante a instalação.


## Preparando o Ambiente para Desenvolvimento #####

Após a instalação do Docker estiver concluída.

Selecione uma pasta dentro do perfil de usuário:

Execute o "Docker Quickstart Terminal "
O terminal ira abrir utilizando Bash MINGW64.
Execute os comandos abaixo:

``` sh
$ pwd
> /c/Users/nomedousuario
$ _
### O temrinal deve ficar sempre com nomedousuario@nomedocomputador MINGW64 ~
### O sinal de Til (~) no final significa que esta navegando dentro do perfil do usuário
$ _
$ git clone https://dsdsdsdsdsdsdsdsds.ocm.br.git MeuProjetoDocker
$ cd MeuProjetoDocker
$ ls

db  dev  docker-compose.yml  Dockerfile-mysql  Dockerfile-php  infra  README.md  useful
$ docker-compose up -d --build
```

Após terminar o Build realize os testes e veja se seu ambiente esta funcioanando.


## Incluir no Hosts do Windows

172.38.1.5 app01.local

172.38.1.5 app02.local

172.38.1.5 app03.local


## Adicionar Rota no S.O - Requer privilégios

### Windows Execute via Prompt Comando 

route add 172.38.1.0 mask 255.255.255.0 192.168.99.100


### Comandos Uteis Docker

```
//Remove todas as configurações (Imagens, Networks, Conteiners)
docker system prune -a

// Remover as imagens
docker rmi $(docker images -a -q)

// Remover todos os conteiners
docker rm -f $(docker ps -a -q)

// Lista todos os volumes ativos
docker volume ls -f dangling=true

//Remover todos os volumes
docker volume prune
```
