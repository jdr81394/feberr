<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    <?php $__currentLoopData = $subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categories): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <url>
            <loc><?php echo e(URL::to('/')); ?>/shop/subcategory/<?php echo e($categories->subcat_id); ?>/<?php echo e($categories->subcategory_slug); ?></loc>
            <lastmod><?php echo e(date('Y-m-d H:i:s')); ?></lastmod>
            <changefreq>daily</changefreq>
            <priority>0.9</priority>
        </url>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</urlset><?php /**PATH D:\xampp\htdocs\feberr\resources\views/sitemap/subcategory.blade.php ENDPATH**/ ?>