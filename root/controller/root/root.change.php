<?php

/**
 * @author [ar3t4]
 * @copyright 2014
 */


// get parameter
$next = $postVars_next;
$oldPassword = $postVars_oldPassword;
$newPassword = $postVars_newPassword;
$newPasswordAgain = $postVars_newPasswordAgain;

if ($root->detail() && $root->isAdmin != 1)
    header("Location:index.php?form=A.02");

if (!$root->detail())
    $errorCode = "invalidUser";

if ($next) {
    if (!$oldPassword || !$newPassword || !$newPasswordAgain)
        $errorCode = "Silahkan mengisi semua field!";

    
    if (!$errorCode) {
    	// validate old password
        if ($root->password === md5($oldPassword)) {
            // validate new password
            if ($newPassword === $newPasswordAgain) {
                //change password
                $root->changePassword($newPassword);
                $_SESSION["message"] = "Anda tel;ah mengganti password!";
                header("Location:index.php?form=X.01");
            }
            else
                $errorCode = "Konfirmasi password baru salah";
        }
        else
            $errorCode = "Password lama salah";

    }
}

include_once ("template/root.change.php");

?>