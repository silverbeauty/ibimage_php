<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Advertisements Controller
 *
 * @property \App\Controller\Component\FileuploadComponent $Fileupload
 * @method \App\Model\Entity\Advertisement[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AdvertisementsController extends AppController
{

    var $uploadPath = WWW_ROOT.'/uploads/ads';
    var $uploadBaseUrl = 'uploads/ads';

    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Fileupload');
        $this->loadComponent('Option');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $advertisements = $this->paginate($this->Advertisements);

        $this->set(compact('advertisements'));
    }

    /**
     * View method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $advertisement = $this->Advertisements->get($id, [
            'contain' => []
        ]);

        $this->set('advertisement', $advertisement);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $advertisement = $this->Advertisements->newEntity();
        if ($this->getRequest()->is('post')) {

            $this->uploadImage('image_upload', 'image_url', $this->uploadPath, $this->uploadBaseUrl);

            $advertisement = $this->Advertisements->patchEntity($advertisement, $this->getRequest()->getData());
            if ($this->Advertisements->save($advertisement)) {
                $this->Flash->success(__('The advertisement has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The advertisement could not be saved. Please, try again.'));
        }
        $this->set(compact('advertisement'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $advertisement = $this->Advertisements->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // Upload images
            $this->uploadImage('image_upload', 'image_url', $this->uploadPath, $this->uploadBaseUrl);

            $advertisement = $this->Advertisements->patchEntity($advertisement, $this->getRequest()->getData());
            if ($this->Advertisements->save($advertisement)) {
                $this->Flash->success(__('The advertisement has been saved.'));

                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The advertisement could not be saved. Please, try again.'));
            }

        }
        $this->set(compact('advertisement'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Advertisement id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $advertisement = $this->Advertisements->get($id);
        if ($this->Advertisements->delete($advertisement)) {
            $this->Flash->success(__('The advertisement has been deleted.'));
        } else {
            $this->Flash->error(__('The advertisement could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
