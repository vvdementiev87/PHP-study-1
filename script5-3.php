<?php
//* Разработайте механизм корзины интернет-магазина. Реализуйте класс продукта (Product) со свойствами title (string),
//price (float) и components (массив объектов Product), и соответствующие методы для взаимодействия со свойствами.
//Свойство components служит для реализации товара-наборов (например, комплект клавиатура+мышь) и в случае,
//если экземпляр содержит компоненты, стоимость этого комплекта должна быть равна сумме стоимостей её компонентов.
//Разработайте класс корзины (Cart) с методами для добавления, удаления товаров,
//а также с методом вычисления полной стоимости корзины, с учётом того,
//что некоторые товары могут представлять из себя комплекты других товаров.

class Product {
    private string $title;
    private float $price = 0.0;
    private array $components = [];

    function __construct($title, $price)
    {
       $this->title = $title;
       $this->price = $price;
    }

    public function getPrice(): float
    {   
       if (empty($this->components)) {
       return $this->price;
       }
       $total = 0;
       foreach ($this->components as $value)
       {
       $total += $value->getPrice();
       }
       $this->price = $total;
       return $this->price;
       
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getComponents()
    {
        return $this->components;
    }

    public function AddComponents(Product $component)
    {
        $this->components[] = $component;
        $this->getPrice();

        return $this;
    }
}

class Cart {
    private float $totalPrice = 0.0;
    private array $products = [];
    
    public function addProduct(Product $product, int $count = 1): void
    {
       $this->products[$product->getTitle()] = $count;
       $this->totalPrice += $product->getPrice() * $count;
    }

    public function removeProduct(Product $product): void
    {    
        $this->totalPrice -= $product->getPrice() * $this->products[$product->getTitle()];
        unset($this->products[$product->getTitle()]);
     }

    public function getProducts(): array
    {
       return $this->products;
    }

    public function getTotalPrice()
    {
        return $this->totalPrice;
    }
}

$product1 = new Product("Phone", 100.5);
$product2 = new Product("Card", 7);
$product3 = new Product("Phone+Card", 0.5);

$product3->AddComponents($product1);
$product3->AddComponents($product2);
$product4 = new Product("Box", 0.5);
$product5 = new Product("Box+product3", 0.5);
$product5->AddComponents($product3);
$product5->AddComponents($product4);

print_r($product5->getPrice());

$Cart1 = new Cart;
$Cart1->addProduct($product3, 5);
$Cart1->addProduct($product2, 3);
$Cart1->addProduct($product5, 7);
$Cart1->removeProduct($product2);
var_dump($Cart1);
print_r($Cart1->getTotalPrice());