<p>
    Time: {{ $diff }}
</p>

<p>
    Search: {{ $search }}
</p>

@foreach ($result as $product)
    <p>
        {{ $product->id }} - {{ $product->name }} - {{ $product->description }}
    </p>

@endforeach

<p>
    Totals: {{ $result->count() }}
</p>
