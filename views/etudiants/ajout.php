
    <!-- contenu -->

    <div class="bg-gray-100 flex items-center  justify-center">
    <div class="bg-white shadow-2xl mt-5 rounded-2xl w-full max-w-2xl p-8">

        <h2 class="text-3xl font-bold text-center text-indigo-600 mb-8">
            Ajouter un étudiant
        </h2>

        <form action="<?=WEBROOT?>" method="post" class="space-y-6">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Matricule</label>
                    <input type="text" name="matricule"  value="<?=$save["matricule"]??""?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                          <p class="mt-2 text-sm text-red-600" id="email-error"><?=$errors["matricule"]??""?></p>
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Nom</label>
                    <input type="text" name="nom" value="<?=$save["nom"]??""?>"
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                                                  <p class="mt-2 text-sm text-red-600" id="email-error"><?=$errors["nom"]??""?></p>

                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Prénom</label>
                    <input type="text" name="prenom" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Email</label>
                    <input type="email" name="email" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                </div>

                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Téléphone</label>
                    <input type="text" name="telephone" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                </div>

                <!-- Select Niveau -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">Classe</label>
                    <select name="classe_id" 
                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-indigo-400 focus:outline-none">
                        <option value="">-- Choisir une classe --</option>
                        <?php foreach ($classes as $classe): ?>
                        <option value="<?=$classe["id"]?>"><?=$classe["libelle"]?></option>
                        <?php endforeach  ?>

                    </select>
                </div>

             
            <input type="hidden" name="controller" value="etudiant">
            <input type="hidden" name="page" value="ajout">

            <div class="text-center pt-4">
                <button type="submit"
                    class="bg-indigo-600 text-white px-6 py-3 rounded-lg font-semibold hover:bg-indigo-700 transition">
                    Enregistrer
                    
                </button>
            </div>

        </form>
    </div>
    </div>
    

