<?php get_header(); ?>

<section id="home"> <div class="hero-slider" data-carousel>
    <div class="carousel-cell" style="background-image:url(<?php echo esc_url(get_template_directory_uri() . '/image1.jpg'); ?>);">
        <div class="overlay"></div>
        <div class="inner">
            <h3 class="subtitle">Slide 1</h3>
            <h2 class="title">Flickity Parallax</h2>
            <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
        </div>
    </div>
    <div class="carousel-cell" style="background-image:url(<?php echo esc_url(get_template_directory_uri() . '/image2.jpg'); ?>);">
        <div class="overlay"></div>
        <div class="inner">
            <h3 class="subtitle">Slide 2</h3>
            <h2 class="title">Flickity Parallax</h2>
            <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
        </div>
    </div>
    <div class="carousel-cell" style="background-image:url(<?php echo esc_url(get_template_directory_uri() . '/image3.jpg'); ?>);">
        <div class="overlay"></div>
        <div class="inner">
            <h3 class="subtitle">Slide 3</h3>
            <h2 class="title">Flickity Parallax</h2>
            <a href="https://flickity.metafizzy.co/" target="_blank" class="btn">Tell me more</a>
        </div>
    </div>
</div></section>

<section id="menu" class="h-screen flex items-center justify-center bg-gray-200">
    <h1 class="text-3xl font-bold">Our Menu</h1>
</section>
<section id="contact" class="h-screen flex items-center justify-center bg-gray-300">
    <h1 class="text-3xl font-bold">Contact Us</h1>
</section>
<section id="service" class="h-screen flex items-center justify-center bg-gray-400">
    <div> <h1 class="text-3xl font-bold">Our Services</h1>
    <p class="text-md bg-[#164]">This is the test paragrapgh </p></div>
    
</section>



<?php get_footer(); ?>
