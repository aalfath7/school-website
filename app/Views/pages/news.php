<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<section class="text-gray-600 body-font overflow-hidden">
  <div class="container px-5 mx-auto">
    <?php foreach($news as $item) : ?>
      <div class="divide-y-2 divide-gray-100 border-b">
        <div class="py-8 flex flex-wrap md:flex-nowrap">
          <div class="md:w-64 md:mb-0 mb-6 flex-shrink-0 flex flex-col">
            <span class="font-semibold title-font text-gray-700"><?= $item['author']; ?></span>
            <span class="mt-1 text-gray-500 text-sm">12 Jun 2019</span>
          </div>
          <div class="md:flex-grow">
            <a href="/news/<?= $item['slug'] ?>">
              <h2 class="text-2xl font-medium text-gray-900 title-font mb-2 hover:underline"><?= $item['title']; ?></h2>
            </a>
            <p class="leading-relaxed line-clamp-3"><?= $item['content']; ?></p>
            <a href="/news/<?= $item['slug'] ?>" class="text-indigo-500 inline-flex items-center mt-4 hover:bg-gray-100 px-3 py-2 rounded-lg">Detail
              <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                <path d="M5 12h14"></path>
                <path d="M12 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>

<?= $this->endSection(); ?>