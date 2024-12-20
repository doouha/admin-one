      <?php
    include 'C:/xampp/htdocs/projet web/controller/reclamation_qC.php';

      
    $reclamationC = new ReclamationC($con);
     $reclamations = $reclamationC->readReclamations();
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Gestion des Réclamations - Admin One</title>

  
  <link rel="stylesheet" href="css/main.css?v=1628755089081">
</head>
<body>

<div id="app">
  
  <nav id="navbar-main" class="navbar is-fixed-top">
  
    <div class="navbar-brand">
      <a class="navbar-item mobile-aside-button">
        <span class="icon"><i class="mdi mdi-forwardburger mdi-24px"></i></span>
      </a>
    </div>
  </nav>

  
  <aside class="aside is-placed-left is-expanded">
    <div class="aside-tools">
      <div>Admin <b class="font-black">One</b></div>
    </div>
    <div class="menu is-menu-main">
      <p class="menu-label">Général</p>
      <ul class="menu-list">
        <li class="--set-active-index-html">
          <a href="index.html">
            <span class="icon"><i class="mdi mdi-desktop-mac"></i></span>
            <span class="menu-item-label">Dashboard</span>
          </a>
        </li>
      </ul>
      <p class="menu-label">Gestion</p>
      <ul class="menu-list">
        <li>
          <a href="user.html">
            <span class="icon"><i class="mdi mdi-table"></i></span>
            <span class="menu-item-label">Gestion des Utilisateurs</span>
          </a>
        </li>
        <li>
          <a href="produit.html">
            <span class="icon"><i class="mdi mdi-square-edit-outline"></i></span>
            <span class="menu-item-label">Gestion des Produits</span>
          </a>
        </li>
        <li>
          <a href="reclamation.back.html">
            <span class="icon"><i class="mdi mdi-lock"></i></span>
            <span class="menu-item-label">Gestion des Réclamations</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>

  
  <section class="section main-section">
    <div class="card mb-6">
      <header class="card-header">
        <p class="card-header-title">
          <span class="icon"><i class="mdi mdi-ballot"></i></span>
          Contact Manager
        </p>
      
      <div class="card-content">
          <div class="table-container" align="center">
              <table class="table is-bordered is-striped is-fullwidth" cellpadding="10">
                  <caption>Tableau de Gestion des Réclamations</caption>
                  <tr>
                      <th>ID Réclamation</th>
                      <th>ID Client</th>
                      <th>Description</th>
                      <th>Date</th>
                  </tr>
      
                  <?php
                 foreach ($reclamations as $reclamation) {
                  echo "<tr>";
                  echo "<td>" . htmlspecialchars($reclamation['id_reclamation']) . "</td>";
                  echo "<td>" . htmlspecialchars($reclamation['id_client']) . "</td>";
                  echo "<td>" . htmlspecialchars($reclamation['contenue']) . "</td>";
                  echo "<td>" . htmlspecialchars($reclamation['date']) . "</td>";
                  echo "</tr>";
              }
              
                  ?>
              </table>
          </div>
      </div>
      

</body>
</html>
