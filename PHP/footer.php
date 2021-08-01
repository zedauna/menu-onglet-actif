<?php
  require_once'fonctions.php';
?><footer class="footer mt-auto py-3 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
      <span class="text-muted">Jeros VIGAN</span>
      </div>
      <div class="col-md-4">
        <ul class="list-unstyled">
          <?= onglet_active('loisirs.php','Loisirs')?>
        </ul>
      </div>
    </div>
  </div>
</footer>

  <!-- javascript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>

</body>

</html>