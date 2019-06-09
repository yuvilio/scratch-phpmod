<?php
require_once 'vendor/autoload.php';

use Ch02\Ex01ObjBasics\{
  Kitchen,
  WizardKitchenSteward
};

$kitchen = new Kitchen();

$manananSteward = new WizardKitchenSteward("Gwydion", 17);
$manananSteward->greet();

// inherited static class  method
WizardKitchenSteward::enlist();
