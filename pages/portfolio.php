    <section id="fotogalerie" class="fotogalerie py-8">
      <div class="container">
        <div class="d-flex flex-row flex-wrap align-items-center gap-3 mb-5">
          <h1 class="me-5">Fotogalerie</h1>
          <div class="d-flex flex-row flex-wrap gap-3">
            <a href="?page=portfolio&filtr=nevesta" class="btn btn-primary btn-sm">nevěsta</a>
            <a href="?page=portfolio&filtr=maturantka" class="btn btn-primary btn-sm">maturantka</a>
            <a href="?page=portfolio&filtr=ucesy" class="btn btn-primary btn-sm">účesy</a>
            <a href="?page=portfolio&filtr=liceni" class="btn btn-primary btn-sm">líčení</a>
            <a href="?page=portfolio&filtr=ostatni" class="btn btn-primary btn-sm">ostatní</a>
          </div>
        </div>

        <?php
        $page = $_GET['filtr'] ?? 'nevesta';

        $filepath = "pages/portfolio/{$page}.html";

        if (file_exists($filepath)) {
          include $filepath;
        } else {
          echo "<p>Požadovaná stránka neexistuje.</p>";
        }
        ?>

      </div>
    </section>

    <script src="js/lightbox-plus-jquery.js"></script>