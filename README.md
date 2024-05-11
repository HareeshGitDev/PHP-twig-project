# PHP-twig-project repo contains :
  - *project zip file called "twig_project.zip"*
  - *project file video record*
  - *source php file*

# step-by-step instructions for installing and running a PHP Twig project:
  -  *XAMPP installed on my system.*
  -  *Composer installed on your system.*

# Install Twig :
  - Open a terminal or command prompt.
  - Navigate to your project directory using the cd command.
  - Run the following command to install Twig using Composer.
  - (*composer require "twig/twig:^3.0"*)


*Once PHP Twig is successfully installed, I created a project folder called "twig". Then, I moved the Twig vendor folder and the admin-db folder into the Twig folder. After that, I relocated the Twig folder into xampp/htdocs so that XAMPP can run our project by accessing  from the browser.*

*I created a PHP file inside the Twig folder as ind.php, where I loaded the Twig vendor folder. Then I read JSON data and stored it in a PHP variable. Afterward, I loaded the template.html view page with JSON data.*

*To check ind.php, Go to twig_project.zip Extract -> twig\ind.php*

*To check template.html, Go to twig_project.zip Extract -> twig\admin-db\template.html*

In the template.html view page, I utilized Twig to load JSON data using Twig's for loop and if conditions.

*finally type "http://localhost/twig/ind.php" this url on browser*
