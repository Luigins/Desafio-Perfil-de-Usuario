# 👤 Sistema de Perfil de Usuário e Autenticação (PHP)

Este projeto consiste em um sistema simples e funcional de autenticação de usuários, controle de sessões e exibição de perfil desenvolvido em PHP. O projeto faz parte do **Desafio 3**, focado no entendimento de gerenciamento de sessões (`$_SESSION`), autenticação e proteção de páginas.

---

## 📁 Estrutura do Projeto

```text
Perfil de Usuario(Login)/
├── 15d_desafio3.md    # Especificações e requisitos do desafio
├── 15d_login.php      # Formuário e lógica de autenticação (Login)
├── 15d_perfil.php     # Página restrita com informações do usuário logado
└── 15d_logout.php     # Script para encerramento da sessão (Logout)
```

---

## 🛠️ Tecnologias Utilizadas

* **PHP 7.4+** (Gerenciamento de sessões e lógica de autenticação)
* **HTML5 / CSS3** (Estruturação de formulários e estilização das páginas)

---

## 🚀 Funcionalidades

1. **Autenticação (Login):**
   * Validação de credenciais inseridas pelo usuário.
   * Inicialização e gravação de variáveis de sessão (`session_start()`).
2. **Área Restrita (Perfil):**
   * Verificação de acesso: impede que usuários não autenticados acessem a página `15d_perfil.php`.
   * Exibição das informações do usuário conectado.
3. **Encerramento de Sessão (Logout):**
   * Destruição completa da sessão com `session_destroy()` e redirecionamento seguro para a tela de login.

---

## 💻 Como Executar o Projeto

### Pré-requisitos
* Um servidor local instalado (ex: **XAMPP**, **WAMP**, **Laragon**) ou o **PHP CLI** instalado no ambiente.

### Passo a Passo

1. **Clonar ou baixar o repositório:**
   Coloque os arquivos dentro do diretório do seu servidor local (ex: `htdocs` no XAMPP ou `www` no WAMP).

2. **Iniciando via servidor embutido do PHP (opcional):**
   Abra o terminal no diretório da pasta `Perfil de Usuario(Login)` e execute:
   ```bash
   php -S localhost:8000
   ```

3. **Acessar a aplicação:**
   Abra o navegador e acesse:
   ```text
   http://localhost:8000/15d_login.php
   ```
   *(ou a URL correspondente do seu servidor local, ex: `http://localhost/Perfil de Usuario(Login)/15d_login.php`)*

---

## 📝 Documentação do Desafio (`15d_desafio3.md`)

Consulte o arquivo `15d_desafio3.md` para visualizar as instruções detalhadas, regras de negócio e critérios de aceitação do desafio.

---

## 📄 Licença

Projeto desenvolvido para fins didáticos e práticos de estudo em PHP e Desenvolvimento Web.
