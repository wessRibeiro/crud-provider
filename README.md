#informações:
- A prova de questoes de multipla escolhas está localizada em : /perguntas-respondidas 
- As questoes de php para table fornecedor está localizada em : /fornecedor
- Este repositório cria um ambiente em docker para executar os codigos apresentados em : /fornecedor

#para rodar o ambiente

Crie o Arquivo .env
```sh
cp .env.example .env
```

Suba os serviços
```sh
bash up.sh
```

instale as dependencias do laravel
```sh
docker exec crud-provider-app-1 composer install
```

Acesse
[http://localhost:80](http://localhost:80)

Acessar o admin de banco de dados
[http://localhost:8080](http://localhost:8080)

para desligar os serviços
```sh
bash up.sh
```
