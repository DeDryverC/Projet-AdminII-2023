# Repo Projet Admin 2 EPHEC - Aout 2023

## Identifiants de connexion a l'erp:
> - login : johndoe@woodytoys.seldric.be
> - password: w00DyT0ys

> - login: cdd@woodytoys.seldric.be
> - password: rip_skybl0g

## Les commandes du projet.
&nbsp;
Il est impératif d'installer docker, ainsi que docker compose pour le bon fonctionnement de ce code.
&nbsp;
### Démarrage
```
(sudo) docker compose up
-> Demarre le docker compose en mode interface, vous pourrez voir les logs etc, pour quitter, faites simplement CTRl+C.

(sudo) docker compose up -d
-> Demarre le docker compose en mode daemon, il s'executera en arrière plan et vous n'aurez pas accès aux log
```

### Debug
Vous pouvez débuger les conteneurs en ouvrant une interface bash sur un conteneur (par exemple mysql pour vérifier votre bdd)
```
(sudo) docker exec -it <nom_conteneur> bash -l
```
