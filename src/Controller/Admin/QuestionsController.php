<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Questions Controller
 *
 * @property \App\Model\Table\QuestionsTable $Questions
 *
 * @method \App\Model\Entity\Question[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class QuestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()
    {
        $this->paginate = ['limit'=>'5'];
         $questions = $this->paginate($this->Questions->find('all'));

        $this->set('questions',$questions);
    }
    public function search(){
        $search = $this->request->getQuery('q');
        $questions = $this->paginate($this->Questions->find()->where(function($exp, $query) use($search){
        return $exp->like('body','%'.$search.'%');
        }));

        $this->set('questions',$questions);
  
    }

    public function home(){
        
        
        
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'home']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $categories = $this->Questions->Categories->find('list', ['limit' => 200]);
        $users = $this->Questions->Users->find('list', ['limit' => 200]);
        $tags = $this->Questions->Tags->find('list', ['limit' => 200]);
        $this->set(compact('question', 'categories', 'users', 'tags'));
        
         $this->paginate = [
            'contain' => ['Categories', 'Users']
        ];
        $questions = $this->paginate($this->Questions);

        $this->set(compact('questions'));
        
    }

    /**
     * View method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Categories', 'Users', 'Tags', 'Answers']
        ]);

        $this->set('question', $question);
        
        $this->loadModel('Answers');
          $answer = $this->Answers->newEntity();
        if ($this->request->is('post')) {
            $answer = $this->Answers->patchEntity($answer, $this->request->getData());
            if ($this->Answers->save($answer)) {
                $this->Flash->success(__('The answer has been saved.'));

                return $this->redirect(['controller' => 'Questions', 'action' => 'view', $id]);
            }
            $this->Flash->error(__('The answer could not be saved. Please, try again.'));
        }
        
        $users = $this->Answers->Users->find('list', ['limit' => 200]);
        $questions = $this->Answers->Questions->find('list', ['limit' => 200, $id]);
        $this->set(compact('answer', 'users', 'questions'));
        
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
       
        $question = $this->Questions->newEntity();
        if ($this->request->is('post')) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            $question->user_id = $this->Auth->user('id');
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $categories = $this->Questions->Categories->find('list', ['limit' => 200]);
        $users = $this->Questions->Users->find('list', ['limit' => 200]);
        $tags = $this->Questions->Tags->find('list', ['limit' => 200]);
        $this->set(compact('question', 'categories', 'users', 'tags', 'title'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $question = $this->Questions->get($id, [
            'contain' => ['Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $question = $this->Questions->patchEntity($question, $this->request->getData());
            if ($this->Questions->save($question)) {
                $this->Flash->success(__('The question has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The question could not be saved. Please, try again.'));
        }
        $categories = $this->Questions->Categories->find('list', ['limit' => 200]);
        $users = $this->Questions->Users->find('list', ['limit' => 200]);
        $tags = $this->Questions->Tags->find('list', ['limit' => 200]);
        $this->set(compact('question', 'categories', 'users', 'tags'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Question id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $question = $this->Questions->get($id);
        if ($this->Questions->delete($question)) {
            $this->Flash->success(__('The question has been deleted.'));
        } else {
            $this->Flash->error(__('The question could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
   
}
