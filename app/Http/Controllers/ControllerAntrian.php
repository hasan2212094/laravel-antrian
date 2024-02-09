<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAntrian extends Controller
{
    public function index()
    {
        $data ['antri_dpt']= 0;
        $data ['antri_dpttb']= 0;
        $data ['antri_dpk']= 0;
        $data ['antri'] = "-";
        return view('antrian',$data);
    }
    public function antri_dpt($dpt,$dpttb,$dpk)
    {
        $data['antri_dpt'] = $dpt + 1;
        $data['antri_dpttb'] = $dpttb;
        $data['antri_dpk'] = $dpk;
        $data['antri'] = "dpt";
        return view('antrian',$data);
    }

    public function antri_dpttb($dpt,$dpttb,$dpk)
    {
        $data['antri_dpt'] = $dpt;
        $data['antri_dpttb'] = $dpttb + 1;
        $data['antri_dpk'] = $dpk;
        $data['antri'] = "dpttb";
        return view('antrian',$data);
    }

    public function antri_dpk($dpt,$dpttb,$dpk)
    {
        $data['antri_dpt'] = $dpt;
        $data['antri_dpttb'] = $dpttb;
        $data['antri_dpk'] = $dpk + 1;
        $data['antri'] = "dpk";
        return view('antrian',$data);
    }
    
}
