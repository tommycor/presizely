<?php

namespace Presizely\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PresizelyUserBundle extends Bundle
{
  public function getParent()
  {
    return 'FOSUserBundle';
  }
}
