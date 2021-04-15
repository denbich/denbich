@component('sum')

@slot('value1')
10
@endslot

@slot('value2')
20
@endslot

@slot('value3')
30
@endslot

@endcomponent

<div>
    Wynik dodawania liczby {{ $value1 }} i liczby {{ $value2 }} wynosi {{ $result }}
</div>


