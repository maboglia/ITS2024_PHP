@extends('prodotti.layout')

@section('contenuto')

<table>
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Prezzo</th>
    </tr>
    
    @foreach ($prodotti as $prodotto)
    
    <tr>
        <td>{{$prodotto->id}}</td>
        <td>{{$prodotto->nome}}</td>
        <td>{{$prodotto->prezzo}}</td>
    </tr>
    
    
    @endforeach
    
    
</table>


@endsection