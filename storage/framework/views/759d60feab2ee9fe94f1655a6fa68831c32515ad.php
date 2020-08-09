<?=
    /* Using an echo tag here so the `<? ... ?>` won't get parsed as short tags */
    '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<feed xmlns="http://www.w3.org/2005/Atom">
    <?php $__currentLoopData = $meta; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $metaItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($key === 'link'): ?>
            <<?php echo e($key); ?> href="<?php echo e(url($metaItem)); ?>"></<?php echo e($key); ?>>
        <?php elseif($key === 'title'): ?>
            <<?php echo e($key); ?>><![CDATA[<?php echo e($metaItem); ?>]]></<?php echo e($key); ?>>
        <?php else: ?>
            <<?php echo e($key); ?>><?php echo e($metaItem); ?></<?php echo e($key); ?>>
        <?php endif; ?>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <entry>
            <title><![CDATA[<?php echo e($item->title); ?>]]></title>
            <link rel="alternate" href="<?php echo e(url($item->link)); ?>" />
            <id><?php echo e(url($item->id)); ?></id>
            <author>
                <name> <![CDATA[<?php echo e($item->author); ?>]]></name>
            </author>
            <summary type="html">
                <![CDATA[<?php echo $item->summary; ?>]]>
            </summary>
            <?php if($item->__isset('enclosure')): ?>
              <enclosure url="<?php echo e(url($item->enclosure)); ?>" length="<?php echo e($item->enclosureLength); ?>" type="<?php echo e($item->enclosureType); ?>" />
            <?php endif; ?>
            <category type="html">
                <![CDATA[<?php echo $item->category ?? ''; ?>]]>
            </category>
            <updated><?php echo e($item->updated->toRssString()); ?></updated>
        </entry>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</feed>
<?php /**PATH D:\xampp\htdocs\feberr\resources\views/vendor/feed/atom.blade.php ENDPATH**/ ?>