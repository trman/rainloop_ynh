<?php
class YnhLoginMappingPlugin extends \RainLoop\Plugins\AbstractPlugin {
	public function Init() {
		// $this->addHook('filter.login-credentials.step-1', 'FilterLoginСredentials1');
		// $this->addHook('filter.login-credentials.step-2', 'FilterLoginСredentials2');
		$this->addHook ( 'filter.login-credentials', 'FilterLoginСredentials' );
	}
	
	/* // ca ne semble pas marcher...
	 * public function FilterLoginCredentials1(&$sEmail, &$sPassword) {
	 * $this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin::FilterLoginСredentials_S1:');
	 * }
	 */
	
	/* // ca non plus...
	 * public function FilterLoginCredentials2(&$sEmail, &$sPassword) {
	 * $this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin::FilterLoginСredentials_S2:');
	 * }
	 */
	
	/**
	 *
	 * @param string $sEmail        	
	 * @param string $sLogin        	
	 * @param string $sPassword        	
	 *
	 * @throws \RainLoop\Exceptions\ClientException
	 */
	public function FilterLoginСredentials(&$sEmail, &$sLogin, &$sPassword) {
		$this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin::FilterLoginСredentials IN => '.$sEmail.'/'.$sLogin, \MailSo\Log\Enumerations\Type::INFO);
		
		// connection au ldap ynh... en local
		$cnx = ldap_connect (); // single connection
		
		if (! $cnx) {
			$this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin: Could not connect to LDAP server', \MailSo\Log\Enumerations\Type::ERROR );
			return;
		}
		
		if (! ldap_bind ( $cnx )) {
			// bizard... ca renvoie false.... mais ca marche....
			// $this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin: Could not bind to LDAP server', \MailSo\Log\Enumerations\Type::ERROR);
			// return;
		}
		
		$dn = "dc=yunohost,dc=org";
		
		// on veut mail et uid... pour un mail donné
		$filter = "(&(objectClass=inetOrgPerson)(mail=$sEmail))";
		$justthese = array ( 'uid', 'mail' );
		
		// OK un petit recherche
		$sr = ldap_search ( $cnx, $dn, $filter, $justthese ); 
		if (!$sr) {
			$this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin: search on LDAP server', \MailSo\Log\Enumerations\Type::ERROR );
			return;
		}
		$result = ldap_get_entries ( $cnx, $sr );

		// OK si on a un resultat on recupere l'identifiant de l'utilisateur...
		if (($result['count'] > 0) && ($result[0]['uid']['count'] > 0)) {
			$sLogin = $result[0]['uid'][0];
		} else {
			$this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin: user not found', \MailSo\Log\Enumerations\Type::ERROR );
		}
		
		$this->Manager()->Actions()->Logger()->Write('LdapLoginMappingPlugin::FilterLoginСredentials OUT => '. $sEmail.'/'.$sLogin, \MailSo\Log\Enumerations\Type::INFO );
	}
	
	/*
	 * // pas encore de configuration...
	 * public function configMapping()
	 * {
	 * return array(
	 * \RainLoop\Plugins\Property::NewInstance('mapping')->SetLabel('Mapping')
	 * ->SetType(\RainLoop\Enumerations\PluginPropertyType::STRING_TEXT)
	 * ->SetDescription('email:login mapping')
	 * ->SetDefaultValue("user@domain.com:user.bob\nadmin@domain.com:user.john2")
	 * );
	 * }
	 */
}
