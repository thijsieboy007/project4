<?php 
  session_start();
  $active = (isset($_GET["content"])) ? $_GET["content"] : "";
?>

<link rel="stylesheet" href="./css/navbar.css">

<div class="mynav">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#" id="logo">Buddy<span>Fat</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse maincontainer" id="navbarSupportedContent">
      <ul class="navbar-nav main">
        <li class="nav-item <?php echo (in_array($active, ["home", ""])) ? "active" : "" ?>">
          <a class="nav-link" href="index.php?content=home">Home</a>
        </li>
        <li class="nav-item <?php echo ($active == "food") ? "active" : "" ?>">
          <a class="nav-link" href="index.php?content=food">Recepten</a>
        </li>
        <li class="nav-item <?php echo ($active == "exercises") ? "active" : "" ?>">
          <a class="nav-link" href="index.php?content=exercises">Oefeningen</a>
        </li>
        <li class="nav-item <?php echo ($active == "contact") ? "active" : "" ?>">
          <a class="nav-link" href="index.php?content=contact">Contact</a>
        </li>
        <li class="nav-item <?php echo ($active == "faq") ? "active" : "" ?>">
          <a class="nav-link" href="index.php?content=faq">FAQ</a>
        </li>
      </ul>
      <ul class="navbar-nav mr-0 login">  
        <?php
        if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            case 'admin':
              echo '<li class="nav-item dropdown"> 
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["admin-page", "progressie"])) ? "active" : ""; echo '" href="#" id=navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Admin
                    </a>
                    <div class="dropdown-menu" aria-labelleby="navbarDropdownMenuLink">
                      <a class="dropdown-item '; echo ($active == "admin-page") ? ("active") : ""; echo '" href="./index.php?content=admin-page">Admin paneel</a>
                      <a class="dropdown-item '; echo ($active == "progressie") ? ("active") : ""; echo '" href="./index.php?content=progressie">Progressie</a>
                    </div>
                   </li>';
            break;
            case 'root':
              echo '<li class="nav-item dropdown"> 
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["r-home", "progressie"])) ? "active" : ""; echo '" href="#" id=navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Root
                    </a>
                    <div class="dropdown-menu" aria-labelleby="navbarDropdownMenuLink">
                      <a class="dropdown-item '; echo ($active == "admin-page") ? ("active") : ""; echo '" href="./index.php?content=admin-page">Admin paneel</a>
                      <a class="dropdown-item '; echo ($active == "r-home") ? ("active") : ""; echo '" href="./index.php?content=r-home">Root paneel</a>
                      <a class="dropdown-item '; echo ($active == "progressie") ? ("active") : ""; echo '" href="./index.php?content=progressie">Progressie</a>
                    </div>
                   </li>';
            break;
            case 'moderator':
              echo '<li class="nav-item dropdown"> 
                      <a class="nav-link dropdown-toggle '; echo (in_array($active, ["m-home", "progressie"])) ? "active" : ""; echo '" href="#" id=navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Moderator
                    </a>
                    <div class="dropdown-menu" aria-labelleby="navbarDropdownMenuLink">
                      <a class="dropdown-item '; echo ($active == "admin-page") ? ("active") : ""; echo '" href="./index.php?content=admin-page">Admin paneel</a>
                      <a class="dropdown-item '; echo ($active == "m-home") ? ("active") : ""; echo '" href="./index.php?content=m-home">Mod paneel</a>
                      <a class="dropdown-item '; echo ($active == "progressie") ? ("active") : ""; echo '" href="./index.php?content=progressie">Progressie</a>
                    </div>
                   </li>';
            break;
            case 'customer':
              echo '<li class="nav-item '; echo ($active == "progressie") ? "active" : ""; echo '">
              <a class="nav-link" href="index.php?content=progressie">Progressie</a>
                    </li>';
            break;
            default:
            break;
          }
          echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                <a class="nav-link" href="index.php?content=logout">Uitloggen</a>
                </li>';
        } else {
          echo '<li class="nav-item '; echo ($active == "signup") ? "active" : ""; echo '">
                <a class="nav-link" href="index.php?content=signup">Registreer</a> 
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">|</a>
                </li>
                <li class="nav-item '; echo ($active == "login") ? "active" : ""; echo '">
                <a class="nav-link" href="index.php?content=login">Login</a>
              </li>';
        }
        ?>
      </ul>
    </div>
  </nav>
</div>