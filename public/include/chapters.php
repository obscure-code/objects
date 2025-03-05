<?php

/** @var array $data */

declare(strict_types=1);

/** @var array $chapters */
$chapters = $data['chapters'];

?>

<h1>Оглавление</h1>

<main>
    <nav aria-label="Оглавление">
        <ul>
            <?php
                foreach ($chapters as $chapter => $title) {
                    echo '<li><a href="/chapter/' . $chapter . '">' . $chapter . ' ' . $title . '</a></li>';
                }
            ?>
        </ul>
    </nav>
</main>
