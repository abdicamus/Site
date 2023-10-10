<?= $this->fetch('components/header.php'); ?>

<main class="mb-5">
    <section class="container">
        <?php if (isset($messages['success'][0])): ?>
            <div class="alert alert-dismissible rounded-0 alert-success" role="alert">
                <?= $messages['success'][0] ?>
            </div>
        <?php endif; ?>

        <?= $content; ?>
    </section>
</main>

<?= $this->fetch('components/footer.php'); ?>