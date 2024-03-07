


<div>
    slug :{{$product->slug}}
</div>

{{--Categorie :{{$productOptions->name}}--}}
<div>
</div>
<div>
    Prix :{{$productOptions[0]->price_ttc}}
</div>
<div>
    Poids :{{$productOptions[0]->weight}}
</div>
<div>
    Name :{{$product->name}}
</div>
<div>
    Marque :{{$product->brand}}
</div>


<div>
    description :{{$product->description}}
</div>
<div>
    reference :{{$product->reference}}
</div>
<div>
    image principale :{{$productImg->main_img}}
</div>
<div>
    image arrière :{{$productImg->back_img}}
</div>
<div>
    image gauche :{{$productImg->left_img}}
</div>
<div>
    image droite :{{$productImg->right_img}}
</div>
<div>
    image devant :{{$productImg->front_img}}
</div>


@php(dd($product,$productOptions,$productCategory,$productComments));



