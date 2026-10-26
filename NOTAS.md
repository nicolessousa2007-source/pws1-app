1. Em que ficheiro estão as rotas da aplicação web?
routes/web.php

2. Em que pasta estão as views? Como se chama a view da página de boas-vindas?
resources/views
welcome.blade.php

3. Em que ficheiro está o nome da base de dados? Porque é que esse ficheiro não vai para o GitHub?
.env
O .env nunca vai para o GitHub: já está no .gitignore. Tem a APP_KEY e as credenciais da base de dados.

B2. Sem o e(), /ola/<h1>Ana mostra «Ana» como título: o navegador interpreta o HTML. Um atacante pode enviar uma ligação com JavaScript (XSS). Com e() aparece o texto <h1>Ana.

B5. /dobro/abc devolve 404: a restrição whereNumber faz com que a rota não corresponda.

# Ver rotas ativas
php artisan route:list --except-vendor


# Parte D
/eventos/3 - aparece a página do evento correspondente
/eventos/99 - deu erro 404 página não encontrada
/eventos/abc - deu erro 404 página não encontrada, porque como tem whereNumber('id') é rejeitado logo pois abc não é um número

# Desafio
Ao coloar a rota /eventos/{id} sem whereNumber('id') e escrita antes de /eventos/proximos, ao abrir /eventos/proximos dá erro porque o Laravel acha que o id é proximos e como as rotas são lidas de cima para baixo ele encontra primeiro a rota errada.