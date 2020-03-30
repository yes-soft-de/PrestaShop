<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('pt-PT', array (
));

$catalogueDefault = new MessageCatalogue('default', array (
));
$catalogue->addFallbackCatalogue($catalogueDefault);

return $catalogue;
