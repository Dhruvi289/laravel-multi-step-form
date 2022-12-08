<!-- need to remove -->
<li class="nav-item">
    <a href="<?php echo e(route('home')); ?>" class="nav-link <?php echo e(Request::is('home') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Home</p>
    </a>
</li>
<li class="nav-item">
    <a href="<?php echo e(route('products')); ?>" class="nav-link <?php echo e(Request::is('products') ? 'active' : ''); ?>">
        <i class="nav-icon fas fa-home"></i>
        <p>Products</p>
    </a>
</li>
<?php /**PATH E:\wampp\www\multi-step\resources\views/layouts/menu.blade.php ENDPATH**/ ?>