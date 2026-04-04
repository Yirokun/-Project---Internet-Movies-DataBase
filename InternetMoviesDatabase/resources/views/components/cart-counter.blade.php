<?php

use Livewire\Component;
use App\Models\CartItem;

new class extends Component {
    protected $listeners = ['cart-updated' => '$refresh'];

    public function with(): array
    {
        return [
            'count' => auth()->check() ? CartItem::where('user_id', auth()->id())->count() : 0
        ];
    }
}; ?>

<div class="relative">
    @if($count > 0)
        <span class="absolute -top-1 -right-2 bg-yellow-500 text-black text-[8px] font-black px-1.5 py-0.5 rounded-full animate-pulse shadow-[0_0_8px_rgba(234,179,8,0.5)]">{{ $count }}</span>
    @endif
</div>