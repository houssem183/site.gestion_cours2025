<?php
require_once("../fragments_pages/header.php");
require_once("../fragments_pages/navbar.php");

require_once("../dbconnect.php");
?>

<?php
$sql = "select * from formateurs";
$stmt = $pdo->prepare($sql);
$stmt->execute();
$formateurs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>




  <main class="main">

    <!-- Page Title -->
    <div class="page-title" data-aos="fade">
      <div class="heading">
        <div class="container">
          <div class="row d-flex justify-content-center text-center">
            <div class="col-lg-10">
              <h1>Formateurs</h1>
              <p class="mb-0"> Chez gestion des cours , nos formateurs sont au cœur de notre programme éducatif, apportant avec eux une richesse d'expertise et de passion pour l'enseignement. Chacun de nos formateurs possède des années d'expérience dans leur domaine respectif et s'engage à transmettre leurs connaissances de manière claire et accessible. Leur approche pédagogique est centrée sur l'apprenant, avec une attention particulière portée à l'adaptation des cours en fonction des besoins individuels des étudiants. Grâce à leur soutien et à leur dévouement, nos étudiants acquièrent non seulement des compétences techniques, mais également la confiance nécessaire pour exceller dans leurs futurs projets professionnels. Rejoignez nos cours et bénéficiez de l'accompagnement de formateurs exceptionnels, prêts à vous aider à atteindre vos objectifs académiques et professionnels.</p>
            </div>
          </div>
        </div>
      </div>
      <nav class="breadcrumbs">
        <div class="container">
          <ol>
            <li><a href="../index.php">Acceuil</a></li>
            <li class="current">Formateurs</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Page Title -->

    <!-- Trainers Section -->
    <section id="trainers" class="section trainers">

      <div class="container">

        <div class="row gy-5">

        <?php
      $count = 0; // Compteur pour suivre le nombre de cours affichés
      foreach ($formateurs as $le_le_formateur): ?>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
            <div class="member-img">
              <img src="../assets/img/team/team-1.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Walter White</h4>
              <span>Business</span>
              <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
            </div>
          </div><!-- End Team Member -->
          <?php endforeach;?>
<!--
          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
            <div class="member-img">
              <img src="../assets/img/team/team-2.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Sarah Jhonson</h4>
              <span>Marketing</span>
              <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
            <div class="member-img">
              <img src="../assets/img/team/team-3.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>William Anderson</h4>
              <span>Maths</span>
              <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
            <div class="member-img">
              <img src="../assets/img/team/team-4.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Amanda Jepson</h4>
              <span>Foreign Languages</span>
              <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
            <div class="member-img">
              <img src="../assets/img/team/team-5.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Brian Doe</h4>
              <span>Web Development<br></span>
              <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
            <div class="member-img">
              <img src="../assets/img/team/team-6.jpg" class="img-fluid" alt="">
              <div class="social">
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
              </div>
            </div>
            <div class="member-info text-center">
              <h4>Josepha Palas</h4>
              <span>Business</span>
              <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
            </div>
          </div> -->

        </div>

      </div>

    </section>

  </main>

  

 
<?php
require_once("../fragments_pages/footer.php");
?>