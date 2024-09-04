@extends('admin.layouts.app')
@section('style')
    <style>
        .card.bg-light-info {
            background-color: #E8DEF3 !important;
        }

        .btn.btn-primary {
            background-color: #7209DB !important;
        }

        .nav-link.active {
            background-color: #7209DB !important;
        }

        .text-primary {
            color: #7209DB !important;
        }
    </style>
@endsection
@section('content')
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 style="font-weight: bold;">Detail Modul</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-muted " href="index-2.html">Dashboard</a></li>
                            <li class="breadcrumb-item" aria-current="page">Banner</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('admin/dist/images/backgrounds/track-bg.png') }}" alt=""
                            class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="card p-3">
        <div>
            <ul class="nav nav-tabs d-flex justify-content-between" role="tablist">
                <div class="d-flex">
                    <li class="nav-item home">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home" role="tab">
                            <span>Materi Text</span>
                        </a>
                    </li>
                    <li class="nav-item list">
                        <a class="nav-link" data-bs-toggle="tab" href="#list" role="tab">
                            <span>Video</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li class="">
                        <a href="{{ route('admin.modules.show', 3) }}" class="btn btn-muted editDescription">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-arrow-left">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M5 12l14 0" />
                                    <path d="M5 12l6 6" />
                                    <path d="M5 12l6 -6" />
                                </svg>
                                </svg> Kembali</span>
                        </a>
                        <button class="btn btn-warning editDescription">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg> Edit Materi Text</span>
                        </button>
                        <button class="btn btn-warning d-none addModul">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="icon icon-tabler icons-tabler-outline icon-tabler-pencil">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                    <path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" />
                                    <path d="M13.5 6.5l4 4" />
                                </svg> Edit Materi Video</span>
                        </button>
                    </li>
                </div>
            </ul>
        </div>
    </div>

    <div class="tab-content">
        <div class="tab-pane active" id="home" role="tabpanel">
            <div class="card">
                <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" class="card-img-top" alt="..."
                    style="max-height: 350px; object-fit:cover;">
                <div class="card-body p-3">

                    <div class="d-flex align-items-center gap-2"><img src="{{ asset('assets/img/logo/preloader.svg') }}"
                            alt="" style="width: 30px"><span class="text-secondary">asdfsdf</span></div>

                    <h1 class="fw-bolder mt-3">Streaming video way before it was cool, go dark tomorrow</h1>
                    <hr>
                    <div class="mt-3">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita tempora non dolorum, repellat
                        tempore
                        explicabo, beatae, inventore debitis assumenda eveniet id? Distinctio provident molestiae,
                        voluptatem
                        aspernatur mollitia ex facere maxime?

                        <br>
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Vitae minus laboriosam accusamus, sit ab
                        quam
                        dolor perferendis obcaecati exercitationem doloremque, voluptas vel totam autem corporis sapiente
                        dolorum
                        magni maxime itaque quos consequuntur iste atque quisquam in maiores. Iure numquam ipsa ratione
                        beatae nam!
                        Esse velit cupiditate doloribus ratione officia aspernatur, nemo magni neque vitae debitis, tenetur
                        beatae
                        consectetur rem qui illum distinctio? Molestiae, nihil debitis perspiciatis sequi qui vel sapiente
                        temporibus quas neque animi saepe aspernatur nesciunt culpa ad cum impedit delectus? Harum corrupti
                        dolores
                        deserunt vel nemo ullam animi facilis unde, ad similique architecto dolorem, incidunt in molestiae
                        earum sed
                        officiis, illo natus. Quae dolorum sit maiores optio quas dicta nisi velit minima eos adipisci
                        aliquid
                        blanditiis eaque fugiat animi consectetur minus, voluptatem magnam repudiandae? Aspernatur
                        reiciendis odit
                        atque suscipit error fugit molestias eaque, accusamus iure obcaecati facilis, temporibus ipsa
                        cupiditate?
                        Non porro soluta laboriosam quo rerum maxime labore fugit mollitia voluptates quos quidem nostrum
                        fugiat,
                        distinctio inventore facere est ipsam nulla. Dolore corporis architecto dicta sed doloribus, quos
                        eaque.
                        Quas id rerum alias sequi perspiciatis consectetur natus nam praesentium maxime dignissimos, illum
                        architecto eaque doloribus molestias quis enim consequuntur, ea assumenda minima hic autem fuga in.
                        Dolor
                        temporibus nihil libero expedita dolore repellat cum sunt, voluptatem, exercitationem ratione
                        reprehenderit
                        fuga magnam illum eius rerum, ducimus minus obcaecati dicta laborum culpa ut inventore asperiores
                        placeat!
                        Sit magni rerum dolore perspiciatis reprehenderit. Quas maxime eligendi est possimus ut praesentium
                        similique saepe laboriosam, magni distinctio assumenda dignissimos velit voluptatem unde officia
                        esse? Sit
                        libero quisquam ad quibusdam. Et culpa molestiae asperiores, hic consequuntur in perferendis
                        eligendi natus
                        autem sequi tenetur. Voluptatum eaque velit excepturi sunt cum laboriosam similique explicabo
                        nostrum? Fuga
                        cupiditate aliquam consequatur ut repellendus. Fugiat ullam illo atque nulla dolore suscipit.
                        Temporibus
                        amet eveniet sapiente corrupti repellat optio expedita, eius dicta earum explicabo porro in saepe
                        harum
                        excepturi asperiores magni magnam enim aperiam consectetur at error facilis? Soluta quia beatae
                        itaque
                        sapiente asperiores vitae mollitia similique totam excepturi unde cum, deleniti et quae, dolores qui
                        libero
                        expedita error aperiam ipsa natus accusamus, perferendis sequi ipsam ea. Repudiandae, molestias
                        libero?
                        Iusto aut sapiente minima placeat atque animi distinctio consequatur quaerat beatae, velit porro ex
                        corrupti
                        ab quis vitae quae laudantium, quod ducimus? Eveniet, explicabo iusto nostrum, repudiandae velit
                        itaque
                        sapiente voluptatibus quo quod quaerat amet culpa omnis, perferendis accusamus harum aut vero
                        doloribus
                        incidunt ipsa dolor. Expedita, nulla. Ducimus recusandae adipisci ipsum suscipit dicta architecto
                        quis illum
                        doloribus! Dolore ab, eos quia architecto corporis numquam iste error natus? Vero aut eum, fuga
                        quidem nobis
                        enim officia consequuntur delectus corrupti, commodi molestiae expedita harum nam pariatur sunt
                        exercitationem voluptates perferendis nisi, optio sit voluptatibus? Deleniti, beatae blanditiis.
                        Illo, animi
                        assumenda. Dolores repudiandae sit tempore ab non perspiciatis, accusamus ad esse incidunt beatae,
                        explicabo
                        eaque natus deserunt? Laborum earum corporis dolorum voluptatibus aperiam suscipit. Omnis similique
                        eaque
                        officia magnam eligendi a eveniet placeat nam voluptate doloribus, sapiente possimus quisquam
                        voluptatibus
                        itaque asperiores quas consequuntur. Neque, architecto eos numquam voluptatibus impedit nam animi
                        beatae,
                        rem pariatur, modi natus praesentium aut nulla laudantium sapiente. Expedita ipsa nisi, asperiores
                        illo
                        aliquid quam assumenda, beatae praesentium est eveniet alias inventore corporis maxime dicta nemo
                        repudiandae. Voluptas velit iste voluptate id voluptatem porro dolores maxime aliquam alias ut,
                        maiores
                        iusto facere magnam veritatis temporibus dolorem, fugiat consectetur sed possimus magni repudiandae?
                        Praesentium soluta cumque consequatur? Eos vel tempora temporibus! Nam consectetur vitae quos iste
                        placeat?
                        Optio, nam. Laboriosam ullam nemo molestias id! A, ad temporibus. Nisi et labore quia quos, ratione
                        ex!
                        Architecto perspiciatis, necessitatibus tempore veniam libero quas qui porro maxime tempora ab magni
                        aliquam
                        aut consectetur? Possimus ea quos rerum, rem reprehenderit iusto adipisci a temporibus minima earum
                        aspernatur nulla! Eligendi tenetur animi porro debitis, eos quidem perspiciatis aut incidunt numquam
                        eius
                        magnam voluptatem cumque delectus provident laborum excepturi aliquam consectetur dicta neque
                        voluptas alias
                        sapiente itaque esse. Et eveniet ducimus omnis ipsam pariatur, eum necessitatibus, delectus illum
                        fuga quas
                        rerum, eligendi quibusdam consectetur cumque cupiditate libero expedita hic maxime quia vel tempora.
                        Neque,
                        dolor magni tenetur vero amet aliquid tempora quod. Consectetur alias, repellendus laborum doloribus
                        aliquam
                        ipsa explicabo odio excepturi modi aperiam quidem voluptatem, quia deleniti sequi sapiente
                        repudiandae quod
                        facilis nam eaque tenetur, dolores a consequuntur laudantium! Itaque, nulla? Et maiores esse nemo,
                        eaque
                        repellendus sequi quia corrupti perferendis, error, minus iure voluptatum nam mollitia possimus. Est
                        necessitatibus mollitia eum magni molestiae similique iusto maxime beatae officiis, porro recusandae
                        cum
                        veniam quibusdam sit enim maiores et repellat facilis. Beatae sint eligendi accusamus? Provident id
                        adipisci
                        facilis consequuntur veritatis architecto fuga, labore saepe, repellat accusamus voluptates, vero
                        distinctio
                        illum delectus esse! Fuga iste voluptates in illo quaerat! Alias quam, pariatur fugiat animi eum hic
                        ut
                        illum harum perspiciatis debitis unde quae optio sapiente explicabo, fuga, expedita culpa qui ipsam
                        officia
                        ipsum! Nisi at magnam blanditiis dignissimos asperiores assumenda autem vitae et maxime omnis,
                        reiciendis
                        porro quisquam nihil, alias voluptas ullam rem dolor officiis odio tenetur ratione necessitatibus,
                        voluptatibus corporis. Minus et modi ad at fuga itaque assumenda nihil nemo placeat ab commodi,
                        consectetur
                        doloremque explicabo quibusdam eaque voluptas quas fugiat molestias ipsum neque, rerum soluta
                        dolore.
                        Adipisci eaque dignissimos illo accusamus iure odit voluptate! Blanditiis recusandae, quos nam,
                        earum quam
                        illo beatae accusantium, cumque laudantium exercitationem quis eius error? Rerum non perspiciatis
                        exercitationem optio repellendus iusto, similique illo rem. Incidunt pariatur porro magnam corporis
                        ullam
                        nobis, maxime esse unde voluptates rerum praesentium dolorem. Accusamus, obcaecati sequi. Repellat
                        accusamus
                        quasi officia nemo corporis reprehenderit aperiam accusantium porro dolore voluptatibus deserunt,
                        ipsa harum
                        ipsum vitae sint fugiat incidunt a ad necessitatibus quia quae labore deleniti debitis?
                        Reprehenderit totam
                        illo magnam rem, asperiores dolores exercitationem temporibus aliquid quam rerum ratione vitae ab
                        veniam,
                        aspernatur architecto ea? In quam porro, inventore cupiditate vero quis eos sit magnam, cumque esse
                        laudantium explicabo quia commodi, illum enim quasi facere repellendus dignissimos officia quos
                        molestias?
                        Iusto ullam similique inventore neque aperiam perspiciatis alias unde, aliquam minima veritatis
                        laudantium!
                        Accusantium optio velit sint repellendus eum facilis suscipit deserunt vitae, quae reprehenderit!
                    </div>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="list" role="tabpanel">
            <div class="card">
                {{-- <img src="{{ asset('assets/img/courses/course_thumb02.jpg') }}" class="card-img-top" alt="..."
                    style="max-height: 350px; object-fit:cover;"> --}}

                <iframe style="width:100%; height: auto;"
                    src="https://www.youtube.com/embed/qgKqv2Q3sNQ?si=Xl0nuSUFNCC94U9U" title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                <div class="card-body p-3">

                    <div class="d-flex align-items-center gap-2"><img src="{{ asset('assets/img/logo/preloader.svg') }}"
                            alt="" style="width: 30px"><span class="text-secondary">asdfsdf</span></div>

                    <h1 class="fw-bolder mt-3">Streaming video way before it was cool, go dark tomorrow</h1>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(document).on('click', '.home', function() {
                $('.addModul').addClass('d-none');
                $('.editDescription').removeClass('d-none');
            });

            $(document).on('click', '.list', function() {
                $('.editDescription').addClass('d-none');
                $('.addModul').removeClass('d-none');
            });
        });
    </script>
@endsection
