<?php

class reuzenradController extends BaseController
{
    private $reuzenradModel;

    public function __construct()
    {
        $this->reuzenradModel = $this->model('reuzenradModel');
    }

    public function index()
    {
        $reuzenrad = $this->reuzenradModel->getTopreuzenrad();

        $rows = '';
        foreach ($reuzenrad as $result) {
            $rows .= "<tr>
                        <td>$result->Id</td>
                        <td>$result->Naam</td>
                        <td>$result->Hoogte</td>
                        <td>$result->Land</td>
                        <td>$result->Kosten</td>
                        <td>$result->AantalPassagiers</td>
                      </tr>";
        }

        $data = [
            'title' => 'Top hoogste reuzenraden ter wereld',
            'rows'  => $rows
        ];

        $this->view('reuzenrad/index', $data);
    }
}