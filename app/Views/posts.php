<?php echo $this->extend('layout') ?>

<?php echo $this->section('conteudo') ?>
<h2>Blog de Tecnologia</h2>
<hr>

<?php if(count($posts)> 0): ?>
    <?php foreach($posts as $post): ?>
        <div class="card">
            <div class="card blue-grey darken-1">
                <div class="card-content white-text">
                    <span class="card-title"><?php echo $post['title'] ?></span>
                    <p><?php echo word_limiter(nl2br($post['body']), 40) ?></p>
                </div>
                <div class="card-action">
                    <?php echo anchor('/post/view/'.$post['id'], 'Ler mais...') ?>
                    <?php echo anchor('/post/edit/'.$post['id'], 'Editar') ?>
                </div>
            </div>
        </div>
    <?php endforeach;?>
<?php else: ?>
    <p>Nenhum post encontrado</p>
<?php endif; ?>

<?php echo $this->endSection('conteudo') ?>