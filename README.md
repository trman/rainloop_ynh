<<<<<<< HEAD
Rainloop for YunoHost<br>
----------------------<br>
<br>
http://rainloop.net/<br>
<br>
[English]<br>
Rainloop is a lightweight webmail.<br>
<br>
To configure it, go to http://DOMAIN.TLD/rainloop/?admin<br>
<br>
- The default login is : admin<br>
- The default password is : 12345<br>
<br>
To configure your instance, go to the admin panel, then "Domains" and add a domain in accord with your mail server setup.<br>
<br>
To access the database (required for contacts), the paramaters are the following :<br>
- Database name : rainloop<br>
- Password : then_password_indicated_at_installation<br>
<br>
Once this is done in the admin interface, each user can add a remote carddav server from their own parameters interface.<br>
If you use baikal, the CardDav address is :<br>
https://DOMAIN.TLD/baikal/card.php/addressbooks/USER/default/
<br>
<br>
[Français]<br>
Rainloop est un webmail simple et léger.<br>
<br>
Pour le configurer après l'installation, veuillez vous rendre sur http://DOMAIN.TLD/rainloop/?admin<br>
<br>
- Le nom d'utilisateur admin par défaut est : admin<br>
- Le mot de passe admin par défaut est : 12345<br>
<br>
Pour configurer votre instance, connectez-vous en admin, puis allez dans "Domains" et ajoutez votre domaine en accord avec la configuration de votre serveur email.<br>
<br>
Pour accéder à la base de donnée (necessaire pour gérer les contacts), les paramètres sont les suivants :<br>
- Nom de la base de donnée : rainloop<br>
- Mot de passe : Le_mot_de_passe_renseigné_lors_de_l'installation<br>
<br>
Une fois ceci fait depuis l'interface d'administration, chaque utilisateur peut ajouter un carnet d'adresse distant CardDav via leur propre paramètres.<br>
Si vous utilisez Baikal, l'adresse à renseigner est du type :<br>
https://DOMAIN.TLD/baikal/card.php/addressbooks/UTILISATEUR/default/<br>
=======
Rainloop for YunoHost
----------------------

http://rainloop.net/

Rainloop is a lightweight webmail.

To configure it, go to http://DOMAIN.TLD/rainloop/?admin

- The default login is : admin
- The default password is : 12345

To configure your instance, go to the admin panel, then "Domains" and add a domain in accord with your mail server setup.

To access the database (required for contacts), the paramaters are the following :
- Database name : rainloop
- Password : your_ynh_admin_password


Loggin issues :
Yunohost email credentials are based on username and not on email address. If you want to use your "real mail address" you should :
- Enable plugins
- Use "custom-login-mapping" plugin
- Mapping should be the following : "email_you_want_to_use:ynh_username"
>>>>>>> 4b8644ddfbed1956e70a3e17b003ab573f97bcfa
