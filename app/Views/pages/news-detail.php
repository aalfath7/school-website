<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="ecommerce" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="https://dummyimage.com/400x400">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest"> <?= $news['author']; ?></h2>
        <h1 class="text-gray-900 text-3xl title-font font-medium mb-1"><?= $news['title']; ?></h1>
        <p class="leading-relaxed"><?= $news['content']; ?></p>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>