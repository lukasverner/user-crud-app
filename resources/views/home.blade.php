<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('labels.user-crud-app') }}
        </h2>
    </x-slot>

    @auth
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __('labels.logged-in') }}
                </div>
            </div>
        </div>
    </div>
    @endauth

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <p> Zombies reversus ab inferno, nam malum cerebro. De carne animata corpora quaeritis. Summus sit​​, morbo vel maleficia?
                        De Apocalypsi undead dictum mauris. Hi mortuis soulless creaturas, imo monstra adventus vultus comedat cerebella viventium.
                        Qui offenderit rapto, terribilem incessu. The voodoo sacerdos suscitat mortuos comedere carnem.
                        Search for solum oculi eorum defunctis cerebro. Nescio an Undead zombies. Sicut malus movie horror.
                    </p>
                    <br>
                    <p>
                        Cum horribilem resurgere de sepulcris creaturis, sicut de iride et serpens. Pestilentia, ipsa screams.
                        Pestilentia est haec ambulabat mortuos. Sicut malus voodoo. Aenean a dolor vulnerum aperire accedunt,
                        mortui iam vivam. Qui tardius moveri, sed in magna copia sint terribiles legionis.
                        Alii missing oculis aliorum sicut serpere crabs nostram. Putridi odores aere implent.
                    </p>
                    <br>
                    <p> I love cheese, especially cheese slices macaroni cheese. When the cheese comes out everybody's happy
                        caerphilly everyone loves port-salut cottage cheese paneer goat fromage frais. Ricotta cheeseburger
                        stilton lancashire cheese triangles cheddar stinking bishop cheddar. Bocconcini blue castello manchego
                        cream cheese manchego bavarian bergkase danish fontina melted cheese. Caerphilly port-salut fromage
                        paneer cheese strings hard cheese airedale stilton. Who moved my cheese goat croque monsieur fromage
                        frais macaroni cheese cheese slices the big cheese cheese and biscuits. Jarlsberg stinking bishop
                        fromage caerphilly emmental camembert de normandie cheesy grin cheeseburger. Brie jarlsberg
                        dolcelatte brie.
                    </p>
                    <br>
                    <p>
                        Croque monsieur fondue danish fontina. Babybel the big cheese lancashire fromage frais mascarpone
                        edam cheesecake monterey jack. Queso feta cheesy feet camembert de normandie who moved my cheese
                        pecorino halloumi halloumi. Macaroni cheese parmesan camembert de normandie lancashire macaroni
                        cheese ricotta hard cheese jarlsberg. Fromage mozzarella cow dolcelatte pepper jack fromage
                        paneer gouda. When the cheese comes out everybody's happy jarlsberg blue castello paneer.
                    </p>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
