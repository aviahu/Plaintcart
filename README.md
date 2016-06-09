PHP Lab1
===========


##### What is PHP

  - Server Scripting Programming Language
  - Powerful tool for building dynamic and active through Web pages.
  - Widely prevalent.
  -It is completely free .

##### PHP File

- It can contain plain text , HTML, CSS, JavaScript and PHP code
- The PHP files are running on the server (Server) , and the result thereof is returned to the web browser (Browser) as plain HTML text .
- Suffix .php files

##### Why PHP ;

- You can run on a variety of platforms (Linux, Unix, Windows, Mac OS X etc.)
- It is compatible with most types of servers (Servers) used today (Apache, IIS, etc.)
- Supports a wide range of databases
- Easy to Learn

##### Setup PHP

- Install Xampp (https://www.apachefriends.org/index.html)
- We start the Apache and MySQL (Tip quit Skype)
- Access to http: // localhost /


> 
If you do not run the Apache change the door skype.


Examples #

 Display text in the body of the page using PHP



```php
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "My first PHP script!";
        ?>
    </body>
</html> 
```

definition of variables



```php
<?php
    $txt = "Hello world!";
    $x = 5;
    $y = 10.5;
?>
```

Show Text



```php
<?php
    echo "<h2>PHP is Fun!</h2>";
    echo "Hello world!<br>";
    echo "I'm about to learn PHP!<br>";
    echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 
```
Show Variables



```php
<?php
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;

    echo "<h2>$txt1</h2>";
    echo "Study PHP at $txt2<br>";
    echo $x + $y;
?> 
```

Test conditions

```php
<?php
    $t = date("H");

    if ($t < "20") {
        echo "Have a good day!";
    } else {
        echo "Have a good night!";
    }
?>  
```

Repetition structure
```php
<?php
    $x = 1;

    while($x <= 5) {
        echo "The number is: $x <br>";
        $x++;
    }
?> 
```

For structure

```php
<?php
    for ($x = 0; $x <= 10; $x++) {
        echo "The number is: $x <br>";
    }
?> 
```

functions

```php
<?php
    function writeMsg() {
        return "Hello world!";
    }
    $message = writeMsg(); // call the function
    echo $message;
?>
```
Paintings

```php
<?php
    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
?> 
```
### next Lab

 - Creatives Form
