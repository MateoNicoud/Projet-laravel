

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



@php(dd($product,$productOptions,$productCategory,$productComments));

