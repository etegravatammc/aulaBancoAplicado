# CRUD Banco de Dados

**Preparação de ambiente**

Atualizar pacotes: sudo apt update
Instalar o PHP: sudo apt install php php-cli

sudo apt update && sudo apt install php-mysqli


CREATE USER 'denisson'@'localhost' IDENTIFIED BY '123456';
GRANT ALL PRIVILEGES ON *.* TO 'denisson'@'localhost';
FLUSH PRIVILEGES;


Verificar a versão instalada: php -v


**Código e testes**

Crie um arquivo de teste:

> index.php
digite: echo "<?php echo 'Olá mundo!'; ?>" 

Rode via linha de comando: 
php index.php

**Inicie o servidor embutido do PHP:**
Caso a versão seja a 8.4

php -S localhost:8000

Caso ocorram erros ao usaro php8.4 use o comando abaixo 

php8.3 -S localhost:8000

Clique em "Abrir no Navegador" (Open in Browser) quando a notificação de porta 8000 aparecer no canto inferior direito.