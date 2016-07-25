# Wiki

Wiki of Maxcell@SYSU

## Requirement

- PHP >= 5.5.9
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension

## Install

1. Download `git clone https://github.com/Maxcell-SYSU/Wiki.git MaxcellWiki && cd MaxcellWiki`
2. Install Composer `curl -sS https://getcomposer.org/installer | php`
3. Install dependence`php composer.phar install`
4. Setup `.env` file using `.env.example` as an example

### Develop

1. `cd public`
2. `php -S 0.0.0.0:1555`

### Deploy

1. Install Nginx or Apache
2. Setup URL rewrite
