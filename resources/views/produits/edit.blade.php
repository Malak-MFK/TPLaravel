@extends('produits')

@section('content')

<div class="container justify-content-center my-5">

    <form class="p-4" method="POST" action="{{route('produits.edit')}}">
        @csrf
        <div class="form-row row m-2">
            <div class="form-group col-md-4">
                <label >Libelle</label>
                <input type="text" name="Libelle" class="form-control" value="{{$produit['Libelle']}}" required placeholder="Libelle...">
            </div>
            <div class="form-group col-md-4">
                <label >Marque</label>
                <input type="text" name="Marque" class="form-control"  value="{{$produit['']}}" required placeholder="Marque...">
            </div>
        </div>
        <div class="form-row row m-2">
            <div class="form-group col-md-4">
              <label >Prix</label>
              <input type="number" name="Prix" class="form-control" value="{{$produit['']}}" required placeholder="Prix...">
            </div>
            <div class="form-group col-md-4">
              <label >Quantité en stock</label>
              <input type="number" name="Stock" class="form-control"  value="{{$produit['']}}" required placeholder="Stock...">
            </div>
        </div>
        <br>

            <div class="col-md-8 tjustify-content-center">
                <button type="submit" class="btn btn-primary col-md-4">Ajouter Produit</button>
            </div>

    </form>

</div>
@endsection
