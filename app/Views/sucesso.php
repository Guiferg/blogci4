<?php echo $this->extend('layout') ?>
<?php echo $this->section('conteudo') ?>

<div class="card blue-grey darken-1">
    <div class="card-content">
        <div class="row">
            <div class="col s9 push-s3">
                <h4 class="white-text">
                    <?php $mensagem = session()->getFlashData('mensagem'); ?>
                    <?php if(isset($mensagem)): ?>
                        <?php echo $mensagem; ?>
                    <?php else: ?>
                        Post enviado com sucesso!
                    <?php endif; ?>
                </h4>
            </div>
        </div>
    </div>
    <div class="card-action">
        <?php echo anchor(base_url(), 'Voltar') ?>
    </div>
</div>

<?php echo $this->endSection('conteudo') ?>