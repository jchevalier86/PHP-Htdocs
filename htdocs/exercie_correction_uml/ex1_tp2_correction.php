<?php

class Product {
    protected string $category;
    protected string $id;
    protected float $price;
    protected string $name;
    protected int $quantity;

    public function __construct(string $category, string $id, float $price, string $name, int $quantity) {
        $this->category = $category;
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
        $this->quantity = $quantity;
    }

    public function getCategory(): string {
        return $this->category;
    }

    public function setCategory(string $category): void {
        $this->category = $category;
    }

    public function getId(): string {
        return $this->id;
    }

    public function setId(string $id): void {
        $this->id = $id;
    }

    public function getPrice(): float {
        return $this->price;
    }

    public function setPrice(float $price): void {
        $this->price = $price;
    }

    public function getName(): string {
        return $this->name;
    }

    public function setName(string $name): void {
        $this->name = $name;
    }

    public function getQuantity(): int {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void {
        $this->quantity = $quantity;
    }

    public function printAttributes(): void {
        echo "Category: {$this->category}, ID: {$this->id}, Price: {$this->price}, Name: {$this->name}, Quantity: {$this->quantity}\n";
    }
}

class GardeningProduct extends Product {
    private string $season;

    public function __construct(string $category, string $id, float $price, string $name, int $quantity, string $season) {
        parent::__construct($category, $id, $price, $name, $quantity);
        $this->season = $season;
    }

    public function getSeason(): string {
        return $this->season;
    }

    public function setSeason(string $season): void {
        $this->season = $season;
    }

    public function printAttributes(): void {
        parent::printAttributes();
        echo "Season: {$this->season}\n";
    }
}

class DIYProduct extends Product {
    private string $section;
    private bool $electric;

    public function __construct(string $category, string $id, float $price, string $name, int $quantity, string $section, bool $electric) {
        parent::__construct($category, $id, $price, $name, $quantity);
        $this->section = $section;
        $this->electric = $electric;
    }

    public function getSection(): string {
        return $this->section;
    }

    public function setSection(string $section): void {
        $this->section = $section;
    }

    public function isElectric(): bool {
        return $this->electric;
    }

    public function setElectric(bool $electric): void {
        $this->electric = $electric;
    }

    public function printAttributes(): void {
        parent::printAttributes();
        echo "Section: {$this->section}, Electric: " . ($this->electric ? 'Yes' : 'No') . "\n";
    }
}

class Catalogue {
    protected array $products = [];

    public function loadCatalogue(string $file): void {
        $lines = file($file);
        foreach ($lines as $line) {
            $data = explode(";", $line);
            $category = trim($data[0]);
            $id = trim($data[1]);
            $price = trim($data[2]);
            $name = trim($data[3]);
            $quantity = trim($data[4]);

            if ($category === "Jardinage") {
                $season = trim($data[5]);
                $product = new GardeningProduct($category, $id, $price, $name, $quantity, $season);
            } elseif ($category === "Bricolage") {
                $section = trim($data[5]);
                $electric = trim($data[6]);
                $product = new DIYProduct($category, $id, $price, $name, $quantity, $section, $electric);
            } else {
                // Handle unknown category
                continue;
            }
            $this->products[] = $product;
        }
    }

    public function getProducts(): array {
        return $this->products;
    }

    public function printProductAttributes(): void {
        foreach ($this->products as $product) {
            $product->printAttributes();
            echo "\n";
        }
    }
}

// Usage example:
$catalogue = new Catalogue();
$catalogue->loadCatalogue('catalogueEx1.csv');
$catalogue->printProductAttributes();

?>
