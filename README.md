## Web_Vulns

Um site de teste de vulnerabilidades em PHP para ajudar a identificar e corrigir problemas de segurança.

### Funcionalidades

- LFI/RFI (Local/Remote File Inclusion): teste de inclusão de arquivos locais e remotos
- IDOR (Insecure Direct Object Reference): teste de acesso direto a objetos inseguros
- XSS (Cross-Site Scripting): teste de injeção de código malicioso

### Objetivo

Este projeto visa fornecer um ambiente de teste para desenvolvedores e profissionais de segurança testar e identificar vulnerabilidades comuns em aplicações web.

Uso

1. Clone o repositório: `git clone https://github.com/DarkZer010/Web_Vulns.git`
2. Configure o ambiente: `use ngrok`
3. Faça um localhost de php (qualquer porta) `php -d allow_url_fopen=On -S localhost:PORTA`
4- configure o ngrok (TERMUX) ./ngrok http <PORTA>

## Contribua

Contribuições são bem-vindas! Se você encontrar algum problema ou tiver uma sugestão, por favor, abra uma issue ou envie um pull request.

## Atenção

Este projeto é apenas para fins de teste e educação. Não use em produção ou em ambientes de produção.
