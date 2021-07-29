# Constraints
This library provides basic constraints

# 1 Primitive value Constraints

## 1.1 EmailConstraint
[A simple constraint for validating email adresses](src/Constraints/EmailConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\EmailConstraint()
```
This constraint constructor doesn't take any parameters  

## 1.2 EqualsConstraint
[A simple constraint for validating number equality](src/Constraints/EqualsConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\EqualsConstraint()
```
This constraint constructor takes in one parameter:  
`int|float $equals` - The number to which provided number must be equal to  

## 1.3 GreaterThanConstraint
[A simple constraint for validating number](src/Constraints/GreaterThanConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\GreaterThanConstraint()
```
This constraint constructor takes in two parameters:  
`int|float $min` - The number which value must be greater than  
`bool $orEqual` - Should this also count in equality  

## 1.4 LesserThanConstraint
[A simple constraint for validating number](src/Constraints/LesserThanConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\LesserThanConstraint()
```
This constraint constructor takes in two parameters:  
`int|float $max` - The number which value must be lesser than  
`bool $orEqual` - Should this also count in equality  

## 1.5 LengthConstraint
[A simple constraint for string length](src/Constraints/LengthConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\LengthConstraint()
```
This constraint constructor takes in two parameters:  
`int $minLength` - Minimum length
`?int $maxLength` - Maximum length  

## 1.6 PatternConstraint
[A simple constraint for matching string with regex](src/Constraints/PatternConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\LengthConstraint()
```
This constraint constructor takes in one parameter:  
`string ...$regexes` - Regular expressions to match against

## 1.7 OneOfConstraint
[Constraint for matching against of one of constraints](src/Constraints/PatternConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\Constraints\LengthConstraint()
```
This constraint constructor takes in one parameter:  
`IConstraint ...$constraints` - Constraints to match against  

# 2 File Constraints

## 2.1 BasicMediaTypeConstraint
[Constraint for matching mime types. ***Unsafe***](src/FileConstraints/BasicMediaTypeConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\FileConstraints\BasicMediaTypeConstraint()
```
This constraint constructor takes in one parameter:  
`array $allowedTypes` - MIME types to match against  

## 2.2 FileSizeConstraint
[Constraint for matching file sizes](src/FileConstraints/FileSizeConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\FileConstraints\FileSizeConstraint()
```
This constraint constructor takes in two parameters:  
`int|null $max` - Maximum allowed file size in bytes  
`int|null $min` - Minimum allowed file size in bytes  

## 2.3 NoErrorConstraint
[Constraint for checking upload error](src/FileConstraints/NoErrorConstraint.php)
```php
$constraint = new SunnyFlail\Constraints\FileConstraints\NoErrorConstraint()
```
This constraint constructor doesn't take any parameters