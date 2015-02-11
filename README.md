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
