<li class="nav-item mb-4">
    <a href="{{ route('index') }}" target="_blank" class="nav-link">
        <span class="h5 mr-2 brand-image"><i class="fas fa-external-link-alt"></i></span>
        <p class="h5"> 瀏覽網站</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.caseInfos.index') }}" class="nav-link {{ Request::is('admin/caseInfos*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-images"></i></span>
        <p>工程案例</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.categories.index') }}" class="nav-link {{ Request::is('admin/categories*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-folder-open"></i></span>
        <p>案例分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.products.index') }}" class="nav-link {{ Request::is('admin/products*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-box"></i></span>
        <p>產品資訊</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.productTypes.index') }}" class="nav-link {{ Request::is('admin/productTypes*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-folder-open"></i></span>
        <p>產品分類</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.catalogs.index') }}" class="nav-link {{ Request::is('admin/catalogs*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-folder-open"></i></span>
        <p>產品型錄</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.cooperates.index') }}" class="nav-link {{ Request::is('admin.cooperates*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-handshake"></i></span>
        <p>合作廠商</p>
    </a>
</li>


{{-- <li class="nav-item">
    <a href="{{ route('admin.adminUsers.index') }}"
        class="nav-link {{ Request::is('admin/adminUsers*') ? 'active' : '' }}">
        <span class="mr-2 brand-image"><i class="fas fa-users-cog"></i></span>
        <p> 管理員</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.seoSettings.index') }}"
       class="nav-link {{ Request::is('admin/seoSettings*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-search"></i></span>
        <p>Seo設定</p>
    </a>
</li>

<li class="nav-item">
    <a href="{{ route('admin.marqueeInfos.index') }}"
       class="nav-link {{ Request::is('admin/marqueeInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-bullhorn"></i></span>
        <p>跑馬燈資訊</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('admin.newsInfos.index') }}"
       class="nav-link {{ Request::is('admin/newsInfos*') ? 'active' : '' }}">
       <span class="mr-2 brand-image"><i class="fas fa-newspaper"></i></span>
        <p>最新消息</p>
    </a>
</li> --}}
