<?php

    if(isset($_SESSION['username'])) {
        $loginuser = $_SESSION['username'];
        $loginpassword = $_SESSION['password'];
    }
    else {        
        $loginuser = $_POST['username'];
        $loginpassword = $_POST['password'];
        $_SESSION['username'] = $loginuser;
        $_SESSION['password'] = $loginpassword;
    } 
    
    $validity = "";
    $userscol = $db->users;
    $chkvaliduser = $userscol->find(['username' => $loginuser, 'password' => $loginpassword]);
    
    foreach ($chkvaliduser as $usrrslt) {  
        if ($usrrslt['username'] == $loginuser && $usrrslt['password'] == $loginpassword){
            $validity = "valid";
            if(isset($usrrslt['adminstatus'])){ $adminstatus = $usrrslt['adminstatus']; }
            else { $adminstatus = "no"; }
        }
    }
    
    echo "
        <table class='titlebar' align='center' cellspacing='0px'><tr>
            <td></td><td class='titleimage' width='75px'><img src='ournoteorganizericon.png' height='45px'></td>
            <td width='120px' class='title'><a href='noteshome.php' class='titlelink'>HOME</a></td>
            <td width='150px' class='title'><a href='newpost.php' class='titlelink'>NEW POST</a></td>";
    //only show the user management pages if the user is an admin
    if ($adminstatus == "yes" ) { echo "<td width='150px' class='title'><a href='usermanagement.php' class='titlelink'>USERS</a></td>"; }
    else { echo "<td></td>"; }
    
    echo "<td></td><td></td><td></td><td></td>
            <td width='200px' class='title usrname'>Welcome: $loginuser
            <div class='logoutdropdown'>
            <a href='changepwd.php' class='titlelink dropdownlink'>CHANGE PASSWORD</a><br>
            ----------------------------<br>
            <a href='index.php' class='titlelink dropdownlink'>LOG OUT</a>
            </div></td>
            <td></td>
        </tr></table>
        <table class='bodypadding' width='80%' align='center' border='0' cellpadding='0'>
        <tr><td colspan='4'>";
      
?>
