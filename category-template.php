<?php
// Prevent direct access
defined('ABSPATH') or die('No script kiddies please!');
?>

<div class="container mx-auto px-4">
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <?php foreach ($categories['results'] as $category): ?>
            <div class="max-w-sm rounded overflow-hidden shadow-lg m-4 flex flex-col">
                <div class="px-6 py-4 flex-grow">
                    <div class="font-bold text-xl mb-2"><?php echo esc_html($category['title']); ?></div>
                    <p class="text-gray-700 text-base">
                        <?php echo wp_kses_post($category['description']); ?>
                    </p>
                    <a href="<?php echo esc_url($api_url); ?>/?subject=<?php echo $category['id'] ?>#subject_title" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Cursussen binnen <?php echo esc_html($category['title']); ?></a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
