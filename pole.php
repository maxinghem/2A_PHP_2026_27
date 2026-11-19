









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>













<?php





<?php
$pole = ["Croissant shortbread soufflé gummies jelly beans sugar plum topping. Shortbread liquorice ice cream dessert macaroon sweet lollipop. Gingerbread powder marshmallow oat cake muffin marzipan lemon drops. Powder cake jelly-o muffin gummies apple pie oat cake cheesecake shortbread. Powder jelly beans bonbon macaroon jelly-o dragée lemon drops caramels. Marzipan biscuit chocolate bar cookie biscuit tart cotton candy cupcake caramels. Pudding cotton candy pudding biscuit croissant gummi bears halvah tart apple pie. Jujubes halvah macaroon tootsie roll cupcake pie muffin chocolate lemon drops. Gummies bear claw gingerbread cake dessert jelly beans pudding dragée jujubes. Cake cotton candy fruitcake pastry gummies sweet dragée dessert jelly-o. Tootsie roll candy bonbon marzipan cheesecake chocolate donut. Brownie gummi bears dessert croissant marshmallow cake. Bonbon cotton candy jujubes pastry bonbon cake candy wafer. Candy canes chocolate bar gummi bears soufflé jelly beans.
Oat cake donut jelly lemon drops lemon drops tootsie roll cake. Cotton candy cookie tart cookie candy canes. Macaroon caramels muffin candy dragée jelly gummi bears. Pudding brownie topping liquorice tiramisu wafer. Biscuit jujubes toffee powder sugar plum chocolate bar gingerbread pastry lemon drops. Cookie jelly beans gingerbread ice cream lollipop. Jelly beans chocolate cake cheesecake shortbread candy canes sugar plum topping. Jelly-o gingerbread cupcake croissant biscuit sweet. Topping chocolate cake pudding dessert marzipan gingerbread carrot cake jujubes. Dessert gingerbread ice cream dessert croissant dragée candy canes. Wafer gummi bears danish tart dragée pastry brownie. Chocolate bar pudding cake marzipan lemon drops. Gummies gummies pudding tiramisu donut.
Liquorice macaroon lemon drops toffee lollipop gummies macaroon cookie. Pudding macaroon pie sweet roll pie pudding. Chocolate pudding marzipan macaroon biscuit dragée. Tootsie roll liquorice muffin soufflé toffee jelly beans wafer liquorice. Lollipop sweet cake sweet roll chocolate tootsie roll. Chupa chups jelly icing oat cake oat cake. Pie marshmallow jelly liquorice wafer jelly-o cotton candy. Powder shortbread gummi bears bear claw sweet roll. Icing pie apple pie shortbread oat cake cheesecake bear claw ice cream. Cheesecake sesame snaps jelly beans oat cake icing icing candy. Donut toffee gummies candy jelly beans lemon drops tart. Pastry croissant ice cream tart toffee jelly-o tiramisu. Sugar plum cake cheesecake marshmallow toffee gummies sesame snaps candy. Lollipop fruitcake muffin caramels marshmallow.
Cheesecake muffin dessert cake halvah chocolate bar muffin dragée. Liquorice sugar plum lollipop wafer fruitcake sesame snaps wafer. Sesame snaps halvah powder jujubes cotton candy chocolate bar oat cake lollipop liquorice. Candy chocolate cake danish apple pie cake cookie brownie shortbread tiramisu. Bear claw jelly ice cream wafer chupa chups. Oat cake biscuit biscuit marzipan cotton candy toffee gummi bears. Gummi bears muffin bear claw candy canes biscuit apple pie pastry lemon drops sugar plum. Bonbon wafer pie sesame snaps oat cake. Liquorice wafer donut chocolate cake cupcake cake. Chocolate cake toffee soufflé chocolate bar ice cream. Tootsie roll gummies carrot cake shortbread cake fruitcake. Jelly beans chupa chups icing powder carrot cake sugar plum sugar plum carrot cake. Chocolate donut sweet roll marzipan wafer. Lemon drops jujubes jujubes marzipan gingerbread candy canes danish.
Tiramisu pie icing bonbon bear claw powder croissant. Chupa chups bonbon fruitcake pie topping. Powder pudding jelly-o sugar plum cheesecake. Lemon drops halvah tart lollipop pastry cotton candy jelly beans. Candy pie tootsie roll liquorice marshmallow chocolate cake candy canes pie. Marzipan jelly gingerbread ice cream sugar plum cake halvah. Macaroon dragée marzipan chocolate bar sweet muffin liquorice liquorice. Cupcake soufflé cotton candy tart chocolate bar liquorice gingerbread jelly. Jelly beans cake cookie shortbread carrot cake cheesecake cheesecake. Powder jelly jelly-o sweet roll pastry. Tart croissant macaroon pudding cotton candy. Halvah pastry tootsie roll candy cookie lemon drops. Tart jelly candy tiramisu dragée fruitcake sugar plum."]; 
$pole = str_replace(" ", ", ", $pole);

$abeceda = [
    "a", "á", "ä", "b", "c", "č", "d", "ď",
    "e", "é", "f", "g", "h", "ch", "i", "í",
    "j", "k", "l", "ĺ", "ľ", "m", "n", "ň",
    "o", "ó", "ô", "p", "q", "r", "ŕ", "s",
    "š", "t", "ť", "u", "ú", "v", "w", "x",
    "y", "ý", "z", "ž"
];
$pole = str_replace(" ", ", ", $pole[$i]);


for ($i = 0; $i < count($pole); $i++) {
    for ($j = 0; $j < count($abeceda); $j++) {
        if(substr_count($pole[$i], $abeceda[$j]) >= 2) {
            echo $pole[$i] . "<br>";
        }
    }
}


















?>


















</body>
</html>