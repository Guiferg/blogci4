<?php namespace App\Controllers;

use App\Models\ComentarioModel;
use App\Models\PostModel;

class Post extends BaseController
{
    public function index(){
        return view('post/home');
    }

    public function view($id_post){
        $postModel = new PostModel();
        $comentarioModel = new ComentarioModel();

        $dados = [
            'post' => $postModel->find($id_post),
            'comentarios' => $comentarioModel->where('posts_id', $id_post)->orderBy('created_at', 'desc')->findAll()
        ];

        echo view('post', $dados);
    }

    public function create(){

        echo view('form', [
            'titulo' => 'Novo Post'
        ]);
    }

    public function store(){
        $postModel = new PostModel();
        $post = $this->request->getPost();

        if($postModel->save($post)){
            return redirect()->to('/post/sucesso');
        }
        else{
            echo view('form', [
                'titulo' => 'Novo Post',
                'errors' => $postModel->errors()
            ]);
        }
    }

    public function sucesso(){
        return view('sucesso');
    }

    public function edit($id){
        $postModel = new PostModel();
        $post = $postModel->find($id);

        $dados = [
            'titulo' => 'Edição de Post',
            'post' => $post
        ];

        return view('form', $dados);
    }

    public function excluir($id){
        $postModel = new PostModel();

        if($postModel->delete($id)){
            return redirect()->to('/post/sucesso')->with('mensagem', 'Post excluído com sucesso!');
        } else{
        }
    }
}