<?php
namespace Drupal\first_module\Controller;

use Drupal\Core\StringTranslation\StringTranslationTrait;

class FirstController {
    use StringTranslationTrait;
    
    public function first () {
        // return array(   '#markup' => "Welcome to MrJays Drupal Website");
        return ['#markup' => $this->t('PIIIIKAAAAACCCCHHHHUUUU')];

    }

}