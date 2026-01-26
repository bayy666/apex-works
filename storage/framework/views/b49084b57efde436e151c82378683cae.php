</section>

<!-- Akhir Section About -->
</section>

<!-- Cinematic Scroll-Driven Animation Section -->
<section id="scroll-cinematic" class="relative bg-black py-32 overflow-hidden">
    <div class="max-w-5xl mx-auto flex flex-col items-center justify-center min-h-[80vh]">
        <div class="relative w-full h-[500px]">
            <div id="image-sequence" class="absolute inset-0 w-full h-full flex items-center justify-center">
                <!-- Ganti dengan gambar sequence kamu, contoh 5 frame -->
                <img src="https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?w=900&q=80" class="seq-img absolute w-full h-full object-contain opacity-0" style="z-index:1;" loading="lazy">
                <img src="https://images.unsplash.com/photo-1461632830798-3adb3034e4c8?w=900&q=80" class="seq-img absolute w-full h-full object-contain opacity-0" style="z-index:2;" loading="lazy">
                <img src="<?php echo e(('assets/images/hero/bg-1.jpg')); ?>" class="seq-img absolute w-full h-full object-contain opacity-0" style="z-index:3;" loading="lazy">
                <img src="https://images.unsplash.com/photo-1502877338535-766e1452684a?w=900&q=80" class="seq-img absolute w-full h-full object-contain opacity-0" style="z-index:4;" loading="lazy">
                <img src="<?php echo e(('assets/images/hero/mobil1.jpg')); ?>" class="seq-img absolute w-full h-full object-contain opacity-0" style="z-index:5;" loading="lazy">
            </div>
        </div>
        <h2 class="text-white text-4xl md:text-6xl font-bold mt-12 text-center tracking-tight">Cinematic Scroll Animation</h2>
        <p class="text-gray-300 text-lg mt-4 text-center max-w-2xl">Scroll untuk melihat animasi produk secara sinematik, step by step, seperti website otomotif premium.</p>
    </div>
</section>

<!-- Parallax Modern Section: Static BG, PNG Foreground Parallax, Text below -->
<section class="parallax-section relative w-full h-screen overflow-hidden flex flex-col justify-end items-center p-0 m-0" style="background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1500&q=80') center/cover no-repeat fixed; min-height:100vh;">
    <!-- Shadow Overlay -->
    <div class="absolute inset-0 z-10 pointer-events-none" style="background: linear-gradient(180deg,rgba(20,20,20,0.0) 40%,rgba(20,20,20,0.85) 90%);"></div>
    <!-- Foreground PNG (parallax) -->
    <div class="w-full flex justify-center items-end relative z-20" style="height:70vh; min-height:350px;">
        <img src="<?php echo e(('assets/images/hero/mobil1-removebg-preview.png')); ?>" alt="Produk Mobil" class="parallax-foreground pointer-events-none select-none drop-shadow-2xl"
            style="position:relative; width:80vw; max-width:1100px; min-width:320px; height:auto; will-change:transform; z-index:2; object-fit:contain; display:block; margin:0 auto; filter: drop-shadow(0 12px 40px rgba(0,0,0,0.7));" loading="lazy">
    </div>
    <!-- Text Content Modern Layout -->
    <div class="absolute bottom-0 left-0 w-full flex flex-col md:flex-row justify-between items-end z-30 px-8 pb-12 gap-8">
        <div class="text-white max-w-xl mb-8 md:mb-0">
            <h2 class="text-4xl md:text-6xl font-bold leading-tight drop-shadow-lg mb-4">Ready for electric<br>exploration</h2>
        </div>
        <div class="flex flex-col items-start md:items-end max-w-lg">
            <p class="text-gray-200 text-lg mb-6 text-left md:text-right drop-shadow">Dengan desain premium, efek parallax modern, dan hanya mobil (PNG) yang bergerak saat scroll. Background dan teks tetap statis, menonjolkan produk secara sinematik.</p>
            <a href="#" class="bg-white text-black font-semibold rounded-full px-8 py-3 shadow-lg hover:bg-gray-200 transition-all text-lg">Explore produk</a>
        </div>
    </div>
</section>



