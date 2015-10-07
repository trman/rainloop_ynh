# Rainloop for YunoHost 
 
* [rainloop](http://rainloop.net/ )
 
## English
Rainloop is a lightweight webmail. 
 
To configure it, go to http://DOMAIN.TLD/rainloop/?admin 
 
- The default login is : user chosen during install 
- The default password is : 12345 
 
Each user can add a remote carddav server from their own parameters interface. 
If you use baikal, the CardDav address is : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/USER/default/
 
- to upgrade the app once a new rainloop version is available, simply run in a local shell via ssh or otherwise :

``sudo yunohost app upgrade -u https://github.com/polytan02/rainloop_ynh rainloop``

 
## Français 
Rainloop est un webmail simple et léger. 
 
Pour le configurer après l'installation, veuillez vous rendre sur http://DOMAIN.TLD/rainloop/?admin 
 
- Le nom d'utilisateur admin par défaut est : utilisateur choisi lors de l'installation
- Le mot de passe admin par défaut est : 12345 
 
Chaque utilisateur peut ajouter un carnet d'adresse distant CardDav via leur propre paramètres. 
Si vous utilisez Baikal, l'adresse à renseigner est du type : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/UTILISATEUR/default/ 


- pour mettre à jour rainloop lorsqu'une nouvelle version est disponible, lancez en console locale (ssh ou autre) :

``sudo yunohost app upgrade -u https://github.com/polytan02/rainloop_ynh rainloop``

