<nav x-data="{ sidebarOpen: false, searchOpen: false }"
    class="fixed w-full top-0 z-50 bg-white border-b border-gray-200">
    <div class="w-full max-w-[1920px] mx-auto px-6 sm:px-10 lg:px-16 xl:px-24">
        <div class="flex justify-between items-center h-20">

            <!-- Left Side - Hamburger & Lanyard Shop Button -->
            <div class="flex items-center space-x-4">
                <!-- Hamburger Menu Button -->
                <button type="button" @click="sidebarOpen = true" class="border border-gray-300 p-3 hover:bg-gray-50 transition-colors focus:outline-none rounded-xl">
                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>

                <!-- Lanyard Shop Button -->
                <?php $__currentLoopData = $navbarItems ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <?php if($item->is_button): ?>
                        <a href="<?php echo e($item->menu_url ?? "#"); ?>"
                             <?php if($item->open_new_tab): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>
                            class="border border-gray-900 px-6 py-3 text-sm font-medium tracking-wider hover:bg-gray-900 hover:text-white transition-colors rounded-xl">
                           <?php echo e($item->menu_label); ?>

                        </a>
                    <?php endif; ?>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>






            <!-- Center - Logo -->
            <div class="flex-shrink-0">
                <a href="<?php echo e('#'); ?>" class="flex flex-col items-center group">
                    <!-- Logo Icon -->
                    <div class="text-3xl font-bold mb-1">
                        <img src="<?php echo e(asset('assets/apex favicon.jpeg')); ?>" alt="Apex Works Logo" class="w-20 h-20">
                        
                    </div>
                    
                </a>
            </div>





            <!-- Right Side - Desktop Menu -->
            <div class="hidden md:flex items-center space-x-8">
                <?php $__currentLoopData = $navbarItems ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if(!$item->is_button): ?>
                        
                    
                        <a href="<?php echo e($item->menu_url ?? '#'); ?>"
                           <?php if($item->open_new_tab): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>
                           class="text-sm font-medium tracking-wider text-gray-700 hover:text-gray-900 transition-colors <?php echo e(request()->is(trim($item->menu_slug, '/')) ? 'text-gray-900 font-semibold' : ''); ?>">
                            <?php echo e(strtoupper($item->menu_label)); ?>

                        </a>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <button @click="searchOpen = !searchOpen" class="flex items-center text-sm font-medium tracking-wider text-gray-700 hover:text-gray-900 transition-colors">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                    <span x-text="searchOpen ? 'CLOSE' : 'SEARCH'"></span>
                </button>
            </div>

            <!-- Mobile Right Menu -->
            <div class="flex md:hidden items-center space-x-4">
                <button @click="searchOpen = !searchOpen" class="text-gray-700 hover:text-gray-900">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>



    <!-- Search Popup -->
    <div x-show="searchOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-2"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-2"
         class="absolute top-full left-0 right-0 bg-white border-b border-gray-200 shadow-lg py-12">
        <div class="max-w-2xl mx-auto px-4">
            <form action="<?php echo e('#'); ?>" method="GET" class="flex items-center border-b-2 border-gray-300 focus-within:border-gray-900 transition-colors">
                <input type="text"
                       name="search"
                       placeholder="Cari produk kami..."
                       class="flex-1 py-4 text-xl outline-none bg-transparent placeholder-gray-400"
                       x-ref="searchInput"
                       @keydown.escape="searchOpen = false"
                       x-init="$watch('searchOpen', value => { if(value) setTimeout(() => $refs.searchInput.focus(), 100) })">
                <button type="submit" class="text-sm font-medium tracking-wider text-gray-600 hover:text-gray-900 px-4">
                    CARI
                </button>
            </form>
            <p class="mt-4 text-sm text-gray-500 text-center">Tekan Enter untuk mencari atau Escape untuk menutup</p>
        </div>
    </div>








    <!-- Sidebar Overlay -->
    <div x-show="sidebarOpen"
         x-cloak
         @click="sidebarOpen = false"
         x-transition:enter="transition-opacity ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition-opacity ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 bg-black/30 z-40">
    </div>

    <!-- Sidebar -->
    <div x-show="sidebarOpen"
         x-cloak
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="-translate-x-full"
         x-transition:enter-end="translate-x-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="translate-x-0"
         x-transition:leave-end="-translate-x-full"
         class="fixed top-0 left-0 w-80 h-full bg-gray-100 z-50 overflow-y-auto">

        <!-- Sidebar Header -->
        <div class="p-6 border-b border-gray-200 bg-white">
            <div class="flex items-center space-x-4">
                <!-- Close Button -->
                <button type="button" @click="sidebarOpen = false" class="border rounded-xl border-gray-300 p-3 hover:bg-gray-50 transition-colors focus:outline-none">
                    <svg class="h-6 w-6 text-gray-700" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>



                <!-- Lanyard Shop Button -->
                <a href="<?php echo e('#'); ?>" class="border border-gray-900 px-6 py-3 text-sm font-medium tracking-wider hover:bg-gray-900 hover:text-white transition-colors rounded-xl">
                    LANYARD SHOP
                </a>



            </div>
        </div>









        <!-- Sidebar Menu -->
        <div class="p-6 space-y-1">
            <?php $__currentLoopData = $sidebarItems ?? []; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($item->is_button): ?>
                    <a href="<?php echo e($item->menu_url ?? '#'); ?>"
                       <?php if($item->open_new_tab): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>
                       class="block py-3 text-base tracking-wider transition-colors rounded-xl <?php echo e($item->button_style === 'primary' ? 'bg-gray-900 text-white px-4 py-3 hover:bg-gray-800' : 'border border-gray-900 px-4 py-3 hover:bg-gray-900 hover:text-white'); ?>">
                        <?php echo e(strtoupper($item->menu_label)); ?>

                    </a>

                <?php else: ?>
                    <a href="<?php echo e($item->menu_url ?? '#'); ?>"
                       <?php if($item->open_new_tab): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>
                       class="block py-3 text-gray-700 hover:text-gray-900 transition-colors text-base tracking-wider <?php echo e(request()->is(trim($item->menu_slug, '/')) ? 'text-gray-900 font-semibold' : ''); ?>">
                        <?php if($item->menu_icon): ?>
                            <i class="<?php echo e($item->menu_icon); ?> mr-2"></i>
                        <?php endif; ?>
                        <?php echo e(strtoupper($item->menu_label)); ?>

                    </a>



                    <?php if($item->children->count() > 0): ?>
                        <div class="ml-6 space-y-1">
                            <?php $__currentLoopData = $item->children; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $child): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a href="<?php echo e($child->menu_url ?? '#'); ?>"
                                   <?php if($child->open_new_tab): ?> target="_blank" rel="noopener noreferrer" <?php endif; ?>
                                   class="block py-2 text-sm text-gray-600 hover:text-gray-900 transition-colors tracking-wider <?php echo e(request()->is(trim($child->menu_slug, '/')) ? 'text-gray-900 font-semibold' : ''); ?>">
                                    <?php echo e(strtoupper($child->menu_label)); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    <?php endif; ?>


                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</nav>
<?php /**PATH C:\laragon\www\apex-works\resources\views/frontend/layouts/navmenu.blade.php ENDPATH**/ ?>