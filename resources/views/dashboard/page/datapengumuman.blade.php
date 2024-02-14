<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('sleacing.iconweb')
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pengumuman</title>
    @include('linkbootstrap.linkdasboardadmin')
    @include('linkbootstrap.css')
</head>

<body>

    <body>
        {{-- <div class="container"> --}}
        <div class="navigation">
            <ul>
                <li>
                    <a href="#">
                        <span class="icon">
                            <ion-icon name="logo-apple"></ion-icon>
                        </span>
                        <span class="title">Dashboard DSW</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/dashboard">
                        <span class="icon">
                            <ion-icon name="home-outline"></ion-icon>
                        </span>
                        <span class="title">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/admin/dashboard/dataagenda">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Agenda Kegiata</span>
                    </a>
                </li>
                <li class="hovered">
                    <a href="/admin/dashboard/datapengumuman">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Pengumuman</span>
                    </a>
                </li>
                <li>
                    <a href="/dashboard/beritadanartikel">
                        <span class="icon">
                            <ion-icon name="people-outline"></ion-icon>
                        </span>
                        <span class="title">Data Berita & Artikel</span>
                    </a>
                </li>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn-custom-logout">Logout</button>
                </form>
            </ul>
        </div>

        <!-- main -->
        <div class="main">
            <div class="topbar">
                <div class="toggle">
                    <ion-icon name="menu-outline"></ion-icon>
                </div>
                <!-- search -->
                <div class="search">
                    {{-- <label>
                            <input type="text" placeholder="Search here">
                            <ion-icon name="search-outline"></ion-icon>
                        </label> --}}
                </div>
                <!-- userImg -->
                <div class="user">
                    <img
                        src="https://t4.ftcdn.net/jpg/04/75/00/99/360_F_475009987_zwsk4c77x3cTpcI3W1C1LU4pOSyPKaqi.jpg">
                </div>
            </div>

            <!-- cards -->
            <div class="cardBox">
                <div class="card">
                    <div>
                        <div class="numbers">1,504</div>
                        <div class="cardName">Daily Views</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubbles-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cash-outline"></ion-icon>
                    </div>
                </div>
            </div>

            <!-- Add this within your HTML body -->
            <div class="modal fade" id="agendaModal" tabindex="-1" role="dialog" aria-labelledby="agendaModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="agendaModalLabel">Agenda Details</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <!-- Content will be filled dynamically using JavaScript -->
                        </div>
                    </div>
                </div>
            </div>



            <div class="container-fluid">
                <!-- order details list -->
                <div class="card shadow-lg p-3 mb-5 bg-body rounded-3" style="border: none;">
                    <div class="card-body">
                        <a href="/admin/dashboard/datapengumuman-create" class="btn btn-outline-dark mb-4">Create Pengumuman +</a>
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">ID</th>
                                    <th class="text-center" scope="col">Judul Pengumuman</th>
                                    <th class="text-center" scope="col">Deskripsi Pengumuman</th>
                                    <th class="text-center" scope="col">Gambar Pengumuman</th>
                                    <th class="text-center" scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($pengumumans as $pengumuman)
                                <tr>
                                    <td class="text-center">{{ $pengumuman->id }}</td>
                                    <td class="text-center">{{ Str::limit($pengumuman->title, 30) }}</td>
                                    <td class="text-center">{{ Str::limit($pengumuman->description, 30) }}</td>
                                    <td class="text-center">
                                        <img src="{{ asset('storage/' . $pengumuman->image) }}" alt="Logo"
                                            style="width: 50px; height: 50px;" class="rounded-circle">
                                    </td>

                                    <td class="text-center">
                                        <div class="btn-group gap-2" role="group">
                                            <a href="{{ route('pengumuman.edit', ['id' => $pengumuman->id]) }}"
                                                class="btn btn-outline-primary">Edit</a>
                                            <form method="POST"
                                                action="{{ route('pengumuman.destroy', ['id' => $pengumuman->id]) }}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-primary">Delete</button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <center>
                            {{ $pengumumans->links() }}
                        </center>
                    </div>
                </div>
            </div>

        </div>
        </div>

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

        <script>
            // Your existing JavaScript code
            let toggle = document.querySelector('.toggle');
            let navigation = document.querySelector('.navigation');
            let main = document.querySelector('.main');

            toggle.onclick = function () {
                navigation.classList.toggle('active');
                main.classList.toggle('active');
            }

            let list = document.querySelectorAll('.navigation li');

            function activeLink() {
                list.forEach((item) =>
                    item.classList.remove('hovered'));
                this.classList.add('hovered');
            }

            list.forEach((item) => item.addEventListener('mouseover', activeLink));

        </script>
        <script>

        </script>

    </body>

</html>
