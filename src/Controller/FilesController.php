<?php
namespace App\Controller;

use Cake\Utility\Security;


class FilesController extends AppController{
    public function initialize() {
        parent::initialize();
      
        $this->Auth->allow(['index', 'upload','download','delete']);
        
    }

    

    public function index(){
         
        $files = $this->Files->find('all');
        $this->set('files', $files);
        
    }
    
   public function upload(){
        if($this->request->is('post')){
          $myname = $this->request->data['file']['name'];  
          $mytmp = $this->request->data['file']['tmp_name'];
          $myext = substr(strrchr($myname, "."), 1);
          $mypath = "upload/".Security::hash($myname).".".$myext; 
          $file = $this->Files->newEntity();
          $file->name = $myname;
          $file->path = $mypath;
          $file->created = date('Y-m-d H-i-s');
         if(move_uploaded_file($mytmp, WWW_ROOT.$mypath)){
             $this->Files->save($file);
                return $this->redirect([ 'action'=>'index']);
              
          }
         }
        }
        
       public function delete($id){
        $file = $this->Files->get($id);
        if(unlink(WWW_ROOT.$file->path)){
            $this->Files->delete($file);
            return $this->redirect(['action'=>'index']);
        }
    }
    
    public function download($id){
        $file = $this->Files->get($id);
        $path = WWW_ROOT.$file->path;
        $this->response->body(function()use($path){
            return file_get_contents($path);
            
        });
        return $this->response->withDownload($file->name);
        
    }
}
    
    
    