<!-- Keunggulan Kami - Minimalist Slider (Sparepart) - Updated to Match Reference Image -->
<section class="py-20 relative overflow-hidden bg-white" data-reveal>
    <div x-data="{
        slides: [
            {
                headline: 'THE MOST ANTICIPATED TEST',
                desc: 'The 296 Challenge undergoes international press scrutiny at the Monteblanco circuit',
                img: '<?php echo e(('assets/images/hero/ferrari2.jpg')); ?>',
                alt: 'Ferrari 296 Challenge Monteblanco',
                link: '#'
            },
            {
                headline: 'FERRARI 296 GT3 EVOS ON GRID',
                desc: 'Six Ferrari 296 GT3 Evo cars are preparing for the 64th edition of the 24 Hours at Daytona.',
                img: 'https://images.unsplash.com/photo-1503736334956-4c8f8e92946d?w=1600&q=80',
                alt: 'Ferrari 296 GT3 Daytona',
                link: '#'
            },
            {
                headline: 'THE ULTIMATE RACING EXPERIENCE',
                desc: 'Experience the thrill of speed and precision engineering with our latest models.',
                img: 'https://images.unsplash.com/photo-1461632830798-3adb3034e4c8?w=900&q=80',
                alt: 'Ultimate Racing',
                link: '#'
            },
            {
                headline: 'INNOVATION MEETS PERFORMANCE',
                desc: 'Discover how cutting-edge technology drives our racing success.',
                img: 'https://images.unsplash.com/photo-1502877338535-766e1452684a?w=900&q=80',
                alt: 'Innovation Performance',
                link: '#'
            }
        ],
        activeSlide: 0,
        get totalSlides() { return this.slides.length; },
        prev() { this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides; },
        next() { this.activeSlide = (this.activeSlide + 1) % this.totalSlides; }
    }" class="w-full max-w-[1800px] mx-auto flex items-center justify-center min-h-[700px] px-0 relative">
        <!-- Slider Content -->
        <template x-for="(slide, idx) in slides" :key="idx">
            <div
                x-show="activeSlide === idx"
                class="w-full flex flex-col md:flex-row items-center justify-between min-h-[600px] absolute md:static left-0 top-0"
            >
                <!-- Left: Text & Navigation -->
                <div class="flex flex-col justify-center items-start w-full md:w-1/2 max-w-[700px] pl-10 md:pl-32 pr-4 relative h-full min-h-[600px]">
                    <div
                        x-show="activeSlide === idx"
                    >
                    <!-- Navigation Arrow Left -->
                    <button @click="prev()" type="button"
                        class="absolute left-0 top-1/2 -translate-y-1/2 z-20 bg-white border-2 border-gray-400 hover:border-black focus:border-black rounded-full w-16 h-16 flex items-center justify-center shadow-lg transition-all duration-200 group">
                        <svg class="w-8 h-8 text-black group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"/>
                        </svg>
                    </button>
                        <div class="mt-8 md:mt-0">
                            <h2 class="text-4xl md:text-5xl font-extrabold leading-tight mb-8 text-gray-900 tracking-tight uppercase" style="font-family: 'Montserrat', Arial, sans-serif;">
                                <span x-text="slide.headline"></span>
                            </h2>
                            <p class="text-xl text-gray-800 mb-12 max-w-lg font-medium" style="font-family: 'Montserrat', Arial, sans-serif;">
                                <span x-text="slide.desc"></span>
                            </p>
                            <a :href="slide.link" class="inline-flex items-center group text-xl font-semibold text-gray-900 hover:text-red-600 transition-colors">
                                READ MORE
                                <span class="ml-4 w-12 h-12 flex items-center justify-center rounded-full border-2 border-gray-400 group-hover:border-red-600 transition-colors" style="border-width:2.5px;">
                                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Right: Image & Navigation -->
                <div class="flex items-center justify-center w-full md:w-1/2 h-full min-h-[600px] relative">
                    <!-- Navigation Arrow Right -->
                    <button @click="next()" type="button"
                        class="absolute right-0 top-1/2 -translate-y-1/2 z-20 bg-white border-2 border-gray-400 hover:border-black focus:border-black rounded-full w-16 h-16 flex items-center justify-center shadow-lg transition-all duration-200 group">
                        <svg class="w-8 h-8 text-black group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                    <div class="w-full flex items-center justify-center h-full">
                        <img :src="slide.img" :alt="slide.alt" class="object-cover shadow-xl" style="width: 700px; height: 600px; min-width: 350px; min-height: 350px; max-width: 700px; max-height: 600px; object-position: center; border-radius: 0;" loading="lazy">
                    </div>
                </div>
            </div>
        </template>
        <!-- Slide Indicators (optional) -->
        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 flex gap-3 z-30">
            <template x-for="(slide, idx) in slides" :key="'dot-'+idx">
                <button @click="activeSlide = idx" :class="{'bg-gray-900': activeSlide === idx, 'bg-gray-300': activeSlide !== idx}" class="w-4 h-4 rounded-full transition-all duration-200 border-2 border-gray-400"></button>
            </template>
        </div>
    </div>
