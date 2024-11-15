<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div>
    <div
    class="hero min-h-screen"
    style="background-image: url('/images/8989201_4027732.jpg');">
        <div class="hero-overlay bg-white bg-opacity-30"></div>
        <div class="hero-content text-center">
            <div class="max-w-lg">
            <h1 class="mb-5 text-5xl font-bold">Welcome To Schoola</h1>
            <p class="mb-5">
            <b>Schoola</b> is an innovative application designed to showcase schools in an engaging and informative way.
            </p>
            <button class="btn btn-primary">Get Started</button>
            </div>
        </div>
    </div>

    <section class="text-gray-600 body-font">
        <div class="container mx-auto flex py-24 md:flex-row flex-col items-center">
            <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 mb-10 md:mb-0">
            <img class="object-cover object-center rounded" alt="hero" src="https://dummyimage.com/720x600">
            </div>
            <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
            <h2 class="title-font sm:text-4xl text-3xl mb-4 text-gray-900">About <b>Schoola</b></h2>
            <p class="mb-8 leading-relaxed">This app offers a variety of features, including detailed school profiles, the latest news, event calendars, and an online student enrollment system. With a user-friendly interface and modern design, <b>Schoola</b> makes it easy for students, parents, and the public to explore and connect with schools while enjoying a seamless and interactive digital experience.</p>
            <div class="flex justify-center">
                <button class="inline-flex text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">About</button>
                <button class="ml-4 inline-flex text-gray-700 bg-gray-100 border-0 py-2 px-6 focus:outline-none hover:bg-gray-200 rounded text-lg">News</button>
            </div>
            </div>
        </div>
    </section>
</div>

<?= $this->endSection(); ?>