<?php

namespace App\Controllers;

class baseDisplay extends BaseController
{
    public function home(): string
    {
        return view('baseDisplay/baseDisplaySBAdmin2');
    }

    public function table(): string
    {
        return view('baseDisplay/baseDisplayTable');
    }

    public function viewData(): string
    {
        return view('project_uas/checkReturnData');
    }
}
