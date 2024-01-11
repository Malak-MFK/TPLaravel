<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ProduitController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    
    private $produits = array(
        array('Ref'=>1, 'Libelle'=>"HP Probook", 'Marque'=>"HP", 'Prix'=>5000.0, 'Stock'=>11, 'Image'=>'image1.jpg'),
        array('Ref'=>2, 'Libelle'=>"MacBook Pro 2022", 'Marque'=>"Apple", 'Prix'=>15000.0, 'Stock'=>5, 'Image'=>'image2.jpg'),
        array('Ref'=>3, 'Libelle'=>"Lenovo Thinkpad", 'Marque'=>"Lenovo", 'Prix'=>6000.0, 'Stock'=>20, 'Image'=>'image3.jpg'),
        array('Ref'=>4, 'Libelle'=>"Windows Laptop", 'Marque'=>"Microsoft", 'Prix'=>13500.0, 'Stock'=>2, 'Image'=>'image4.jpg'),
        array('Ref'=>5, 'Libelle'=>"MateBook X Pro", 'Marque'=>"Huawei", 'Prix'=>20000.0, 'Stock'=>6, 'Image'=>'image5.jpg')
    );

    public function index()
    {
        return view('produits.index', ['produits'=>$this->produits]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('produits.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $newProduct = [
        'Ref' => count($this->produits) + 1,
        'Libelle' => $request->input('Libelle'),
        'Marque' => $request->input('Marque'),
        'Prix' => $request->input('Prix'),
        'Stock' => $request->input('Stock'),
        ];

        $this->produits[] = $newProduct;
        return redirect()->route('produits.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($ref)
    {
        $produit = collect($this->produits)->firstWhere('Ref', $ref);
        return view ('produits.show', ['produit'=>$produit]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($ref)
    {
        $produit = collect($this->produits)->firstWhere('Ref', $ref);
        return view('produits.edit', ['produit'=>$produit]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $produit = [
            'Libelle' => $request->input('Libelle'),
            'Marque' => $request->input('Marque'),
            'Prix' => $request->input('Prix'),
            'Stock' => $request->input('Stock'),
            ];

            return redirect()->route('produits.index');
        }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($ref)
    {
            $index = array_search($ref, array_column($this->produits, 'Ref'));

            if ($index !== false) {
                unset($this->produits[$index]);
            }

            $this->produits = array_values($this->produits);

            return redirect()->route('produits.index');
    }
}