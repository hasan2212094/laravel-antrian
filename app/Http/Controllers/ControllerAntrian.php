<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerAntrian extends Controller
{
    public function index()
    {
        $data ['antri_dpt']= 0;
        $data['antri_dpt_perempuan']=0;
        $data['antri_dpt_laki']=0;
        $data ['antri_dpttb']= 0;
        $data['antri_dpttb_perempuan']=0;
        $data['antri_dpttb_laki']=0;
        $data ['antri_dpk']= 0;
        $data['antri_dpk_perempuan']=0;
        $data['antri_dpk_laki']=0;
        $data ['antri'] = "-";
        return view('antrian',$data);
    }
    public function antri_dpt($antri_dpt_perempuan, $antri_dpt_laki, $antri_dpttb_perempuan, $antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan + 1;
        $data['antri_dpt_laki'] = $antri_dpt_laki + 1;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki;

        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;

        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;


        $data['antri'] = "dpt";
        return view('antrian',$data);
    }
    public function antri_dpt_perempuan($antri_dpt_perempuan, $antri_dpt_laki, $antri_dpttb_perempuan,$antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan + 1;
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki + 1;

        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;
        
        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;

        $data['antri'] = "dpt_perempuan";
        return view('antrian',$data);
    }

    public function antri_dpt_laki($antri_dpt_perempuan, $antri_dpt_laki, $antri_dpttb_perempuan, $antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_laki'] = $antri_dpt_laki + 1;
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki + 1;

        
        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;
        
        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;

        $data['antri'] = "dpt_laki";
        return view('antrian',$data);
    }

    public function antri_dpttb($antri_dpt_perempuan, $antri_dpt_laki,$antri_dpttb_perempuan, $antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan ;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki ;
        $data['antri_dpttb'] =  $antri_dpttb_perempuan + $antri_dpttb_laki + 1;

        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt'] = $antri_dpt_perempuan +  $antri_dpt_laki;

        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;


        $data['antri'] = "dpttb";
        return view('antrian',$data);
    }

    public function antri_dpttb_perempuan($antri_dpt_perempuan, $antri_dpt_laki,$antri_dpttb_perempuan,$antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan + 1;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] =  $antri_dpttb_perempuan + $antri_dpttb_laki + 1;

        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt'] = $antri_dpt_perempuan +  $antri_dpt_laki;
        
        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;

        $data['antri'] = "dpttb_perempuan";
        return view('antrian',$data);
    }

    public function antri_dpttb_laki($antri_dpt_perempuan, $antri_dpt_laki, $antri_dpttb_perempuan,$antri_dpttb_laki ,$antri_dpk_perempuan,$antri_dpk_laki,)
    {
        $data['antri_dpttb_laki'] = $antri_dpttb_laki + 1;
        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb'] =  $antri_dpttb_perempuan + $antri_dpttb_laki + 1;

        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt'] = $antri_dpt_perempuan +  $antri_dpt_laki;
        
        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;

        $data['antri'] = "dpttb_laki";
        return view('antrian',$data);
    }


    public function antri_dpk($antri_dpt_perempuan, $antri_dpt_laki,$antri_dpttb_perempuan, $antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan ;
        $data['antri_dpt_laki'] = $antri_dpt_laki ;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki;

        
        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;

        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan + 1 ;
        $data['antri_dpk_laki'] = $antri_dpk_laki + 1;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki;

        $data['antri'] = "dpk";
        return view('antrian',$data);
    }

    public function antri_dpk_perempuan($antri_dpt_perempuan, $antri_dpt_laki,$antri_dpttb_perempuan,$antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki;

        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;

        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan + 1 ;
        $data['antri_dpk_laki'] = $antri_dpk_laki;
        $data['antri_dpk'] = $antri_dpk_perempuan + $antri_dpk_laki + 1 ;

        $data['antri'] = "dpk_perempuan";
        return view('antrian',$data);
    }

    public function antri_dpk_laki($antri_dpt_perempuan, $antri_dpt_laki,$antri_dpttb_perempuan,$antri_dpttb_laki,$antri_dpk_perempuan, $antri_dpk_laki,)
    {
        $data['antri_dpt_laki'] = $antri_dpt_laki;
        $data['antri_dpt_perempuan'] = $antri_dpt_perempuan;
        $data['antri_dpt'] =  $antri_dpt_perempuan + $antri_dpt_laki;

        $data['antri_dpttb_perempuan'] = $antri_dpttb_perempuan ;
        $data['antri_dpttb_laki'] = $antri_dpttb_laki;
        $data['antri_dpttb'] = $antri_dpttb_perempuan +  $antri_dpttb_laki;

        $data['antri_dpk_perempuan'] = $antri_dpk_perempuan ;
        $data['antri_dpk_laki'] = $antri_dpk_laki + 1;
        $data['antri_dpk'] = $antri_dpk_perempuan +  $antri_dpk_laki + 1;

        $data['antri'] = "dpk_laki";
        return view('antrian',$data);
    }
    
}
