<aside class="main-sidebar">
    <section class="sidebar">

        <?=
        dmstr\widgets\Menu::widget(
                [
                    'options' => ['class' => 'sidebar-menu'],
                    'items' => [


                        ['label' => 'Dashboard', 'icon' => 'fa fa-file-code-o', 'url' => ['/gii']],
                        ['label' => 'Admin Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/users-admin']],
                        ['label' => 'Users', 'icon' => 'fa fa-file-code-o', 'url' => ['/users']],
                        ['label' => 'Static Content', 'icon' => 'fa fa-file-code-o', 'url' => ['/static-page']],
                        [
                            'label' => 'Master Entries',
                            'icon' => 'fa fa-share',
                            'url' => '#',
                            'items' => [
                                ['label' => 'Countries', 'icon' => 'fa fa-file-code-o', 'url' => ['/countries'],],
                                ['label' => 'States', 'icon' => 'fa fa-dashboard', 'url' => ['/states'],],
                                ['label' => 'Districts', 'icon' => 'fa fa-dashboard', 'url' => ['/district'],],
                                ['label' => 'Currencies', 'icon' => 'fa fa-dashboard', 'url' => ['/currency'],],
                                ['label' => 'Brands', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Tax Rates', 'icon' => 'fa fa-dashboard', 'url' => ['/tax-Rates'],],
                                ['label' => 'Tax Class', 'icon' => 'fa fa-dashboard', 'url' => ['/tax'],],
                                ['label' => 'Contact Us', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                                ['label' => 'Social', 'icon' => 'fa fa-dashboard', 'url' => ['/debug'],],
                            ],
                        ],
                        ['label' => 'Categories', 'icon' => 'fa fa-file-code-o', 'url' => ['/category']],
                        ['label' => 'Products', 'icon' => 'fa fa-file-code-o', 'url' => ['/product']],
                        ['label' => 'Faq', 'icon' => 'fa fa-user-secret', 'url' => ['/faq']],
                        ['label' => 'Contact', 'icon' => 'fa fa-contao', 'url' => ['/contact']],
                    ],
                ]
        )
        ?>

    </section>

</aside>
