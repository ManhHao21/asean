@if (!empty($cates) && isset($cates))
    <section class="main-blog">
        <div class="main-blog__wrapper w-content">
            <div class="title">
                <h1 class="title-opacity">Blogs</h1>
                <p class="f-700-s40">Tin tức</p>
            </div>
            <div class="main-blog__cate d-flex">
                <div class="left d-flex">
                    <div class="left-title d-flex">
                        <img src="{{ asset('Fontend') }}/image/Rectangle.png" alt="Rectangle" srcset=""
                            width="57px" height="3px" />
                        <p>
                            @if (!empty($cates[0]->name) && isset($cates[0]))
                                {{ $cates[0]->name }}
                            @endif
                        </p>
                    </div>
                    <div class="left-post">
                        @if (!empty($cates) && isset($cates[0]))
                            @php
                                $posts = $cates[0]
                                    ->posts()
                                    ->limit(1)
                                    ->get();
                            @endphp
                            @if ($posts->isNotEmpty())
                                @foreach ($posts as $post)
                                    <a href="{{ route('loadMoreComment', ['slug' => $post->slug]) }}">
                                        <div class="thumbnail">
                                            <img src="{{ $post->imagePost() }}" alt="post" srcset="" />
                                        </div>
                                        <div class="info">
                                            <h3 class="info-title">
                                                {{ htmlspecialchars_decode(strip_tags($post->title)) }}
                                            </h3>
                                            <p class="info-date">{{ $post->created_at->format('d.m.Y') }}</p>
                                        </div>
                                    </a>
                                @endforeach
                            @endif
                        @endif

                        <svg xmlns="http://www.w3.org/2000/svg" width="514" height="1" viewBox="0 0 514 1"
                            fill="none">
                            <path opacity="0.304176" d="M0.5 0.5H513.5" stroke="#979797" stroke-linecap="square" />
                        </svg>
                        <?php
                        $postContent = '';
                        if (
                            !empty(
                                $cates[0]
                                    ->posts()
                                    ->limit(1)
                                    ->get()
                            )
                        ) {
                            foreach (
                                $cates[0]
                                    ->posts()
                                    ->limit(1)
                                    ->get()
                                as $key => $value
                            ) {
                                $postContent = $value->content;
                            }
                        }
                        if (!empty($postContent)) {
                            $dom = new \DOMDocument();
                            $dom->loadHTML(mb_convert_encoding($postContent, 'HTML-ENTITIES', 'UTF-8'));
                            $h2List = $dom->getElementsByTagName('h2');
                        }
                        ?>
                        <ul class="cate-list">
                            @if (!empty($h2List))
                                @foreach ($h2List as $index => $h2)
                                    <?php
                                    $nodeValue = preg_replace('/^\d+\.\s*/', '', $h2->nodeValue);
                                    ?>
                                    <li class="cate-list__item d-flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="8"
                                            viewBox="0 0 8 8" fill="none">
                                            <circle cx="4" cy="4" r="4" fill="#FC0001" />
                                        </svg>
                                        <a href="{{ route('loadMoreComment', ['slug' => $post->slug]) }}"
                                            class="list">
                                            {!! $nodeValue !!}
                                        </a>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
                <div class="right">
                    <div class="right-title d-flex">
                        <img src="{{ asset('Fontend') }}/image/Rectangle.png" alt="Rectangle" srcset=""
                            width="57px" height="3px" />
                        <p>
                            @if ($cates[1]->name)
                                {{ $cates[1]->name }}
                            @endif
                        </p>
                    </div>
                    @if ($cates[1])
                        @if (!empty($cates[1]->posts))
                            @foreach ($cates[1]->posts as $key => $post)
                                <a href="{{ route('loadMoreComment', ['slug' => $post->slug]) }}"
                                    class="right-post d-flex">
                                    <div class="right-post__img">
                                        <img src="{{ $post->imagePost() }}" alt="img-blog" srcset=""
                                            width="278px" height="188px" />
                                    </div>
                                    <div class="info">
                                        <h3 class="info-title">
                                            {!! htmlspecialchars_decode(strip_tags($post->title)) !!}

                                        </h3>
                                        <p class="info-date">{{ $post->created_at->format('d.m.Y') }}</p>
                                        <p class="info-des">
                                            {!! htmlspecialchars_decode(strip_tags($post->description)) !!}
                                        </p>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    @endif
                </div>
            </div>
        </div>
    </section>
@endif
