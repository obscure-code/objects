<?php

/** @var array $data */

declare(strict_types=1);

?>

<div class="center" style="margin-top: 40px;">
    <div class="message_error">
        <?= isset($data['message']) ? htmlspecialchars($data['message']) : 'Page not found' ?>
    </div>
</div>
