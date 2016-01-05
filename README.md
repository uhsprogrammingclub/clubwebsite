ORIGINAL README from Presidents of Software Development Club 
------------------------------
# Building a Website for UHS Devopment Club

Construct a website to serve as a platform to post, upload, and try out ideas.

Ensure all changes function properly in Google Chrome and Firefox at a minimum before committing changes. If you want something to be made live immedietly, commit your changes and then email me at nathaniel.corley@sfuhs.org and I will complete the FTP.

Design will be created using Bootstrap framework; any back-end that exists will use (probably) PHP or Node.js if we're feeling adventurous. Feel free to add any stylist flourishes you see fit, but make sure they don't break anything existing. That would make us unhappy.

## Github Basics

You should learn the basics of pulling, cloning, and committing to Github. If you want to learn in the command-line, check out [this](https://www.youtube.com/watch?v=E8TXME3bzNs). Don't worry about creating repositories and such; mainly the pulling and committing are what we care about. If you want to work through a GUI, like I do, I'd recommend a client such as [this](https://desktop.github.com/). If you're running an incompatible operating system, do some googling, since I'm sure a client exists somewhere. [This](https://www.youtube.com/watch?v=E8TXME3bzNs) video also explains some about Github with a GUI. 

## Design

There are several pages that need to be made. If you see a page is not yet created, feel free to make it in whatever style you choose. 

  * index.html (the landing page). Basic information about the club. What we do, etc.
  * information.html (found in the navigation bar). Information regarding where we meet, when we meet, etc.
  * projects.html (found in the navigation bar). Here we will post any projects that we make. For instance, the Chess AI will be posted here once we complete it.
  * contact.html (found in the navigation bar). A general contact form, which submits via some mail server to our email. 

Feel free to add more items to this list as you see fit.

> Presidents of Software Development Club 

------------------------------
##Some Notes on This Branch
- To get the structure for the MySQL database go to sql_import.sql found in the sql_imports folder.
- Most pages are displayed with the function “render” in includes/functions.php. Pages in the public folder call render and pass a template (which must exist in the template folder) to be rendered. 

##Credits
- Most of the code in the includes folder comes from Harvard's Computer Science 50 - [Problem Set 7](http://cdn.cs50.net/2015/x/psets/7/pset7/pset7.html).
- I used [my own website](http://lernerone.com) as the foundation of this website when I started. I built my site right before I started on this website.
- Some CSS was taken directly from [sfuhs.org](http://www.sfuhs.org). See the CSS from sfuhs.org in the custom_css.css file in public/css.
- I used this [navbar style generator](http://work.smarchal.com/twbscolor/css/e74c3cc0392becf0f1ffbbbc0) to stylize the navbar. See the code in the custom_css.css file in public/css.

> Joseph Lerner
------------------------------
