# Rainloop for YunoHost 
 
* [rainloop](http://rainloop.net/ ): 1.9.3.365
 
## English
Rainloop is a lightweight webmail. 
 
To configure it, go to http://DOMAIN.TLD/rainloop/app/?admin 
 
- The default login is : admin 
- The default password is : Password chosen during install 
 
Each user can add a remote carddav server from their own parameters interface. 
If you use baikal, the CardDav address is : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/USER/default/
 
- to upgrade the app once a new rainloop version is available, simply run in a local shell via ssh or otherwise :
  - for testing use  
``sudo yunohostapp upgrade -u https://github.com/YunoHostPlugins-Testing/rainloop_ynh rainloop``
  - for release  
``sudo yunohost app upgrade -u https://github.com/YunoHost-Apps/rainloop_ynh rainloop``

 
## Français 
Rainloop est un webmail simple et léger. 
 
Pour le configurer après l'installation, veuillez vous rendre sur http://DOMAIN.TLD/rainloop/app/?admin 
 
- Le nom d'utilisateur admin par défaut est : admin
- Le mot de passe admin par défaut est : Mot de passe choisi lors de l'installation 
 
Chaque utilisateur peut ajouter un carnet d'adresse distant CardDav via leur propre paramètres. 
Si vous utilisez Baikal, l'adresse à renseigner est du type : 
https://DOMAIN.TLD/baikal/card.php/addressbooks/UTILISATEUR/default/ 


- pour mettre à jour rainloop lorsqu'une nouvelle version est disponible, lancez en console locale (ssh ou autre) :

``sudo yunohost app upgrade -u https://github.com/YunoHostPlugins-Testing/rainloop_ynh rainloop``  
``sudo yunohost app upgrade -u https://github.com/YunoHost-Apps/rainloop_ynh rainloop``

