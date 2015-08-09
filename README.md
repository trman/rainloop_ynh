# Rainloop for YunoHost 
 
* [rainloop](http://rainloop.net/ )
 
## English
Rainloop is a lightweight webmail. 
 
To configure it, go to http://DOMAIN.TLD/rainloop/?admin 
 
- The default login is : admin 
- The default password is : 12345 
 
To configure your instance, go to the admin panel, then "Domains" and add a domain in accord with your mail server setup. 
 
To access the database (required for contacts), the paramaters are the following : 
- Database name : rainloop 
- Password : the_database_password_indicated_at_installation 
 
Once this is done in the admin interface, each user can add a remote carddav server from their own parameters interface. 
If you use baikal, the CardDav address is : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/USER/default/
 
- to upgrade the app once a new rainloop version is available, simply run in a local shell via ssh or otherwise :

``sudo yunohost app upgrade -u https://github.com/polytan02/rainloop_ynh rainloop``

 
## Français 
Rainloop est un webmail simple et léger. 
 
Pour le configurer après l'installation, veuillez vous rendre sur http://DOMAIN.TLD/rainloop/?admin 
 
- Le nom d'utilisateur admin par défaut est : admin 
- Le mot de passe admin par défaut est : 12345 
 
Pour configurer votre instance, connectez-vous en admin, puis allez dans "Domains" et ajoutez votre domaine en accord avec la configuration de votre serveur email. 
 
Pour accéder à la base de donnée (necessaire pour gérer les contacts), les paramètres sont les suivants : 
- Nom de la base de donnée : rainloop 
- Mot de passe : Le_mot_de_passe_de_la_base_de_donnée_renseigné_lors_de_l'installation 
 
Une fois ceci fait depuis l'interface d'administration, chaque utilisateur peut ajouter un carnet d'adresse distant CardDav via leur propre paramètres. 
Si vous utilisez Baikal, l'adresse à renseigner est du type : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/UTILISATEUR/default/ 


- pour mettre à jour rainloop lorsqu'une nouvelle version est disponible, lancez en console locale (ssh ou autre) :

``sudo yunohost app upgrade -u https://github.com/polytan02/rainloop_ynh rainloop``

