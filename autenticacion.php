<?php
    $ldapuser  = $_POST["usuario"];
    $ldappass = $_POST["password"];
    $ldapconn = ldap_connect("ldap://dominio.so") or die("No fue posible ingresar.");

    if ($ldapconn) 
    {
        $ldapbind = ldap_bind($ldapconn, $ldapuser, $ldappass);
        if ($ldapbind) 
        {
            echo "nitido";
            header('Location: success.html');
        }
        else 
        {
            header('Location: index.html');
            echo'<script type="text/javascript">
            alert("Credenciales incorrectas");
            window.location.href="index.html";
            </script>';
        }
    }
    // $Result = ldap_search($ldapconn, "OU=IT,DC="Domain",DC=corp", "(samaccountname=$ldaprdn)", array("dn"));
    // $data = ldap_get_entries($ldapconn, $Result);
    // print_r($data);
?>