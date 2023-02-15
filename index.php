<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require_once 'Lutador.php';
        $lu = array();
        $lu[0]= new Lutador("Pretty Boy","França", 31 , 1.75, 68.9,
                11, 2, 1);
          $lu[1]= new Lutador("Putscript","Brasil",29,1.68,57.8,14,2,3);
          $lu[2]= new Lutador("snapShadow","EUA",35,1.65,80.9,12,2,1);
          $lu[3]= new Lutador("Dead Code","Australia",28,1.93,81.6,13,0,2);
          $lu[4]= new Lutador("Upocobol","Brasil",37,1.70,119.3,5,4,3);
          $lu[5]= new Lutador("Nerdaarte","EUA",30,1.81,105.7,12,2,4);
          $lu[4]->status();
          $lu[4]->apresentar();
        ?>
    </body>
</html>
