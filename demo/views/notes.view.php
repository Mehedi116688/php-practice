<?php require 'partials/head.php';?>
<?php require 'partials/nav.php';?>
<?php require 'partials/banner.php';?>
  


  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <?php foreach ($notes as $note):?>
        <li>
          <a class="text-blue-500 hover:underline" href="/note?id= <?= $note['id'] ?>">
            <?= $note['title'] ?>
          </a>
        </li>
      <?php endforeach; ?>

      <p class="mt-6">
        <a class="text-blue-500 hover:underline" href="/notes/create">Create Note</a>
      </p>
    </div>
  </main>

<?php require 'partials/footer.php';?>
