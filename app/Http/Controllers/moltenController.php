<?php

namespace App\Http\Controllers;

use App\Models\level;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class moltenController extends Controller
{
    public function dashboard()
    {
        $sql = level::all();
        $mesin47 = $sql->find(47);
        $mesin48 = $sql->find(48);
        $mesin51 = $sql->find(51);
        $mesin52 = $sql->find(52);
        $mesin53 = $sql->find(53);
        $mesin54 = $sql->find(54);
        $mesin55 = $sql->find(55);
        $mesin56 = $sql->find(56);
        $mesin57 = $sql->find(57);
        $mesin58 = $sql->find(58);
        $mesin59 = $sql->find(59);
        $mesin60 = $sql->find(60);
        $mesin61 = $sql->find(61);
        $mesin62 = $sql->find(62);
        $mesin63 = $sql->find(63);
        $mesin64 = $sql->find(64);
        $mesin65 = $sql->find(65);
        $mesin66 = $sql->find(66);
        $mesin67 = $sql->find(67);
        $mesin68 = $sql->find(68);

        // return view('dashboard', [
        //     "molt" => $sql
        // ]);

        return view('dashboard', [
            "title" => 'Dashboard',
            "molt" => $sql,
            "molt1" => $mesin47,
            "molt2" => $mesin48,
            "molt3" => $mesin51,
            "molt4" => $mesin52,
            "molt5" => $mesin53,
            "molt6" => $mesin54,
            "molt7" => $mesin55,
            "molt8" => $mesin56,
            "molt9" => $mesin57,
            "molt10" => $mesin58,
            "molt11" => $mesin59,
            "molt12" => $mesin60,
            "molt13" => $mesin61,
            "molt14" => $mesin62,
            "molt15" => $mesin63,
            "molt16" => $mesin64,
            "molt17" => $mesin65,
            "molt18" => $mesin66,
            "mol19" => $mesin67,
            "molt20" => $mesin68

        ]);

        //   return view('widgets.test', [
        //     "title" => 'Dashboard',
        //     "molt" => $sql
        // ]);

        // return view('widgets.test', compact('molt'))  
        //     ;

    }



    public function index()
    {
        $sql = level::all();

        return view('details', [
            "title" => 'Details',
            "molt" => $sql,
            "moltmc" => level::find('mc')
        ]);
    }
    public function show(level $detail)
    {

        $sql =  level::where('mc', '=', $detail->mc)->get();

        return view('detail', [
            "title" => 'Detail',
            "molt" => $sql
        ]);
    }

    public function update(Request $request, level $detail)
    {

        // $mc = $request->mc;
        // $mc = $request->capacitity;
        // $mc = $request->min;
        // $mc = $request->max;


        $this->validate($request, [
            'capacity' => 'required',
            'min' => 'required',
            'max' => 'required'
        ]);



        $molten = level::find($detail->mc);
        $molten->update([
            'max' => $request->max,
            'min' => $request->min
        ]);

        $sql =  level::where('mc', '=', $detail->mc)->get();
        if ($request) {
            return redirect()->route('detail.index', [
                "title" => 'Detail',
                "molt" => $sql,
                // "success" => $this->withSession(['success'])
            ])->with(['success' => 'Data berhasil diubah']);
        } else {
            return redirect()->route('detail.show')->with(['error' => 'Data Gagal Diupdate!']);
        }

        return view('detail', [
            "title" => 'Detail',
            "molt" => $sql
            // return (dd($request));

        ]);
    }

    public function test()
    {
        return view('testjam', [
            "title" => 'Test Jam',
            // "molt" => $sql
            // return (dd($request));

        ]);
    }
}
