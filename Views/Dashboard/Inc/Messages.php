<?php if (getSession('errors')) : ?>
    <div class="mb-3">
        <?php foreach (getSession('errors') as $error) : ?>
            <div class="alert alert-danger p-1 text-center"><?php echo $error; ?></div>
        <?php endforeach; ?>
        <?php removeSession("errors"); ?>
    </div>
<?php endif; ?>
<?php if (getSession('Success')) : ?>
    <div class="mb-3">
        <div class="alert alert-success p-1 text-center"><?php echo getSession('Success'); ?></div>
    </div>
    <?php removeSession("Success"); ?>
<?php endif; ?>