<?php 
require __DIR__. '/vendor/autoload.php';
use Symfony\Component\Validator\Validation;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\Email;
use Symfony\Component\Validator\Constraints\NotBlank;

$validator = Validation::createValidator();
$violations = $validator->validate('fdfdf@gdd', array(
    new Length(array('min' => 10,'minMessage'=>'Mimssatge massa petit')),
    new NotBlank(),
    new Email(array('checkMX'=>'true','message'=>'Mail incorrecte'))
));

if (0 !== count($violations)) {
    // there are errors, now you can show them
    foreach ($violations as $violation) {
        echo  $violation->getMessage().'<br>';
    }
}