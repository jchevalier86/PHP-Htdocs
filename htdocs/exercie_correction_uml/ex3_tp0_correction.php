<?php
class Group {
    private $name;
    private $members;

    public function setName($name) {
        $this->name = $name;
    }

    public function printGroupInfo() {
        echo $this->name . "\n";
    }

    public function addMember($name, $age) {
        $this->members[$name] = $age;
    }

    public function getAge($name) {
        return $this->members[$name];
    }

    public function printMembers() {
        foreach ($this->members as $name => $age) {
            echo $name . "\n";
        }
    }

    public function __construct($name) {
        $this->name = $name;
        $this->members = array();
    }
}

// Call the main function
$group = new Group("Team");
$group->addMember("Bob", 28);
$group->addMember("Patrick", 24);
$group->addMember("Carlos", 35);

$group->printGroupInfo();
$group->setName("Super Team");
$group->printGroupInfo();

echo "Bob is " . $group->getAge("Bob") . "\n";
?>
