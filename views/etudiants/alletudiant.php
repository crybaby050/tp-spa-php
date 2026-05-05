   <div class="container mx-auto mt-10 px-4">

        <div class="bg-white shadow-xl rounded-2xl overflow-hidden">
            <div class="p-6 border-b">
                <h2 class="text-2xl font-bold text-gray-700">
                    Liste des étudiants
                </h2>
                
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-600">
                    <thead class="bg-gray-200 text-gray-700 uppercase text-xs">
                        <tr>
                            <th class="px-6 py-3">Matricule</th>
                            <th class="px-6 py-3">Nom</th>
                            <th class="px-6 py-3">Prénom</th>
                            <th class="px-6 py-3">Email</th>
                            <th class="px-6 py-3">Téléphone</th>
                            <th class="px-6 py-3">Classe</th>
                            <!-- <th class="px-6 py-3">Filière</th> -->
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($etudiants as $value): ?>
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium"><?= $value["matricule"] ?></td>
                            <td class="px-6 py-4"><?= $value["nom"] ?></td>
                            <td class="px-6 py-4"><?= $value["prenom"] ?></td>
                            <td class="px-6 py-4"><?= $value["email"] ?></td>
                            <td class="px-6 py-4"><?= $value["telephone"] ?></td>
                            <td class="px-6 py-4">
                                <span class="bg-blue-100 text-blue-600 px-3 py-1 rounded-full text-xs font-semibold">
                                    <?= $value["libelle"] ?>
                                </span>
                            </td>
                            <!-- <td class="px-6 py-4">
                                <span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-xs font-semibold">
                                    <?= $value["filiere"] ?>
                                </span>
                            </td> -->
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

        </div>
    </div>
