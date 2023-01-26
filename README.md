# Boilerplate

Components library for Boilerplate - Wordpress. Requirements for using the components are Tailwind and Advanced Custom Fields. 

## Content Sections
* [Navbar](./template-parts/global/global-header.php)
* [Hero](./template-parts/blocks/hero)
* [Form](./template-parts/blocks/form/form.php)
* [Image-blocks](.//template-parts/blocks/image)
* [Object-block](./)
* [Map-block](.//template-parts/blocks/maps.php)
* [Footer](./)

<!-- [I'm a relative reference to a repository file](../blob/master/LICENSE) -->

## Scripts & Information
* Watch and sync for file changes **npm run watch-sync**
* PHP version - 8.1.12 
* Use Laravel Valet to run site locally https://laravel.com/docs/9.x/valet
* Use Tailwind as CSS - in this project I used Tailpress that is a minimal boilerplate theme https://github.com/jeffreyvr/tailpress

## Instructions for Boilerplate
### Header
To change style and CSS - use [global-header](./template-parts/global/global-header.php) and modify it to your own.
### Form
To change style and CSS - use [custom.css](./resources/css/custom.css) and modify it to your own.
### Hero, Image, Maps 
These blocks are pre-made, you may add your own in [hero-directory](./template-parts/blocks/hero/) or choose between these blocks in Wordpress page. 

## 3 chosen obligated moments that are added in this project
- Lazyloading images, that are written in image-tag.
- Leaflet, API map. 
- Routing and nice url:er, with the help of PHP-files and ACF-blocks - routing through index-php: 
    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>
