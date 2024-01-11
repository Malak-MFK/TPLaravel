@extends('produits')

@section('content')


<center>

    <div class="card col-md-5 m-4">
        <img src="{{asset('images/' . $produit['Image'])}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h4 class="card-title">{{$produit['Libelle']}}</h4>
      <h5>({{$produit['Marque']}})</h5>
      <br>
      <h6 class="card-title">{{$produit['Prix']}},- Dhs</h6>
      <p>{{$produit['Stock']}} en stock</p>
      <div class="">
          <a href="{{ route('produits.edit', ['produit' => $produit['Ref']]) }}" class=" col-md-4 mx-4 btn btn-success">Modifer</a>
          <a href="{{ route('produits.destroy', ['produit' => $produit['Ref']]) }}" class=" col-md-4 mx-4 btn btn-danger">Supprimer</a>
        </div>
        <div class="my-4 card-footer">
            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
        </div>
    </div>
</div>
</center>

@endsection
