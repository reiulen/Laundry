  <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>        
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->

    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color">
                <div class="nav-wrapper">
                    <ul class="left">                      
                      <li><h1 class="logo-wrapper"><a href="index.html" class="brand-logo darken-1"><img src="{{ asset('images/materialize-logo.png') }}" alt="materialize logo"></a> <span class="logo-text">clothes LOUNDRY</span></h1></li>
                    </ul>

                    <ul class="right hide-on-med-and-down">
                        <li><a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown"><i class="mdi-social-notifications"><small class="notification-badge">5</small></i>
                        </a>
                        </li>                        
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                      <li>
                        <h5>Notifikasi <span class="new badge">5</span></h5>
                      </li>
                      <li class="divider"></li>
                      @foreach($aktifitas as $a)
                      <li>
                        <a href="#!">
                        <i class="{{ ($a->aktifitas=='Transaksi Selesai') ? 'mdi-action-settings' : ''}}
                            {{ ($a->aktifitas=='Transaksi Proses') ? 'mdi-action-stars' : ''}}
                            {{ ($a->aktifitas=='Transaksi Diambil') ? 'mdi-editor-insert-invitation' : ''}}
                            {{ ($a->aktifitas=='Pembayaran Lunas') ? 'mdi-editor-attach-money' : ''}}
                            {{ ($a->aktifitas=='Laporan Transaksi Dicetak') ? 'mdi-action-trending-up' : ''}}
                            {{ ($a->aktifitas=='Transaksi Dihapus') ? 'mdi-alert-circle' : ''}}
                            "></i> 
                            {{ $a->aktifitas }}
                        </a>
                        <time class="media-meta">{{ $a->created_at->diffForHumans() }}</time>
                      </li>
                      @endforeach
                    </ul>
                </div>
            </nav>
        </div>
        <!-- end header nav-->
    </header>
    <!-- END HEADER -->

    <!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">

            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav">
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                <li class="user-details cyan darken-2">
                <div class="row">
                    <div class="col col s4 m4 l4">
                        <img src="{{ asset('images/avatar.jpg') }}" alt="" class="circle responsive-img valign profile-image">
                    </div>
                    <div class="col col s8 m8 l8">
                        <ul id="profile-dropdown" class="dropdown-content">
                            <li><a href="#"><i class="mdi-action-face-unlock"></i> Profile</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit" style="border:none; background:none; margin:0px 20px;"><i class="mdi-hardware-keyboard-tab"></i> Logout</a></button>
                                </form>
                            </li>
                        </ul>
                        <a class="btn-flat dropdown-button waves-effect waves-light white-text profile-btn" href="#" data-activates="profile-dropdown">{{ auth()->user()->nama }}<i class="mdi-navigation-arrow-drop-down right"></i></a>
                        <p class="user-roal">{{ auth()->user()->role }}</p>
                    </div>
                </div>
                </li>
                <li class="bold {{ ($title=='clothes LOUNDRY') ? 'active' : ' ' }}"><a href="{{ url('/dashboard') }}" class="waves-effect waves-cyan"><i class="mdi-action-dashboard"></i> Dashboard</a>
                </li>
                
                @if(auth()->user()->role == 'Admin')
                    <li class="bold  {{ ($title == 'Karyawan' or $title == 'Entry Karyawan' or $title == 'Edit Karyawan') ? 'active' : ' ' }} "><a href="{{ url('/karyawan') }}" class="waves-effect waves-cyan"><i class="mdi-action-account-circle"></i> Karyawan</a>
                    </li>
                @endif
                <li class="bold {{ ( $title == 'Konsumen' or $title == 'Entry Konsumen' ) ? 'active' : ' ' }} "><a href="{{ url('/konsumen') }}" class="waves-effect waves-cyan"><i class="mdi-social-person"></i> Konsumen</a>
                </li>
                <li class="no-padding">
                    <ul class="collapsible collapsible-accordion">
                        <li class="bold {{ ( $title == 'Ref. Paket Loundry' OR $title == 'Ref. Tipe Bayar' OR $title=='Ref. Status Loundry' OR $title == 'Entry Identitas') ? 'active' : ' ' }}"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-comment"></i> Referensi</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="{{ ( $title == 'Ref. Paket Loundry' ) ? 'active' : ' ' }}"><a href="{{ url('/refpaket') }}">Jenis Paket</a>
                                    </li>
                                    <li class=" {{ ($title == 'Ref. Tipe Bayar') ? 'active' : ' ' }} "><a href="{{ url('/refjenis') }}">Tipe Bayar</a>
                                    </li>
                                    <li class=" {{ ($title == 'Ref. Status Loundry' ) ? 'active' : ' ' }} "><a href="{{ url('/refstatus') }}">Status Order</a>
                                    </li>
                                    <li class="{{ ($title == 'Entry Identitas' ) ? 'active' : ' ' }}"><a href="{{ url('/entryidentitas') }}">Identitas Aplikasi</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="bold  {{ ($title == 'Transaksi' or $title == 'Entry Transaksi') ? 'active' : ' ' }} "><a href="/transaksi" class="waves-effect waves-cyan"><i class="mdi-action-shopping-cart"></i> Transaksi</a>
                        </li>                      
                        <li class="bold"><a class="collapsible-header waves-effect waves-cyan"><i class="mdi-editor-insert-chart"></i> Laporan</a>
                            <div class="collapsible-body">
                                <ul>
                                    <li class="{{ ($title == 'Cetak Laporan') ? 'active' : ' ' }}"><a href="{{ url('/laporan-transaksi') }}">Transaksi Loundry</a>
                                    </li>
                                    <li class="{{ ($title == 'Cetak Laporan Keuangan' ) ? 'active' : ' ' }}"><a href="{{ url('/laporan-keuangan') }}">Laporan Keuangan</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li class="li-hover"><div class="divider"></div></li>
                        <li><a href="#html"><i class="mdi-social-people"></i>Manage User</a>
                        </li>
                        <li>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" style="border: none; background:none; width:200px;"><i class="mdi-action-settings-power"></i> Logout</button>
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only cyan"><i class="mdi-navigation-menu"></i></a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->

            <!-- //////////////////////////////////////////////////////////////////////////// -->
