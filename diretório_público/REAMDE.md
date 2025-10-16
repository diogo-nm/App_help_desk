# 🌐 Arquivos Públicos do App Help Desk

Esta pasta contém os **arquivos públicos** do projeto, que podem ser acessados diretamente pelo navegador.  
Estes arquivos formam a interface do sistema e incluem telas, formulários e estilos.

---

## 📂 Estrutura de arquivos públicos

- `index.php`             – Tela de login  
- `home.php`              – Menu principal do sistema  
- `abrir_chamado.php`     – Formulário para abrir um novo chamado  
- `consultar_chamado.php` – Tela para consulta de chamados  
- `registra_chamado.php`  – Script que salva chamados (interage com arquivos sensíveis)  
- `logoff.php`            – Logout do usuário  
- `validador_acesso.php`  – Valida se o usuário está logado  
- `estilo.css`            – Estilos do projeto  
- `imagens/`              – Imagens usadas nas telas (logos, ícones, etc.)

---

## ⚠️ Observações importantes

- Estes arquivos são **seguros para acesso público**, mas **não devem conter informações sensíveis** (senhas ou dados de usuários).  
- Eles interagem com arquivos sensíveis que ficam **fora do diretório público**, garantindo segurança.  
- Para executar localmente, recomenda-se usar **XAMPP** ou outro servidor web compatível com PHP.  

---

> 💡 Dica: Sempre mantenha os arquivos sensíveis **fora do diretório público** e use esta pasta apenas para a interface do usuário.
