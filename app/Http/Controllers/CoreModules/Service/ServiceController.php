<?php

namespace App\Http\Controllers\CoreModules\Service;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    private $view   = 'core-modules.service.backend.';
    private $frontend_view = 'core-modules.service.frontend.';
    public function getListView() {
        $data = ServiceModel::orderBy('ordering', 'ASC')->get();

        return view()->make($this->view.'list')
                    ->with('data', $data);
    }

    public function getCreateView() {
        return view()->make($this->view.'create');
    }

    public function postCreateView() {

    }

    public function getEditView($id) {
        return view()->make($this->view.'edit');
    }

    public function postEditView($id) {

    }

    public function postDeleteView($id) {

    }
}
