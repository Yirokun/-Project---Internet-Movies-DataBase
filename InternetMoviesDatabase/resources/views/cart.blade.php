<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Panier</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-black text-white p-10">
    <div class="max-w-2xl mx-auto">
        <h1 class="text-4xl font-black mb-8 italic uppercase">Récapitulatif</h1>
        
        <livewire:cart-list />
        
        <div class="mt-10">
            <a href="/" class="text-gray-400 hover:text-white underline text-sm">← Retour à la boutique</a>
        </div>
    </div>

    <div class="max-w-4xl mx-auto p-10">
    <h1 class="text-3xl font-bold mb-6">MON PANIER</h1>
    
    <livewire:cart-list />
</div>
</body>
</html>