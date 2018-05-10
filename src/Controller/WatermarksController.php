<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WaterMarks Controller
 *
 *
 * @method \App\Model\Entity\WaterMark[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WaterMarksController extends AppController
{

    var $uploadPath = WWW_ROOT.'/uploads/watermarks';
    var $uploadBaseUrl = 'uploads/watermarks';

    public function initialize()
    {
        parent::initialize();
        $this->loadModel('WaterMarks');

    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $waterMarks = $this->paginate($this->WaterMarks);

        $this->set(compact('waterMarks'));
    }

    /**
     * View method
     *
     * @param string|null $id Water Mark id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $waterMark = $this->WaterMarks->get($id, [
            'contain' => []
        ]);

        $this->set('waterMark', $waterMark);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $waterMark = $this->WaterMarks->newEntity();
        if ($this->request->is('post')) {

            // Default Upload images
            $this->uploadImage('default_image', 'image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('facebook_image', 'fb_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('twitter_image', 'tw_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('instagram_image', 'it_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('snapshot_image', 'sn_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('pinterest_image', 'pt_image_url', $this->uploadPath, $this->uploadBaseUrl);

            $waterMark = $this->WaterMarks->patchEntity($waterMark, $this->request->getData());
            if ($this->WaterMarks->save($waterMark)) {
                $this->Flash->success(__('The water mark has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The water mark could not be saved. Please, try again.'));
        }
        $this->set(compact('waterMark'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Water Mark id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $waterMark = $this->WaterMarks->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            // Default Upload images
            $this->uploadImage('default_image', 'image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('facebook_image', 'fb_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('twitter_image', 'tw_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('instagram_image', 'it_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('snapshot_image', 'sn_image_url', $this->uploadPath, $this->uploadBaseUrl);
            $this->uploadImage('pinterest_image', 'pt_image_url', $this->uploadPath, $this->uploadBaseUrl);

            $waterMark = $this->WaterMarks->patchEntity($waterMark, $this->request->getData());
            if ($this->WaterMarks->save($waterMark)) {
                $this->Flash->success(__('The water mark has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The water mark could not be saved. Please, try again.'));
        }
        $this->set(compact('waterMark'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Water Mark id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $waterMark = $this->WaterMarks->get($id);
        if ($this->WaterMarks->delete($waterMark)) {
            $this->Flash->success(__('The water mark has been deleted.'));
        } else {
            $this->Flash->error(__('The water mark could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
