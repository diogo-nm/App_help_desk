# App Help Desk 🖥️

Sistema de Help Desk desenvolvido em **PHP**, com login, abertura e consulta de chamados. Possui um diretório sensível fora do diretório público para proteger dados e autenticação.

## ⚙️ Funcionalidades

- Login de usuários com perfis diferentes (administrativo e usuário) 🔐  
- Abertura de chamados com título, categoria e descrição 📝  
- Consulta de chamados, filtrando por usuário se necessário 👀  
- Sistema de sessões e validação de acesso  

## 💻 Tecnologias

- PHP  
- HTML5  
- CSS3 (Bootstrap 4)  
- LocalStorage simples via arquivo `.txt` para armazenamento de chamados  

## 🗂 Estrutura do Projeto

```
xampp/htdocs/app_help_desk/ # Diretório público (acesso via localhost/app_help_desk)
├── index.php # Tela de login
├── home.php # Menu principal
├── abrir_chamado.php # Formulário para abrir chamado
├── consultar_chamado.php # Consulta de chamados
├── registra_chamado.php # Salva chamados em arquivo
├── logoff.php # Logout do usuário
├── validador_acesso.php # Validação de sessão
├── estilo.css # Estilo do projeto
└── imagens/ # Imagens usadas no projeto

xampp/app_help_desk/ # Diretório sensível (fora do público)
└── valida_login.php # Script de validação do login
└── arquivo.txt # Armazenamento de chamados
```

## 🚀 Como Rodar

1. Instale e configure o **XAMPP**.  
2. Coloque o projeto dentro do diretório `htdocs` do XAMPP.  
3. Garanta que o diretório `/app_help_desk/` esteja fora do diretório público (`htdocs`) para proteger os dados sensíveis.  
4. Abra o navegador e acesse através de [http://localhost/your_project/index.php](http://localhost/your_project/index.php)

5. Use os usuários cadastrados no `valida_login.php` para logar:  
- `adm@teste.com.br` / `123456`  
- `user@teste.com.br` / `123`  
- `jose@teste.com.br` / `123`  
- `maria@teste.com.br` / `123`  

## ⚠️ Observações

- O arquivo `arquivo.txt` armazena os chamados de forma simples, sem banco de dados.  
- O diretório sensível (`app_help_desk`) protege scripts importantes e dados do sistema.  
- Todos os acessos às páginas são validados via sessão.

