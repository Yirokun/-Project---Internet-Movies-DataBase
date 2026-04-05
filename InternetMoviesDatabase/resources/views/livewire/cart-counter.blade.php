<?php

use Livewire\Volt\Component;
use App\Models\CartItem;
use Illuminate\Support\Facades\Auth;

new class extends Component {
    
   
    protected $listeners = ['cart-updated' => '$refresh'];

    public function with(): array
    {
        return [
            'count' => Auth::check() 
                ? CartItem::where('user_id', Auth::id())->count() 
                : 0,
        ];
    }
}; ?>

<span class="inline-flex items-center justify-center px-2 py-1 text-[10px] font-black leading-none text-black bg-[#EAB308] rounded-full group-hover:bg-black group-hover:text-[#EAB308] transition-colors duration-300">
    {{ $count }}
</span>