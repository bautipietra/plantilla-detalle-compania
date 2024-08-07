<?php
$companyName = 'Vtex';
$companyLogo = './assets/vtex_logo.png';
$companyBanner = './assets/vtex_cover.jpg';
$companyItem = 'Plataforma de comercio';
$companyDescription = "
VTEX permite a las marcas y a los minoristas lograr un time-to-market más rápido, llegar a sus clientes a través de cualquier canal y descubrir nuevas áreas de crecimiento.
Creemos que las marcas se merecen la libertad de hacer realidad su visión única y ofrecerla a los clientes a través de experiencias extraordinarias.
Nuestra moderna plataforma de comercio y nuestra profunda experiencia en el área liberan a las marcas de las limitaciones impuestas por los sistemas legados.
Las principales marcas mundiales, como Sony, Walmart, Whirlpool, Coca-Cola, Stanley Black & Decker y Nestlé, además de 3.400 tiendas online activas en 38 países, confían en VTEX para acelerar y transformar sus negocios de comercio.
";
$companyPhone = '+54 9 11 5439-0000';
$companyEmail = 'contacto@vtex.com';
$companyWebsite = 'https://www.vtex.com';
$companyFacebook = 'https://www.facebook.com/vtex';
$companyTwitter = 'https://twitter.com/vtex';
$companyInstagram = 'https://www.instagram.com/vtex';
$companyLinkedin = 'https://www.linkedin.com/company/vtex';
$companyPodcast = 'https://podcast.vtex.com';
$companyGallery = [
  [
    'path' => './assets/1.png',
    'href' => 'https://vtex.com'
  ],
  [
    'path' => './assets/2.png',
    'href' => 'https://vtex.com'
  ],
  [
    'path' => './assets/3.png',
    'href' => 'https://vtex.com'
  ],
  [
    'path' => './assets/4.png',
    'href' => 'https://vtex.com'
  ],
  [
    'path' => './assets/5.png',
    'href' => 'https://vtex.com'
  ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $companyName ?></title>
  <!-- Iconos -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <main>
    <!-- Hero -->
    <div>
      <!-- Banner -->
      <img class="banner" src="<?php echo $companyBanner ?>" alt="<php echo $companyName ?> banner">
      <a href="/red-de-aliados" class="back-button">
        <i class="bi bi-arrow-left-short"></i>
        Volver a Red de aliados
      </a>
      <!-- Logo and Company intro -->
      <div class="company-intro container">
        <img class="logo" src="<?php echo $companyLogo ?>" alt="<php echo $companyName ?> logo">
        <div>
          <h1><?php echo $companyName ?></h1>
          <span><?php echo $companyItem ?></span>
        </div>
      </div>
    </div>
    <div class="company-wrapper">
      <!-- Contact-->
      <div class="contact-container container">
        <div class="contact-sticky">
          <h2>Enlaces:</h2>
          <ul class="contact-list">
            <?php if (!empty($companyWebsite)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyWebsite); ?>" target="_blank">
                  <i class="bi bi-globe"></i>
                  <?php echo "Web"; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyEmail)) : ?>
              <li>
                <a href="mailto:<?php echo htmlspecialchars($companyEmail); ?>">
                  <i class="bi bi-envelope"></i>
                  <?php echo htmlspecialchars($companyEmail); ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyPhone)) : ?>
              <li>
                <a href="tel:<?php echo htmlspecialchars($companyPhone); ?>">
                  <i class="bi bi-telephone"></i>
                  <?php echo htmlspecialchars($companyPhone); ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyLinkedin)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyLinkedin); ?>" target="_blank">
                  <i class="bi bi-linkedin"></i>
                  <?php echo "Linkedin"; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyPodcast)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyPodcast); ?>" target="_blank">
                  <i class="bi bi-mic-fill"></i>
                  <?php echo "Podcast"; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyFacebook)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyFacebook); ?>" target="_blank">
                  <i class="bi bi-facebook"></i>
                  <?php echo "Facebook"; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyTwitter)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyTwitter); ?>" target="_blank">
                  <i class="bi bi-twitter-x"></i>
                  <?php echo "Twitter"; ?>
                </a>
              </li>
            <?php endif; ?>
            <?php if (!empty($companyInstagram)) : ?>
              <li>
                <a href="<?php echo htmlspecialchars($companyInstagram); ?>" target="_blank">
                  <i class="bi bi-instagram"></i>
                  <?php echo "Instagram"; ?>
                </a>
              </li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
      <div class="info-wrapper">
        <!-- About -->
        <div class="about-container container">
          <h2>Sobre <?php echo $companyName ?></h2>
          <p><?php echo $companyDescription ?></p>
        </div>
        <!-- Gallery -->
        <div class="gallery-container container">
          <?php foreach ($companyGallery as $e) : ?>
            <a href="<?php echo $e['href']; ?>" target="_blank" class="gallery-item">
              <img src="<?php echo $e['path']; ?>" class="gallery-image">
            </a>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </main>
  <!-- Color Thief from banner -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/color-thief/2.3.0/color-thief.umd.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const img = document.querySelector('.banner');
      const colorThief = new ColorThief();

      img.addEventListener('load', function() {
        // Obtén el color predominante
        const dominantColor = colorThief.getColor(img);
        const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

        // Define la variable CSS en :root
        document.documentElement.style.setProperty('--dominant-color', colorString);
      });

      // Si la imagen ya está cargada (por ejemplo, si no es la primera vez que se accede a la página)
      if (img.complete) {
        const dominantColor = colorThief.getColor(img);
        const colorString = `rgb(${dominantColor[0]}, ${dominantColor[1]}, ${dominantColor[2]})`;

        document.documentElement.style.setProperty('--dominant-color', colorString);
      }
    });
  </script>
</body>

</html>