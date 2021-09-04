<?php
    $ldapuser  = $_POST["usuario"];
    $ldappass = $_POST["password"];
    $ldapconn = ldap_connect("ldap://dominio.so") or die("No fue posible ingresar.");

    if ($ldapconn) 
    {
        $ldapbind = ldap_bind($ldapconn, $ldapuser, $ldappass);
        if ($ldapbind) 
        {
            header('Location: success.html');
        }
        else 
        {
            echo'
            <script type="text/javascript">
                window.location= "index.html"
                document.addEventListener("DOMContentLoaded", function(event) {
                    credIncorrectas();
                });
            </script>';
        }
    }
?>