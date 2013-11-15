excerpt
=======

Creating an excerpt plug-in that does the basic function of the_excerpt() for WordPress and adds an image from the theme's img folder.

This is based off the excerpt plug-in written by Jake Rocheleau at http://www.hongkiat.com/blog/beginners-guide-to-wordpress-plugin-development/.

How to use this plugin
-------------
1. After installing the plugin first upload the photo you want displayed with your posts to your templates img or image folder. 
2. Edit the img_excerpt.php file and replace src="%s/img/house.png" with the file extension for your image.
3. In your theme replace in php file that displays your content the function that displays your content with 

 <?php echo afs_trim_content(55); // display page content limited at 55 chars ?>
 
Most themes this is index.php. However in Placester's Tampa theme the function was located in loop-entries.ph

