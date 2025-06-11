<section class="mb-20">
    <h2 class="text-2xl font-bold mb-4 creepster">
        Nos monstres:
    </h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Monster Item -->
        <?php foreach ($allMonsters as $monster): ?>
            <article
                class="relative bg-gray-700 rounded-lg shadow-lg hover:shadow-2xl transition-shadow duration-300 monster-card"
                data-monster-type="<?php echo strtolower($monster['nomt']); ?>">
                <img
                    class="w-full h-48 object-cover rounded-t-lg"
                    src="../doc/template/images/<?php echo $monster['image_url']; ?>"
                    alt="images de <?php echo $monster['nomm']; ?>" />
                <div class="p-4">
                    <h3 class="text-xl font-bold"><?php echo $monster['nomm']; ?></h3>
                    <h4 class="mb-2">
                        <a href="#" class="text-red-400 hover:underline"><?php echo $monster['user_id']; ?></a>
                    </h4>
                    <p class="text-gray-300 text-sm mb-2">
                        <?php echo $monster['description']; ?>
                    </p>
                    <div class="flex justify-between items-center mb-2">
                        <div>
                            <span class="text-yellow-400"><?php echo $monster['rarity']; ?></span>
                        </div>
                        <span class="text-sm text-gray-300">Type: <?php echo $monster['nomt']; ?></span>
                    </div>
                    <div class="flex justify-between items-center mb-4">
                        <span class="text-sm text-gray-300">PV: <?php echo $monster['pv']; ?></span>
                        <span class="text-sm text-gray-300">Attaque: <?php echo $monster['attack']; ?></span>
                    </div>
                    <div class="text-center">
                        <a
                            href="monster.html"
                            class="inline-block text-white bg-red-500 hover:bg-red-700 rounded-full px-4 py-2 transition-colors duration-300">Plus de détails</a>
                    </div>
                </div>
            </article>
        <?php endforeach; ?>
        <!-- Répétez pour d'autres monstres -->
    </div>
</section>