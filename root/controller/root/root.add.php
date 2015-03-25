<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */

// get param
$username = $postVars_username;
$nama = $postVars_nama;
$password = $postVars_password;
$isAdmin = $postVars_isAdmin;
$next = $postVars_next;

if ($root->detail() && $root->isAdmin != 1)
    header("Location:index.php?form=A.02");

if ($next)
{
    if (!$username || !$nama || !$password)
        $errorCode = "Silahkan mengisi username, nama dan password.";
    if (!$errorCode)
    {
        if ($root->add($username, $password, $nama, $isAdmin))
        {
            
            $_SESSION["message"] = "Anda telah berhasil menambah Admin ".$nama;
            header("Location:index.php?form=X.02");
        }
    }
}
include_once ("template/root.add.php");

?>