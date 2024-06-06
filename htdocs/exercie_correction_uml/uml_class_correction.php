<?php

/**
 * Apply static style to a string by adding an underscore before each
 * uppercase letter and then converting the letters to uppercases.
 * 
 * @param string $inputString The input string.
 * @return string The input string with static style applied.
 */
function applyStaticStyle($inputString) {
    $formattedString = '';

    // Iterate over each character in the input string
    for ($i = 0; $i < strlen($inputString); $i++) {
        $char = $inputString[$i];

        // Check if the character is an uppercase letter
        if (ctype_upper($char)) {
            // Add an underscore before the uppercase letter
            $formattedString .= '_' . $char;
        } else {
            // Add the character to the result string as is
            $formattedString .= strtoupper($char);
        }
    }

    // Remove leading underscore if present
    $formattedString = ltrim($formattedString, '_');

    return $formattedString;
}



/**
 * Apply final style to a string by underlining it.
 *
 * @param string $inputString The input string.
 * @return string The input string with final style applied.
 */
function applyFinalStyle($inputString) {
    return "\033[4m$inputString\033[0m";
}



/**
 * Generate a UML-like representation of a class.
 *
 * @param string $class The name of the class.
 * @return string The UML-like representation of the class.
 */
function generateUMLFromClassName($className) {
    // Instantiate ReflectionClass to dynamically inspect other classes.
    $reflectionClass = new ReflectionClass($className);

    // Get properties (attributes) and methods.
    $properties = $reflectionClass->getProperties();
    $methods = $reflectionClass->getMethods();

    // UML (textual) representation
    $uml = "--------------------------------
            $className\n--------------------------------\n";

    // Properties
    foreach ($properties as $property) {
        $propertyName = $property->getName();
        $visibility = $property->isPublic() 
                      ? '+' 
                      : ($property->isProtected() ? '#' : '-');
        $uml .= "$visibility $propertyName\n";
    }
    $uml .= "--------------------------------\n";

    // Methods
    foreach ($methods as $method) {
        $methodName = $method->getName();
        if ($methodName === '__construct') {
            $methodName = $className;
        }
        $visibility = $method->isPublic() 
                      ? '+' 
                      : ($method->isProtected() ? '#' : '-');
        if ($method->isFinal()) {
            $methodName = applyFinalStyle($methodName);
        }
        if ($method->isStatic()) {
            $methodName = applyStaticStyle($methodName);
        }
        $uml .= "$visibility $methodName()\n";
    }
    $uml .= "--------------------------------\n";

    return $uml;
}



/**
 * Example class.
 * 
 * @property string $privateProperty A private property.
 * @property string $publicProperty A public property.
 * @method void privateMethod() A private method.
 * @method void publicMethod() A public method.
 * @method void __construct(string $privateProperty, 
 *                          string $publicProperty) Constructor.
 */
class MyClass {
    // Properties (attributes) of multiple ranges
    private $privateProperty; // Accessible within this class.
    protected $protectedProperty; // Accessible within class & children.
    public $publicProperty; // Accessible from anywhere.

    private const A_CONSTANT = 'Kind of a final property (but final is'
                                + ' for methods).';
    static private $staticProperty; // The same value for all objects.

    /**
     * Constructor: process done during class instantiation.
     *
     * @param string $privateProperty A private property.
     * @param string $publicProperty A public property.
     */
    public function __construct($privateProperty, $myProtectedProperty,
                                $publicProperty) {
        $this->privateProperty = $privateProperty;
        $this->protectedProperty = $protectedProperty;
        $this->publicProperty = $publicProperty;
    }

    /**
     * Example of a private method (self can call).
     */
    private function privateMethod() {
        echo "This is a private method, so only itself may call it.\n";
    }

    /**
     * Example of a protected method (self and childrend can call).
     */
    protected function protectedMethod() {
        echo "This is a protected method, so only itself and its"
              + " children may call it.\n";
    }

    /**
     * Example of a public method (any can call).
     */
    public function publicMethod() {
        echo "This is a public method, so any may call it.\n";
    }

    /**
     * Example of a public final method (cannot be overridden).
     */
    final public function publicFinalMethod() {
        echo "In addition of being public, this method is final, so it"
              + " may be called only once.\n";
    }

    /**
     * Example of a public static method (related to class not object).
     */
    public static function publicStaticMethod() {
        echo "In addition of being public, this method is final, so it"
              + " belongs to the whole class, not to the object. Which"
              + " means that you cannot use attributes in it.\n";
    }
}



// Example usage
$classUML = generateUMLFromClassName('MyClass');
echo $classUML;
// type "php uml_class.php" in the terminal to see the output

?>
