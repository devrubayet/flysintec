<?php $__env->startSection('content'); ?>
    
    <!-- HEADER END -->

    <?php if (isset($component)) { $__componentOriginal15c185becdf89bd6432b3aab4b506c8d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal15c185becdf89bd6432b3aab4b506c8d = $attributes; } ?>
<?php $component = App\View\Components\Frontend\Hero::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.hero'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Frontend\Hero::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal15c185becdf89bd6432b3aab4b506c8d)): ?>
<?php $attributes = $__attributesOriginal15c185becdf89bd6432b3aab4b506c8d; ?>
<?php unset($__attributesOriginal15c185becdf89bd6432b3aab4b506c8d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal15c185becdf89bd6432b3aab4b506c8d)): ?>
<?php $component = $__componentOriginal15c185becdf89bd6432b3aab4b506c8d; ?>
<?php unset($__componentOriginal15c185becdf89bd6432b3aab4b506c8d); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     EASY STEPS FOR BOOKINGS
═══════════════════════════════════════ -->
   <?php if (isset($component)) { $__componentOriginalbb60a0aa0dc3432bb124840280156d07 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalbb60a0aa0dc3432bb124840280156d07 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.booking-process','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.booking-process'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalbb60a0aa0dc3432bb124840280156d07)): ?>
<?php $attributes = $__attributesOriginalbb60a0aa0dc3432bb124840280156d07; ?>
<?php unset($__attributesOriginalbb60a0aa0dc3432bb124840280156d07); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalbb60a0aa0dc3432bb124840280156d07)): ?>
<?php $component = $__componentOriginalbb60a0aa0dc3432bb124840280156d07; ?>
<?php unset($__componentOriginalbb60a0aa0dc3432bb124840280156d07); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TOP DESTINATIONS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal50caf89d137c45c8a5284cbe09af68ef = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal50caf89d137c45c8a5284cbe09af68ef = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.top-destination','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.top-destination'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal50caf89d137c45c8a5284cbe09af68ef)): ?>
<?php $attributes = $__attributesOriginal50caf89d137c45c8a5284cbe09af68ef; ?>
<?php unset($__attributesOriginal50caf89d137c45c8a5284cbe09af68ef); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal50caf89d137c45c8a5284cbe09af68ef)): ?>
<?php $component = $__componentOriginal50caf89d137c45c8a5284cbe09af68ef; ?>
<?php unset($__componentOriginal50caf89d137c45c8a5284cbe09af68ef); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     WE RECOMMEND BEAUTIFUL DESTINATIONS
    ═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginalcfc4c29a73338ebb769f6cb9e298b191 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.recommended-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.recommended-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191)): ?>
<?php $attributes = $__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191; ?>
<?php unset($__attributesOriginalcfc4c29a73338ebb769f6cb9e298b191); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcfc4c29a73338ebb769f6cb9e298b191)): ?>
<?php $component = $__componentOriginalcfc4c29a73338ebb769f6cb9e298b191; ?>
<?php unset($__componentOriginalcfc4c29a73338ebb769f6cb9e298b191); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     CULTURAL TOURS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal92b492e03b217dc3e3b4b70da6f1c466 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.cultural-tour-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.cultural-tour-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466)): ?>
<?php $attributes = $__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466; ?>
<?php unset($__attributesOriginal92b492e03b217dc3e3b4b70da6f1c466); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal92b492e03b217dc3e3b4b70da6f1c466)): ?>
<?php $component = $__componentOriginal92b492e03b217dc3e3b4b70da6f1c466; ?>
<?php unset($__componentOriginal92b492e03b217dc3e3b4b70da6f1c466); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TOUR CATEGORIES BANNER
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.tour-categories-banner','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.tour-categories-banner'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60)): ?>
<?php $attributes = $__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60; ?>
<?php unset($__attributesOriginal69f1fb2be2af1456ffec69e07dbcfb60); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60)): ?>
<?php $component = $__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60; ?>
<?php unset($__componentOriginal69f1fb2be2af1456ffec69e07dbcfb60); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     MEET WITH TOUR GUIDE
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginale21f2dc341e3c49347b5b454004016e0 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21f2dc341e3c49347b5b454004016e0 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.tour-guide-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.tour-guide-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21f2dc341e3c49347b5b454004016e0)): ?>
<?php $attributes = $__attributesOriginale21f2dc341e3c49347b5b454004016e0; ?>
<?php unset($__attributesOriginale21f2dc341e3c49347b5b454004016e0); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21f2dc341e3c49347b5b454004016e0)): ?>
<?php $component = $__componentOriginale21f2dc341e3c49347b5b454004016e0; ?>
<?php unset($__componentOriginale21f2dc341e3c49347b5b454004016e0); ?>
<?php endif; ?>

    <!-- ═══════════════════════════════════════
     TESTIMONIALS
═══════════════════════════════════════ -->
    <?php if (isset($component)) { $__componentOriginal962631a3c390d43fbdb373999e2db14a = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal962631a3c390d43fbdb373999e2db14a = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.testominal-section','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('frontend.testominal-section'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal962631a3c390d43fbdb373999e2db14a)): ?>
<?php $attributes = $__attributesOriginal962631a3c390d43fbdb373999e2db14a; ?>
<?php unset($__attributesOriginal962631a3c390d43fbdb373999e2db14a); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal962631a3c390d43fbdb373999e2db14a)): ?>
<?php $component = $__componentOriginal962631a3c390d43fbdb373999e2db14a; ?>
<?php unset($__componentOriginal962631a3c390d43fbdb373999e2db14a); ?>
<?php endif; ?>
    <!-- ═══════════════════════════════════════
     FOOTER
═══════════════════════════════════════ -->
    


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.layouts', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\Users\rubay\Desktop\New folder\snapair-erp\resources\views/welcome.blade.php ENDPATH**/ ?>