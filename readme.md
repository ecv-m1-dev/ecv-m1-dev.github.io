# Développement Web M1

###### Ce repo sert de support de cours pour les élèves du M1 DEV de l'ECV Bordeaux

## Les bases de PHP et MySQL

Pour ce cours, dans le dossier `php_mysql` on trouve

- le [support de cours](./php_mysql/cours/index.html)
- un fichier [Dockerfile](./php_mysql/Dockerfile) pour démarrer rapidement un *serveur PHP* 
- un fichier [docker-compose.yml](./php_mysql/docker-compose.yml) avec le *serveur PHP*, un *serveur MySQL* et *Adminer*


### Mettre en route le service PHP

Pour construire l'image PHP :
```shell
docker build . -t php
```

Pour lancer le container PHP :
```shell
docker run -d --name php -v ./html:/var/www/html -v ./php-conf.d:/usr/local/etc/php/conf.d/ -p 80:80 php
```

### Accéder aux exercices :

Une fois le container démarré, dirigez-vous vers [http://localhost/exercices](http://localhost/exercices)

## Symfony

A venir


