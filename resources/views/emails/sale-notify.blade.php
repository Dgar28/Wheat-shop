<x-mail::message>
# Sale created
 
A new sale has been done!
 The sale {{ $sale->sale_folio}} has been created. Reference date is {{$sale->sale_date}}
 Hope our customer will be happy.
    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>