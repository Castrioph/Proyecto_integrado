<html>
<?php

$adServer = "ldap://10.2.72.84";

$ldap = ldap_connect($adServer);
$username = 'adminE';
$password = 'Admin1234';

$ldaprdn = 'win2012elriex.local' . "\\" . $username;

ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

$bind = @ldap_bind($ldap, $ldaprdn, $password);

if ($bind) {
    $msg = "Estás logueado como correctamente como $username";
} else {
    $msg = "Usuario o contraseña incorrectos";
}
echo $msg;

?>
</html>