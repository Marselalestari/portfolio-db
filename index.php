<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Inisela</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
      integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <style>
      body {
        font-family: "Poppins", sans-serif;
      }
      .hidden-mobile {
        display: none;
      }
      .block-mobile {
        display: block;
      }
      section {
        padding-top: 4rem;
      }
      .active {
        background-color: white;
        color: red;
        padding: 5px 7px;
        border-radius: 5px;
      }
    </style>
  </head>
  <body class="h-screen text-gray-800">
    <!-- Navbar start -->
    <nav class="py-4 px-7 fixed w-full top-0 z-50 bg-red-500 text-white shadow">
      <div class="container mx-auto flex justify-between items-center">
        <div class="text-2xl font-bold">My Portfolio</div>
        <button id="menu-toggle" class="block lg:hidden text-white">
          <i class="fas fa-bars"></i>
        </button>
        <ul id="navbar" class="hidden lg:flex space-x-4 font-medium">
          <li><a href="#home" class="nav-link">Home</a></li>
          <li><a href="#about" class="nav-link">About Me</a></li>
          <li><a href="#certificate" class="nav-link">Certificate</a></li>
          <li><a href="#skills" class="nav-link">Skills</a></li>
          <li><a href="#project" class="nav-link">Project</a></li>
          <li><a href="#contacts" class="nav-link">Contacts</a></li>
        </ul>
        <div class="hidden lg:block">
          
        </div>
      </div>
      <ul id="mobile-menu" class="hidden-mobile bg-blue-500 text-white space-y-2 p-4 lg:hidden font-medium">
        <li><a href="#home" class="nav-link block hover:text-blue-500">Home</a></li>
        <li><a href="#about" class="nav-link block hover:text-blue-500">About Me</a></li>
        <li><a href="#certificate" class="nav-link block hover:text-blue-500">Certificate</a></li>
        <li><a href="#skills" class="nav-link block hover:text-blue-500">Skills</a></li>
        <li><a href="#project" class="nav-link block hover:text-blue-500">Project</a></li>
        <li><a href="#contacts" class="nav-link block hover:text-blue-500">Contacts</a></li>
      </ul>
    </nav>
    <!-- Navbar end -->

    <main class="px-1 lg:px-10">
      <!-- Home Section -->
      <section id="home" class="mx-auto py-5 lg:py-14 px-8 mt-16">
        <div class="lg:flex lg:flex-row-reverse lg:justify-center lg:items-center md:block">
          <div class="lg:w-2/5 flex justify-center mb-4 md:mb-8" data-aos="fade-left" data-aos-duration="2000">
            <img src="img/wby.jpg" alt="Profile Image" class="object-cover w-96" />
          </div>
          <div class="lg:w-3/5" data-aos="fade-right" data-aos-duration="2000">
            <h3 class="text-2xl lg:text-4xl font-semibold">Hello I'm </h3>
            <h1 class="text-3xl lg:text-5xl font-bold">Marsela Ajeng Lestari</h1>
            <h3 class="text-xl lg:text-3xl font-semibold">And I'm <span class="text-red-500" id="text"> Programmer </span></h3>
            <p class="text-base lg:text-lg mt-4">
              I study at SMK N 1 Sanden majoring in software engineering.
            </p>
            <div class="flex w-44 py-4 justify-between">
              <div class="flex space-x-4">
                <a href="https://www.youtube.com/@BelajarBersamaSela" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-red-500 hover:text-red-500 p-2">
                  <i class="fab fa-youtube fa-xl"></i>
                </a>
                <a href="https://www.instagram.com/thissellaa21?igsh=MWJ6enAwOWZhc3FrdA==https://www.instagram.com/thissellaa21?igsh=MWJ6enAwOWZhc3FrdA==" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-red-500 hover:text-red-500">
                  <i class="fab fa-instagram fa-xl"></i>
                </a>
                <a href="https://www.linkedin.com/in/marsela-ajeng-lestari-3194b8314?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=android_app" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-red-500 hover:text-red-500">
                  <i class="fab fa-linkedin fa-xl"></i>
                </a>
                <a href="https://www.tiktok.com/@gabutsella?_t=8pSOz9drRRZ&_r=1" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-red-500 hover:text-red-500">
                  <i class="fab fa-tiktok fa-xl"></i>
                </a>
                <a href="https://wa.me/qr/PK4GHYKTFRJAM1" class="flex items-center justify-center w-10 h-10 rounded-full border border-gray-300 hover:border-red-500 hover:text-red-500">
                  <i class="fab fa-whatsapp fa-xl"></i>
                </a>
              </div>
              
                
        
      </section>

      <!-- About Me Section -->
      <section id="about" class="py-4 lg:py-8 px-8">
        <div class="lg:flex lg:justify-center lg:items-center md:block">
          <div3 class="w-2/5 lg:block hidden" data-aos="fade-right" data-aos-duration="2000">
            <img src="img/sela.jpeg" alt="" class="object-cover w-96" />
          </div3>
          <div class="w-full lg:w-3/5" data-aos="fade-left" data-aos-duration="2000">
            <h2 class="text-3xl font-bold mb-4 text-center lg:text-left">About <span class="text-red-500">Me</span></h2>
            <h3 class="text-xl lg:text-3xl font-semibold"> </h3>
            <p class="text-base lg:text-lg mt-2">
              Hello, let me introduce myself, my name is Marsela Ajeng Lestari, often called Sela. I am an eleventh grade student at SMK N 1 Sanden majoring in software engineering. I like learning coding because coding is an expensive and beautiful art.

            </p>
          </div>
        </div>
      </section>
      <!-- About Me Section end-->

      <!-- Certificate Section -->
      <section id="certificate" class="py-4 lg:py-8">
        <div class="mx-auto lg:p-8">
          <h2 class="text-3xl text-center font-bold mb-6">My Certificate</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 px-7 lg:px-0" data-aos="fade-up" data-aos-duration="2000">
            <img src="img/serti01.jpeg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />
            <img src="img/serti02.jpg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />
            <img src="img/serti03.jpeg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />
            <img src="img/serti04.jpeg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />
            <img src="img/serti05.jpeg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />
            <img src="img/serti06.jpeg" alt="" class="transform hover:scale-105 transition duration-300 ease-in-out" />            
          </div>
        </div>
      </section>
      <!-- Certificate Section end-->

      <!-- Skills Section -->
      <section id="skills" class="mx-auto p-8">
        <h2 class="text-3xl text-center font-bold mb-6">Skills</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-x-4 px-7 lg:px-0 gap-y-6" data-aos="fade-up" data-aos-duration="2000">
          <img src="img/laravel.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/html.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/js.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/php.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/mysql.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/tailwind.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/css.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/bootstrap.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
          <img src="img/flutter.png" alt="" class="w-full transform hover:scale-105 transition duration-300 ease-in-out" />
        </div>
      </section>
      <!-- Skills Section end-->

      <!-- Projects Section -->
      <section id="project" class="py-8">
        <div class="mx-auto p-8">
          <h2 class="text-3xl text-center font-bold mb-6">Project</h2>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-8" data-aos="fade-up" data-aos-duration="2000">
            <!-- Project Card -->
            <div class="bg-white shadow-md rounded-md overflow-hidden border border-red-500">
              <img src="img/game.png" alt="Project Image" class="w-full h-44 object-cover object-center p-2" />
              <div class="p-4 bg-red-500 text-white">
                <h3 class="text-xl font-semibold mb-2">bird games</h3>
                <p class="mb-4">Bird game created with scratch software in tenth grade. Playing this game is very fun because the game can go up and down through buildings</p>
                <button class="bg-white text-red-500 py-2 px-4 rounded-md font-semibold">Read More</button>
              </div>
            </div>
            <div class="bg-white shadow-md rounded-md overflow-hidden border border-red-500">
              <img src="img/web.png" alt="Project Image" class="w-full h-44 object-cover object-center p-2" />
              <div class="p-4 bg-red-500 text-white">
                <h3 class="text-xl font-semibold mb-2">Website Certificate</h3>
                <p class="mb-4">This website is a simple tenth grade website </p>
                <button class="bg-white text-red-500 py-2 px-4 rounded-md font-semibold">Read More</button>
              </div>
            </div>
            <div class="bg-white shadow-md rounded-md overflow-hidden border border-red-500">
              <img src="img/puzzle.jpeg" alt="Project Image" class="w-full h-44 object-cover object-center p-2" />
              <div class="p-4 bg-red-500 text-white">
                <h3 class="text-xl font-semibold mb-2">puzzle games</h3>
                <p class="mb-4">just like the brung game, this game is also made with scratch. This game is very fun because we can sharpen our brains by arranging puzzles. </p>
                <button class="bg-white text-red-500 py-2 px-4 rounded-md font-semibold">Read More</button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Projects Section end -->

      <!-- Contacts Section -->

      <section id="contacts" class="mx-auto p-8">
        <h2 class="text-3xl text-center font-bold mb-6">Contacts</h2>

        <form action="#" method="POST" class="mt-8 lg:px-20">
          <div class="flex flex-wrap -mx-3 mb-4" data-aos="fade-up" data-aos-duration="2000">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <input type="text" id="name" name="name" placeholder="Your Name" class="mt-1 block w-full shadow-sm sm:text-sm p-3 rounded-md border border-red-500" />
            </div>
            <div class="w-full md:w-1/2 px-3">
              <input type="email" id="email" name="email" placeholder="Your Email" class="mt-1 focus:border-red-500 block w-full shadow-sm sm:text-sm p-3 rounded-md border border-red-500" />
            </div>
          </div>
          <div class="flex flex-wrap -mx-3 mb-4">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
              <input type="number" id="phone" name="phone" placeholder="Your Phone Number" class="mt-1 block w-full shadow-sm sm:text-sm p-3 rounded-md border border-red-500" />
            </div>
            <div class="w-full md:w-1/2 px-3">
              <input type="text" id="subject" name="subject" placeholder="Email Subject" class="mt-1 block w-full shadow-sm sm:text-sm p-3 rounded-md border border-red-500" />
            </div>
          </div>
          <div class="mb-4" data-aos="fade-up" data-aos-duration="2000">
            <textarea id="message" name="message" rows="7" placeholder="Your Message" class="mt-1 block w-full shadow-sm sm:text-sm p-3 rounded-md border border-red-500"></textarea>
          </div>
          <div class="flex justify-center" data-aos="fade-up" data-aos-duration="2000">
            <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-base font-medium rounded-md text-white bg-red-600">Send Message</button>
          </div>
        </form>
      </section> 
      <?php
      // Koneksi ke database
      $servername = "localhost";
      $username = "root";  // Ganti dengan username MySQL Anda
      $password = "";      // Ganti dengan password MySQL Anda
      $dbname = "biodata_db";  // Pastikan Anda menggunakan database yang benar
      
      $conn = new mysqli($servername, $username, $password, $dbname);
      
      // Periksa koneksi
      if ($conn->connect_error) {
          die("Koneksi gagal: " . $conn->connect_error);
      }
      
      // Memeriksa apakah data dikirimkan melalui metode POST
      if ($_SERVER["REQUEST_METHOD"] == "POST") {
          // Menangkap data formulir
          $name = $_POST['name'];
          $email = $_POST['email'];
          $phone = $_POST['phone'];
          $subject = $_POST['subject'];
          $message = $_POST['message'];
      
          // Menghindari SQL Injection dengan menggunakan prepared statements
          $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
          $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);
      
          // Menjalankan query
          if ($stmt->execute()) {
              echo "Pesan Anda telah berhasil dikirim!";
          } else {
              echo "Terjadi kesalahan: " . $conn->error;
          }
      
          // Menutup statement dan koneksi
          $stmt->close();
          $conn->close();
      }
      ?>

      
      <?php
// Koneksi ke database
$servername = "localhost";
$username = "root";  // Ganti dengan username MySQL Anda
$password = "";      // Ganti dengan password MySQL Anda
$dbname = "biodata_db";  // Pastikan Anda menggunakan database yang benar

$conn = new mysqli($servername, $username, $password, $dbname);

// Periksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Memeriksa apakah data dikirimkan melalui metode POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Menangkap data formulir
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // Menghindari SQL Injection dengan menggunakan prepared statements
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, phone, subject, message) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $phone, $subject, $message);

    // Menjalankan query
    if ($stmt->execute()) {
        echo "Pesan Anda telah berhasil dikirim!";
    } else {
        echo "Terjadi kesalahan: " . $conn->error;
    }

    // Menutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>

      <!-- Contacts Section end -->
    </main>
    <!-- Footer -->
    <footer class="bg-red-500 text-white py-4">
      <div class="mx-auto text-center">&copy; 2024 My Portfolio. MarselaAjengLestari.</div>
    </footer>

    <script src="main.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
