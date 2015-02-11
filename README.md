A Webtudor: OOP a gyakorlatban (1. rész) előadás kódanyaga

# Házi feladat

- Olvasd el a PHP dokumentáció ide vonatkozó részét!
- Próbáld ki az absztrakt osztályok és interface-k működését!
- Nézz utána a névterek (namespace-k) működésének!

## Feladat:
Alakítsd át az osztályokat az alábbiak szerint.

```php
/**
 * Megjelenitheto elemek interface
 */
interface Displayable {
    /**
     * Megjeleniti az adott elemet
     */
    public function display();
}
/**
 * Olyan kontener elem, ami megjelenitheto elemeket tartalmaz.
 */
interface DisplayableContainer {
    /**
     * Hozzaad egy megjelenitheto elemet.
     * 
     * @param Displayable $element
     */
    public function add(Displayable $element);
}
/**
 * A blog megjelenitheto es megjelenitheto elemeket tartalmaz.
 */
class Blog implements Displayable, DisplayableContainer {
}
/**
 * A blogposzt legyen abasztrakt es legyen megjelenitheto
 */
abstract class Blogpost implements Displayable {
}
/**
 * Legyen kulon szoveges blogpostunk.
 */
class TextBlogpost extends BlogPost {
}
/**
 * Legyen kulon videos blogpostunk.
 */
class VideoBlogpost extends BlogPost {
}
```

Észrevetted, hogy a fenti minta szerint, megtehetjük ezt is?

```php
$alBlog = new Blog();
$alBlog->add(new TextBlogPost("Cím1", "Szöveg1"));
$alBlog->add(new TextBlogPost("Cím2", "Szöveg2"));

$alBlog2 = new Blog();
$alBlog2->add(new VideoBlogPost("Cím3", "Szöveg3", "//example.com/cool-video-content.mp4");

$blog = new Blog();
$blog->add($alBlog); //magyarázd meg, hogy ez miért működik!
$blog->add($alBlog2);
$blog->display();
```

##Referencia:    
- Névterek: http://php.net/manual/en/language.namespaces.php (angol)
- OOP: http://php.net/manual/en/language.oop5.php (angol)
