# nn-wp
Integrating html into wordpress.
We need at list three files - 
- into the header.php file we place navigation menus and call wp_head() function, 
  which fills <head> tag and includes scripts and styles etc.
  
- into the single.php/page.php we output the content of the post or page by using the_content(), get_template_part() and other functions. 
  For creating custom menu we use function register_nav_menu() and then add menu items in the admin interface. 
  To display created menus we use function wp_nav_menu(). For displaying widgets we register sidebars with function register_sidebar().
  Apart from displaying the user editable content we can output different types of content 
  by using the wp_query class to loop through posts/post types.
  
- in the footer.php file we place html and php code for bottom part of the page and call the wp_footer.php function.

Example of a news site page - folder "newspaper page"




