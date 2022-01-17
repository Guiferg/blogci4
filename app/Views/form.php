<?php echo $this->extend('layout') ?>
<?php echo $this->section('conteudo') ?>

<script>
    function confirma(){
        if(confirm("Confirma a exclusão?")){
            return true;
        } else {
            return false;
        }
        
    }
</script>

<div class="card blue-grey darken-1">
    <div class="row">
        <div class="col push-s1 white-text">
            <h3><?php echo $titulo ?></h3>
        </div>
    </div>

    <div class="card-content">
        <?php helper('form') ?>
        <?php echo form_open('post/store') ?>
            <div class="input-field col s12">
                <input value="<?php echo isset($post) ? $post['title'] : set_value('title'); ?>" id="title" name="title" type="text" class="validate  white-text">
                <?php if(!empty($errors['title'])):?>
                    <div class="card blue-grey lighten-4">
                        <div class="card-content">
                            <h6 class="red-text text-red-lighten-2"><?php echo $errors['title'] ?></h6>
                        </div>
                    </div>
                <?php endif; ?>
                <label for="titulo">Título</label>
            </div>
            <div class="input-field col s12">
                <input value="<?php echo isset($post) ? $post['slug'] : set_value('slug'); ?>" id="slug" name="slug" type="text" class="validate  white-text">
                <?php if(!empty($errors['slug'])):?>
                    <div class="card blue-grey lighten-4">
                        <div class="card-content">
                            <h6 class="red-text text-red-lighten-2"><?php echo $errors['slug'] ?></h6>
                        </div>
                    </div>
                <?php endif; ?>
                <label for="slug">Slug</label>
            </div>
            <div class="input-field col s12">
                <textarea value="<?php echo isset($post) ? $post['body'] : set_value('body'); ?>" name="body" id="body" class="validate materialize-textarea white-text"></textarea>
                <?php if(!empty($errors['body'])):?>
                    <div class="card blue-grey lighten-4">
                        <div class="card-content">
                            <h6 class="red-text text-red-lighten-2"><?php echo $errors['body'] ?></h6>
                        </div>
                    </div>
                <?php endif; ?>
                <label for="body">Post</label>
            </div>
            <div class="row">
                <div class="col">
                    <button class="waves-effect waves-light btn"><i class="material-icons">send</i></button>
                </div>
            </div>
            <input type="hidden" name="id" value="<?php echo isset($post) ? $post['id'] : set_value('id'); ?>">
        <?php echo form_close() ?>
        <div class="card-action">
        <div class="col">
            <button class="btn white-text red">
                <?php if(isset($post)): ?>
                    <?php echo anchor('post/excluir/'.$post['id'], 'Excluir', ['class' => 'white-text', 'onclick' => 'return confirma()']); ?>
                <?php endif; ?>
            </button>
        </div>
        </div>
    </div>
</div>

<?php echo $this->endSection('conteudo') ?>