<?php
namespace App\Controllers;
use App\Controllers\BaseController;
use App\Models\PodcastModel;

class Podcast extends BaseController
{
    protected $podcastModel;

    public function __construct()
    {
        $this->podcastModel = new PodcastModel();
    }

    

    public function index()
    {
        $session = session();

        // $this->penampung($session->get("success"));
        $berhasil = $session->get("success");
        $gagal = $session->get("gagal");
        $berhasilDelate = $session->get("berhasilDelete");



        $data = [
            'podcast' => $this->podcastModel->findAll(),
            'berhasil' => $berhasil,
            'gagal' => $gagal,
            'deleteBerhasil' => $berhasilDelate, 
        ];

        // dd($this->podcastModel->findAll());
        return view('podcast/index', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'title' => 'required',
            'category' => 'required',
        ])){
            return redirect()->to(base_url("/Podcast"))->with("gagal", "Data Gagal di Tambahkan!!! Title Atau Category Belum diisi");
        }
        $myTime = date("Y-m-d H:i:s");
        // ----------------Image Handler------------------------------------
        $imageFile = $this->request->getFile('image');
        $imageName = $imageFile->getName();
        $imageFile->move('img');

        // Change to Base Url
        $imageUrl = base_url("/img/$imageName");
        // ----------------Image Handler------------------------------------

        // --------------Voice Handler---------------------------------------
        $voiceFile = $this->request->getFile('voice');
        $voiceName = $voiceFile->getName();
        $voiceFile->move('voice');

        // Change to Base Url
        $voiceUrl = base_url("/voice/$voiceName");

        // ----------------Image Handler------------------------------------

        // --------------Voice Handler--------------------------------------

        $this->podcastModel->save([
            'title' => $this->request->getVar('title'),
            'voice_url' => $voiceUrl,
            'category' => $this->request->getVar('category'),
            'image_url' => $imageUrl,
            'created_at' => $myTime,
        ]);

        // return redirect()->to('/podcast');
        return redirect()->to(base_url("/Podcast"))->with("success", "Data Berhasil Ditambahkan !!!");
    }



    public function delete($id)
    {
        $this->podcastModel->delete($id);
        return redirect()->to(base_url("/Podcast"))->with("berhasilDelete", "Data Berhasil Di Hapus");
    }



}