<?php
class School {
    private $name;
    private $type;
    private $city;
    private $domains;

    public function addDomain($domain) {
        $this->domains[] = $domain;
    }

    public function printDomains() {
        echo "Domains : ";
        foreach ($this->domains as $domain) {
            echo $domain . " ";
        }
        echo "\n"; // line return
    }

    public function getName() {
        return $this->name;
    }

    public function getType() {
        return $this->type;
    }

    public function getCity() {
        return $this->city;
    }

    public function __construct($name, $type, $city) {
        $this->name = $name;
        $this->type = $type;
        $this->city = $city;
        $this->domains = array();
    }
}

// Usage
$school = new School("La Rochelle Université", "university", "La Rochelle");
$school->addDomain("psychology");
$school->addDomain("mathematics");
$school->addDomain("medecine");

echo $school->getName() . ", " . $school->getType() . " of " . $school->getCity() . "\n";
$school->printDomains();
?>
