# **Projeto de Estudos: Sistema de Registro e Login em PHP**

Este projeto é desenvolvido com o propósito de aprendizado, fornecendo um exemplo simples de um sistema de registro e login em PHP. O código é voltado para estudos e não deve ser utilizado em ambientes de produção sem uma revisão e melhorias substanciais para garantir a segurança adequada.

## **Funcionalidades**

- **Registro de Usuário:**
    - Captura e valida dados do usuário, como nome, e-mail e senha.
    - Utiliza a classe **`UsuarioController`** para processar o registro.
    - Armazena as informações do usuário em arquivos de texto no formato simples.
- **Autenticação de Usuário:**
    - Verifica as credenciais do usuário no processo de login.
    - Utiliza a classe **`UsuarioController`** para autenticar e obter informações do usuário.
- **Interface do Usuário:**
    - Construída utilizando Bootstrap para uma aparência mais amigável.
    - Oferece formulários de login e registro.
- **Sessão:**
    - Utiliza o conceito de sessões para manter o estado do usuário entre diferentes requisições.

## **Uso**

1. Clone ou faça o download do projeto.

```bash

https://github.com/EsdrasZero/Painel-PHP.git

```

1. Configure um servidor web local (por exemplo, XAMPP, WampServer) e coloque os arquivos na pasta correspondente (www).
2. Acesse o projeto no navegador.

```bash

http://localhost/Painel-PHP

```

## **Considerações de Segurança**

Este projeto é destinado apenas para fins educacionais e pode não seguir práticas de segurança recomendadas para ambientes de produção. Algumas considerações de segurança incluem:

- O código utiliza MD5 para a senha, o que não é considerado seguro atualmente. Considere o uso de funções de hash mais seguras, como **`password_hash`** e **`password_verify`**.
- Previna ataques de SQL Injection utilizando prepared statements ou funções de escape ao lidar com consultas SQL.
- Esteja ciente dos riscos associados ao armazenamento de senhas em texto simples ou utilizando métodos de hash desatualizados.

## **Contribuições**

Contribuições são bem-vindas! Se você identificar melhorias, correções ou quiser adicionar recursos adicionais ao projeto, sinta-se à vontade para abrir uma *issue* ou enviar um *pull request*.

## **Licença**

Este projeto é licenciado sob a Licença MIT, o que significa que você pode usá-lo livremente para fins educacionais e pessoais.
