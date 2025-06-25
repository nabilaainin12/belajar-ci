<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <!-- Home -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li>

        <!-- Keranjang -->
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="keranjang">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li>

        <!-- Menu Admin -->
        <?php if (session()->get('role') == 'admin') : ?>

            <!-- Produk -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="produk">
                    <i class="bi bi-receipt"></i>
                    <span>Produk</span>
                </a>
            </li>

            <!-- Kategori Produk -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'produk_categories') ? '' : 'collapsed' ?>" href="produk_categories">
                    <i class="bi bi-receipt"></i>
                    <span>Kategori Produk</span>
                </a>
            </li>

            <!-- FAQ -->
            <li class="nav-item">
                <a class="nav-link <?= (uri_string() == 'faq') ? '' : 'collapsed' ?>" href="faq">
                    <i class="bi bi-question-circle"></i>
                    <span>Faq</span>
                </a>
            </li>

        <?php endif; ?>

    </ul>

</aside><!-- End Sidebar -->
