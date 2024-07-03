<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Event\EventInterface;

class BlogsController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
    }
    public function home()
    {
        $this->loadModel('Articles');
        $articles = $this->Articles->find('all')
            ->order('Articles.id desc');
        $articlesList = $this->Articles->find('list', ['limit' => 3]);
        $this->set('articles', $this->paginate($articles, ['limit' => 2]));
        $this->set('articlesList', $articlesList);
    }

    public function about()
    {
//        $this->viewBuilder()->setLayout('about');
    }

    public function contact()
    {

    }
    public function view($id = null)
    {
        $this->loadModel('Articles');
        $article = $this->Articles->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('article'));
    }
}
