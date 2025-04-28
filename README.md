# 🛍️ Vitrine Virtual - Backend

Este é o BACKEND de um projeto para uma **vitrine virtual** desenvolvido utilizando **HTML**, **CSS**, **PHP** e **MySQL**.  
Ele simula uma loja online com **exibição de produtos**, **login** e **cadastro de usuários**, integrando também a API do **ViaCEP** para buscar o endereço automaticamente pelo CEP.

# ⚠️ MUITO IMPORTANTE
*É necessário ter o BACKEND e o FRONTEND na mesma pasta raíz para o funcionamento correto do projeto.*

*Está disponível o repositório do FRONTEND nesse link: https://github.com/Gabriel-David-Dev/vitrine-virtual-frontend.git*

*Mais explicações abaixo.*

## 🚀 Tecnologias Utilizadas

- HTML5
- CSS3
- PHP 8+
- MySQL (hospedado no [Railway](https://railway.app/))
- API ViaCEP (consulta de endereço)
- XAMPP Control Panel v3.3.0 (para rodar Apache localmente)

## 📂 Estrutura do Projeto BACKEND

- `config-db.php` - Configuração com o banco de dados.
- `verifica-login.php` - Verificação do login.
- `viacep-api.php` - Lógica da API ViaCEP.
- `sair.php` - Encerrar a sessão.

## 🛠️ Como Rodar o Projeto

1.  **Crie uma pasta no seu computador.**
    
2.  **Abra a pasta criada com o VSCode e abra o terminal, agora faça o clone do FRONTEND:**
```
git clone https://github.com/Gabriel-David-Dev/vitrine-virtual-frontend.git frontend
```

3.  **Volte para a raíz da pasta da criada e com o VSCode no terminal, agora faça o clone do BACKEND:**
```
git clone https://github.com/Gabriel-David-Dev/vitrine-virtual-backend.git backend
```

4.  **Para acessar o projeto:**
    * Copie a pasta criada para a pasta `htdocs` do XAMPP.
    * Abra o XAMPP e inicie o Apache.
    * No navegador, abra:
        ```
        http://localhost/pasta-criada/index.php
        ```
        
## ⚙️ Configurações Adicionais

* Certifique-se de que as portas do XAMPP não estejam em conflito (por exemplo, Apache normalmente usa a porta 80 ou 8080).
* Dependendo da porta o link de acesso pode mudar.
