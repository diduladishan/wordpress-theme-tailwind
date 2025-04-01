<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body class="font-sans">
<nav class="bg-blue-600 fixed w-full top-10 shadow-md z-10">
        <div class="container mx-auto px-4 py-3 flex justify-between items-center">
            <a href="#home" class="text-white text-lg font-bold">MyWebsite</a>
            <ul class="flex space-x-6">
                <li><a href="#home" class="text-white hover:text-gray-200">Home</a></li>
                <li><a href="#menu" class="text-white hover:text-gray-200">Menu</a></li>
                <li><a href="#contact" class="text-white hover:text-gray-200">Contact</a></li>
                <li><a href="#service" class="text-white hover:text-gray-200">Services</a></li>
            </ul>
        </div>
    </nav>
