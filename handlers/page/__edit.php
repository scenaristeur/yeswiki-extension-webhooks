<?php

use YesWiki\Bazar\Service\FicheManager;

if (!defined("WIKINI_VERSION")) {
    die("acc&egrave;s direct interdit");
}

$ficheManager = $this->services->get(FicheManager::class);

if ($this->HasAccess('write') && $ficheManager->isFiche($this->GetPageTag()) && isset($_POST['bf_titre'])) {
    webhooks_post_all($_POST, WEBHOOKS_ACTION_EDIT);
}
