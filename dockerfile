FROM mysql:latest

WORKDIR /var/www/html/docker-prueba-pagina/html

COPY  pagina/html/index.php/ var\www\html\docker-prueba-pagina\html
COPY  pagina/html/prueba1.sql/ var/www/html/docker-prueba-pagina/html

CMD ["/usr/sbin/mysql:latest", "-D", "FOREGROUND"]