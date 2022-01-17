<?php 

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ComentarioModel;
use App\Models\PostModel;

class Comentario extends BaseController {

    public function store() {

        $comentarioModel = new ComentarioModel();
        $postModel = new PostModel();

        $post = $this->request->getPost();

        $dadosPost = $postModel->find($post['id']);

        $dados = [
            'posts_id' => $post['id'],
            'comentario' => $post['comentario']
        ];

        if($comentarioModel->save($dados)){
            return redirect()->to('post/view/'.$post['id']);
        }
        else{
            echo view('post', [
                'post' => $dadosPost,
                'comentarios'=>  $comentarioModel->where('posts_id', $post['id'])->orderBy('created_at', 'desc')->findAll(),
                'errors' => $comentarioModel->errors()
            ]);
        }
    }
}