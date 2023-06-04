<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
 <!-- Head Section -->

<?php 
    include ('includes/head.php'); 
?>
 <link rel="stylesheet" href="./css/home.css">
 <link rel="stylesheet" href="./css/profil.css">
 <!-- End Head Section -->


<body>
  <!-- Nav Section -->
  <?php include ('includes/nav.php'); ?>
  <!-- End Nav Section -->

  <main class="pt-4 mt-5">
                <div class="container">
                    <div class="message">
                        <?php
                            include('includes/message.php');
                        ?>
                    </div>

                    
                    <?php
                        include('includes/db.php');


                        $q = 'SELECT num_mem, nom_mem, pren_mem, email, sex_mem, statut, num_tel, image FROM membres WHERE email = :email';
                        $req = $bdd->prepare($q);
                        $req->execute([
                                        'email' => $_SESSION['email']
                                    ]);

                        $result = $req->fetch(PDO::FETCH_ASSOC); 
                        ?>

                    
                        <h3>Image de profil</h3>
                      
                        <div class="main-profile">
                        <img src="uploads/<?= ($result['image'] ? $result['image'] : 'pp_neutre.jpg') ?>" alt="Image de profil">
                        </div>
                        
                        
                        <h3>Nom</h3>
                        <p><?= $result['nom_mem'] ?></p>	
                        
                        <h3>Prénom</h3>
                        <p><?= $result['pren_mem'] ?></p>
                        
                        <h3>Email</h3>
                        <p><?= $result['email'] ?></p>

                        <h3>Sexe</h3>
                        <p><?= ($result['sex_mem']=='M')?'<td>Masculin</td>' : '<td>Féminin</td>' ?></p>

                        <h3>Téléphone</h3>
                        <p><?= $result['num_tel'] ?></p>

                        <h3>Statut</h3>
                        <p><?= $result['statut'] ?></p>
                        <?php
                           echo '<a href="members_info_modif.php?id=' . $result['num_mem'] . '" class="btn btn-sm me-2 btn-primary">Modify</a>';
                    ?> 
                </div>
            </main>

  <!-- Footer Section -->

  <?php include ('includes/footer.php'); ?>
  
   <!-- End Footer Section -->

  <!-- aos script -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <!-- custom script -->
  <script src="./main.js"></script>
</body>

</html>