<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Documents Controller
 *
 * @property \App\Model\Table\DocumentsTable $Documents
 *
 * @method \App\Model\Entity\Document[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class DocumentsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Applications', 'Users']
        ];
        $documents = $this->paginate($this->Documents);

        $this->set(compact('documents'));
    }

    /**
     * View method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $document = $this->Documents->get($id, [
            'contain' => ['Applications', 'Users']
        ]);

        $this->set('document', $document);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add($application_id = Null){
         $user_id = $this->Auth->user('id');
     if (is_null($application_id)) { // Documents must be attached to an application
            $this->redirect(['controller' => 'Applications', 'action' => 'index']);}
        $document = $this->Documents->newEntity();
        if ($this->request->is('post')) {
            $file = $this->request->data['file'];
            $file['name'] =  time() . '-' . str_replace(' ', '_', $file['name']); // timestamp files to prevent clobber
            if (move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['filename'] = $file['name'];
                $document = $this->Documents->patchEntity($document, $this->request->data);
                 if ($this->Documents->save($document)) {
                    $this->Flash->success(__('The document has been saved.'));
                    return $this->redirect(['controller' => 'Applications', 'action' => 'view', $document->application_id]);
                } else {
                    $this->Flash->error(__('The document could not be saved. Please, try again.'));
                }
            } else {
                $this->Flash->error(__('Could not upload the file'));
            }
        }
       
        $this->set(compact('document', 'application_id', 'user_id'));
        $this->set('_serialize', ['document']);
    }


    /**
     * Edit method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null) {
        $document = $this->Documents->get($id);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $file = $this->request->data['file'];
            if ($file['name'] != '' && move_uploaded_file($file['tmp_name'], WWW_ROOT . 'files/' . $file['name'])) {
                $this->request->data['filename'] = $file['name'];
            }
            $document = $this->Documents->patchEntity($document, $this->request->data);
            if ($this->Documents->save($document)) {
                $this->Flash->success(__('The document has been saved.'));
                return $this->redirect(['controller' => 'Applications', 'action' => 'view', $document->application_id]);
            } else {
                $this->Flash->error(__('The document could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('document'));
        $this->set('_serialize', ['document']);
    }


    /**
     * Delete method
     *
     * @param string|null $id Document id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $document = $this->Documents->get($id);
        if ($this->Documents->delete($document)) {
            $this->Flash->success(__('The document has been deleted.'));
        } else {
            $this->Flash->error(__('The document could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