</section>


</section>

<!-- Blog tv -->
<section>
<div class="bg-white min-h-screen w-full px-0 md:px-8 pt-8 pb-16">
    <!-- Featured Hero Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
        <!-- Hero Article 1 -->
        <div class="relative group h-[400px] md:h-[500px] overflow-hidden shadow-xl">
            <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Featured" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent transition-opacity duration-500 group-hover:opacity-80"></div>
            <div class="absolute bottom-0 left-0 p-8 w-full">
                <span class="text-xs font-semibold uppercase text-gray-200 mb-2 block">Tech</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-3 leading-tight">Apple Unveils Next-Gen AI Chip</h2>
                <a href="#" class="inline-block text-white text-lg font-semibold bg-black/40 px-6 py-2 mt-2 hover:bg-black/70 transition">Read</a>
            </div>
        </div>
        <!-- Hero Article 2 -->
        <div class="relative group h-[400px] md:h-[500px] overflow-hidden shadow-xl">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=1200&q=80" alt="Featured" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent transition-opacity duration-500 group-hover:opacity-80"></div>
            <div class="absolute bottom-0 left-0 p-8 w-full">
                <span class="text-xs font-semibold uppercase text-gray-200 mb-2 block">Lifestyle</span>
                <h2 class="text-3xl md:text-4xl font-extrabold text-white mb-3 leading-tight">Minimalism in Modern Living</h2>
                <a href="#" class="inline-block text-white text-lg font-semibold bg-black/40 px-6 py-2 mt-2 hover:bg-black/70 transition">Explore</a>
            </div>
        </div>
    </div>

    <!-- Horizontal Scroll Article Cards -->
    <div class="mb-8">
        <h3 class="text-xl font-bold text-gray-900 mb-4 ml-2">Latest Editorials</h3>
        <div id="auto-scroll-row" class="relative w-full overflow-x-hidden">
            <div class="flex gap-6 animate-editorial-scroll will-change-transform min-w-max">
                <!-- Editorial Cards Set 1 -->
                <?php
                $editorialCards = [
                    [
                        'img' => 'https://images.unsplash.com/photo-1519125323398-675f0ddb6308?auto=format&fit=crop&w=600&q=80',
                        'category' => 'Opinion',
                        'title' => 'Why Design Matters in Tech',
                        'action' => 'View article',
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80',
                        'category' => 'Tech',
                        'title' => 'The Future of Smart Homes',
                        'action' => 'Read',
                    ],
                    [
                        'img' => asset('assets/images/hero/wrklife.jpg'),
                        'category' => 'Lifestyle',
                        'title' => 'Work-Life Balance in Tech',
                        'action' => 'Explore',
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1508672019048-805c876b67e2?auto=format&fit=crop&w=600&q=80',
                        'category' => 'Tech',
                        'title' => 'Inside the Creative Process',
                        'action' => 'View article',
                    ],
                    [
                        'img' => 'https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80',
                        'category' => 'Lifestyle',
                        'title' => 'Minimalism in Modern Living',
                        'action' => 'Explore',
                    ],
                ];
                ?>
                <?php for($i = 0; $i < 2; $i++): ?>
                    <?php $__currentLoopData = $editorialCards; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $card): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="h-[260px] w-72 overflow-hidden relative group shadow-lg flex-shrink-0 rounded-xl">
                        <img src="<?php echo e($card['img']); ?>" alt="Article" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/50 via-black/10 to-transparent transition-opacity duration-500 group-hover:opacity-80"></div>
                        <div class="absolute bottom-0 left-0 p-5 w-full">
                            <span class="text-xs font-semibold uppercase text-gray-200 mb-1 block"><?php echo e($card['category']); ?></span>
                            <h4 class="text-lg font-bold text-white mb-2 leading-tight"><?php echo e($card['title']); ?></h4>
                            <a href="#" class="text-white text-sm font-semibold bg-black/40 px-4 py-1 hover:bg-black/70 transition"><?php echo e($card['action']); ?></a>
                        </div>
                    </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endfor; ?>
            </div>
            <style>
            @keyframes editorial-scroll {
                0% { transform: translateX(0); }
                100% { transform: translateX(-50%); }
            }
            .animate-editorial-scroll {
                animation: editorial-scroll 32s linear infinite;
            }
            </style>
        </div>
    </div>
</div>
</section>
<?php /**PATH C:\laragon\www\apex-works\resources\views/frontend/section/about.blade.php ENDPATH**/ ?>