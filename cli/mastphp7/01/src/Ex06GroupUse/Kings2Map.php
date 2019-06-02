<?php

namespace Ch01\Ex06GroupUse;

class Kings2Map {}

// a trait is like a mixin class allowing more composable  side-inherited behaviour
trait MagistrateWatcher {

  public function inform(){

    echo "the magistrate for ".get_class($this)." has been notified of your arrival\n";
  }
}

class MerPeople {
  use MagistrateWatcher;
}

class Sharkies {
  use MagistrateWatcher;
}

class Kolyma {
  use MagistrateWatcher;
}
