# Boilerplate

Components library for Boilerplate. Requirements for using the components are Tailwind and Advanced Custom Fields. 

## Content Sections
* [Navbar](./template-parts/global/global-header.php)
* [Hero](./template-parts/blocks/hero)
* [Form](./template-parts/blocks/form/form.php)
* [Image-blocks](.//template-parts/blocks/image)
* [Object-block](./)
* [Map-block](.//template-parts/blocks/maps.php)
* [Footer](./)

<!-- [I'm a relative reference to a repository file](../blob/master/LICENSE) -->

## Scripts 
Watch and sync for file changes
**npm run watch-sync**


## Instructions for Boilerplate
### Header
To change style and CSS - use [global-header](./template-parts/global/global-header.php) and modify it to your own.
### Form
To change style and CSS - use [custom.css](./resources/css/custom.css) and modify it to your own.
### Hero, Image, Maps 
These blocks are pre-made, you may add your own in [hero-directory](./template-parts/blocks/hero/) or choose between these blocks in Wordpress page. 


<!-- Beroenden, krav, begränsningar och mål plattformar (till ex. lägsta webbläsarversioner, PHP version, webbserver krav etc. -->

## 3 chosen obligated moments that are added in this project
- Lazyloading images, that are written in image-tag.
- Leaflet, API map. 
- Routing och snygga url:er, med hjälp av PHP filerna och ACF-blocks har jag kopplat all routing till index.php genom 
    <?php get_template_part( 'template-parts/content', get_post_format() ); ?>

