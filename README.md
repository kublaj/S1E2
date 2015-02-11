A Webtudor: OOP a gyakorlatban (1. rész) előadás kódanyaga

# Házi feladat

- Olvasd el a PHP dokumentáció ide vonatkozó részét!
- Próbáld ki az absztrakt osztályok és interface-k működését!
- Nézz utána a névterek (namespace-k) működésének!

## Feladat:
Alakítsd át az osztályokat az alábbiak szerint

    interface Displayable {
        public function display();
    }
    interface DisplayableContainer {
        public function add(Displayable $element);
    }
    class Blog implements Displayable, DisplayableContainer
    abstract class BlogPost implements Displayable
    class TextBlogPost extends BlogPost
    class VideoBlogPost extends BlogPost
    
Észrevetted, hogy a fenti minta szerint, megtehetjük ezt is?

    $alBlog = new Blog();
    $alBlog->add(new TextBlogPost("Cím1", "Szöveg1"));
    $alBlog->add(new TextBlogPost("Cím2", "Szöveg2"));
    
    $alBlog2 = new Blog();
    $alBlog2->add(new VideoBlogPost("Cím3", "Szöveg3", "//example.com/cool-video-content.mp4");
    
    $blog = new Blog();
    $blog->add($alBlog); //magyarázd meg, hogy ez miért működik!
    $blog->add($alBlog2);
    $blog->display();

##Referencia:    
- Névterek: [http://php.net/manual/en/language.namespaces.php] (angol)
- OOP: [http://php.net/manual/en/language.oop5.php] (angol)
