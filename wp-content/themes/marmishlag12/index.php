<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body>
<?php get_header(); ?>
<div class="h-screen flex items-center justify-center bg-white">

  <div class="grid grid-cols-12 px-18 gap-5">

    <div class="col-span-12">
        <p class="text-gray-800 text-3xl font-semibold">Marmishlaggggg</p>
    </div>

    <!-- Card 1 -->
    <a class="col-span-3 bg-rose-700 rounded-xl h-52 md:h-80" href="">

        <!-- Image -->
        <img src="https://a0.muscache.com/im/pictures/a433b4d0-8183-4523-b4c5-99b81c5729c1.jpg?im_w=320" class="rounded-t-xl max-h-44" />

        <!-- City Name -->
        <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Lorem Ipsum </p>

        <!-- Distance -->
        <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-10"> Lorem ipsum </p>

    </a>

    <!-- Card 2 -->
    <a class="col-span-3 bg-red-500 rounded-xl h-52 md:h-80" href="">

        <!-- Image -->
        <img src="https://a0.muscache.com/im/pictures/db8167f7-5c57-4684-80ae-4350c73e45ef.jpg?im_w=320" class="rounded-t-xl max-h-44" />

        <!-- City Name -->
        <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Lorem Ipsum </p>

        <!-- Distance -->
        <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-10"> Lorem ipsum </p>

    </a>

    <!-- Card 3 -->
    <a class="col-span-3 bg-pink-700 rounded-xl h-52 md:h-80" href="">

        <!-- Image -->
        <img src="https://a0.muscache.com/im/pictures/ffde0c4b-1889-4d11-bb00-41411d34fdfc.jpg?im_w=320" class="rounded-t-xl max-h-44" />

        <!-- City Name -->
        <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Lorem Ipsum </p>

        <!-- Distance -->
        <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-10"> Lorem ipsum </p>

    </a>

    <!-- Card 4 -->
    <a class="col-span-3 bg-rose-600 rounded-xl h-52 md:h-80" href="">

        <!-- Image -->
        <img src="https://a0.muscache.com/im/pictures/03bb6d0a-5ccb-47e1-83fc-b7ad87e7f8c3.jpg?im_w=320" class="rounded-t-xl max-h-44" />

        <!-- City Name -->
        <p class="text-xl md:text-3xl text-gray-50 pt-5 pl-3"> Lorem Ipsum </p>

        <!-- Distance -->
        <p class="text-xs md:text-lg font-light text-gray-50 pt-3 pl-3 pb-10"> Lorem ipsum </p>

    </a>

  </div>

</div>

<!-- component -->
<div tabindex="0" class="focus:outline-none">
            <!-- Remove py-8 -->
            <div class="mx-auto container py-8">
                <div class="flex flex-wrap items-center lg:justify-between justify-center">
                    <!-- Cards -->
                    <?php if(have_posts()) : ?>
                        <?php while(have_posts()) : the_post(); ?>
                            <div tabindex="0" class="focus:outline-none mx-2 w-72 xl:mb-0 mb-8">
                                <div>
                                    <img alt="person capturing an image" src="<?php the_post_thumbnail_url() ?>" tabindex="0" class="focus:outline-none w-full h-44" />
                                </div>
                                <div class="bg-white">
                                    <div class="flex items-center justify-between px-4 pt-4">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" tabindex="0" class="focus:outline-none" width="20" height="20" viewBox="0 0 24 24" stroke-width="1.5" stroke="#2c3e50" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M9 4h6a2 2 0 0 1 2 2v14l-5-3l-5 3v-14a2 2 0 0 1 2 -2"></path>
                                            </svg>
                                        </div>
                                        <div class="bg-yellow-200 py-1.5 px-6 rounded-full">
                                            <p tabindex="0" class="focus:outline-none text-xs text-yellow-700">Featured</p>
                                        </div>
                                    </div>
                                    <div class="p-4">
                                        <div class="flex items-center">
                                            <h2 tabindex="0" class="focus:outline-none text-lg font-semibold"><?php the_title() ?></h2>
                                            <p tabindex="0" class="focus:outline-none text-xs text-gray-600 pl-5"><?php the_time( get_option( 'date_format' ) ); ?></p>
                                        </div>
                                        <p tabindex="0" class="focus:outline-none text-xs text-gray-600 mt-2"><?php the_excerpt() ?></p>
                                        <div class="flex mt-4">
                                            <div>
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">12 months warranty</p>
                                            </div>
                                            <div class="pl-2">
                                                <p tabindex="0" class="focus:outline-none text-xs text-gray-600 px-2 bg-gray-200 py-1">Complete box</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between py-4">
                                            <a href="<?php the_permalink() ?>" tabindex="0" class="focus:outline-none text-indigo-700 text-xs font-semibold">Lire plus</a>
                                            <h3 tabindex="0" class="focus:outline-none text-indigo-700 text-xl font-semibold"></h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Card 1 Ends -->
                        <?php endwhile ?>
                    <?php else : ?>
                        <h2>Pas de posts</h2>
                    <?php endif ?>
                </div>
            </div>
        </div>
            <!--- more free and premium Tailwind CSS components at https://tailwinduikit.com/ --->
    </div>
</div>

<?php get_footer(); ?>
<?php wp_footer(); ?>
</body>
</html>