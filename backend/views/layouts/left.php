<aside class="main-sidebar">
    <section class="sidebar">

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [
                    	

                        ['label' => 'Dashboard', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                    	['label' => 'Admin Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/admin-users']],
                        ['label' => 'Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/users']],
                        [
                            'label' => 'Master Entries',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Countries', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii'],],
                                ['label' => 'States', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Cities', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Districts', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Currencies', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Brands', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Tax Rates', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Tax Class', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Contact Us', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Social', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            ],
                        ],
                    		['label' => 'Categories', 'icon' => 'fa fa-file-code-o', 'url' => ['/users']],
                    		['label' => 'Products', 'icon' => 'fa fa-file-code-o', 'url' => ['/users']],
                    ],
                ]
        )
        ?>

    </section>

</aside>
