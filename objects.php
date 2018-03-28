<?php
// header ("Content-Type: text/html; charset=utf-8");
namespace hw11;

include 'core/autoloader.php';
/**
 * Эксплуатация кода
 */
$car1 = new \classes\Car\CarModel\CarModel(23000,'BMW', 6, 'Иномарка');
$car1->setSpeed(260)->setColor('Green');
$car1->getDescribe();

$car2 = new \classes\Car\CarModel\CarModel(10000, 'VAZ', 2107, 'Отечественный автопром');
$car2->setSpeed(180)->setColor('White');
$car2->getDescribe();

echo "<pre>";
/**
 * Эксплуатация кода
 */
$tv1 = new \classes\Tv\TvClass\TvClass(1000, 'LG', 'LA860V', '42"');
$tv1->getDescribe();

$tv2 = new \classes\Tv\TvClass\TvClass(1500, 'SAMSUNG', 'UE49M5000AK', '49"');
$tv2->changeColor('Grey');
$tv2->getDescribe();

echo "<pre>";

/**
 * Эксплуатация кода
 */
$pen1 = new \classes\Pen\PenClass\PenClass(5, 'Ручка', 'Аташе', 'шариковые ручки');
$pen1->getMaterial('пластик')->getInk('черные')->getColor = ('синий');
$pen1->getDescribe();

$pen2 = new \classes\Pen\PenClass\PenClass(100, 'Ручка', 'Паркер', 'перьевые ручки');
$pen2->getMaterial('металл')->getInk('синие')->getColor = ('серый');
echo 'Вдруг резко крикнула: ';
$pen2->setColor();
$pen2->getDescribe();

echo "<pre>";
/**
 * Эксплуатация кода
 */
$duck1 = new \classes\Bird\Duck\Duck(20, 'Утка', 'Кряква', 'Речная');
$duck1->getDescribe();
$duck1->getAge(13);


$duck2 = new \classes\Bird\Duck\Duck(300, 'Утка', 'Мандаринка', 'Декоративная');
$duck2->getDescribe();
$duck2->getAge(5);

$product1 = new \classes\ProductClass\ProductClass('Тетрадь', 'в клетку', 'Канцелярка');
$product1->getMaterial('Бумага')->setCopybook(100);
$product1->getDescribe();

$product2 = new \classes\ProductClass\ProductClass('Чашка', 'чайная', 'Посуда');
$product2->getMaterial('Керамика')->setCup(300);
$product2->getDescribe();

$order = new \order\Order();
$order->addProduct($car1); //добавляю товар в корзину
$order->addProduct($car2); //добавляю товар в корзину
$order->addProduct($tv1); //добавляю товар в корзину
$order->addProduct($tv2); //добавляю товар в корзину
$order->addProduct($pen1); //добавляю товар в корзину
$order->addProduct($pen2); //добавляю товар в корзину
$order->addProduct($duck1); //добавляю товар в корзину
$order->addProduct($duck2); //добавляю товар в корзину
$order->addProduct($product1); //добавляю товар в корзину
$order->addProduct($product2); //добавляю товар в корзину

echo '<br>';

$order->showAllProduct();

echo '<br>';
echo '<br>';
echo 'На сумму: ' . $order->sum();

 ?>
