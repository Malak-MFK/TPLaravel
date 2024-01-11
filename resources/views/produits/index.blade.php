@extends('produits')

@section('content')
<div class="container m-auto my-5 justify-content-center">
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th scope="col"><u></u></th>
                    <th scope="col"><u>Libelle</u></th>
                    <th scope="col"><u>Marque</u></th>
                    <th scope="col"><u>Prix</u></th>
                    <th scope="col"><u>Détails</u></th>
                    <th scope="col"><u>Modifer</u></th>
                    <th scope="col"><u>Supprimer</u></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produits as $produit)
                <tr>

                    <td><img width="120px" src="{{asset('images/' . $produit['Image'])}}"></td>
                    <th scope="row">{{$produit['Libelle']}}</th>
                    <td>{{$produit['Marque']}}</td>
                    <td>{{$produit['Prix']}},- Dhs</td>
                    <td><a href="{{ route('produits.show', ['produit' => $produit['Ref']]) }}" class="btn btn-primary">Détails</a></td>
                    <td><a href="{{ route('produits.edit', ['produit' => $produit['Ref']]) }}" class="btn btn-success">Modifer</a></td>
                    <td>
                        <form action="{{route('produits.destroy', ['produit'=>$produit['Ref']])}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
</div>
@endsection
