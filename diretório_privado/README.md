# ⚠️ Pasta de Arquivos Sensíveis

Esta pasta contém **arquivos críticos do sistema** que não devem ser acessados diretamente pelo navegador.  

---

## 🔒 Arquivos Contidos

- **valida_login.php**  
  - Autentica usuários, verifica emails, senhas e perfis.  
  - **Localização:** fora do diretório público.  

- **arquivo.txt**  
  - Armazena os chamados cadastrados no sistema.  
  - Contém dados de usuários e descrições de chamados.  

> 💡 Todos os arquivos daqui devem ser incluídos apenas pelo backend via `require` ou `include`.
