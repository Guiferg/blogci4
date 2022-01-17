<?php echo $this->extend('layout') ?>

<?php echo $this->section('conteudo') ?>

<div class="card">
     <div class="card blue-grey darken-1">
        <div class="card-content white-text">
              <span class="card-title"><?php echo $post['title'] ?></span>
               <p><?php echo nl2br($post['body']) ?></p>
        </div>
        <div class="card-action">
             <?php echo anchor('/home', 'voltar') ?>
        </div>
    </div>
</div>

<div class="card">
    <div class="card blue-grey darken-1">
        <div class="card-content white-text">
            <h4 class="text-white">Comentários</h4>
            <?php if(count($comentarios) > 0): ?>
                <?php foreach($comentarios as $comentario): ?>
                    <div class="card blue-grey darken-1">
                        <div class="card-content white-text">
                            <h6>->Comentário feito em: <?php echo date('d/m/y', strtotime($comentario['created_at'])) ?></h6>
                            <p><?php echo $comentario['comentario'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <div class="card blue-grey darken-1">
                    <div class="card-content white-text">
                        <p>Nenhum comentário</p>
                    </div>
                </div>
            <?php endif; ?>

            <div class="card blue-grey darken-1">
                <?php helper('form') ?>
                <?php echo form_open('comentario/store') ?>
                    <div class="row">
                        <div class="col s12">
                            <h6>Faça o seu comentário:</h6>
                            <div class="input-field">
                                <textarea name="comentario" id="comentario" class="materialize-textarea white-text"></textarea>
                                <?php if(!empty($errors['comentario'])):?>
                                    <div class="card blue-grey lighten-4">
                                        <div class="card-content">
                                            <h6 class="red-text text-red-lighten-2"><?php echo $errors['comentario'] ?></h6>
                                        </div>
                                    </div>
                                <?php endif; ?>
                                <label for="comentario">Comente aqui.</label>
                            </div>
                            <div class="row">
                                <div class="col"><button class="btn waves-effect waves-light" type="submit" name="eviar">Enviar</button></div>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
                        </div>
                    </div>
                <?php echo form_close() ?>
            </div>
        </div>
    </div>
</div>

<?php echo $this->endSection('conteudo') ?>