<div id="app" class="App">

    <main class="App-content">
        <div class="sideNavContainer">
            <div class="App-nav sideNav">
                <div class="App-nav-title">
                    <h1 class="ThemeBase-Header-title">
                        <?php if($forum['logoUrl']): ?>
                            <img src="<?php echo e($forum['logoUrl']); ?>" alt="<?php echo e($forum['title']); ?>" class="Header-logo">
                        <?php else: ?>
                            <?php echo e($forum['title']); ?>

                        <?php endif; ?>
                    </h1>
                </div>
                <div id="admin-navigation" class="App-nav-content"></div>
            </div>

            <div class="sideNavOffset">

                <?php echo $__env->yieldContent('separator'); ?>

                <div class="App-navigation-container">

                    <div id="app-navigation" class="App-navigation"></div>

                    <div id="drawer" class="App-drawer">

                        <header id="header" class="App-header">
                            <div id="header-navigation" class="Header-navigation"></div>
                            <div class="container">
                                <div id="header-primary" class="Header-primary"></div>
                                <div id="header-secondary" class="Header-secondary"></div>
                            </div>
                        </header>

                    </div>

                </div>
                <div id="content"></div>
            </div>
        </div>

        <?php echo $content; ?>

    </main>

</div>
<?php /**PATH /var/www/vhosts/nicolas-arnaud.fr/forum.nicolas-arnaud.fr/vendor/afrux/flarum-theme-base/src/Extend/../../views/frontend/admin.blade.php ENDPATH**/ ?>