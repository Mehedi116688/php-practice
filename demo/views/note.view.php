<?php require 'partials/head.php';?>
<?php require 'partials/nav.php';?>
<?php require 'partials/banner.php';?>
  


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <a class="text-blue-500 underline" href="/notes">
        Go Back ....
      </a>
      <p class="mt-6">
        <?= $note['title'] ?>
      </p>
    </div>
  </main>

<?php require 'partials/footer.php';?>
