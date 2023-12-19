
  <?php if (!empty($tableau)): ?>
    <?php foreach ($tableau as $artist): ?>
        <div>
            <?= $artist->artist_name ?>
        </div>
    <?php endforeach; ?>
<?php else: ?>
    <p>Aucun résultat trouvé.</p>
<?php endif; ?>